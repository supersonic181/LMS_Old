<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(!$_SESSION['loggedin']){
    header('Location: /');
} 

include("config.php");

if ($stmt = $con->prepare('INSERT into contact(user_id,title,message) VALUES(?,?,?)')) {
    $stmt->bind_param('iss',$_SESSION['id'],$_POST['title'],$_POST['message']);
    $stmt->execute(); 
    echo "Message Sent Successfully!";
}
else{
    echo "Something went wrong while executing SQL statement";
}
