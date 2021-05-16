<?php


class TshirtsController extends BaseController {


    /**
     * @var TshirtModel
     */
    private $tshirtModel;

    /**
     * JacketsController constructor.
     */
    function __construct() {
        $this->tshirtModel = new TshirtModel();
    }

    /**
     * @return array|bool|mixed
     */
    public function listAll() {
        if(!empty($_POST) && !empty($_POST["search"])){
            $searchResults=$this->tshirtModel->search($_POST["topic"]);
            if (sizeof($searchResults ) > 0){
                return $searchResults;
            }
            else {
                return true;
            }
        }
        else{
            return $this->tshirtModel->listAll();
        }
    }

    /**
     * @return bool
     */
    public function create(){
        if(!empty($_POST) && !empty($_POST["create"])){
            $this->tshirtModel->create($_POST);
            header("Location: index.php?controller=tshirts&action=listAll");
        }
        else{
            return true;
        }
    }

    public function view(){
        if(!empty($_POST) && !empty($_POST["tshirt_id"])){
            return $this->tshirtModel->view($_POST["tshirt_id"]);
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
            $this->tshirtModel->update($_POST);
            header("Location: index.php?controller=tshirts&action=listAll");
        }
        else if((!empty($_GET)) && !empty($_GET["tshirt_id"]))
        {
            return $this->tshirtModel->view($_GET["tshirt_id"]);
        }
    }

    /**
     * @return false
     */
    public function delete(){
        if(!empty($_POST) && !empty($_POST["tshirt_id"])){
            $this->tshirtModel->delete($_POST["tshirt_id"]);
            header("Location: index.php?controller=tshirts&action=listAll");
        }
        else{
            return false;
        }
    }
}