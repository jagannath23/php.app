<?php
class Shares extends Controller {
    protected function Index()
    {
        $view_model = new ShareModel();
        $this->returnView($view_model->Index(), true);
    }

    protected function IndexLosses()
    {
        $view_model = new ShareModel();
        $this->returnView($view_model->IndexLosses(), true);
    }

    protected function IndexEncounters()
    {
        $view_model = new ShareModel();
        $this->returnView($view_model->IndexEncounters(), true);
    }

    protected function show()
    {
        $id = $_REQUEST['id'];
        $view_model = new ShareModel();
        $this->returnView($view_model->show($id), true);
    }

    protected function add()
    {
        if (!isset($_SESSION['is_logged_in'])) {
            header('Location: '.ROOT_URL.'shares');
        }
        $view_model = new ShareModel();
        $this->returnView($view_model->add(), true);
    }

    protected function delete()
    {
        if (!isset($_SESSION['is_logged_in'])) {
            header('Location: '.ROOT_URL.'shares');
        }
        $view_model = new ShareModel();
        $this->returnView($view_model->delete(), true);
    }

    protected function approve()
    {
        if (!($_SESSION['user_data']['admin'])) {
            header('Location: '.ROOT_URL.'shares');
        }
        $view_model = new ShareModel();
        $this->returnView($view_model->approve(), true);
    }

    protected function edit()
    {
        if (!isset($_SESSION['is_logged_in'])) {
            header('Location: '.ROOT_URL.'shares');
        }
        $view_model = new ShareModel();
        $this->returnView($view_model->edit(), true);
    }

    protected function editing()
    {
        if (!isset($_SESSION['is_logged_in'])) {
            header('Location: '.ROOT_URL.'shares');
        }
        $id = $_REQUEST['id'];
        $view_model = new ShareModel();
        $this->returnView($view_model->editing($id), true);
    }
}