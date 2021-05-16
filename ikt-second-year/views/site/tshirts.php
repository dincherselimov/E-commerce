<?php
require_once "navigation.php";
?>

<?php
if(!empty($data)){
    if(!empty($_GET["action"])){
        switch ($_GET["action"]){
            case "listAll":
                require_once "html/tshirts/tshirtList.php";
                break;
            case "create":
                require_once "html/tshirts/tshirtCreate.php";
                break;
            case "view":
                require_once "html/tshirts/tshirtView.php";
                break;
            case "update":
                require_once "html/tshirts/tshirtUpdate.php";
                break;
            default:
                require_once  "html/tshirts/tshirtList.php";
                break;
        }
    }
}
require_once "footer.php";
?>
