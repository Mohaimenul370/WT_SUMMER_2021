<?php
    include("../../controls/staff/registration-validator.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff &copy Shahed</title>
</head>
<body>
    <h1>Staff Registration</h1><hr>
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
                <td>Enter your designation:</td>
                <td>
                    <select name="designation">
                        <option value="Manager">Manager</option>
                        <option value="Chef">Chef</option>
                        <option value="Waiter">Waiter</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Favorite foods:</td>
                <td>
                    <input type="checkbox" name="food-1" value="chinese" id="chinese">
                    <label for="chinese">Chinese</label>
                    <input type="checkbox" name="food-2" value="local" id="local">
                    <label for="local">Local</label>
                    <input type="checkbox" name="food-3" value="fast-food" id="fast-food">
                    <label for="fast-food">Fast food</label>
                </td>
                <td><?= $_SESSION["food-error"] ?></td>
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