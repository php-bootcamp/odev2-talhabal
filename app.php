<?php

$sex = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)
if ($sex=="male") {
	$kalori=10*$weight+6.25*$height-5*$age+5;
	echo "Erkeğin günlük alması gereken kalori miktarı $kalori";
}
elseif ($sex=="female") {
	$kalori=10*$weight+6.25*$height-5*$age-161;
	echo "Kadının günlük alması gereken kalori miktarı $kalori";
}else{
	echo "Cinsiyet Seçimi Hatalı !";
}
?>
