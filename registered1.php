<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<!-- create table regs (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname varchar(30) NOT NULL, lastname VARCHAR(30) NOT NULL, login varchar(30) NOT NULL, password varchar(30), email varchar(30), address varchar(300), education varchar(30), interest1 varchar(30), interest2 varchar(30), interest3 varchar(30), interest4 varchar(30), interest5 varchar(30)) 
    -> ;
-->
<html>
<head>
	<style type="text/css">
		p {margin:0 0 0.5em 0;}
		label {float:left; clear:left; width:10em;}
		input {float:left; clear:right;}
		div.field { font-family: Arial, Helvetica, Sans; font-size: 16pt; }
		.name {font-weight: bold; color:blue;}
		</style>
</head>
<body>

	<?PHP
	function set_var($var)
	{
		$tmp = (isset($_GET[$var])) ? test_input($_GET[$var]) : "";
		return $tmp;
	}
	
	function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	function sql_execute_query($sql_query)
	{
		$firstname = set_var('firstname');
		$lastname = set_var('lastname');
		$login = set_var('login');
		$password = set_var('password');
		$email = set_var('email');
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

		$address = "";
		if ($address1 != "")
			$address = $address1;
		if ($address2 != "")
			$address = $address . " " . $address2;
		if ($address3 != "")
			$address = $address . " " . $address3;
		if ($address4 != "")
			$address = $address . " " . $address4;

		$link = new mysqli("localhost","root","password", "form1");
		$sql = "INSERT INTO regs (firstname, lastname, login, password, email, address, education, interest1, interest2, interest3, interest4, interest5) VALUES ('$firstname', '$lastname', '$login', '$password', '$email', '$address', '$education', '$interest1', '$interest2', '$interest3', '$interest4', '$interest5')";
		if (mysqli_query($link, $sql)) {
    			echo "Database insert OK";
		} else {
    			echo "Database insert error: " . $sql . "<br>" . mysqli_error($link);
		}
		$last_id = mysqli_insert_id($link);
		mysqli_close($link);
		echo "<br><br>";
		return $last_id;
	}

	function display_all()
	{
		echo "<div class=\"field\">Values submitted</div></br>";
		while ($it = each($_GET)) {
			echo "<div class=\"field\">";
			echo "<span class=\"name\">" . $it['key'] . "</span></br>";
			echo "<span class=\"value\">" . $it['value'] . "</span></br>";
			echo "</div>";
		}
	}
	?>

	<?PHP $last_id = sql_execute_query(); ?>

	Thank you <?php echo $_GET['firstname']; ?><br>
	You are registered.</br></br>

	<a href="display_all.php?id=<?php echo $last_id; ?> ">View the data you submitted</a></br>
	<a href="form1.php">Back to Form1</a>
	</br></br>
	<!--?php display_all(); ?-->

</body>
</html>
