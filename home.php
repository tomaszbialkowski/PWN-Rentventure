<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet"> 
 	<title>RentVenture | Twój klucz do przygody</title>
 	<link rel="icon" type="image/png" href="rentventure.ico">
</head>
<body>

<div>
<img src="./IMG/Rentventure.png" alt="logo" class="logo">
</div>

<div>
	<nav class="naw">
  		<a class="button" href="home.php">RentVenture</a> &bull;
  		<a class="button" href="zarezerwuj.php">ZAREZERWUJ</a> &bull;
  		<a class="button" href="rezerwacje.php">REZERWACJE</a> &bull;
   		<a class="button" href="kontakt.php">KONTAKT</a> 
	</nav>
</div>
<div class="cytat">
	<?php
		$db = mysqli_connect('localhost','root','','domowe');
		mysqli_set_charset($db, 'UTF-8');

		    $zapytanie = "SELECT * FROM cytat ORDER BY RAND() LIMIT 1";
			$wykonaj = mysqli_query($db, $zapytanie) or die(mysql_error());

			$wiersz = mysqli_fetch_array($wykonaj);
				echo $wiersz["tekst_cyt"].'<br><span class="autor">'.$wiersz["autor_cyt"].'<span>';
	mysqli_close($db);
?>
</div>

<div class="tekst">
Jesteśmy podróżnikami.<br><br>
Mamy bazę samochodów przeprawowych. Wynajmujemy je dla Was. Jednak w naszych sercach cały czas mieszka bakcyl przygody. Wierzymy, że Ty również jesteś podróżnikiem a do nas sprowadza Cię chęć pracy na najlepszych samochodach dostępnych na świecie.<br>
<br>Obojętnie dokąd się wybierasz: piaszczyste bezdroża, błotnisty las czy lodowe pustkowie – nasze samochody poznały sprawdziły się w każdym terenie . <br><br>
Ze szczególną starannością dbamy o sprawność techniczną pojazdów i zamontowanego na nich sprzętu, dlatego stale przeprowadzamy przeglądy techniczne w autoryzowanych serwisach. Wyciągarki, systemy lokalizacji GPS i GPRS, kamery są szczegółowo kontrolowane przed każdym wynajmem, po to by zapewnić Wam najwyższą sprawność i jakość działania.
<span class="tekst2">W TWOJE RĘCE ODDAMY KLUCZ DO PRZYGODY!</span>
</div>

<div class="baner">
	Sahara?<br>
	Amazonia?<br>
	<span class="male">czy </span><br>Alaska?<br>
	<span class="male">Gdziekolwiek jedziesz<br>zabierz pojazd z</span>
	<img src="./IMG/Rentventure_GORA.png" alt="naglowek" class="naglowek">
</div>

<div class="footer">
<footer>
	<span class="left">&bull;</span> 
	Strona stworzona w pocie czoła przez TB dla Rent-a-Lot. &copy; Tomasz Białkowski, 2017
	<span class="right">&bull;</span>
</footer>
</div>

</body>
</html>