<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include('template/php/config.php');

$stmt = $con->prepare('SELECT id,loan_request.document_id,book.name,book.author,requisition_date,is_approved FROM loan_request INNER JOIN book ON loan_request.document_id = book.document_id WHERE user_id=?');
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
        <th>DocumentID</th>
        <th>Book Name</th>
        <th>Author Name</th>
        <th>Requisition Date</th>
        <th>Approved Date</th>
    </tr>
    <?php
        if($result){
            while($rows=$result->fetch_assoc())
            {
        ?>
    <tr>
        <td><?php echo $rows['id']; ?></td>
        <td><?php echo $rows['document_id']; ?></td>
        <td><?php echo $rows['name']; ?></td>
        <td><?php echo $rows['author']; ?></td>
        <td><?php echo $rows['requisition_date']; ?></td>
        <td><?php echo $rows['is_approved']; ?></td>
    </tr>
    <?php } 
        }
        else { echo "Result doesn't exist"; } ?>
</table>

