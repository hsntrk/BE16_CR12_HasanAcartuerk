<?php
session_start();

require_once 'actions/db_connect.php';
require_once 'actions/file_upload.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM properties WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $name = $data["name"];
        $description = $data["description"];
        $size = $data["size"];
        $room_number = $data["room_number"];
        $address = $data["address"];
        $city = $data["city"];
        $longitude = $data["longitude"];
        $latitude = $data["latitude"];
        $price = $data["price"];
        $price_reduction = $data["price_reduction"];
        $picture = $data["picture"];
    } else {
        header("location: error.php");
    }
} else {
    header("location: error.php");
}


mysqli_close($connect);

?>

<!DOCTYPE html>
<html>

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

    <title>Edit Properties</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- navbar -->
    <?php require_once "components/navbar.php" ?>

    <fieldset>
        <legend class='h2'>Update Properties<img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt=""></legend>
        <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Name</th>
                    <td><input class='form-control' type="text" name="name" value="<?= $name ?>" placeholder="Name of Animal" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="description" value="<?= $description ?>" placeholder="description" /></td>
                </tr>
                <tr>
                    <th>Size</th>
                    <td><input class='form-control' type="text" name="size" value="<?= $size ?>" placeholder="size" /></td>
                </tr>
                <tr>
                    <th>Number of Rooms</th>
                    <td><input class='form-control' type="number" name="room_number" value="<?= $room_number ?>" placeholder="room_number" /></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><input class='form-control' type="text" name="address" value="<?= $address ?>" placeholder="address" /></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td><input class='form-control' type="text" name="city" value="<?= $city ?>" placeholder="city" /></td>
                </tr>
                <tr>
                    <th>Latitude</th>
                    <td><input class='form-control' type="text" name="latitude" value="<?= $latitude ?>" placeholder="latitude" /></td>
                </tr>
                <tr>
                    <th>Longitude</th>
                    <td><input class='form-control' type="text" name="longitude" value="<?= $longitude ?>" placeholder="longitude" /></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" name="price" value="<?= $price ?>" placeholder="price" /></td>
                </tr>
                <tr>
                    <th>price_reduction</th>
                    <td> <select name="price_reduction">
                            <option <?php if ($price_reduction == "Yes") {
                                        echo "selected";
                                    }  ?> value="Yes">Yes</option>
                            <option <?php if ($price_reduction == "No") {
                                        echo "selected";
                                    }  ?> value="No">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Picture</th>
                    <td><input class='form-control' type="file" name="picture" /></td>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                    <input type="hidden" name="picture" value="<?php echo $data['picture'] ?>" />
                    <td><button class="btn btn-success" type="submit">Save Changes</button></td>
                    <td><a href='details.php?id=<?= $id; ?>'><button class="btn btn-warning" type="button">Go Back</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>

    <!-- footer -->
    <?php require_once "components/footer.php" ?>
    <!-- bootstrap script -->
    <?php require_once "components/bootstrap_js.php" ?>
    <!-- my script js -->
    <script src="js/script.js"></script>

</body>

</html>