<?php
require_once "navigation.php";
if(!empty($data)){
    if(!empty($_GET["action"])){
        switch ($_GET["action"]){
            case "listAll":
                require_once "html/movies/movieList.php";
                break;
            case "create":
                require_once "html/movies/movieCreate.php";
                break;
            case "view":
                require_once "html/movies/movieView.php";
                break;
                case "update":
                    require_once "html/movies/movieUpdate.php";
                    break;
            default:
                require_once "html/movies/movieList.php";
                break;
        }
    }
}
require_once "footer.php";
?>
