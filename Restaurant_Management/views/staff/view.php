<?php
    include('../../controls/staff/view-validator.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View @Shahed</title>
</head>
<body>
    <img src="<?= $_SESSION['image location'] ?>" alt="">
    <table>
        <tr>
            <td><b>Full name:</b></td>
            <td><?= $_SESSION['full_name'] ?></td>
        </tr>
        <tr>
            <td><b>Email:</b></td>
            <td><?=$_SESSION['email'] ?></td>
        </tr>
        <tr>
            <td><b>Gender:</b></td>
            <td><?= $_SESSION['gender'] ?></td>
        </tr>
        <tr>
            <td><b>Designation:</b></td>
            <td><?= $_SESSION['designation'] ?></td>
        </tr>
        <tr>
            <td><b>Favorite food:</b></td>
            <td>
                <?php

                   echo join(', ',$_SESSION['favorite food'])

                ?>
            </td>
        </tr>
        <tr>
            <td>
                <a href="login.php">Back to login page</a><br>
                <a href="logout.php">Logout</a>
            </td>
        </tr>
    </table>
</body>
</html>



