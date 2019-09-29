<?php 

require $_SERVER['DOCUMENT_ROOT']."/mvcExample/models/applianceData.php";

class applianceController{

    // TODO: Add memoization

    protected $model;

    public function __construct(){
        $this->model = new applianceData();
    }

    public function applianceData($applianceId = null){
        return json_encode(array('data' => $this->model->rest_getApplianceData($applianceId)));
    }

    public function applianceAccessData($applianceId = null){
        return json_encode(array('data' => $this->model->rest_getApplianceAccessData($applianceId)));
    }
}
