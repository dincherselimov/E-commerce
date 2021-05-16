<?php
require_once dirname(dirname(__FILE__)) . "/helpers/Debug.php";
$_POST = json_decode(file_get_contents("php://input"), true) ;
class API
{
    function __construct(){
        Debug::parseAndDie($_POST);
    }


}

$api = new API();
