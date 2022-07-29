<?php

require_once 'actions/db_connect.php';

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

    <title>Add Animal</title>

</head>

<body class="d-flex flex-column min-vh-100">

    <!-- navbar -->
    <?php require_once "components/navbar.php" ?>


    <div class="container-fluid manageCard w-100 mt-3 mb-5">
        <p class='h2 text-center bgtitle bg-gradient text-white p-4'> Add a Property</p>


        <fieldset class="bgcard rounded">
            <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Name of Property</th>
                        <td><input class='form-control' type="text" name="name" placeholder="name of property" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="description" placeholder="description" /></td>
                    </tr>
                    <tr>
                        <th>Size</th>
                        <td><input class='form-control' type="text" name="size" placeholder="size" /></td>
                    </tr>
                    <tr>
                        <th>Number of Rooms</th>
                        <td><input class='form-control' type="number" name="room_number" placeholder="number of rooms" /></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><input class='form-control' type="text" name="address" placeholder="address" /></td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td><input class='form-control' type="text" name="city" placeholder="city" /></td>
                    </tr>
                    <tr>
                        <th>Longitude</th>
                        <td><input class='form-control' type="text" name="longitude" placeholder="longitude" /></td>
                    </tr>
                    <tr>
                        <th>Latitude</th>
                        <td><input class='form-control' type="text" name="latitude" placeholder="latitude" /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="number" name="price" placeholder="price" /></td>
                    </tr>
                    <tr>
                        <th>price_reduction</th>
                        <td> <select name="price_reduction" class="form-control">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Add Property</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Go Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>

    <!-- footer -->
    <?php require_once "components/footer.php" ?>
    <!-- bootstrap script -->
    <?php require_once "components/bootstrap_js.php" ?>
    <!-- my script js -->
    <script src="js/script.js"></script>

</body>

</html>