<?php
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}
echo "<hr>";
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum"."\n";
echo "<hr>";
for ( $i="A"; $i<"A"; $i++) {
    echo "AAAA<br />";
}
echo "<hr>";

echo "<hr>";

echo "<hr>";

echo "<hr>";
$n = 5;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "The factorial of  $n = $x"."\n";
echo "<hr>";
function Fibonacci($s){ 
  
    $num1 = 0; 
    $num2 = 1; 
  
    $counter = 0; 
    while ($counter < $s){ 
        echo ' '.$num1; 
        $num3 = $num2 + $num1; 
        $num1 = $num2; 
        $num2 = $num3; 
        $counter = $counter + 1; 
    } 
} 
  
$s = 9; 
Fibonacci($s); 
echo "<hr>";
$text="OrangeAcademy";
$search_char="c";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo $count."\n";
echo "<hr>";
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j= ".$i*$j."<br>"."</td>";
  }
  echo "</tr>";
  }
echo "<hr>";
echo "<hr>";
for ($i = 1; $i <= 100; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo $i . " FizzBuzz"."\n" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo $i. " Fizz"."\n";
   }
     else if ( $i%5 == 0 ) 
   {
     echo $i. " Buzz"."\n";
   }
     else
   {
     echo $i."<br>"."\n";
   }
 }
echo "<hr>";
$n = 5; 
echo "n = " . $n . "\n";
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
	echo "<br>"."\n";
   }
echo "<hr>";
for ($row=0; $row<=7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
        if ((($column == 1 or $column == 5) and $row != 0) or (($row == 0 or $row == 3) and ($column > 1 and $column < 5)))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}
echo "<br>";
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
      if ($column == 1 or (($row == 0 or $row == 3 or $row == 6) and ($column < 5 and $column > 1)) or ($column == 5 and ($row != 0 and $row != 3 and $row != 6)))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}
echo "<br>";
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
     if (($column == 1 and ($row != 0 and $row != 6)) or (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or ($column == 5 and ($row == 1 or $row == 5)))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}
?>