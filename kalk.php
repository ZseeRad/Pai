<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<input type="number" name="liczba1"><br>
	<input type="number" name="liczba2"><br>
	<input type="radio" name="wybor" value="1" checked> dodaj<br>
	<input type="radio" name="wybor" value="2"> odejmij<br>
	<input type="radio" name="wybor" value="3"> pomnoz<br>
	<input type="radio" name="wybor" value="4"> podziel<br>
	<input type="submit">
</form>

<?php

if(isset($_POST['liczba1']) && isset($_POST['liczba2']) && isset($_POST['wybor']))
{

	$liczba1 = $_POST['liczba1'];
	$liczba2 = $_POST['liczba2'];
	$wybor = $_POST['wybor'];
	
	//echo "$liczba1<br>";
	//echo "$liczba2<br>";
	//echo "$wybor<br>";
	switch($wybor)
	{
		case 1:
			echo $liczba1+$liczba2 . "<br>";
			break;
		case 2:
			echo $liczba1-$liczba2 . "<br>";
			break;
		case 3:
			echo $liczba1*$liczba2 . "<br>";
			break;
		case 4:
			echo $liczba1/$liczba2 . "<br>";
			break;
	}
}
?>
