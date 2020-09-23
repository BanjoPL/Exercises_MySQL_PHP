<?php

$polaczenie = mysqli_connect('localhost', 'root', '','ratownictwo');

$nz = $_POST['numer-zespolu'];
$nd = $_POST['numer-dyspozytora'];
$adres = $_POST['adres'];

if(!$polaczenie) 
{
	echo "nie udalo sie polaczyc z baza";
	return;
}
$sql = "INSERT INTO zgloszenia (id, pilne, czas_zgloszenia, dyspozytorzy_id, ratownicy_id, adres) VALUES ('', 0, CURRENT_TIME, '$nd', '$nz', '$adres');";

$res = $polaczenie->query($sql);

mysqli_close($polaczenie);

?>