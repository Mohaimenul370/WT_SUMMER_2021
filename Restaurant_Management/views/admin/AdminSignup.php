<?php
    session_start();
	$_SESSION['message'] = "";
	
	$name="";
	$err_name="";
	$uname = "";
	$err_uname="";
	$pass="";
	$err_pass="";
	$conpass="";
	$err_conpass="";
	$email="";
	$err_email="";
	$pcode="";
	$number="";
	$err_number="";
	$bdate="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$gender="";
	$err_gender="";
	$about="";
	$err_about="";
	$bio = "";
	$err_bio="";
	$err_birthday="";
	$birthday="";
	
	$hasError = true;
	
	
	
	
	//if($_SERVER["REQUEST_METHOD"] == "POST")
	if(isset($_POST["Register"]))
	{
		if(empty($_POST["name"]))
         {
             $err_name="[Name Requires]";
			 $hasError=false;
         }
         else
         {
             $name=htmlspecialchars($_POST["name"]);
         }
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[Username Required]";
			 $hasError=false;
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[Username must be 6 charachters long]";
			 $hasError=false;
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[Username should not contain white space]";
			 $hasError=false;
		 }
		 else
		 {
			 $uname=htmlspecialchars($_POST["uname"]);
		 }
		if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
			 $hasError=false;
		 }
        elseif(strlen($_POST["pass"])<8)
        {
             $err_pass="[password must be at least 8 characters long]";
			 $hasError=false;
        }
		elseif(strpos($_POST["pass"]," "))
        {
                $err_pass="[Password should not contain white space]";
				$hasError=false;
        }
        elseif(!strpos($_POST["pass"],"#") && !strpos($_POST["pass"],"?"))
        {
                $err_pass="[Password should contain at least one special character]";
				
				$hasError=false;
        }
        else
		{
            $u=0; $l=0; $d=0;
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_upper($_POST["pass"][$i]))
                {
                    $u=1;
                    break;
                }
            }
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_lower($_POST["pass"][$i]))
                {
                    $l=1;
                    break;
                }
            }
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_digit($_POST["pass"][$i]))
                {
                    $d=1;
                    break;
                }
            }
            if(!$u==1 || !$l==1 || !$d==1)
            {
                $err_pass="[must have at least one upper case, one lower case & one numeric value]";
				$hasError=false;
            }
            else
            {
                $pass=htmlspecialchars($_POST["pass"]);
                if($_POST["pass"]==$_POST["conpass"])
                {
                    $confirm_pass=$_POST["pass"];
                }
                elseif(empty($_POST["confpass"]))
                {
                    $err_confirm_pass="[Please re-insert password]";
					$hasError=false;
                }
                else
                {
                    $err_confirm_pass="[pasword does not match]";
					$hasError=false;
                }
            }
		}
		if(empty($_POST["email"]))
        {
            $err_email="[email required]";
			$hasError=false;

        }
        elseif(!strpos($_POST["email"],"@"))
        {
            $err_email="[email must contain '@' sign]";
			$hasError=false;
        }
        else
        {
            $pos_at  = strpos($_POST["email"],"@");
            if(!strpos($_POST["email"],".",$pos_at))
            {
                $err_email="[at least one dot needed after '@' sign]";
				$hasError=false;
            }
            else
            {
                $email=htmlspecialchars($_POST["email"]);
            }
             
         }
		if(empty($_POST["number"]))
         {
             $err_number="[Number Requires]";
			 $hasError=false;
         }
         elseif(!is_numeric($_POST["number"]))
         {
             $err_number="[number should only contain neumeric value]";
			 $hasError=false;
         }
         else
         {
             $number=htmlspecialchars($_POST["number"]);
         }
		
		
		
		
		 
		if(!isset($_POST["gender"]))
		{ 
			$err_gender = "No buttons were checked."; 
			$hasError=false;
		} 
		else
		{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["about"]))
		{ 
			$err_about = "No buttons were checked."; 
			$hasError=false;
		} 
		else
		{
			$about = $_POST["about"];
		}
		
		if(!isset($_POST['day']) || !isset($_POST['month']) || !isset($_POST['year'])){
			$err_birthday = "Date of birth is required!";
			$hasError=false;
		}
		else{
			$birthday = $_POST['day']."/".$_POST['month']."/".$_POST['year'];
		}
		
		 //if(!$hasError) 
	if(empty($err_birthday) && empty($err_hname) 
		&& empty($err_gender) && empty($err_dname) && empty($err_number) 
		&& empty($err_email) && empty($err_confirm_pass) && empty($err_pass)
		&& empty($err_uname) && empty($err_name) )
        {
            
            if(isset($_POST["Register"]))
            {
                $result = insertUser($name,$uname,$pass,$email,$number,$hname,$birthday,$gender);
				
				if($result){
					$_SESSION['message'] = "Successfully Inserted!";
				}else{
					$_SESSION['message'] = "Failed to insert!";
				}
                
            }
        }else{
			$_SESSION['message'] = "There are one or many error!";
		}
		
		
		
		
		
		echo "Name: ". $_POST["name"]."<br>";
		echo "User Name: ". $_POST["uname"]."<br>";
		echo "Password: ". $_POST["pass"]."<br>";
		echo "Confirmed Password: ". $_POST["conpass"]."<br>";
		echo "Email: ". $_POST["email"]."<br>";
		echo "Number: ". $_POST["number"]."<br>";
		echo "Gender: ". $gender."<br>";
		echo "Date of Birth: ". $birthday."<br>";
		
		}
	
	

