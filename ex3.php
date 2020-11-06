<?php
$soma =0;
function percrr ($raparigas, $rapazes)
{
	$soma = $raparigas + $rapazes;
	$perc =($rapazes /$raparigas) /100;
	echo"a percentagem dos rapazes é ". $perc;
	$numrpg = ($rapazes / $soma) * 100;
	echo"<br>a percentagem de raparigas é ".$numrpg;
}
	$rapazes =rand(1,25);
	$raparigas=rand(1,25);
	percrr($rapazes, $raparigas);
?>

