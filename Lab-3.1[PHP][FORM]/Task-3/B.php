<?php
  
  $dobError="";
   
  if($_REQUEST['dob'] == null)
  {
    $dobError = "No  dob submitted.";
  }
  else
  {
    print_r($_REQUEST['dob']);
  }



?>



<html>
<head>
	
	<title></title>
</head>
<body>
    <form method="POST" action="">
	<fieldset style="width:300px">
	<legend>Date of Birth</legend>
	
	<table>
		<tr>
				<td></td>
					<td>
						<input type="date" name="dob" value=""/><br><hr>
					</td>
					<td><?=$dobError?></td>
		</tr>	

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit"> </td>
		</tr>
	
	</table>

    </fieldset>
    </form>
</body>
</html>