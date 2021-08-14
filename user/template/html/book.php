<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(!$_SESSION['loggedin']){
    header('Location: /');
}

include('template/php/config.php');

$result = '';
if(isset($_POST['submit'])) {
    $search_by = $_POST['search_type'];
    if($search_by === 'name'){
        if ($stmt = $con->prepare('SELECT document_id,name,file_url,author,publisher,stock FROM book WHERE Match(name) Against(?)')) 
        {
            $stmt->bind_param('s',$_POST['search']);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
        }
        else {
            echo "Something Wrong in SQL syntax in name section";
        }
    }
    else if($search_by === 'author') {
        if ($stmt = $con->prepare('SELECT document_id,name,file_url,author,publisher,stock FROM book WHERE Match(author) Against(?)')) 
        {
            $stmt->bind_param('s',$_POST['search']);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
        }
        else {
            echo "Something Wrong in SQL syntax in author section";
        }
    }
    else if($search_by === 'publisher') {
        if ($stmt = $con->prepare('SELECT document_id,name,file_url,author,publisher,stock FROM book WHERE Match(publisher) Against(?)')) 
        {
            $stmt->bind_param('s',$_POST['search']);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
        }
        else {
            echo "Something Wrong in SQL syntax in publisher section";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="template/css/book.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<p> </p>
<form class="example" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="custom-select" style="width:200px;">
        <select name="search_type" required>
            <option value="name">Book Name</option>
            <option value="author">Author</option>
            <option value="publisher">Publisher</option>
        </select>
    </div>

  <input type="text" placeholder="Search.." name="search">
  <button type="submit" name="submit"><i class="fa fa-search"></i></button>
</form>
<p> </p>
    <section>
    <table id="table">
        <thead>
            <tr>
                <th>Document ID</th>
                <th>Book Name</th>
                <th>PDF Link</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Stock</th>
                <th>Request</th>
            </tr>
        </thead>
        <?php  
            if($result){
                while($rows=$result->fetch_assoc())
                {
            ?>
        <tr>
            <td><?php echo $rows['document_id'];?></td>
            <td><?php echo $rows['name'];?></td>
            <td><?php echo $rows['file_url'];?></td>
            <td><?php echo $rows['author'];?></td>
            <td><?php echo $rows['publisher'];?></td>
            <td><?php echo $rows['stock'];?></td>
            <td>Request</td>
        </tr>
        <?php } } ?>
    </table>
    </section>
</body>
</html>