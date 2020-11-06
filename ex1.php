<?php
define("pi", 3.14);
$raio=rand(1,500);
function area ($raio){
	$a = $raio + $raio * pi;
	return $a;
}

echo"A área da circunferêncoa com raio ". $raio. " é ". area($raio);



