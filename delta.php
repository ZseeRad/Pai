<html>
<body>
<form method="GET" action="delta.php">
Podaj a: <input type="number" name="a"><br>
Podaj b: <input type="number" name="b"><br>
Podaj c: <input type="number" name="c"><br>
<input type="submit">
</form>
<?php
if(isSet($_GET['a']) && isSet($_GET['b']) && isSet($_GET['c']))
{
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];


$delta = $b*$b - (4*$a*$c);

$x1 = (-$b - sqrt($delta))/(2*$a);
$x2 = (-$b + sqrt($delta))/(2*$a);

echo "a = " . $a . "<br>b = " . $b . "<br>c = " . $c . "<br>";
if($delta<0) {echo "delta ujemna, nie ma rozwiązania<br>";}
elseif($delta==0) {echo "delta = " . $delta . "<br>x1 " . $x1 . "<br>";}
else{

echo "delta = " . $delta . "<br>Miejsce zerowe: " . $x1 . "<br>Miejsce zerowe: " . $x2;
}
}
?>


</body>
</html>