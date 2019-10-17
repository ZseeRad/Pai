<form method="POST">
	<input type="number" name="liczba1"><br>
	<input type="number" name="liczba2"><br>
	<input type="radio" name="wybor" value="1"> nieparzyste<br>
	<input type="radio" name="wybor" value="2"> parzyste<br>
	<input type="submit">
</form>

<?php

if(isset($_POST['liczba1']) && isset($_POST['liczba2']) isset($_POST['wybor']))
{

	$liczba1 = $_POST['liczba1'];
	$liczba2 = $_POST['liczba2'];
	$wybor = $_POST['wybor'];
	
	//echo "$liczba1<br>";
	//echo "$liczba2<br>";
	//echo "$wybor<br>";
	if($liczba1>$liczba2)
	{
		echo "Liczba 1 jest większa od liczby 2<br>";
	}
	else
	{
		for($i=$liczba1;$i<$liczba2;$i++)
		{
			if($wybor==1)
			{
				if($i%2==1)
				{
					echo "$i<br>";
				}
			}
			else
			{
				if($i%2==0)
				{
					echo "$i<br>";
				}
			}
		}
	}
}
?>
