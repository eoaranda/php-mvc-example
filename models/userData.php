<?php 

// inherit the db connection
class userData extends DB{

    private $db;
    private $table = "userData"; // For reausability in other models
    

    public function __construct()
    {
        $this->db = new DB();
    }

    // get all the user data
    public function getAllUsersData() 
    {
        $sth = $this->db->readAll("select * from $this->table", 10);
		return $sth;
    }

    // get the data of an specific user 
    public function getUser($id) 
    {
        $sth = $this->db->readOne("select * from $this->table where userData_Id = $id");
		return $sth;
    }
    
    // we will piggyback the view to the user data model.
    public function rest_getDashboardData()
    {
        $sth = $this->db->readAllJSON("select * from weekday_accesslog ");
		return $sth;
    }

    public function rest_getAllUsersData() 
    {
        $sth = $this->db->readAllJSON("select * from $this->table");
		return $sth;
    }

    public function rest_getUserApplianceTotalData()
    {
        $sth = $this->db->readAllJSON("select * from user_appliance_total ");
		return $sth;
    }

    public function rest_getUserApllianceLastlogData()
    {
        $sth = $this->db->readAllJSON("select * from user_appliance_lastlog ");
		return $sth;
    }

    // TODO: Create insert, update, delete for the userData model

}

