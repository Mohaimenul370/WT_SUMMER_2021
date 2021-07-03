<?php
    include("../../controls/customer/RegistrationValidation.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer @Akib</title>
</head>

<body>
    <h1>Customer Registration Form</h1><hr>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Full name:</td>
                <td><input type="text" name="fname"></td>
                <td><?= $_SESSION["nameValidation"] ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
                <td><?= $_SESSION["emailValidation"] ?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
                <td><?= $_SESSION["passwordValidation"] ?></td>
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
                <td><?= $_SESSION["genderValidation"] ?></td>
            </tr>
            <tr>
                <td>Address:</td><br>
                <td> <textarea id="address" name="address" rows="10" cols="50">
                </textarea> </td>
                <td> <?= $_SESSION["addressValidation"] ?></td>
            <tr>
                <td>Upload your image:</td>
                <td><input type="file" name="image"></td>
                <td><?= $_SESSION['imageValidation'] ?></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
            <tr>
                <td><a href="CustomerLogin.php">Go to previous page</a></td>
            </tr>
        </table>
    </form>
</body>
</html>