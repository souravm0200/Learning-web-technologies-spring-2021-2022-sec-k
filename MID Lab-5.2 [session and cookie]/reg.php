
<html>
<head>
	
	<title>X Company</title>
</head>

<style>
	.topright {
  position: absolute;
  top: 8px;
  right: 100px;
  font-size: 16px;
}
</style>

<fieldset>

<body>
	<form method="POST" action="regCheck.php">
          <h1>XCOMPANY</h1> 
	        <div class="topright"><a href="home.php"> Home |</a> <a href="login.php"> Login |</a> <a href="registration.php">Registration </a></div>


	   <fieldset style="width:500px">
	   	<legend>Registration</legend>

		                        
              
        <table>
        	<tr>
        		<td>Name</td>
        		<td><input type="text" name="name" value=""><hr></td>

        	</tr>
			
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value=""><hr></td>
			</tr>
			<tr>
				
				<td>Username</td>
				<td><input type="text" name="username" value=""><hr></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""><hr></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" name="confirmPassword" value=""><hr></td>
			</tr>
			
		   <tr>
		   	<td>
		   		<fieldset >
				       <legend>Gender</legend>
				       <input type="radio" name="gender" value=""> Male 
					    <input type="radio" name="gender" value=""> Female 
					    <input type="radio" name="gender" value=""> Other
			      </fieldset><hr>
				</td>
			</tr>

			<tr>
				<td>
					<fieldset>
						<legend>Date of Birth</legend>
						<input type="Date" name="dob" value="">
						
					</fieldset><hr>
				</td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td><input type="reset" name="reset" value="Reset"></td>
			</tr>
		      </fieldset>
		</table>
		
	</form>
	</fieldset>
 
</body>
</fieldset>

</html>