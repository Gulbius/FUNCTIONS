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
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////// 1 UZDAVINYS Sukurkite funkciją kuri priimtų du kintamuosius, juos sudaugintų ir atvaizduotų rezultatą naršyklėje.////////////////////////////
kintamieji(2,2);
function kintamieji($a ,$b)
{
 echo ($a*$b);
}
echo "<hr>";
///////////// 2. Uzdavinys Sukurkite funkciją kuri priimtų vieną kintamąjį, vardą. Ir atvaizduotų rezultatą naršyklėje: “labas “ ir tą paduotą vardą. //////////
greeting("Mantas");
function greeting($name)
{
    echo "labas"." ".$name;
}

echo "<hr>";
// 3. Uzdavinys Sukurkite funkciją  kuri priimtų vieną kintamąjį, tekstą. Ir atvaizduotų rezultatą naršyklėje: kiek simbolių yra tame tekste.
kiekis("Lietuva");
function kiekis($str)
{
  echo strlen($str);
}
echo "<hr>";
// 4. Uzdavinys Sukurkite funkciją kuri priimtų 2 kintamuosius tekstus, vardą, pavardę ir atspausdintų inicialus. T.y vardo ir pavardės pirmąsias raides DIDŽIOSIOMIS raidėmis.//
didziosios("ManTaS","GulbiCkaS");
function didziosios($vardas,$pavarde)
{
    $first= strtoupper(substr($vardas, 0, 1));
    $sec = strtoupper(substr($pavarde,0,1));
    echo $first." ".$sec;
}
echo "<hr>";
// 5. Uzdavinys Parašykite funkciją kuri sugeneruotų 3 random skaičius nuo 0 iki 5 ir atvaizduotų naršyklėje vienoje eilutėje atskirtus kableliais. Po paskutinio skaičiaus kablelio neturi būti.
trio(0,5);
function trio($a,$b)
{
    echo "trys random skaiciai ->" .rand($a,$b).",".rand($a,$b).",".rand($a,$b);
}
echo "<hr>";
//6. Uzdavinys Parašykite funkciją kuri priimtų du kintamuosius “nuo” ir “iki”. Funkcija turi sugeneruoti random skaičių tame intervale ir jį GRAŽINTI. Rezultatą atvaizduoti naršyklėje.
$rezas = double(1,21);
function double($a,$b)
{
    return rand($a,$b);
}
echo "random skaicius". " ".$rezas;
echo "<hr>";
// 7. Uzdavinys Parašykite funkciją kuri sugeneruotų 10 p tagų su skaičiais juose nuo 1 iki 10 ir atvaizduotų naršylkėje. Rezultate HTML’e turi matytis 10 p tagų su skaičiais. 
tagai(1,10);
function tagai($a, $b)
{
   for ($i=0; $i <5 ; $i++) { 
    echo "<p>" .rand($a,$b)."</p>";
   }
}
echo "<hr>";
// 1. Uzdavinys Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
tagiukas("DIDELIS");
function tagiukas($arg)
{
    echo "<h1>".$arg."</h1>";
}
echo "<hr>";
// 2. Uzdavinys Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
wtfunction("labukas",6);
function wtfunction($txt,$tag)
{
    echo '<h'.$tag.'>'.$txt. '</h'.$tag.'>';
}
echo "<hr>";
// 4. Uzdavinys Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;
echo sveikieji(12);
function sveikieji($skc)
{   $count=0;
    for ($i=2; $i < $skc ; $i++) { 
        if ($skc % $i ==0) {
            $count++;
         }
    }
    
    return $count;
}
echo "<hr>";
//Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.






?>

</html>