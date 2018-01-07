<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<!-- create table regs (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname varchar(30) NOT NULL, lastname VARCHAR(30) NOT NULL, login varchar(30) NOT NULL, password varchar(30), address varchar(300), education varchar(30), interest1 varchar(30), interest2 varchar(30), interest3 varchar(30), interest4 varchar(30), interest5 varchar(30)) 
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
	function set_var($tab, $var)
	{
		$tmp = (isset($tab[$var])) ? $tab[$var] : "";
		return $tmp;
	}

	function sql_execute_query()
	{
		$link = new mysqli("localhost","root","password", "form1");
		$sql = "SELECT firstname, lastname, login, password, email, address, education, interest1, interest2, interest3, interest4, interest5 FROM regs WHERE id=" . $_GET['id'];
		$result = mysqli_query($link, $sql);
		mysqli_close($link);
		echo "<br><br>";
		return $result;
	}

	function display_all()
	{
		$result = sql_execute_query();
		if (mysqli_num_rows($result) == 0) {
			echo "Query returned empty row</br></br>";
			return;
		}
		$row = $result->fetch_assoc();

		$firstname = set_var($row, 'firstname');
		$lastname = set_var($row, 'lastname');
		$login = set_var($row, 'login');
		$password = set_var($row, 'password');
		$email = set_var($row, 'email');
		$address1 = set_var($row, 'address1');
		$address2 = set_var($row, 'address2');
		$address3 = set_var($row, 'address3');
		$address4 = set_var($row, 'address4');
		$education = set_var($row, 'education');
		$interest1 = set_var($row, 'interest1');
		$interest2 = set_var($row, 'interest2');
		$interest3 = set_var($row, 'interest3');
		$interest4 = set_var($row, 'interest4');
		$interest5 = set_var($row, 'interest5');

		echo "<div class=\"field\">Values submitted</div></br>";
		while ($it = each($row)) {
			if ($it['value'] != "") {
				echo "<div class=\"field\">";
				echo "<span class=\"name\">" . $it['key'] . "</span></br>";
				echo "<span class=\"value\">" . $it['value'] . "</span></br>";
				echo "</div>";
			}
		}
	}
	?>

	You are registered. This is data you submitted.</br></br>

	<a href="form1.php">Back to Form1</a>
	</br></br></br>
	<?php display_all(); ?>

</body>
</html>
