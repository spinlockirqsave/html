<html>
<head>
	<title>Arrays and functions</title>
	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-2">
</head>
<body>
<?php
//funkcja wyświetlająca wartości dowolnej tablicy jednowymiarowej
function pokaz_wartosci_tablicy($tab) {
	reset($tab);
	while ($biezacy_el = each($tab)) {
		print ("\$tablica[" . $biezacy_klucz = $biezacy_el['key'] ."]=");
		print ($biezaca_wartosc = $biezacy_el['value'] . "<br>");
	}
}

//funkcja zamieniająca przypisująca wartość 0
//do każdego elementu tablicy
function zmien_wartosci_tablicy($tab) {
	reset($tab);
	while(list($klucz, $val)= each($tab)){
		print ("\$key = " . $klucz . ", val = " . $val . "<br>");
		$tab[$klucz] = 0;
	}
	return $tab;
}

$arrTablica[0]="element nr 1";
$arrTablica[1]="element nr 2";
$arrTablica[2]="element nr 3";

pokaz_wartosci_tablicy($arrTablica);
$arrTablica = zmien_wartosci_tablicy($arrTablica);
pokaz_wartosci_tablicy($arrTablica);

?>
</body>
</html>
