<?php

 function pattern1($n)
  {
      
    for ($i = 0; $i < $n; $i++)
    {
          
      
        for($j = 0; $j <= $i; $j++ )
        {
            
            echo "* ";
        }
  
        echo "\n";
    }

  }


  function pattern2($n)
  {

    $num = 65;
  
   
    for ($i = 0; $i < $n; $i++)
    {
          
     
        for ($j = 0; $j <= $i; $j++ )
        {
              
            $ch = chr($num);
            
            echo $ch." ";
  
            $num = $num + 1;
        }
  
        
        echo "\n";
    }
  }

  function pattern3($n)
  {

    for($i=$n; $i>=1; $i--)
    {

      if($i%2 == 0)

    {

   for($j=$i; $j>=1; $j--)  
      echo $j; 
    }

   else
   {

   for($j=1; $j<=$i; $j++)
     echo $j;

   }

   echo "\n"; 

   }

  }

    $n = 3;
    echo "Pattern 1 :\n";
    pattern1($n);
    echo "Pattern 2 :\n";
    pattern2($n);
    echo "Pattern 3 :\n";
    pattern3($n);
?>