<?php /* Create a function that calculates the area and volume of a box.

Formulas:
area = width x height
volume = width x height x depth

Pass three different numbers as arguments and get calculated results using the return statement.

You should get the following results:

The area of the box is: 14
The volume of the box is: 70

*/

function calculate($width, $height, $depth) {

    $area = $width * $height;
    $volume = $width * $height * $depth;

    return "The area of the box is ".$area."<br>".
    "The volume of the box is ".$volume;
}

$returnOutput = calculate(5,7,3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
echo "<pre>".$returnOutput."</pre>";
?>

</body>
</html>