<?php
class SecurityModel{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getSecurityCount($landID){
        // Prepare statement
        $this->db->query('SELECT COUNT(*) FROM security  WHERE landID = :landID');

        // Bind values
        $this->db->bind(':landID', $landID);


        $row = $this->db->single();
        return $row->{'COUNT(*)'};
    }

    public function viewSecurities(){
        $this->db->query('SELECT * FROM land WHERE uid = :uid and status = :status');
        $this->db->bind(':uid', $_SESSION['user_id']);
        $this->db->bind(':status', 1);

        $row = $this->db->resultSet();

        return $row;
    }
}