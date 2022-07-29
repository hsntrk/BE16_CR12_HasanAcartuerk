<?php
require_once "actions/db_connect.php";

$sql = "SELECT * from properties";
$result = mysqli_query($connect, $sql);
$body = "";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $body .= "<div class='col-xl-3 col-lg-4 col-md-6 mb-4'>
        <div class='bg-wight rounded shadow-lg p-3 bgcard' style='mh-100'>
            <img src='pictures/" . $row['picture'] . "' class='card-img-top' alt='...'>
            <div class='bgtitle'>
                <h3 class='card-title text-light text-center p-2 mb-2'>" . $row['name'] . "</h3>
            </div>
            <div class='card-body'>
                <p class='card-text m-0'><strong>Size: </strong> " . $row['size'] . "</p>
                <p class='card-text m-0'><strong>Number of Rooms: </strong>" . $row['room_number'] . "</p>
                
                <p class='card-text m-0'><strong>City: </strong> " . $row['city'] . "</p>
                <p class='card-text m-0'><strong>Price: </strong>" . $row['price'] . "</p>
                <p><a class='card-text position-relative bottom-0 d-flex justify-content-center mt-4' href='details.php?id=" . $row['id'] . "'>
                <button class='btn btn-secondary btn-sm text-light' type='button'>For more Information</button></a></p>
            </div>
        </div>
    </div>";
    }
} else {
    $body = "<tr><td colspan='11'><center>No Data Available </center></td></tr>";
}

mysqli_close(($connect));
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    <?php require_once "components/bootstrap.php" ?>
    <!-- fontawesome kit icons -->
    <?php require_once "components/fontawesome.php" ?>
    <!-- bootstrap icons -->
    <?php require_once "components/bootstrap_icons.php" ?>
    <!-- Font Family -->
    <?php require_once "components/font_family.php" ?>
    <!-- Animate style -->
    <?php require_once "components/animate.php" ?>
    <!-- my style css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Real Estate Agency</title>
</head>

<body>

    <!-- navbar -->
    <?php require_once "components/navbar.php" ?>




    <!-- Properties from php -->
    <div class="container-fluid manageCard w-100 mt-3">
        <p class='h2 text-center bgtitle bg-gradient text-white p-4'> Our Properties</p>
        <section class="container">
            <div class="row">
                <?php echo $body ?>
            </div>
        </section>
    </div>





    <!-- footer -->
    <?php require_once "components/footer.php" ?>
    <!-- bootstrap script -->
    <?php require_once "components/bootstrap_js.php" ?>
    <!-- my script js -->
    <script src="js/script.js"></script>

</body>

</html>