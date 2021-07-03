<?php
    include("../../controls/supplier/login-validator.php");
    
    $email_input_value = isset($_COOKIE['Email']) == 1 ? $_COOKIE['Email'] : "";
    $password_input_value = isset($_COOKIE['Password']) == 1 ? $_COOKIE['Password'] : "";

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
    <h1>Supplier Login</h1><hr>
    <p>
        <form action="" method="POST">
            <table>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="text" name="email" id="email" value="<?= $email_input_value ?>"></td>
                    <td><?=$_SESSION['email-error']?></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" id="password" value="<?=$password_input_value?>"></td>
                    <td><?=$_SESSION['password-error']?></td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="remember-me" id="rm">
                        <label for="rm">Remember me!</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="login" value="Submit">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
                <tr>
                    <td>Not registered ?</td>
                    <td><a href="registration.php">Click here!</a></td>
                </tr>
                <tr>
                    <td><a href="../home.php">Go back</a></td>
                </tr>
            </table>
        </form>
    </p>
</body>
</html>