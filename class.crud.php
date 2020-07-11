<?php 

class crud {

    private $db;

    function __construct($db_conn) {
        $this->db = $db_conn;
    }

    public function get_all_subjects (){
        $stmt = $this->db->prepare("SELECT * FROM Contacts");
        $stmt->execute();
        $subjects = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $subjects;
    }

    public function create($fname,$lname,$contact,$email,$paddress) {

        try {
            $stmt = $this->db->prepare("INSERT INTO Contacts(firstName,lastName,phoneNumber,email,personAddress) VALUES (:fname,:lname,:contact,:email,:paddress)");
            $stmt->bindparam(":fname",$fname);
            $stmt->bindparam(":lname",$lname);
            $stmt->bindparam(":contact",$contact);
            $stmt->bindparam(":email",$email);
            $stmt->bindparam(":paddress",$paddress);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getID($id) {

        $stmt = $this->db->prepare("SELECT * FROM Contacts WHERE id=:id");
        $stmt->execute(array(":id"=>$id));
        $edit_row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $edit_row;
    }

    public function update($id,$fname,$lname,$contact,$email,$paddress) {

        try {
            $stmt = $this->db->prepare("UPDATE Contacts SET firstName=:fname,lastName=:lname,phoneNumber=:contact,email=:email,personAddress=:paddress WHERE id=:id");
            $stmt->bindparam(":id",$id);
            $stmt->bindparam(":fname",$fname);
            $stmt->bindparam(":lname",$lname);
            $stmt->bindparam(":contact",$contact);
            $stmt->bindparam(":email",$email);
            $stmt->bindparam(":paddress",$paddress);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function delete($id) {

        $stmt = $this->db->prepare("DELETE FROM Contacts WHERE id=:id");
        $stmt->bindparam(":id",$id);
        $stmt->execute();
        return true;
    }

} // End of crud class

?>