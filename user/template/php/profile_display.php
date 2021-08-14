<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(!$_SESSION['loggedin']){
    header('Location: /');
} 

include("config.php");

if ($stmt = $con->prepare('SELECT name,phone_no,email_id,enrollment_no,registration_no,batch_year,stream,gender,about FROM user WHERE id=?')) {
    $stmt->bind_param('i',$_SESSION['id']);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows > 0) {
        $stmt->bind_result($name,$phone,$email,$enrollment,$registration,$batch,$stream,$gender,$about);
        $stmt->fetch();
    }
    $stmt->close();
}
else {
    echo "Something went wrong while extracting the data";
}
?>