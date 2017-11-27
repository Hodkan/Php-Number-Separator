
<?php
$number = 85632;
$snum = (string)$number;
$number1 = $snum[0];
$number2 = $snum[1];
$number3 = $snum[2];
$number4 = $snum[3];
$number5 = $snum[4];



echo "Number is: $number";
echo "<br/>";
echo "Divided Numbers are : $number1      $number2       $number3      $number4   $number5";

echo "<table border=\"10\" style = 'border-collapse: collapse'>";
echo "<th>$number1   <th>$number2   <th>$number3   <th>$number4  <th>$number5";
echo "</table>";

?>
