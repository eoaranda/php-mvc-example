<?php 

// inherit the db connection
class applianceData extends DB{

    private $db;
    private $table = "userAppliance"; // For reausability in other models
    

    public function __construct()
    {
        $this->db = new DB();
    }

    public function rest_getApplianceData($id)
    {
        if (isset($id)){
            $sql = "select * from $this->table where userData_id = $id";
        } else {
            $sql = "select * from $this->table";
        }

        $sth = $this->db->readAllJSON($sql);
		return $sth;
    }

    public function rest_getApplianceAccessData($id)
    {
        if (isset($id)){
            $sql = "select * from appliance_access_total where userData_id = $id";
        } else {
            $sql = "select * from appliance_access_total ";
        }
        
        $sth = $this->db->readAllJSON($sql);
		return $sth;
    }


    

    // TODO: Create insert, update, delete for the userData model


}
