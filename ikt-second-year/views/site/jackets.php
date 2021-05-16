<?php
require_once "navigation.php";
?>

<?php
if(!empty($data)){
    if(!empty($_GET["action"])){
        switch ($_GET["action"]){
            case "listAll":
                require_once "html/jackets/jacketList.php";
                break;
            case "create":
                require_once "html/jackets/jacketCreate.php";
                break;
            case "view":
                require_once "html/jackets/jacketView.php";
                break;
            case "update":
                require_once "html/jackets/jacketUpdate.php";
                break;
            default:
                require_once  "html/jackets/jacketList.php";
                break;
        }
    }
}
require_once "footer.php";
?>
