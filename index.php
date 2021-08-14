<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(!$_SESSION['loggedin']){
    header('Location: login.html');
}

if($_SESSION['type'] === "student"){
    header('Location: user/student.php');
}
else if($_SESSION['type'] === "teacher"){
    header('Location: user/teacher.php');
}
?>
