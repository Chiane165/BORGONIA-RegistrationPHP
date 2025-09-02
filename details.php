<?php 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $firstname   = htmlspecialchars($_GET["firstname"] ?? '');
    $middlename  = htmlspecialchars($_GET["middlename"] ?? '');
    $familyname  = htmlspecialchars($_GET["familyname"] ?? '');
    $suffix      = htmlspecialchars($_GET["suffix"] ?? '');
    $contactNum  = htmlspecialchars($_GET["contactNum"] ?? '');
    $section     = htmlspecialchars($_GET["section"] ?? '');
    $technology  = htmlspecialchars($_GET["technology"] ?? '');
    $batch       = htmlspecialchars($_GET["batch"] ?? '');
    $schoolId    = htmlspecialchars($_GET["schoolId"] ?? '');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Data</title>
        <link rel="stylesheet" href="asset/css/style2.css">
    </head>
    <body>
        <div class="container">
            <div class="title">Registration Details</div>
            <div class="user-details-data">
                <label>First Name</label>
                <span><?php echo $firstname; ?></span>
            </div>
            <div class="user-details-data">
                <label>Middle Name</label>
                <span><?php echo $middlename; ?></span>
            </div>
            <div class="user-details-data">
                <label>Family Name</label>
                <span><?php echo $familyname; ?></span>
            </div>
            <div class="user-details-data">
                <label>Suffix</label>
                <span><?php echo $suffix; ?></span>
            </div>
            <div class="user-details-data">
                <label>Mobile No.</label>
                <span><?php echo $contactNum; ?></span>
            </div>
            <div class="user-details-data">
                <label>Section</label>
                <span><?php echo $section; ?></span>
            </div>
            <div class="user-details-data">
                <label>Technology</label>
                <span><?php echo $technology; ?></span>
            </div>
            <div class="user-details-data">
                <label>Batch</label>
                <span><?php echo $batch; ?></span>
            </div>
            <div class="user-details-data">
                <label>School ID</label>
                <span><?php echo $schoolId; ?></span>
            </div>

            <div class="btn-container">
                <a href="index.php" class="btn">Okay</a>
            </div>
        </div>
    </body>
</html>
