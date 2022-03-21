<?php 
	session_start();
	require_once('../models/db.php');

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];

		if($name != "")
		{
			if($email != "")
			{
				if($username != "")
				{
					if($password != "")
					{
						if($gender != "")
						{
							if($dob != "")
							{


                               $user = ['name'=> $name, 'email'=>$email, 'username'=>$username, 'password'=>$password ,'gender'=>$gender,'dob'=>$dob];

					           $status = registration($user);
					            if($status){
						             	echo "try again...";				
					            }	
					            else{
						            
						            header('location: ../views/Login.php');
					                }

							}
							else
							{
								echo "invalid Date of birth ...";
							}
                        }
                      else
                      {
                      	echo "invaild gender...";
                      }
                   }
                   else
                   {
                   	echo "invaild password...";
                   }
				}
				else
				{
					echo "invalid username...";
				}
			}
			else
			{
				echo "invalid email...";
			}
		}
		else
		{
			echo "invalid name...";
		}
	}
?>