<?php 
class UserController {
    private $db;
    private $user;

    public function __construct($db)
    {
        $this->db = $db;
        $this->user = new User($db);
    }


    public function index() {
        
    }


}


?>