<?php
  

  $email ="";
  $emailError="";
   
 if(isset($_REQUEST['submit']))
  {
    
    if($_REQUEST['email'] == null)
    {
      $emailError = "No email submitted.";
    }
    else
    {
      $email = $_REQUEST['email'];
      
    }
   
  }



?>


<html>
<head>
  <title></title>
</head>
<body>
  <form method="POST" action="">


  <fieldset style="width:300px">
  <legend>Email</legend>

    <input type="text" name="email" value="<?=$email?>"/><?=$emailError?><br>

    <hr style="width:100%;text-align:left;margin-left:0">
    
    <input type="submit" name="submit" value="Submit"><br>


  </form>
</body>
</html>
