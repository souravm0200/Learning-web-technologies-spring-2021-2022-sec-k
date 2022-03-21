<?php 

function registration($user)

{
    $conn = mysqli_connect("localhost" , "root" , "" , "portal");
		
    $sql = "insert into student  values ('{$user['name']}'  , '{$user['email']}' , '{$user['username']}', '{$user['password']}' , '{$user['gender']}' , '{$user['dob']}')";
    $reg = mysqli_query($conn,$sql);
    if($reg)
        echo "Reg complete";
    else
        echo "Error";
}


function login($username, $password)
{

		$con = mysqli_connect("localhost" , "root" , "" , "portal");
		$sql = "select * from student where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);

		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
}
?>