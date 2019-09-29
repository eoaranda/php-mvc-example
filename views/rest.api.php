<?php
require $_SERVER['DOCUMENT_ROOT'] . "/mvcExample/config/db.php";
require $_SERVER['DOCUMENT_ROOT'] . "/mvcExample/controllers/userController.php";
require $_SERVER['DOCUMENT_ROOT'] . "/mvcExample/controllers/applianceController.php";
require $_SERVER['DOCUMENT_ROOT'] . "/mvcExample/config/ssp.class.php";


if (!isset($_GET["action"])) {
    exit();
}

$action = $_GET["action"];

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

switch ($action) {
    case "dashboardData":
        $user = new userController();
        header('Content-type: application/json');
        echo $user->dashboardData(); // returns the dashboard json
        break;
    case "userData":
        $user = new userController();
        header('Content-type: application/json');
        echo $user->userData(); //
        break;
    case "userApplianceTotals":
        $user = new userController();
        header('Content-type: application/json');
        echo $user->userApplianceTotals(); // 
        break;
    case "applianceData":
        $id = isset($_GET["id"]) ? $_GET["id"] : null;
        $app = new applianceController();
        header('Content-type: application/json');
        echo $app->applianceData($id); //
        break;
    case "applianceAccessData":
        $id = isset($_GET["id"]) ? $_GET["id"] : null;
        $app = new applianceController();
        header('Content-type: application/json');
        echo $app->applianceAccessData($id); // 
        break;
    case "userApplianceAccessData":
        $user = new userController();
        header('Content-type: application/json');
        echo $user->userApplianceLastLog(); // 
        break;
    case "userDataServer":
        $table = 'userData';
        $primaryKey = 'userData_Id';
        $columns = array(
            array('db' => 'userData_Id', 'dt' => 0),
            array('db' => 'title',       'dt' => 1),
            array('db' => 'first_name',  'dt' => 2),
            array('db' => 'last_name',   'dt' => 3),
            array('db' => 'gender',      'dt' => 4),
            array('db' => 'email',       'dt' => 5)
        );
        $db = new db();
        echo $db->dataTableServerCall($table, $primaryKey, $columns);
        break;
}
