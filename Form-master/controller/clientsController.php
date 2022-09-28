<?php
    require_once('./model/Client.php');

    class clientsController{
        private $model;

        function __construct(){
            $this->model = new ClientModel();
        }

        public function getAll($data=null){
            $resultData = $this->model->getAll();
            $returnMessage = $data;
            require_once "./view/mostrar.php";
        }














        
    }


?>