<?php

require $_SERVER['DOCUMENT_ROOT'] . "/mvcExample/models/userData.php";
require $_SERVER['DOCUMENT_ROOT'] . "/mvcExample/controllers/utilityClass.php";


class userController
{

    // TODO: Add memoization

    protected $model;

    public function __construct()
    {
        $this->model = new userData();
        //var_dump($this->model->getData());
        //var_dump($this->model->getUser(4));
    }

    public function dashboardData()
    {
        return json_encode($this->model->rest_getDashboardData());
    }

    public function userData()
    {
        return json_encode(array('data' => $this->model->rest_getAllUsersData()));
    }

    public function userApplianceTotals()
    {
        return json_encode(array('data' => $this->model->rest_getUserApplianceTotalData()));
    }
    
    public function userApplianceLastLog()
    {
       // var_dump($this->model->rest_getUserApllianceLastlogData());
        return json_encode(array('data' => $this->model->rest_getUserApllianceLastlogData()));
    }

    public function userExportData()
    {
        $data = (array) $this->model->rest_getAllUsersData();
        $filename = "user-data-" . time();
        $header = array(
            'Id',
            'Title',
            'First Name',
            'Last Name',
            'Gender',
            'Email',
            'Phone',
            'RecDate'
        );

        $exp = new utilityClass();
        $exp->export_csv($header, $data, $filename);
    }
}
