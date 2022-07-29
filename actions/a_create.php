<?php

require_once "db_connect.php";
require_once "file_upload.php";

if ($_POST) {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $size = $_POST["size"];
    $room_number = $_POST["room_number"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $longitude = $_POST["longitude"];
    $latitude = $_POST["latitude"];
    $price = $_POST["price"];
    $price_reduction = $_POST["price_reduction"];

    //this function exists in the service file upload.
    $picture = file_upload($_FILES['picture']);


    $sql = "INSERT INTO `properties` (name, description, size, room_number, address, city, longitude, `latitude`, price, price_reduction, picture) VALUES ('$name', '$description','$size', '$room_number', '$address', '$city', '$longitude', '$latitude', '$price', '$price_reduction', '$picture->fileName')";


    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $name </td>
            <td> $size </td>
            <td> $price </td>
            <td> ..... </td>
            </tr></table><hr>";
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    }

    mysqli_close($connect);
} else {
    header("location: ../error.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    <?php require_once "../components/bootstrap.php" ?>
    <!-- fontawesome kit icons -->
    <?php require_once "../components/fontawesome.php" ?>
    <!-- bootstrap icons -->
    <?php require_once "../components/bootstrap_icons.php" ?>
    <!-- Font Family -->
    <?php require_once "../components/font_family.php" ?>
    <!-- Animate style -->
    <?php require_once "../components/animate.php" ?>
    <!-- my style css -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Create</title>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Create request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <p><?php echo ($uploadError) ?? ''; ?></p>
            <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
        </div>
    </div>


    <!-- footer -->
    <?php require_once "../components/footer.php" ?>
    <!-- bootstrap script -->
    <?php require_once "../components/bootstrap_js.php" ?>
    <!-- my script js -->
    <script src="../js/script.js"></script>


</body>

</html>