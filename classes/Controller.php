<?php
abstract class Controller {

    /**
     * @var array
     */
    protected $request;

    /**
     * @var string
     */
    protected $action;

    /**
     * Controller constructor.
     * Creation of the controller with the indicated action
     * @param string $action
     * Action to execute
     * @param $request
     * Array of variables in the URL
     */
    public function __construct($action, $request)
    {
        $this->action = $action;
        $this->request = $request;
    }

    /**
     * @return mixed
     * The specified action is executed
     */
    public function executeAction()
    {
        return $this->{$this->action}();
    }

    protected function returnView($view_model, $full_view)
    {
        $view = 'views/' . get_class($this) . '/' . $this->action . '.php';
        if ($full_view) {
            require('views/main.php');
        } else {
            require($view);
        }
    }
}