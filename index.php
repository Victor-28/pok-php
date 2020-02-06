<?php
$input = $_GET[ "nameofthePoke"];
$content = file_get_contents('https://pokeapi.co/api/v2/pokemon/'. $input);

$data = json_decode($content,true);
$pokpix= $data['sprites']['front_default'];


//$pokev = $data['moves'][1]['move']['name'];
//var_dump($pokev);



$input = $_GET[ "nameofthePoke"];
$content1 = file_get_contents('https://pokeapi.co/api/v2/pokemon-species/'.$input);
$data1 = json_decode($content1, true);

$pokVic= $data1['evolves_from_species']['name'];
$content = file_get_contents('https://pokeapi.co/api/v2/pokemon/'. $pokVic);
$data2 = json_decode($content,true);
$pokbaby= $data2['sprites']['front_default'];

//.input in making the input box to work, type any pokemon family
// to display the image i declare a variable $pokipix---['sprite']----
//var-pokev for the moves
// pok movement in loop
// evolution d api with /species and makinga variable $pokbaby

?>


















<!<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Pokedex</title>
    <link href="assets/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<form method="get">
    <p>Name:<br></p>
<input type="text" name="nameofthePoke" value="">
<br><br>
<input type="submit" value="Submit">
</form>
<img src="<?php echo $pokpix ?>">
     <p> <?php  for ($x  = 0; $x < 4; $x++) {
     echo "The move is: " . $data['moves'][$x]['move']['name'] ."<br>";
}
                                ?>           </p>
<P>    baby: <?php echo $pokVic ?> </P>
<img src = "<?php echo $pokbaby?>"


</body>
</html>
