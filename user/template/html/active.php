<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include('template/php/config.php');

$stmt = $con->prepare('SELECT id,book.name,book.author,issue_date,due_date,returned FROM active_loan INNER JOIN book ON active_loan.document_id = book.document_id WHERE user_id=?');
if($stmt) {
    $stmt->bind_param('i',$_SESSION['id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
}
else{
    echo $con->error;
    exit();
}

?>

<table id="request">
    <tr>
        <th>ID</th>
        <th>Book Name</th>
        <th>Author Name</th>
        <th>Issue Date</th>
        <th>Due Date</th>
        <th>Returned</th>
    </tr>
    <?php
        if($result){
            while($rows=$result->fetch_assoc())
            {
        ?>
    <tr>
        <td><?php echo $rows['id']; ?></td>
        <td><?php echo $rows['name']; ?></td>
        <td><?php echo $rows['author']; ?></td>
        <td><?php echo $rows['issue_date']; ?></td>
        <td><?php echo $rows['due_date']; ?></td>
        <td><?php echo $rows['returned']; ?></td>
    </tr>
    <?php } 
        }
        else { echo "Result doesn't exist"; } ?>
</table>

