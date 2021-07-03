<?php
session_start();
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
	header("Location:AdminProfilePage.php");  //this will take it to admin profile page

	
    $uname="";
    $pass="";
    $err_pass="";
    $err_uname="";

    

    if(isset($_POST["login"]))
    {
		
		if(empty($_POST["uname"]))
		{
			$err_uname = "Username Required";
		}else if(strlen($_POST["uname"]) < 6)
		{
			$err_uname = "Username should be at least 6 characters.";
		}
		else if(strpos($_POST["uname"], " "))
		{
			$err_uname = "Username can not contain white space.";
		}
		else
		{
			$uname = $_POST["uname"];
		}
		
		if(empty($_POST["pass"]))
		 {
			 $err_pass="Password Required";
		 }
		 else if(strlen($_POST["pass"])<8) {
		 	$err_pass="Password must be 8 charachters long";
		 }
		 else
		 {
			 $pass=$_POST["pass"];
		 }
		 
        $uname = htmlspecialchars($_POST["uname"]);
        $pass = htmlspecialchars($_POST["pass"]);
		
        
		
		echo "User Name: ". $_POST["uname"]."<br>";
		echo "Password: ". $_POST["pass"]."<br>";
        
    }
	
	
?>

<html>
	<head>
		<title>Admin &copy Nedul</title>
	</head>
	<body>
	<center><h1><b>Welcome to Admin Login!</b></h1></center>
	<fieldset>
		<legend><h1><b>Log In</b></h1></legend>
	
	<form action="" method="post"> 
	<center table>
	
		<tr>
					<td><span><b>Username</b>:</span></td>
					<td>:<input type="text" name="uname" value = "<?php echo $uname;?>" ><br>
					<td><span><?php echo $err_uname;?></span></td>
		</tr>
		<br>
		<tr>
					<td><span><b>Password</b>:</span></td>
					<td>:<input type="password" name="pass" value = "<?php echo $pass;?>"><br>
					<td><span><?php echo $err_pass;?></span></td>
		</tr>
	
	</table>
	
	<br>
	<!-- <button  type="submit" formaction="Assistant_Home_Form.php" style="height: 40px; width: 200px; float: center"><b><h3>Log In</h3></b> </button><br> -->
	
		<input type="submit" name="login" value="Log In" style="height: 40px; width: 200px; float: center"><br> 

	
	<a href="ForgotPassword.php">Forgot Password?</a>
	</form>
	</fieldset>
		
		
	</body>
</html>