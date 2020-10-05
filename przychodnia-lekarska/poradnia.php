<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="poradnia.css">
	<meta charset="utf-8">
	<title>Poradnia</title>
</head>
<body>
<div id="baner">
	<h1>PORADNIA SPECJALISTYCZNA</h1>
</div>
<div id="panel-lewy">
	<h3>LEKARZE SPECJALIŚCI</h3>
	<table>
		<td>
		Poniedziałek
		</td>
	</table>
	<h3>LISTA PACJENTÓW</h3>
	<?php 
		$polaczenie = mysqli_connect("localhost", "root", "", "poradnia");

		$sql = "SELECT id, imie, nazwisko, choroba FROM pacjenci";
		$res = mysqli_query($polaczenie, $sql);

		while ($wiersz = mysqli_fetch_row($res)) {
			echo "<br>$wiersz[0]. $wiersz[1] $wiersz[2], $wiersz[3]<br>";
		}
		mysqli_close($polaczenie);
	
	?>
	<br><br>
	<form>
		Podaj id:<br>
		<input type="number" name="id"><br>
		<button type="submit">Pokaż szczegóły</button>
	</form>
</div>
<div id="panel-prawy">
	<h2>KARTA PACJENTA</h2>
	<p>Nie wybrano pacjenta</p>
</div>
<footer>
	<p>utworzone przez: Błażej</p>
	<a href="kwerendy.txt">Kwerendy do pobrania</a>
</footer>
</body>
</html>