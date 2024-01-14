<?php

include_once "model/model.php";
class controller {
    public $model;

    public function __construct() {
    $this->model = new model();
    }

    public function proses() {
    $reslt = $this->model->getLogin();

    if($reslt == 'login'){
    include 'view/after_login.php';
    }
    else{
    include 'view/login.php';
    }
    }
}
?>
