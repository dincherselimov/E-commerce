<?php
require_once "navigation.php";
?>

<?php
if(!empty($data)){
    if(!empty($_GET["action"])){
        switch ($_GET["action"]){
            case "listAll":
                require_once "html/shoes/shoeList.php";
                break;
            case "create":
                require_once "html/shoes/shoeCreate.php";
                break;
            case "view":
                require_once "html/shoes/shoeView.php";
                break;
            case "update":
                require_once "html/shoes/shoeUpdate.php";
                break;
            default:
                require_once  "html/shoes/shoeList.php";
                break;
        }
    }
}
require_once "footer.php";
?>
