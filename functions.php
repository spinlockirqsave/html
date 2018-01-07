<html>
<head>
<title>Struktury sterujące</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<style type="text/css">
h4 {text-decoration: underline;}
div.przyklad {border-bottom:1px solid #333;}
</style>
</head>
<body>
<?php
//deklaracja zmiennej globalnej
global $iLiczba;
$iLiczba =1;
//deklaracja funkcji
function iSilnia($iLiczba) {
$iTemp=1;
//przykład zastosowania pętli for
for ($i = 1; $i <= $iLiczba; $i++) {
$iTemp = $iTemp * $i;
}
//zwracanie wartości
return $iTemp;
}
function jakiToKwartal($miesiac) {
$dtTemp = $miesiac;
//przykład zastosowania instrukcji if
if ($dtTemp >= 1 && $dtTemp < 4) {
$strTemp = "pierwszy kwartał";
} elseif ($dtTemp >= 4 && $dtTemp < 7) {
$strTemp = "drugi kwartał";
} elseif ($dtTemp >= 7 && $dtTemp < 10) {
$strTemp = "trzeci kwartał";
} elseif ($dtTemp >= 10 && dtTemp < 13) {
$strTemp = "czwarty kwartał";
}
//zwracanie wartości
return $strTemp;
}
function funkcjeMatematyczne($iLiczba) {
print("<p>Przykład użycia wbudowanych funkcji matematycznych PHP:</p>");
print("<ul>");
$iTemp = -2;
print("<li> Funkcja <strong>abs (liczba)</strong>. Wartość bezwzględną liczby <em>".$iTemp."</em>
wynosi: <em>".abs($iTemp)."</em>. </li>");
print("<li> Funkcja <strong>atn (liczba)</strong>. Arcus tangens (arctg) z liczby <em>".$iLiczba."</em>
wynosi: <em>".atan($iLiczba)."</em>. </li>");
print("<li> Funkcja <strong>cos (liczba)</strong>. Cosinus (cos) z liczby <em>".$iLiczba."</em> wynosi:
<em>".cos($iLiczba)."</em>. </li>");
print("<li> Funkcja <strong>exp (liczba)</strong>. Wartość liczby naturalnej \"e\" podniesionej do
potęgi <em>".$iLiczba."</em> wynosi: <em>".exp($iLiczba)."</em>. </li>");
print("<li> Funkcja <strong>pow(liczba, wykładnik)</strong>. Wartość liczby \"2\" podniesionej do potęgi
<em>".$iLiczba."</em> wynosi: <em>".pow(2, $iLiczba)."</em>. </li>");
$iTemp = -3.500;
print("<li> Funkcja<strong> floor (liczba)</strong>. Część całkowita liczby <em>".$iTemp."</em> wynosi:
<em>".floor($iTemp)."</em>. </li>");
print("<li> Funkcja <strong>ceil (liczba)</strong>. Część całkowita liczby <em>".$iTemp."</em> wynosi:
<em>".ceil ($iTemp)."</em>. </li>");
print("<br>Różnica pomiędzy funkcjami <em>floor()</em> i <em>ceil()</em> polega na sposobie obsługi
liczb ujemnych. Funkcja <em>floor()</em>, w przeciwieństwie do <em>ceil()</em>, zwraca pierwszą liczbę
całkowitą mniejszą lub równą argumentowi wywołania.");
$iTemp = 15;
print("<li> Funkcja <strong>DecHex(liczba)</strong>. Wartość szesnastkowa liczby dziesietnej
<em>".$iTemp."</em> wynosi: <em>".DecHex($iTemp)."</em>. </li>");
$iTemp =exp(1);
print("<li> Funkcja <strong>log (liczba)</strong>. Logarytm naturalny z liczby <em>".$iTemp."</em>
wynosi: <em>".log($iTemp)."</em>.</li>");
$iTemp = 15;
print("<li> Funkcja <strong>DecOct (liczba)</strong>. Wartość ósemkowa "."liczby dziesietnej
<em>".$iTemp."</em> wynosi: <em>".DecOct($iTemp)."</em>. </li>");
$dolna_granica = 0;
$gorna_granica = 2;
$iTemp = $dolna_granica + $gorna_granica*(mt_rand()/mt_getrandmax());
print("<li> Funkcja <strong>mt_rand()</strong>. Liczba losowa z przedziału
[".$dolna_granica.";".$gorna_granica."] to: <em>".$iTemp."</em>. </li>");
print("<br>Inne funkcje związane z generowaniem liczb pseudolosowych to: <em>rand()</em>, <em>srand()
</em>,<em>mt_srand()</em>, <em>getrandmax()</em>, <em>mt_getrandmax()</em>");
$iTemp = 3.5;
print("<li> Funkcja <strong>round (liczba)</strong>. Zaokraglenie liczby <em>".$iTemp."</em> wynosi:
<em>".round ($iTemp)."</em>.</li>");
$iTemp = -2;
print("<li> Funkcja <strong>sin (liczba)</strong>. Sinus (sin) z liczby <em>".$iLiczba."</em> to:
<em>".sin ($iLiczba)."</em>.</li>");
$iTemp = 4;
print("<li> Funkcja <strong>sqrt(liczba)</strong>. Pierwiastek z liczby <em>".$iTemp."</em> wynosi:
<em>".sqrt ($iTemp)."</em>.</li>");
print("<li> Funkcja <strong>tan (liczba)</strong>. Tangens(tan) z liczby <em>".$iLiczba."</em> to:
<em>".tan($iLiczba)."</em>.</li>");
print("</ul>");
}
function funkcjeZnakowe() {
print("<p>Przykład użycia wbudowanych funkcji PHP "."operujących na ciągach: </p>");
print("<ul>");
$strTemp = " Ala ma kota ";
print("<li> Funkcja <strong>strtoupper (łańcuch)</strong>. Zamiana łańcucha znakowego \"<em>".$strTemp."
</em>\" na wielkie litery: \"<em>".strtoupper($strTemp)."</em>\".</li>");
print("<li> Funkcja <strong>strtolower (łańcuch)</strong>. Zamiana łańcucha znakowego \"<em>".$strTemp."
</em>\" na małe litery: \"<em>".strtolower($strTemp)."</em>\".</li>");
print("<li> Funkcja <strong>lrim (łańcuch)</strong>. Usunięcie wszystkich odstępów po lewej stronie
łańcucha \"<em>".$strTemp."</em>\" przedstawia się następująco: \"<em>".ltrim($strTemp)."</em>\".
</li>");
print("<li> Funkcja <strong>rtrim (łańcuch)</strong>. Usunięcie wszystkich odstępów z prawej strony
łańcucha \"<em>".$strTemp."</em>\" przedstawia się następująco:\"<em>".rtrim($strTemp)."</em>\".</li>");
print("<li> Funkcja <strong>trim (łańcuch)</strong>. Usunięcie wszystkich odstępów z obu stron łańcucha
\"<em>".$strTemp."</em>\" przedstawia się następująco:\"<em>".trim($strTemp)."</em>\".</li>");
print("<li> Funkcja <strong>strlen (łańcuch)</strong>. Długość łańcuha \"<em>".$strTemp."</em>\" wynosi:
<em>".strlen($strTemp)."</em>.</li>");
print("<li> Funkcja <strong>strrev (łańcuch)</strong>. Łańcuch odwrócony w stosunku do
\"<em>".$strTemp."</em>\" ma postać: \"<em>".strrev($strTemp)."</em>\".</li>");
print("<li> Funkcja <strong>strcmp (łańcuch1, łańcuch2)</strong>. Funkcja zwraca 0, jeżeli ciągi są
takie same. Duże i małe litery są rozróżniane.</li>");
print("<li> Funkcja <strong>strcasecmp (łańcuch1,łańcuch2)</strong>. Funkcja zwraca 0, jeżeli ciągi są
takie same. Duże i małe litery nie są rozróżniane.</li>");
print("</ul>");
}
//Część główna programu
?>
<br>
<h3>Ilustracja sposobu używania funkcji sterujących z poziomu strony PHP.</h3>
<div class="przyklad">
<h4>Przykład nr 1 </h4>
<?php
//wywołanie procedury(liczba)
funkcjeMatematyczne($iLiczba);
?>
</div>
<div class="przyklad">
<h4 style="text-decoration: underline">Przykład nr 2</h4>
<?php
//wywołanie procedury(liczba)
funkcjeZnakowe ();
?>
</div>
<div class="przyklad">
<h4>Przykład nr 3</h4>
<?php
//wywołanie funkcji iSilnia (liczba)
$iTemp = iSilnia(4);
print("<p>Wartość silni z liczby <em>4</em> wynosi: <em>".$iTemp."</em>.</p>");
?>
</div>
<div class="przyklad">
<h4>Przykład nr 4</h4>
<?php
print("Dzisiejsza data to: ".date("d-m-Y").". Jest to <em>".jakiToKwartal(date("m"))."</em>.</p>");
?>
</div>
</body>
</html>

