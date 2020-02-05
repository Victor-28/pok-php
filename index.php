<?php
$input = $_GET[ "nameofthePoke"];
$content = file_get_contents('https://pokeapi.co/api/v2/pokemon/'. $input);

$data = json_decode($content,true);
echo $data["name"];
?>

// add in input and when i type a name it search
// by using .$input







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
