<?php


class JacketsController extends BaseController
{
    /**
     * @var JacketModel
     */
    private $jacketModel;

    /**
     * JacketsController constructor.
     */
    function __construct() {
        $this->jacketModel = new JacketModel();
    }

    /**
     * @return array|bool|mixed
     */
    public function listAll() {
        if(!empty($_POST) && !empty($_POST["search"])){
            $searchResults=$this->jacketModel->search($_POST["topic"]);
            if (sizeof($searchResults ) > 0){
                return $searchResults;
            }
            else {
                return true;
            }
        }
        else{
            return $this->jacketModel->listAll();
        }
    }

    /**
     * @return bool
     */
    public function create(){
        if(!empty($_POST) && !empty($_POST["create"])){
            $this->jacketModel->create($_POST);
            header("Location: index.php?controller=jackets&action=listAll");
        }
        else{
            return true;
        }
    }

    public function view(){
        if(!empty($_POST) && !empty($_POST["jacket_id"])){
            return $this->jacketModel->view($_POST["jacket_id"]);
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
            $this->jacketModel->update($_POST);
            header("Location: index.php?controller=jackets&action=jackets&action=listAll");
        }
        else if((!empty($_GET)) && !empty($_GET["jacket_id"]))
        {
            return $this->jacketModel->view($_GET["jacket_id"]);
        }
    }

    /**
     * @return false
     */
    public function delete(){
        if(!empty($_POST) && !empty($_POST["jacket_id"])){
            $this->jacketModel->delete($_POST["jacket_id"]);
            header("Location: index.php?controller=jackets&action=listAll");
        }
        else{
            return false;
        }
    }


}