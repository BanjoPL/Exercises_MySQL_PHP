<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pogotowie Ratunkowe</title>
	<link rel="stylesheet" type="text/css" href="styl5.css">
</head>
<body>
<header>
<div id="baner1"><img src="obraz1.jpg" alt="pogotowie"></div>
<div id="baner2"><h1>Pogotowie<br> Ratunkowe</h1></div>
<div id="baner3"><p>Kontakt:<br> 022 222 11 333</div>
</header>
<div id="blok-glowny">
<h2>Dodaj nowe zgłoszenie</h2><br>
<form action="zgloszenie.php" method="post">
Numer zespołu ratowniczego:<br>
<input type="number" name="numer-zespolu"><br>
Numer dyspozytora:<br>
<input type="number" name="numer-dyspozytora"><br>
Adres:<br>
<input type="text" size="100" name="adres"><br>
<button type="reset">WYCZYŚĆ</button>
<button type="submit">ZGŁOŚ</button>
</form>
</div>
<footer>
<div id="stopka1">
<h4>Numery alarmowe</h4>
<ul>
<li>999</li>
<li>112</li>
</ul>
</div>
<div id="stopka2">
	<a href="1/kwerendy.txt">Pobierz kwerendy</a>
</div>
<div id="stopka3">
	<p>Autor<br> 000000000000
</div>
</footer>
</body>
</html>
