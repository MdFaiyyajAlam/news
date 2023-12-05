<?php 
 include "config.php";

 if($_SESSION['user_role'] == '0'){
   header("Location: {$hostname}/admin/post.php");
}

 $userId = $_GET['id'];

 $sql = "DELETE from user where user_id = {$userId}";

 if(mysqli_query($conn, $sql)){
    header("Location: {$hostname}/admin/users.php");
 }
 else{
    echo "<p style='color:red;margin: 10px 0;'>Can't delete this record try again !</p>";
 }

mysqli_close($conn);
?>