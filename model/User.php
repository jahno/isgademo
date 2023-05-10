<?php 
class User   { 

    private $id;
    private $nom;
    private $email;
    private $password;
    private $conn;
    private $table_name="etudiants";
    
    public function __construct()
  {
       $this->conn= Database::getInstance();
    }

    public function login($email,$password){
        $co = $this->conn->query("SELECT * FROM etudiant where email='$email'and password='$password'");
     
        $r = $co->fetch(PDO::FETCH_OBJ);
       
       
        return  $r;
    } 

}