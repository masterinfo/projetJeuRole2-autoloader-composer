<style>
img{
    heigth:350px;
    width: 175px;
}

</style>
<?php

require "vendor/autoload.php";

 use jeu\Dragon;
 use jeu\mage;


$magicien1 = new Mage(150, " merlin", 5,4 ,1000 );
//$magicien1->afficheImage();
//var_dump($magicien1);
 $dragon1= new Dragon(500,"smaug",820, 10);
//$dragon1->afficheImage();
//var_dump($dragon1);
$magicien1->deplacer();echo'<br>';


//$magicien2 = new Personnage(120,"toto",5,50);

$magicien1->frapper($dragon1);
echo'<br>**********************************************************</br>';
$dragon1->deplacer();echo'<br>';


//$magicien2 = new Personnage(120,"toto",5,50);

$dragon1->frapper($magicien1);
