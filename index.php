<?php
	/* SECTION 1 */
	$name_last = $_GET["name_last"];
	$name_first = $_GET["name_first"];
	$notes = $_GET["notes"];
	/* SECTION 2 */
	$a = 5;
	$b = "3.2 apples";
	$c = $a + $b;

	/* SECTION 3 */
echo("
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
	<meta name=\"author\" content=\"Your Name\" />
	<meta name=\"description\" content=\"Boilerplate\" />
    <title>Boilerplate</title>
    <script src=\"./js/main.js\" defer></script>
	<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
	<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
	<link href=\"https://fonts.googleapis.com/css2?family=Roboto&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"./css/reset.css\">
    <link rel=\"stylesheet\" href=\"./css/main.css\">
</head>
<body>
    <main>
		<form action=\"./bork.php\" method=\"get\">
			<fieldset>
				<label for=\"name_last\">Last Name:</label>
				<input type=\"text\" name=\"name_last\" id=\"name_last\" value=\"$name_last\" placeholder=\"Last Name\">
			</fieldset>

			<fieldset>
				<label for=\"name_first\">First Name:</label>
				<input type=\"text\" name=\"name_first\" id=\"name_first\" value=\"$name_first\" placeholder=\"First Name\">
			</fieldset>

			<fieldset>
				<label for=\"notes\">Notes:</label>
				<textarea cols=\"30\" rows=\"5\" name=\"notes\" id=\"notes\" placeholder=\"Notes\">$notes</textarea>
			</fieldset>

			<fieldset>
				<input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Update\">
			</fieldset>
		</form>
	</main>  
</body>
</html>
")
?>