<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

include("config.php");

$option = $_POST['user_type'];
if($option === "user") {
    if ($stmt = $con->prepare('SELECT id,password_hash,type FROM user WHERE enrollment_no=?')) {
        $stmt->bind_param('i',$_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows > 0) {
            $stmt->bind_result($id,$password,$type);
            $stmt->fetch();
            if(password_verify($_POST['password'], $password))
            {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['id'] = $id;
                $_SESSION['type'] = $type;
                if($type === "student"){
                    session_write_close();
                    header('Location: ../../student.php');
                }
                else if($type === "teacher"){
                    header('Location: ../../teacher.php');
                }
            } else {
                echo 'incorrect password!';
            } 
        } else {
            echo 'incorrent username';
        }
        $stmt->close();
        
    }
    else {
        echo "Couldn't Extract Value";
    }
}
else if($option === "librarian") {
    if ($stmt = $con->prepare('SELECT id,password_hash FROM user WHERE unique_id=?')) {
        $stmt->bind_param('i',$_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows > 0) {
            $stmt->bind_result($id,$password);
            $stmt->fetch();
            if(password_verify($_POST['password'], $password))
            {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $id;
                header('Location: admin.html');
            } else {
                echo 'incorrect password!';
            } 
        } else {
            echo 'incorrent username';
        }
        $stmt->close();
        
    }
    else {
        echo " Couldn't Extract Value";
    }
}

?>