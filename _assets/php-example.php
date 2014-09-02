<?php


	session_start();

	var_dump( $_SESSION );

	$email		=	( isset( $_SESSION[ 'registrationData' ][ 'deel1' ][ 'email'] ) ) ? $_SESSION[ 'registrationData' ][ 'deel1' ][ 'email'] : '';
	$nickname		=	( isset( $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname'] ) ) ? $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname'] : '';

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Php oefening 021 - deel1</title>

    </head>
    <body>
		
		<h1>PHP Excercise 020 - Part 1</h1>

		<h2>Registration form</h2>

		<form action="phpoefening-021-deel2.php" method="POST">
			
			<ul>
				<li>
					<label for="email">e-mail</label>
					<input type="text" id="email" name="email" value="<?= $email ?>" placeholder="Fill in your email" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "email" ) ? 'autofocus' : '' ?>>
				</li>
				<li>
					<label for="nickname">nickname</label>
					<input type="text" id="nickname" name="nickname" value="<?= $nickname ?>" placeholder="Fill in your nickname" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "nickname" ) ? 'autofocus' : '' ?>>
				</li>
			</ul>

			<input type="submit" name="submit" value="Submit">

		</form>

		
    </body>
</html>