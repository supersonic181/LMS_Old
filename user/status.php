<?php include("template/html/base.php"); ?>

<form method="POST">
    <div class="tab">
        <button class="tablinks" name='all'>All</button>
        <button class="tablinks" name='request'>Request Status</button>
        <button class="tablinks" name='active'>Active Status</button>
        <button class="tablinks" name='past'>Past Status</button>
    </div>
</form>


<?php

    if(isset($_POST['request'])) {
        include("template/html/request.php");
    }
    else if(isset($_POST['active'])) {
        include("template/html/active.php");
    }
    else if(isset($_POST['past'])) {
        include("template/html/past.php");
    }
    else { ?>
        <h2> Request Status </h2>
        <?php include("template/html/request.php"); ?>
        <h2> Active Status </h2>
        <?php include("template/html/active.php"); ?>
        <h2> Past Status</h2>
        <?php include("template/html/past.php");
    }
?>

</body>
</html>