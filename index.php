<?php
$input = $_GET[ "nameofthePoke"];
$content = file_get_contents('https://pokeapi.co/api/v2/pokemon/'. $input);

$data = json_decode($content,true);
$pokpix= $data['sprites']['front_default'];
echo "<img src='{$pokpix}'";

//$pokev = $data['moves'][1]['move']['name'];
//var_dump($pokev);


for ($x  = 0; $x <= 4; $x++) {
    echo "The move is: " . $data['moves'][$x]['move']['name'] ."<br>";
}


/*$randomMoves = [];

$lenghtARR = data ['moves'].lenght -1;
for (let i=0; i<data['moves'].lenght; i++){
    random.push(data['moves'][randomNumber(lenghtARR)]['move']['name']);
}
       $ filteredMoves = randomMoves.filter((item, index) => {
                return randomMoves.indexOf(item) === index;
            });
            for (let j = 1; j < 5; j++) {
                $content = get_file_content
            //document.getElementById("move" + j + "").innerHTML = filteredMoves[j];
            }

        })
});*/

//.input in making the input box to work, type any pokemon family
// to display the image i declare a variable $pokipix---['sprite']----
//var-pokev for the moves
// pok movement in loop 

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
