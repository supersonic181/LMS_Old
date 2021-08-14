<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include('template/php/config.php');

$stmt = $con->prepare('SELECT id,book.name,book.author,issue_date,returned_date FROM past_loan INNER JOIN book ON past_loan.document_id = book.document_id WHERE user_id=?');
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
        <th>Returned Date</th>
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
        <td><?php echo $rows['returned_date']; ?></td>
    </tr>
    <?php } 
        }
        else { echo "Result doesn't exist"; } ?>
</table>

