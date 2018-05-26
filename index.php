<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="css/main.css"/>
		<title>Password validation</title>
	</head>
	<body>
		<div class="container">
			<form>
				<label for="email">E-mail</label>
				<input type="text" name="email" id="email" required/>

				<label for="password">Password</label>
				<input type="password" name="password" id="password" required/>

				<input type="submit" value="Submit"/>
			</form>
		</div>
		<div id="message">
			<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
			<p id="capital" class="invalid">A <b>capital</b> letter</p>
			<p id="number" class="invalid">A <b>number</b></p>
			<p id="length" class="invalid">Minimun <b>8 characters</b></p>
		</div>
		<script src="js/main.js">
		</script>
	</body>
</html>