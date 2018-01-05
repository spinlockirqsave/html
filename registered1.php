<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<!-- create table regs (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname varchar(30) NOT NULL, lastname VARCHAR(30) NOT NULL, login varchar(30) NOT NULL, password varchar(30), address varchar(300), education varchar(30), interest1 varchar(30), interest2 varchar(30), interest3 varchar(30), interest4 varchar(30), interest5 varchar(30)) 
    -> ;
-->
<html>
<body>

	<?PHP
	function set_var($var)
	{
		$tmp = (isset($_GET[$var])) ? $_GET[$var] : "";
		return $tmp;
	}

	function sql_execute_query($sql_query)
	{
		$firstname = set_var('firstname');
		$lastname = set_var('lastname');
		$login = set_var('login');
		$password = set_var('password');
		$address1 = set_var('address1');
		$address2 = set_var('address2');
		$address3 = set_var('address3');
		$address4 = set_var('address4');
		$education = set_var('education');
		$interest1 = set_var('interest1');
		$interest2 = set_var('interest2');
		$interest3 = set_var('interest3');
		$interest4 = set_var('interest4');
		$interest5 = set_var('interest5');

		$address = $address1 ." ". $address2 ." ". $address3 ." ". $address4;

		$link = new mysqli("52.25.60.234","user","password", "form1");
		$sql = "INSERT INTO regs (firstname, lastname, login, password, address, education, interest1, interest2, interest3, interest4, interest5) VALUES ('$firstname', '$lastname', '$login', '$password', '$address', '$education', '$interest1', '$interest2', '$interest3', '$interest4', '$interest5')";
		$result = mysqli_query($link, "select host,user from user");
		if (mysqli_query($link, $sql)) {
    			echo "Database insert OK";
		} else {
    			echo "Database insert error: " . $sql . "<br>" . mysqli_error($link);
		}
		echo "<br><br>";
	}
	?>
		<?PHP sql_execute_query(); ?>
Thank you <?php echo $_GET["name"]; ?><br>
You are registered.
</br>
<a href="form1.php">Back</a>

</body>
</html>
