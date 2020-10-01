<?php 
    $serverName = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'september';
   $conn = new mysqli($serverName, $username, $password, $db_name);

   if($conn->connect_error){
       die('failed:' . $conn->connect_error);
   }

   $sql = "SELECT * FROM user"; //sql query to fetch all data
   $result = $conn->query($sql); //Executes the given query
   
   
   
   if($result->num_rows > 0){
       while($row= $result->fetch_assoc()){
            echo "<pre>";
            print_r($result); //debugging......
       }
   }

   $conn ->close(); 
?>





