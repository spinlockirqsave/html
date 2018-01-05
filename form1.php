<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Form 1 task</title>

		<style type="text/css">
			p {margin:0 0 0.5em 0;}
			label {float:left; clear:left; width:10em;}
			input {float:left; clear:right;}
			div#interests,div#education {float:left; width:20em; margin-bottom:1.5em;}
			div#education label {width:10em;}
		</style>

	</head>
	<body>

	<?PHP
	function sql_execute_query()
	{
		//$link = new mysqli("52.25.60.234","user","password", "mysql");
		//$result = mysqli_query($link, "select host,user from user");
		//$row = mysqli_fetch_row($result);
		//echo "Serwer: ".$row[0]."<br>Użytkownik: ".$row[1];
		//phpinfo();
	}
	?>
		<?PHP sql_execute_query(); ?>
		<form action="registered1.php" method="get">
			<fieldset id="daneid">
				<legend>Identification</legend>
				<label for="firstname">First name</label>
				<input type="text" name="firstname" id="firstname" size="20" maxlength="30" />
				<label for="lastname">Last name</label>
				<input type="text" name="lastname" id="lastname" size="20" maxlength="30" />
				<label for="login">Login</label>
				<input type="text" name="login" id="login" size="20" maxlength="30" />
				<label for="password">Password</label>
				<input type="text" name="password" id="password" size="20" maxlength="30" />
			</fieldset>
			<fieldset id="daneaddress">
				<legend>Address</legend>
				<label for="address1">Address 1</label>
				<input type="text" name="address1" id="address1" size="20" maxlength="30" />
				<label for="address2">Address 2</label>
				<input type="text" name="address2" id="address2" size="20" maxlength="30" />
				<label for="address3">Address 3</label>
				<input type="text" name="address3" id="address3" size="20" maxlength="30" />
				<label for="address4">Address 4</label>
				<input type="text" name="address4" id="address4" size="20" maxlength="30" />
			</fieldset>
			<fieldset>
				<legend>Interests</legend>
				<div id="interests">
					<label for="interest1">PHP programming</label>
					<input type="checkbox" name="interest1" value="PHP programming" id="interest1" />
					<label for="interest2">C++</label>
					<input type="checkbox" name="interest2" value="C++" id="interest2" />
					<label for="interest3">Hardware</label>
					<input type="checkbox" name="interest3" value="Hardware" id="interest3" />
					<label for="interest4">Sport</label>
					<input type="checkbox" name="interest4" value="Sport" id="interest4" />
					<label for="interest5">Telecommunications</label>
					<input type="checkbox" name="interest5" value="Telecommunications" id="interest5" />
				</div>
				<div id="education">
					<p>Education</p>
					<label><input type="radio" name="jobcy" value="0"/>brak zgłoszenia</label>
					<label><input type="radio" name="jobcy" value="a"/>angielski</label>
					<label><input type="radio" name="jobcy" value="n"/>niemiecki</label>
					<label><input type="radio" name="jobcy" value="r"/>rosyjski</label>
					<label><input type="radio" name="jobcy" value="f"/>francuski</label>
				</div>
			</fieldset>
			<input type="submit" name="wyslij" value="Wyślij" />
		</form>
	</body>
</html>
