<?php
class Home extends Controller {
    protected function Index()
    {
        $view_model = new HomeModel();
        $this->returnView($view_model->Index(), true);
    }
}