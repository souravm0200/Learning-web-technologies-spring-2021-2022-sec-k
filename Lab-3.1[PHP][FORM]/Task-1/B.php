<?php
  
  $nameError="";
   
  if($_REQUEST['name'] == null)
  {
    $nameError = "No name submitted.";
  }
  else
  {
    print_r($_REQUEST['name']);
  }



?>


<html>
<head>
  <title></title>
</head>
<body>
  <form method="POST" action="">


  <fieldset style="width:300px">
  <legend>Name</legend>

    <input type="text" name="name" value=""/><?=$nameError?><br>

    <hr style="width:100%;text-align:left;margin-left:0">
    
    <input type="submit" name="submit" value="Submit"><br>


  </form>
</body>
</html>
