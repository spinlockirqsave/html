<html>
<head>
<title>Stałe i zmienne</title>
<meta http-equiv="Content-Type"
content="text/html;charset=iso-8859-2">
</head>
<body>
<?php
$iLiczba = 1;
$strTekst = "Łańcuch tekstowy";
//kolejne argumenty wywołania funkcji mktime() to:
//int godzina, int minuta, int sekunda, int miesiąc, int dzień, int rok
$dtData = date("d-m-Y", mktime(0,0,0,01,31, 2002));
//daty w formacie:
//dzień miesiąca(liczbowo): "d",miesiąc(liczbowo):"m",rok(liczbowo): "Y".
$dtDzis= date("d-m-Y", time());
$iCyfra = 3.2 - 1;
$arrTablica[0]="element nr 1";
$arrTablica[1]="element nr 2";
print("Witaj. Dzisiaj jest " . $dtDzis .". <p> Wyświetlane są następujące informacje:".$iCyfra);
?>
<ol>
<li>Wartość zmiennej, która zawiera datę:
<b><?php print $dtData; ?></b></li>
<li>Wartość zmiennej, która zawiera tekst:
<b><?php print $strTekst; ?></b></li>
<?php print "<li>Znak podwójnego cudzysłowu:<b>\"</b></li>"; ?>
<li>Tablica posiada <b><?php print sizeof ($arrTablica);?></b> elementy, którym przypisane są wartości:
<ul>
<li>wartość nr 1: <b><?php print $arrTablica[0]; ?></b></li>
<li>wartość nr 2: <b><?php print $arrTablica[1]; ?></b></li>
</ul> </li>
</ol>
<?php
$zmienna = 1;
($zmienna == 1) ? $komunikat = "Zmienna <i>\$zmienna</i> ma wartość równą 1" : $komunikat = "Zmienna
<i>\$zmienna</i> nie ma wartości równej 1";
echo "$komunikat\n";
echo "</br>";

$arrTab[0] = "1";
$arrTab[1] = "2";
$i=0;

while ($i < count($arrTab)) {
	echo("arr[$i] = ". $arrTab[$i] ."</br>");
	$i++;
}

function fun () {
	static $licz = 0;
	$licz += 1;
	print ("Funkcja fun() jest wywoływana " . $licz . " raz.<br>");
}

for ($i=0; $i<5; $i++) {
	fun();
}

?>
</body>
</html>
