<?php
$input = $_GET[ "nameofthePoke"];
$content = file_get_contents('https://pokeapi.co/api/v2/pokemon/'. $input);

$data = json_decode($content,true);
$pokpix= $data['sprites']['front_default'];
echo "<img src='{$pokpix}'";




//.input in making the input box to work, type any pokemon family
// to display the image i declare a variable $pokipix---['sprite']----

?>








<!<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<form method="get">
    <p>Name:<br></p>
<input type="text" name="nameofthePoke" value="">
<br><br>
<input type="submit" value="Submit">
</form>

</body>
</html>
