<html>
<head>
<title>Szkoła Ponadgimnazjalna</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styl.css">
<?php
$connection = mysql_connect('localhost', 'root', '') or die ('Nie działa!');
mysql_select_db('szkola', $connection);
$zapytanie_1 = mysql_query("SELECT imie, nazwisko from uczen;");
$dane1 = mysql_fetch_array($zapytanie_1);
$zapytanie_2 = mysql_query("SELECT imie, nazwisko FROM uczen WHERE id=2;");
$dane2 = mysql_fetch_array($zapytanie_2);
$zapytanie_4 = mysql_query("SELECT avg(ocena) FROM ocena where uczen_id=2 and przedmiot_id=1;");
$dane4 = mysql_fetch_assoc($zapytanie_4);
mysql_close($connection);
?>
</head>
<body>
<div id="baner">
	<h1> Oceny uczniów: język polski </h1>
</div>
<div id="panel_lewy">
	<h2> Lista uczniów: </h2>
<?php
echo "<ol>";
do {
	echo "<li>" . $dane1['imie'] . " " . $dane1['nazwisko'] . "</li>";
	
} while ($dane1 = mysql_fetch_assoc($zapytanie_1));

echo "</ol>";
?>
</div>
<div id="panel_prawy">
	<h2> Uczeń:
		<?php
			do {
				echo $dane2['imie'] . " " . $dane2['nazwisko'];
			} while ($dane2=mysql_fetch_assoc($zapytanie_2));
		?>
	 </h2>
	 <p>Średnia ocen z języka polskiego:
	 	<?php
	 	echo $dane4['avg(ocena)'];
	 	?>
	 </p>
</div>
<div id="stopka"><h3> Zespół Szkół Ponadgimnazjalnych </h3>
<p> Stronę opracował: 00000000003 </p></div>


</div>
</body>
</html>