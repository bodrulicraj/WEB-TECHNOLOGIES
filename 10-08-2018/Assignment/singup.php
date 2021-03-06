<!DOCTYPE HTML> 
<html>
	<head>
		<style>
			.error {color: #FF0000;}
			a{
				text-decoration: none;
			}
		</style>
	</head>
	
	<body>
		<?php
		
			// define variables and set to empty values
			$usernameErr = $fullnameErr = $emailErr = $phoneErr = $passwordErr = $conpasswordErr = $genderErr = $edulvlErr = "";
			$username = $fullname = $email = $phone = $password = $conpassword = $gender = $comment = $edulvl = "";
	

			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// username
			if (empty($_POST["username"])) {
				$usernameErr = "Username is required";
			} else {
				$username = test_input($_POST["username"]);
				// check if username only contains letters and whitespace
				if (!preg_match("/^[A-Za-z][A-Za-z0-9]*$/",$username)) {
				$usernameErr = "Only letters, numbers and white space allowed";
				}
			}
			//fullname
			if (empty($_POST["fullname"])) {
				$fullnameErr = "Full Name is required";
			} else {
			$fullname = test_input($_POST["fullname"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
			$fullnameErr = "Only letters and white space allowed";
				}
			}//email
			if (empty($_POST["email"])) {
				$emailErr = "Email is required";
			} else {
				$email = test_input($_POST["email"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
				}
			}
  
			//Phone
			if (empty($_POST["phone"])) {
			$phoneErr = "Phone Number is required";
			} else {
			$phone = test_input($_POST["phone"]);
			// check if phone only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z0-9 ]*$/",$phone)) {
				$phoneErr = "Only numbers allowed";
				}
			}
			
			//password
			  if (empty($_POST["password"])) {
				$passwordErr = "Password is required";
			  } else {
				$password = test_input($_POST["password"]);
			  }
  
			//Confirm Password
			  if (empty($_POST["conpassword"])) {
				$conpasswordErr = "Password is required";
			  } else {
				$conpassword = test_input($_POST["conpassword"]);
			  }
			  
			 //Gender
			  if (empty($_POST["gender"])) {
				$genderErr = "Gender is required";
			  } else {
				$gender = test_input($_POST["gender"]);
			  }
			  //Education
			  if (count($_POST["edulvl"]) <1) {
				$edulvlErr = "Education is required";
			  } 
			  
			  
			
			
			
			
			}
			
			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
		?>
	
		<h2>PHP SingUp Form</h2>
	<p><span class="error">* required field</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
		Username: <input type="text" name="username" value="<?php echo $username;?>">
		<span class="error">* <?php echo $usernameErr;?></span>
		<br><br>
		Full Name: <input type="text" name="fullname" value="<?php echo $fullname;?>">
		<span class="error">* <?php echo $fullnameErr;?></span>
		<br><br>
		Email: <input type="email" name="email" value="<?php echo $email;?>">
		<span class="error">* <?php echo $emailErr;?></span>
		<br><br>
		Phone: <input type="text" name="phone">
		<span class="error">* <?php echo $phoneErr;?></span>
		<br><br>
		Password: <input type="password" name="password">
		<span class="error">* <?php echo $passwordErr;?></span>
		<br><br>
		Confirm Password: <input type="password" name="conpassword">
		<span class="error">* <?php echo $conpasswordErr;?></span>
		<br><br>
		Gender: 
			<input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="female"> Female
			<input type="radio" name="gender" value="other"> Other<br>
		Education: 
			<input type="checkbox" name="edulvl[]" value="SSC"> SSC
			<input type="checkbox" name="edulvl[]" value="HSC"> HSC
			<input type="checkbox" name="edulvl[]" value="BSc"> BSc
			<input type="checkbox" name="edulvl[]" value="MSc"> MSc<br><br>
		
		<input type="submit" value="Submit">
		<button><a href='index.php'>Home</a></button>
	</form>
	
		<?php
			echo "<h2>Your Input:</h2>";
			echo "Your Username : ".$username."<br>";
			echo "Your Full Nane : ".$fullname."<br>";
			echo "Your Email Id : ".$email."<br>";
			echo "Your Phone Number : ".$phone."<br>";
			echo "Your Password : ".$password."<br>";
			echo "Your Gender : ".$gender."<br>";
			
		?>
	</body>
</html>