<?php
require_once "actions/db_connect.php";

$id = $_GET["id"];
$sql = "select * from properties where id = $id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

?>

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

    <title>Details</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- navbar -->
    <?php require_once "components/navbar.php" ?>

    <!-- media library from php -->
    <div class="manageCard w-75 mt-3">

        <div class="card mb-3 shadow-lg mt-3 bgcard" style="max-width: 80vw">
            <div class="row g-0">
                <div class="col-md-4">

                    <img src='pictures/<?= $row["picture"] ?>' class="img-fluid rounded" style="height: 100%;" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="bgtitle bg-gradient text-white">
                            <h2 class="card-title p-4">Details of " <?= $row["name"] ?>"</h2>
                        </div>
                        <hr>
                        <p class="card-text">
                            <strong>Description: </strong> <?= $row["description"] ?>
                        </p>
                        <p class="card-text">
                            <strong>Size:</strong> <?= $row["size"] ?>
                        </p>
                        <p class="card-text">
                            <strong>Number of Rooms:</strong> <?= $row["room_number"] ?>
                        </p>
                        <p class="card-text">
                            <strong>Adress:</strong> <?= $row["address"] ?>
                        </p>
                        <p class="card-text">
                            <strong>City:</strong> <?= $row["city"] ?>
                        </p>
                        <p class="card-text">
                            <strong>Price:</strong> <?= $row["price"] ?>
                        </p>
                        <p class="card-text">
                            <strong>Price Reduction: </strong> <?= $row["price_reduction"] ?>
                        </p>
                    </div>
                </div>
                <div id="map" style="height: 30vh; width: 100vw;" class="border border-wight"></div>
            </div>
        </div>

        <a href="index.php" class="btn btn-outline-secondary btn-lg ps-4 pe-4 mb-5 mt-3 shadow-lg"><i class="fa-solid fa-backward"></i>&ensp; Back to the Properties Overview &ensp;
        </a>
    </div>



    <!-- footer -->
    <?php require_once "components/footer.php" ?>
    <!-- bootstrap script -->
    <?php require_once "components/bootstrap_js.php" ?>

    <!-- Script for Google Maps in Details -->
    <script>
    var map;

    function initMap() {
        var location = {
            lat: <?= $row["latitude"] ?>,
            lng: <?= $row["longitude"] ?>
        };
        map = new google.maps.Map(document.getElementById('map'), {
            center: location,
            zoom: 14
        });
        var pinpoint = new google.maps.Marker({
            position: location,
            map: map
        });
    }
    </script>

    <!-- google api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>

    <!-- my script js -->
    <script src="js/script.js"></script>
</body>

</html>