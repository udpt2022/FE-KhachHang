<?php
require_once "./../controller/storeController.php";
//require_once "./../controller/loginlogout.php";

//LoginLogoutController::checkSession("Location:loginout.php");

$storeInfo=new StoreController();
$action="";
if (isset($_REQUEST["action"]))
{    
    $action = $_REQUEST["action"];
}

switch ($action) {
    case "update":
        $storeInfo->updateStoreInfo();
        break;
    default:
        $storeInfo->getStoreInfo();
        break;
}
?>