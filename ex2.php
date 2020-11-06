<?php
function verifica($num){

if($num % 2 == 0) {
	return true;
}
else {
	return false;
}
}
$n = rand(1,50200);
if(verifica($n)) {
	echo $n. ' é par';
}
else {
	echo $n. ' é impar';
}
