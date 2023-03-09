<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
 .rnd{
    font-style: italic;
    font-size: 20px;
    color: red;
 }   
</style>
<body>


</body>
<?php 
//// funkcija kuri priima bet nieko negrazina tik atvaizduoja narsykleje/////////////////////////////
PrintRndNum();
function PrintRndNum()
{
    echo "<h1>".rand()."</h1>";
}
/////////////////////// vietoj echo ji grazina "return" reiksme ir atidirbus returnina random skaiciu i $rnd////
$rnd = returnRndNum();
function returnRndNum()
{
    return "<h1>".rand()."</h1>";
}
echo '<div class="rnd">'.$rnd.'</div>';
////////////////// funkcija priima du skaicius ir grazina rezultata//////
$result = Multiply2Ints(4,14);
function Multiply2Ints($a, $b)
{
   return $a * $b;
}
echo "<h2>". $result."</h2>";
////////////////////////// priima du skaicius ir ispausdina narsykleje atsakyma/////
printMultiply2Ints(2,3);
function printMultiply2Ints($a, $b)
{
    echo "<h3>". ($a*$b)."</h3>";
}
//////////////////// funkcija kuri  priima skaiciu masyva ir sudaugina juos///////////////////////////
function Multiply($nums)
{
   $result = 1;
   for ($i=0; $i <count($nums) ; $i++) { 
   $result *= $nums[$i];
   }
   return $result;
}
echo "<h4>".Multiply([5,12,6,18])."</h4>";



?>

</html>