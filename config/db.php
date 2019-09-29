<?php

/**
 *  Main DB conneciton Class
 * 
 * TODO: SQL injection prevention needed, prepare queries 
 * 
 */
class DB
{
    protected $conn;

    // db conn configurations
    private $db_name    = "oopQuickExample";
    private $db_user    = "root";
    private $db_pass    = "";
    private $host       = "127.0.0.1"; // change for mac config 


    // create the db connection
    public function __construct()
    {
        if (!isset($this->conn)) {
            $this->conn = @new mysqli($this->host, $this->db_user, $this->db_pass, $this->db_name);

            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
        return $this->conn;
    }

    public function dataTableServerCall($table, $primaryKey, $columns)
    {
        $sql_details = array(
            'user' => $this->db_user,
            'pass' => $this->db_pass,
            'db'   => $this->db_name,
            'host' => $this->host,
        );
        return json_encode(SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns));
    }

    // read all data from table
    public function readOne($sql)
    {
        $res = false;
        try {
            $res = $this->conn->query($sql);
        } catch (Exception $e) {
            return $e;
        }
        return $res->fetch_assoc();
    }

    /**
     * @param string $sql query
     * @param number $limit limit of results
     * @return resultSet array
     */
    public function readAll($sql, $limit = null)
    {
        // TODO: implement pagination ?

        if (isset($limit)) {
            $sql = $sql . " limit " . $limit;
        }

        $res = false;
        try {
            $res = $this->conn->query($sql);
        } catch (Exception $e) {
            return $e;
        }
        return $res->fetch_all();
    }

    /**
     * @param string $sql query
     * @param number $limit limit of results
     * @return JSON Object
     */
    public function readAllJSON($sql, $limit = null)
    {
        if (isset($limit)) {
            $sql = $sql . " limit " . $limit;
        }

        $res = false;
        try {
            $res = $this->conn->query($sql);
        } catch (Exception $e) {
            return $e;
        }
        return $res->fetch_all(MYSQLI_ASSOC);
    }
}
