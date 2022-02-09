<?php 
  
  
  
  function area($length,$width)
  {
  	echo"The area is :";
  	echo $length*$width."<br>";
  }

  function perimeter($length,$width)
  {
  	echo"perimeter is :";
  	echo 2*($length+$width);
  }

  area(10,15);
  perimeter(10,15);

?>