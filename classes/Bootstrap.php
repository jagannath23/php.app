<?php
class Bootstrap {
    /**
     * @var string
     */
    private $controller;

    /**
     * @var string
     */
    private $action;

    /**
     * @var array
     * Variables provided to the script via URL query string
     */
    private $request;

    /**
     * Bootstrap constructor.
     * The request is received.
     * If the controller is empty, the home controller is established, otherwise, the controller of the request.
     * If the action comes empty, the index action is established, otherwise, the action of the request.
     * @param array $request
     * Array of variables in the URL
     */
    public function __construct(array $request)
    {
        $this->request = $request;
        if ($this->request['controller'] == "") {
            $this->controller = 'home';
        } else {
            $this->controller = $this->request['controller'];
        }
        if ($this->request['action'] == "") {
            $this->action = 'index';
        } else {
            $this->action = $this->request['action'];
        }
    }

    /**
     * @return mixed
     * The controller is accessed securely depending on the specified action
     */
    public function createController()
    {
        if (class_exists($this->controller)) {
            $parents = class_parents($this->controller);
            if (in_array("Controller", $parents)) {
                if (method_exists($this->controller, $this->action)) {
                    return new $this->controller($this->action, $this->request);
                } else {
                    echo '<h1> Method does not exist </h1>';
                }
            } else {
                echo '<h1> Base controller does not exist </h1>';
            }
        } else {
            echo '<h1> Controller class does not exist </h1>';
        }
    }
}