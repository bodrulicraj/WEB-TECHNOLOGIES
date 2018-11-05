<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>CHOWDHURY, BODRUL ISLAM</title>
</head>

<body>
	<h1 style="color:red;text-align:center;font-size: 20px;">CHOWDHURY, BODRUL ISLAM</h1>
	<hr/>
		<p style="text-align:center;font-size: 20px;text-decoration: none;"> 
		<a style="text-decoration: none;" href="index.php">About</a> | 
		<a style="text-decoration: none;" href="education.php">Education</a> | 
		<a style="text-decoration: none;" href="project.php">Project</a> |  
		<a style="text-decoration: none;" href="singup.php">SingUp</a> | 
		<a style="text-decoration: none;" href="login.php">LogIn</a> |  
		<a style="text-decoration: none;" href="contact.php">Contact</a></p>
	<hr/>
	<h4 style="text-align:center;font-size: 25px;color: #ffffffff;background: #99bbff;">Contact Myself</h4>


	<table  style="width:800px;border-color: #99bbff;margin-left: 266px;" border="2px">
			<tr style="text-align:center;">
				<th style="text-align: justify;">
				<form action="action_page.php" style="text-align:center;">
					<label for="fname">First Name</label>
					<input style="margin-bottom: 10px;margin-top: 10px;" type="text" id="fname" name="firstname" placeholder="Your first name.."></br>

					<label for="lname">Last Name</label>
					<input style="margin-bottom: 10px;" type="text" id="lname" name="lastname" placeholder="Your last name.."></br>
					
					<label for="lname">Email</label>
					<input style="margin-bottom: 10px;" type="email" id="email" name="email" placeholder="Your email"></br>

					<label for="country">Country</label>
					<select style="margin-bottom: 10px;" id="country" name="country">
						<option value="australia">Australia</option>
						<option value="canada">Canada</option>
						<option value="usa">USA</option>
						<option value="usa">Bangladesh</option>
					</select></br>

					<label for="subject">Subject</label>
					<textarea  id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea></br>

					<input style="margin-top: 10px;" type="submit" value="Submit">
					<input style="margin-bottom: 10px;" type="submit" value="Reset">

				</form>
				</th>
			</tr>
		</table>
</body>

</html>