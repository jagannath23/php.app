<?php
abstract class Model{

    /**
     * @var PDO $database_handler
     */
    protected $database_handler;

    /**
     * @var PDOStatement $statement
     */
    protected $statement;

    /**
     * Model constructor
     * Creation of the connection to the database
     */
    public function __construct()
    {
        $this->database_handler = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
    }

    /**
     * @param string $query
     * Statement to execute
     */
    public function query($query)
    {
        $this->statement = $this->database_handler->prepare($query);
    }

    /**
     * Binds a value to a parameter
     *
     * @param $param
     * Parameter identifier
     * @param $value
     * The value to bind to the parameter
     * @param null $type
     * Explicit data type for the parameter
     */
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->statement->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->statement->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function lastInsertId(){
        return $this->database_handler->lastInsertId();
    }

    public function single(){
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }
}