<?php
// Required Headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  

// Include Database & Object Files
include_once '../config/database.php';
include_once '../objects/users.php';




$database = new Database();
$db = $database->getConnection();
  
// Initialize Object
$users = new Users($db);
  




// Query Events
$stmt = $users->read();
$num = $stmt->rowCount();
  
// Check If More Than 0 Records Found
if($num>0){
  
    // Events Array
    $users_arr=array();
    //$users_arr["users"]=array();
  
    // Retrieve Table of Contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // Extract Row
        // It Will Make $row['name'] to
        // just $name only
        extract($row);
  
        $users_item=array(
            "user_id" => $user_id,
            "admin_id" => $admin_id,
            //"description" => html_entity_decode($description),
            /*entity decode would be needed in future */
            
            "user_role" => $user_role,
            "user_name" => $user_name,
            "user_number" => $user_number,
            "user_email" => $user_email,
            "user_user_name" => $user_user_name,
            "user_password" => $user_password,
            "user_job_title" => $user_job_title,
            "user_short_bio" => $user_short_bio,
            


        );
  
        array_push($users_arr, $users_item);

        
    }
  
    // Set Response Code -> 200 OK
    http_response_code(200);
  
    // Show Events Data in JSON Format
    echo json_encode($users_arr);
}
  
else{
  
    // Set Response Code - 404 Not Found
    http_response_code(404);
  
    // If There Is No Event Them Show
    echo json_encode(
        array("message" => "No Users Found.")
    );
}

?>