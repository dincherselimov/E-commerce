<?php

/**
 * Class ShoesController
 * консумира модела и го предава на изгледа
 */
class ShoesController extends  BaseController {
    /**
     * @var ShoeModel
     */
    private $shoeModel;

    /**
     * ShoesController constructor.
     */
    function __construct() {
        $this->shoeModel = new ShoeModel();
    }

    /**
     * @return array|bool|mixed
     */
    public function listAll() {
        if(!empty($_POST) && !empty($_POST["search"])){
            $searchResults=$this->shoeModel->search($_POST["topic"]);
            if (sizeof($searchResults ) > 0){
                return $searchResults;
            }
            else {
                return true;
            }
        }
        else{
            return $this->shoeModel->listAll();
        }
    }

    /**
     * @return bool
     */
    public function create(){
        if(!empty($_POST) && !empty($_POST["create"])){
            $this->shoeModel->create($_POST);
            header("Location: index.php?controller=shoes&action=listAll");
        }
        else{
            return true;
        }
    }

    public function view(){
        if(!empty($_POST) && !empty($_POST["shoe_id"])){
            return $this->shoeModel->view($_POST["shoe_id"]);
        }
        else{
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function update(){
        if(!empty($_POST) && !empty($_POST["update"])){
            $this->shoeModel->update($_POST);
            header("Location: index.php?controller=shoes&action=shoes&action=listAll");
        }
        else if((!empty($_GET)) && !empty($_GET["shoe_id"]))
        {
            return $this->shoeModel->view($_GET["shoe_id"]);
        }
    }

    /**
     * @return false
     */
    public function delete(){
        if(!empty($_POST) && !empty($_POST["shoe_id"])){
            $this->shoeModel->delete($_POST["shoe_id"]);
            header("Location: index.php?controller=shoes&action=listAll");
        }
        else{
            return false;
        }
    }

}