<?php
class Users extends Controller {
    protected function register()
    {
        $view_model = new UserModel();
        $this->returnView($view_model->register(), true);
    }

    protected function login()
    {
        $view_model = new UserModel();
        $this->returnView($view_model->login(), true);
    }

    protected function logout()
    {
    	unset($_SESSION['is_logged_in']);
    	unset($_SESSION['user_data']);
    	session_destroy();
    	header('Location: '.ROOT_URL);
    }
}