<?php


$content = file_get_contents('https://pokeapi.co/api/v2/pokemon/eevee');
$data = json_decode($content,true);
echo $data["name"]

?>



<!<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
</body>
</html>
