<?php
    include("../../controls/customer/LoginValidation.php");

    $email_input_value = isset($_COOKIE['Email']) == 1 ? $_COOKIE['Email'] : "";
    $password_input_value = isset($_COOKIE['Password']) == 1 ? $_COOKIE['Password'] : "";

?>


<!DOCTYPE html>
<html>
<head>
    <title>Customer @Akib</title>
</head>
<body>
    <h1>Customer Login</h1><hr>
    <p>
        <form action="" method="POST">
            <table>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="text" name="email" id="email" value="<?= $email_input_value ?>"></td>
                    <td><?=$_SESSION['emailValidation']?></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" id="password"value="<?=$password_input_value?>"></td>
                    <td><?=$_SESSION['passwordValidation']?></td>
                </tr>
                <td>
                        <input type="checkbox" name="remember-me" id="rm">
                        <label for="rm">Remember me!</label>
                    </td>
                <tr>
                    <td>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
                <tr>
                    <td>Not registered ?</td>
                    <td><a href="CustomerRegistration.php">Click here!</a></td>
                </tr>
                <tr>
                    <td><a href="../home.php">Go back</a></td>
                </tr>
            </table>
        </form>
    </p>
</body>
</html>