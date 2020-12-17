<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'ravi');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
     
    $myuseremail = mysqli_real_escape_string($db,$_POST['user_email']);
    $mypassword = mysqli_real_escape_string($db,$_POST['user_password']); 
    
    $query = "SELECT * FROM ravi WHERE email= '$myuseremail' AND password='$mypassword'";
    $result = mysqli_query($db, $query);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('Location: welcome.php'); 
        }  
        else{
            header('Location: index.php');
        }  
?>