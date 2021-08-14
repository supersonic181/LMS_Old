<?php include("../php/profile_display.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Profile Page
    </title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <link rel="stylesheet" href="../css/base.css">
</head>
<body>
    <ul id="top_bar">
        <li id="site-name"><a href="/" name="home">Library MS</a></li>
        <li><a href="about.php" target="_blank">About Us</a></li>
        <li><a href="contact.html" target="_blank">Contact Us</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="../php/logout.php">logout</a></li>
    </ul>

    <div class="student-profile py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent text-center">
                            <p class="mb-0"><strong class="pr-1">Welcome <br><?php echo $name; ?></strong></p>
                        </div>
                        <div class="card-body">
                            <p class="mb-0"><strong class="pr-1">Enrollment No.:<?php echo $enrollment; ?></strong></p>
                            <p class="mb-0"><strong class="pr-1">Registration No.:<?php echo $registration; ?></strong></p>
                        </div>
                    </div>
                    <a href="#" class="right">Edit Profile</a>
                </div>
                
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table table-bordered">
                                <tr>
                                <th width="30%">Phone No.</th>
                                <td width="2%">:</td>
                                <td><?php echo $phone; ?></td>
                                </tr>
                                <tr>
                                <th width="30%">Email ID</th>
                                <td width="2%">:</td>
                                <td><?php echo $email; ?></td>
                                </tr>
                                <tr>
                                <th width="30%">Batch Year</th>
                                <td width="2%">:</td>
                                <td><?php echo $batch; ?></td>
                                </tr>
                                <tr>
                                <th width="30%">Stream</th>
                                <td width="2%">:</td>
                                <td><?php echo $stream; ?></td>
                                </tr>
                                <tr>
                                <th width="30%">Gender</th>
                                <td width="2%">:</td>
                                <td><?php echo $gender; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>