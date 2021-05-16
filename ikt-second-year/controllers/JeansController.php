<?php


class JeansController extends BaseController {

    /**
     * @var JeansModel
     */
    private $jeansModel;

    /**
     * JacketsController constructor.
     */
    function __construct() {
        $this->jeansModel = new JeansModel();
    }

    /**
     * @return array|bool|mixed
     */
    public function listAll() {
        if(!empty($_POST) && !empty($_POST["search"])){
            $searchResults=$this->jeansModel->search($_POST["topic"]);
            if (sizeof($searchResults ) > 0){
                return $searchResults;
            }
            else {
                return true;
            }
        }
        else{
            return $this->jeansModel->listAll();
        }
    }

    /**
     * @return bool
     */
    public function create(){
        if(!empty($_POST) && !empty($_POST["create"])){
            $this->jeansModel->create($_POST);
            header("Location: index.php?controller=jeans&action=listAll");
        }
        else{
            return true;
        }
    }

    public function view(){
        if(!empty($_POST) && !empty($_POST["jeans_id"])){
            return $this->jeansModel->view($_POST["jeans_id"]);
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
            $this->jeansModel->update($_POST);
            header("Location: index.php?controller=jeans&action=jeans&action=listAll");
        }
        else if((!empty($_GET)) && !empty($_GET["jeans_id"]))
        {
            return $this->jeansModel->view($_GET["jeans_id"]);
        }
    }

    /**
     * @return false
     */
    public function delete(){
        if(!empty($_POST) && !empty($_POST["jeans_id"])){
            $this->jeansModel->delete($_POST["jeans_id"]);
            header("Location: index.php?controller=jeans&action=listAll");
        }
        else{
            return false;
        }
    }
}