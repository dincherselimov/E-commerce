<?php
require_once "navigation.php";
?>

<?php
if(!empty($data)){
    if(!empty($_GET["action"])){
        switch ($_GET["action"]){
            case "listAll":
                require_once "html/jeans/jeansList.php";
                break;
            case "create":
                require_once "html/jeans/jeansCreate.php";
                break;
            case "view":
                require_once "html/jeans/jeansView.php";
                break;
            case "update":
                require_once "html/jeans/jeansUpdate.php";
                break;
            default:
                require_once  "html/jeans/jeansList.php";
                break;
        }
    }
}
require_once "footer.php";
?>
