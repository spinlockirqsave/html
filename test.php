<?PHP
$link = new mysqli("52.25.60.234","root","password", "mysql");
$result = mysqli_query($link, "select host,user from user");
$row = mysqli_fetch_row($result);
echo "Serwer: ".$row[0]."<br>Użytkownik: ".$row[1];
//phpinfo();
?>
