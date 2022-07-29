<?php

require_once 'db_connect.php';
require_once 'file_upload.php';


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
    $id = $_POST['id'];
    //variable for upload pictures errors is initialised
    $uploadError = '';

    $picture = file_upload($_FILES['picture']); //file_upload() called  
    if ($picture->error === 0) {
        ($_POST["picture"] == "immo.png") ?: unlink("../pictures/$_POST[picture]");

        $sql = "UPDATE properties SET 
        name = '$name', 
        description = '$description', 
        size = '$size', 
        room_number = '$room_number', 
        address = '$address', 
        city = '$city', 
        longitude = '$longitude', 
        latitude = '$latitude', 
        price = '$price', 
        price_reduction = '$price_reduction', 
        picture = '$picture->fileName' WHERE id = {$id}";
    } else {
        $sql = "UPDATE properties SET 
        name = '$name', 
        description = '$description', 
        size = '$size', 
        room_number = '$room_number', 
        address = '$address', 
        city = '$city', 
        longitude = '$longitude', 
        latitude = '$latitude',
        price = '$price', 
        price_reduction = '$price_reduction' WHERE id = {$id}";
    }
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    }
} else {
    header("location: ../error.php");
}

mysqli_close($connect);
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

    <title>Update</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Update request response</h1>
        </div>
        <div class="alert alert-<?php echo $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <p><?php echo ($uploadError) ?? ''; ?></p>
            <a href='../update.php?id=<?= $id; ?>'><button class="btn btn-warning" type='button'>Back</button></a>
            <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
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