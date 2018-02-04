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
    <script src="akcja.js"></script>
</head>
<body>
<?php 
	$db = mysqli_connect('localhost','root','','domowe');
	mysqli_set_charset($db, 'UTF-8');

	if (isset($_GET['samochod']) && isset($_GET['okreswyn']) && isset($_GET['imie']) && isset($_GET['telefon']) 
		&& isset($_GET['nazwisko']) && isset($_GET['mail']) && isset($_GET['uwagi']))
	{
		$zapytanie = "INSERT INTO rezerwacje(Samochod, dni_wynajmu, imie_klienta, nazwisko_klienta, telefon, mail, uwagi) 
					 VALUES (".$_GET['samochod'].", '".$_GET['okreswyn']."', '".$_GET['imie']."', '".$_GET['nazwisko']."', '".$_GET['telefon']."', '".$_GET['mail']."', '".$_GET['uwagi']."')";
		mysqli_query($db, $zapytanie) or die(mysql_error());

	}
?>
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

	<div class="formularz">
		<form action="zarezerwuj.php" method="get">
			<table>
				<tr>
					<td>	
						<span>Wybierz samochód:</span>
					</td>
					<td>	
						<select name="samochod">
							<?php 
								$zapytanie = "SELECT * FROM samochody";
								$wykonaj = mysqli_query($db, $zapytanie) or die(mysql_error());

								for ($i=1; $i<=mysqli_num_rows($wykonaj); $i++)
								{
									$wiersz = mysqli_fetch_array($wykonaj);
									echo "<option value='".$wiersz['ID']."'>".$wiersz["Samochod"]."</option>";
								}
							?> 
						</select>
					</td>
					<td>
						<span>Okres wynajmu:</span>
					</td>
					<td>	
						<select name="okreswyn">
							<?php 
								$zapytanie = "SELECT * FROM okres_wynajmu";
								$wykonaj = mysqli_query($db, $zapytanie) or die(mysql_error());

								for ($i=1; $i<=mysqli_num_rows($wykonaj); $i++)
								{
									$wiersz = mysqli_fetch_array($wykonaj);
									echo "<option value='".$wiersz['ID']."'>".$wiersz["okres"]."</option>";
								}
							?> 
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<span>Imię:</span>
					</td>
					<td>
						<input type="text" name="imie"> 
					</td>
					<td>
						<span>Telefon:</span>
					</td>
					<td>
						<input type="text" name="telefon"> 
					</td>
				</tr>
				<tr>
					<td>
						<span>Nazwisko:</span>
					</td>
					<td>
						<input type="text" name="nazwisko"> 
					</td>
					<td>
						<span>Email:</span>
					</td>
					<td>
						<input type="text" name="mail"> 
					</td>
				</tr>
				<tr>
					<td>Uwagi:</td>
					<td colspan="3">
						<textarea name="uwagi"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="reset" class="przycisk reset" value="Wyczyść">
					</td>
					<td colspan="2">
						<input type="submit" class="przycisk wyslij" value="Wyślij" onclick="myFunction()">
					</td>
				</tr>
				<!-- próba zrobienia popupu
				<tr>
					<td class="popup" colspan="4" >
						<img src="./IMG/Rentventure.png" alt="logo" class="popuptext" id="myPopup">
					</td>
				</tr>-->	
			</table>
		</form>
<?php 
	mysqli_close($db);
?>
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
	Strona stworzona w pocie czoła przez TB dla Rent-a-Lot. 
	<span class="right">&bull;</span>
</footer>
</div>

</body>
</html>