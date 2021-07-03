<?php
    include("../../controls/supplier/registration-validator.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier &copy Mahadi</title>
</head>
<body>
    <h1>Supplier Registration</h1><hr>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Full name:</td>
                <td><input type="text" name="fName"></td>
                <td><?= $_SESSION["name-error"] ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
                <td><?= $_SESSION["email-error"] ?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
                <td><?= $_SESSION["password-error"] ?></td>
            </tr>
            <tr>
                <td>Retype password:</td>
                <td><input type="passwordR" name="passwordR"></td>
                <td><?= $_SESSION["passwordR-error"] ?></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="Male">
                    <label for="Male">Male</label>
                    <input type="radio" name="gender" value="Female">
                    <label for="Female">Female</label>
                    <input type="radio" name="gender" value="Others">
                    <label for="Others">Others</label>
                </td>
                <td><?= $_SESSION["gender-error"] ?></td>
            </tr>
            <tr>
                <td>Enter your Supply-Item:</td>
                <td>
                    <select name="Supply-Item">
                        <option value="Fish">Fish</option>
                        <option value="Vegetables">Vegetables</option>
                        <option value="Ice-cream">Ice-cream</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Upload your image:</td>
                <td><input type="file" name="image"></td>
                <td><?= $_SESSION['image-error'] ?></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
            <tr>
                <td><a href="login.php">Go to previous page</a></td>
            </tr>
        </table>
    </form>
</body>
</html>