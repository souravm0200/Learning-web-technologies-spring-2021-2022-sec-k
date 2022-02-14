<?php
  
  $name="";
  $nameError="";
   
  if(isset($_REQUEST['submit']))
  {
    
    if($_REQUEST['name'] == null)
    {
      $nameError = "No name submitted.";
    }
    else
    {
      $name = $_REQUEST['name'];
      
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
  <legend>Name</legend>

    <input type="text" name="name" value="<?=$name?>"/><?=$nameError?><br>


    <hr style="width:100%;text-align:left;margin-left:0">

    <input type="submit" name="submit" value="Submit"><br>


  </form>
</body>
</html>
