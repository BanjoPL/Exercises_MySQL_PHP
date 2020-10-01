<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Filmy</title>
	<link rel="stylesheet" type="text/css" href="styl1.css">
</head>
<body>
<div id="lewy">
<h3>Dostępne gatunki filmu</h3>
<ol>
<li>Sci-Fi</li>
<li>animacja</li>
<li>dramat</li>
<li>horror</li>
<li>komedia</li>		
</ol>
<p><a href="kadr.jpg">Pobierz obraz</a></p>
<p><a href="repertuar-kin.pl">Sprawdź repertuar kin</a></p>
</div>
<div id="prawy1"><h1>FILMOTEKA</h1></div>
<div id="prawy2">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
Tytuł: 
<input type="text" name="tytul"><br><br>
Gatunek filmu: 
<input type="number" name="gatunek"><br><br>
Rok produkcji: 
<input type="number" name="rok"><br><br>
Ocena: 
<input type="number" name="ocena"><br><br>
<button type="reset">CZYŚĆ</button>
<button type="submit">DODAJ</button>
</form>  
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tytul = test_input($_POST["tytul"]);
  $rok = test_input($_POST["rok"]);
  $gatunek = test_input($_POST["gatunek"]);
  $ocena = test_input($_POST["ocena"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<?php
$polaczenie = mysqli_connect('localhost', 'root', '', 'dane');

		if(empty($tytul) || empty($gatunek) || empty($rok) || empty($ocena))
		{
			echo "Nie podano danych filmu <br>";
		}
		else if (isset($tytul) || isset($gatunek) || isset($rok) || isset($ocena))
		{
			$sql = "INSERT INTO filmy (gatunki_id,tytul,rok,ocena ) VALUES ('$gatunek','$tytul','$rok', '$ocena');";

			$result = mysqli_query($polaczenie, $sql);
			echo "Film $tytul został dodany do bazy <br> ";
		}

?>
</div>
<div id="prawy3"><img src="kadr.jpg" alt="zdjęcia filmowe">
</div>
<footer>
<p>Autor strony: Błażej</p>	
</footer>
</body>
</html>