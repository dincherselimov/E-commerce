<?php


class WatchesController extends BaseController {
    /**
     * @var WatchModel
     */
    private $watchModel;

    /**
     * WatchesController constructor.
     */
    function __construct() {
        $this->watchModel = new WatchModel();
    }

    /**
     * @return array|bool|mixed
     */
    public function listAll() {
        if(!empty($_POST) && !empty($_POST["search"])){
            $searchResults=$this->watchModel->search($_POST["topic"]);
            if (sizeof($searchResults ) > 0){
                return $searchResults;
            }
            else {
                return true;
            }
        }
        else{
            return $this->watchModel->listAll();
        }
    }

    /**
     * @return bool
     */
    public function create(){
        if(!empty($_POST) && !empty($_POST["create"])){
            $this->watchModel->create($_POST);
            header("Location: index.php?controller=watches&action=listAll");
        }
        else{
            return true;
        }
    }

    public function view(){
        if(!empty($_POST) && !empty($_POST["watch_id"])){
            return $this->watchModel->view($_POST["watch_id"]);
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
            $this->watchModel->update($_POST);
            header("Location: index.php?controller=watches&action=listAll");
        }
        else if((!empty($_GET)) && !empty($_GET["watch_id"]))
        {
            return $this->watchModel->view($_GET["watch_id"]);
        }
    }

    /**
     * @return false
     */
    public function delete(){
        if(!empty($_POST) && !empty($_POST["watch_id"])){
            $this->watchModel->delete($_POST["watch_id"]);
            header("Location: index.php?controller=watches&action=listAll");
        }
        else{
            return false;
        }
    }

}