<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
}); 

$france= new Pays("France");
$espagne = new Pays("Espagne");
$angleterre= new Pays ("Angleterre");
$italie = new Pays("italie");

$psg= new Equipe ("PSG" , $france);
$RealMadrid= new Equipe ("Real Madrid",$france );
$Barca = new Equipe ("Fc Barcelone",$espagne);
$Manchester = new Equipe ("Manchester United",$angleterre);
$juventus = new Equipe ("Juventus",$italie);

$mbappe = new Joueur("Killian","Mbappe","01-01-2000",$france);
$messi = new Joueur("Lionel","Messi","01-01-1980",$espagne);

$jouer1 = new Jouer(2017,$mbappe,$psg);
$jouer2 = new Jouer(2021,$mbappe,$Barca);

echo $france->equipes();
echo "<br>";
echo $psg->joueurs();
echo "<br>";
echo $mbappe->equipes();


















?>

</body>
</html>
