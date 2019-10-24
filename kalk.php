<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<input type="number" name="liczba1"><br>
	<input type="number" name="liczba2"><br>
	<input type="radio" name="wybor" value="1" checked> dodaj<br>
	<input type="radio" name="wybor" value="2"> odejmij<br>
	<input type="radio" name="wybor" value="3"> pomnoz<br>
	<input type="radio" name="wybor" value="4"> podziel<br>
	<input type="radio" name="wybor" value="5"> potęguj<br>
	<input type="radio" name="wybor" value="6"> pierwiastkuj<br>
	<input type="submit">
</form>

<?php
if(isset($_POST['liczba1']) && isset($_POST['liczba2']) && isset($_POST['wybor']))
{
	@$liczba1 = $_POST['liczba1'];
	@$liczba2 = $_POST['liczba2'];
	$wybor = $_POST['wybor'];
	$wynik;
	
	

	switch($wybor)
	{
		case 1:
			$wynik = $liczba1+$liczba2;
			break;
		case 2:
			$wynik=$liczba1-$liczba2;
			break;
		case 3:
			$wynik=$liczba1*$liczba2;
			break;
		case 4:
			if($liczba2==0)
			{
				echo "Dzielnik jest zerem<br>";
				$wynik=0;
				break;
			}
			$wynik=$liczba1/$liczba2;
			break;
		case 5:
			$wynik=pow($liczba1,$liczba2);
			break;

		case 6:
			$wynik=pow($liczba1,1/$liczba2);
			break;
	}
	echo @$wynik . "<br>";
}
?>