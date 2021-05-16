<?php
require_once "navigation.php";
?>

<?php
if(!empty($data)){
    if(!empty($_GET["action"])){
        switch ($_GET["action"]){
            case "listAll":
                require_once "html/watches/watchList.php";
                break;
            case "create":
                require_once "html/watches/watchCreate.php";
                break;
            case "view":
                require_once "html/watches/watchView.php";
                break;
            case "update":
                require_once "html/watches/watchUpdate.php";
                break;
            default:
                require_once  "html/watches/watchList.php";
                break;
        }
    }
}
require_once "footer.php";
?>