?>


<html>
	<head>
		<title>Admin &copy Nedul</title>
	</head>
	<body>
	    <fieldset style="width:1000px" align="center">
	    <legend align="center"><center><h1>Sign Up As Admin</h1></center></legend>
		<br>
			<?php
				if(!empty($_SESSION['message'])){
					echo $_SESSION['message'];
					//$_SESSION['message']=""
				}
				
			?>
		<br>
		<form action="" method="post">
			<table>
			     <tr>
					<td><span><b>Name</b>:</span></td>
					<td><input type="text" name="name" value = "<?php echo $name;?>"><br>
					<td><span><font color="red"> <?php echo $err_name;?> </font></span></td>
				</tr>
				<tr>
					<td><span><b>Username</b>:</span></td>
					<td><input type="text" name="uname" value = "<?php echo $uname;?>"><br>
					<td><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password</b>:</span></td>
					<td><input type="password" name="pass" value = "<?php echo $pass;?>"><br>
					<td><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Confirm Password</b>:</span></td>
					<td><input type="password" name="conpass" value = "<?php echo $conpass;?>"><br>
					<td><span><?php echo $err_conpass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email</b>:</span></td>
					<td><input type="text" name="email" value = "<?php echo $email;?>"><br>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
				    <td><span><b>Phone</b>:</span></td>
					<td><input type="text" name="number" size="9"  value="<?php echo $number;?>"><br>
					<td><span><?php echo $err_number;?></span></td>
				</tr>
				
					
				<tr>
					<td><span><b>Birth Date</b>:</span></td>
                    <td>
                        <select name="day">
                            <option disabled selected>Day</option>
                            <?php 
                                for($i=1;$i<=31;$i++)
                                {
                                    echo "<option>$i<option>";
                                }
                            ?>
                        </select>
                        <select name="month">
                            <option disabled selected>Month</option>
                            <?php 
                                $months=array("Jan"=>"1", "Feb"=>"2", "Mar"=>"3", "Apr"=>"4", "May"=>"5", "June"=>"6","Jul"=>"7", "Aug"=>"8", "Sep"=>"9", "Oct"=>"10", "Nov"=>"11", "Dec"=>"12");
                                foreach($months as $x => $x_value) {
                                    echo "<option>$x($x_value)<option>";
                                    
                                  }
                            ?>
                        </select>
                        <select name="year">
                        <option disabled selected>Year</option>
                        <?php 
                                for($i=1985;$i<=2021;$i++)
                                {
                                    echo "<option>$i<option>";
                                }
                            ?>
                        </select>
                        <?php echo $err_birthday; ?>
				</tr>
				<tr>
					<td><span><b>Gender</b>:</span></td>
					<td><input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span></td>
					<td><span><?php echo $err_gender;?></span></td>
				</tr>
				
			</table>
			<br>
			<input type="submit" name="Register">
			<br>
			<h5 style="text-align:left;">Already have an account? <a href="AdminLogin.php">Log-In</a></h5>
			<a href="home.php">Go To HOME</a>
			
		</form>
		</fieldset>
	</body>
</html>