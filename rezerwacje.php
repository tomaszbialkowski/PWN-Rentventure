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

<div class="dark">
	<nav class="naw">
  		<a class="button" href="home.php">RentVenture</a> &bull;
  		   <a class="button" href="zarezerwuj.php">ZAREZERWUJ</a> &bull;
  		   <a class="button" href="rezerwacje.php">REZERWACJE</a> &bull;
   		   <a class="button" href="kontakt.php">KONTAKT</a>
	</nav>
</div>

	<table class="wiersz">
		<tr>
			<td>LP</td>
			<td>SAMOCHÓD</td>
			<td>OKRES</td>
			<td>IMIĘ</td>
			<td>NAZWISKO</td>
			<td>TELEFON</td>
			<td>E-MAIL</td>
			<td>UWAGI</td>
		</tr>
	</table>
	<table class="rezerwacje">
			<tr>
			<td>LP</td>
			<td>SAMOCHÓD</td>
			<td>OKRES</td>
			<td>IMIĘ</td>
			<td>NAZWISKO</td>
			<td>TELEFON</td>
			<td>E-MAIL</td>
			<td>UWAGI</td>
		</tr>
		<?php
		$db = mysqli_connect('localhost','root','','domowe');
		mysqli_set_charset($db, 'UTF-8');
						
		    $zapytanie = "SELECT * FROM rezerwacje r INNER JOIN samochody s ON r.Samochod=s.ID INNER JOIN okres_wynajmu o ON r.dni_wynajmu=o.ID";
			$wykonaj = mysqli_query($db, $zapytanie) or die(mysql_error());

				for ($i=1; $i<=mysqli_num_rows($wykonaj); $i++)
				{
				$wiersz = mysqli_fetch_array($wykonaj);
					echo "<tr>"."<td class='pier'>".$wiersz["ID"]."</td>";
					echo "<td class='dwa'>".$wiersz["Samochod"]."</td>";
					echo "<td class='trz'>".$wiersz["okres"]."</td>";
					echo "<td class='czt'>".$wiersz["imie_klienta"]."</td>";
					echo "<td class='pie'>".$wiersz["nazwisko_klienta"]."</td>";
					echo "<td class='sze'>".$wiersz["telefon"]."</td>";
					echo "<td class='sie'>".$wiersz["mail"]."</td>";
					echo "<td class='osi'>".$wiersz["uwagi"]."</td>"."</tr>";
				}
		?>
	</table>
</div>

<?php 
	mysqli_close($db);
?>

<div class="footer">
<footer>
	<span class="left">&bull;</span> 
	Strona stworzona w pocie czoła przez TB dla Rent-a-Lot. 
	<span class="right">&bull;</span>
</footer>
</div>

</body>
</html>