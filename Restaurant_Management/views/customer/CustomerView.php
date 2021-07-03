<?php
    include('../../controls/customer/ViewValidation.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer View @Akib</title>
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
            <td><b>Address:</b></td>
            <td><?= $_SESSION['address'] ?></td>
        </tr>
        
        <tr>
            <td>
            <a href="CustomerLogin.php">Back to login page</a><br>
            <a href="CustomerLogout.php">Logout</a>
        </tr>
    </table>
</body>
</html>



