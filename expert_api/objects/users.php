<?php
class Users{
  
    // Database Connection & Table Name
    private $conn;
    private $table_name = "users"; // Table Name
  
    // object Properties

    /*Rows of The Database Tables*/
    public $user_id;
    public $admin_id;
    public $user_role;
    public $user_name;
    public $user_number;
    public $user_email;
    public $user_user_name;
    public $user_password;
    public $user_job_title;
    public $user_short_bio;
    public $pro_pic;
    
    
  
    // Constructor With $db as Database Connection
    public function __construct($db){
        $this->conn = $db;
    }



    function read(){
  
        // select All Query
        $query = "SELECT * from users where user_role='Expert' limit 3;";
      
        // Prepare Query Statement
        $stmt = $this->conn->prepare($query);
      
        // Execute Query
        $stmt->execute();
      
        return $stmt;
    }
}


?>