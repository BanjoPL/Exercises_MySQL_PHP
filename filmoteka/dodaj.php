<?php
$polaczenie = mysqli_connect('localhost', 'root', '', 'dane');

	$tytul=$_POST['tytul'];
	$gatunek = $_POST['gatunek'];
	$rok = $_POST['rok'];
	$ocena = $_POST['ocena'];

$sql1 = "INSERT INTO filmy (gatunki_id,tytul,rok,ocena ) VALUES ('$gatunek','$tytul','$rok', '$ocena');";
$res = mysqli_query($polaczenie, $sql1);

echo "Film $tytul został dodany do bazy";
mysqli_close($polaczenie);
?>