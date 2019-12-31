<?php
namespace jeu;
class Archer extends Personnage implements imageJeuRole
{
    private $_nbFleches;
    
    public function getNbFleches()
    {
        return $this->_nbFleches;
    }
    public function setNbFleches($_nbFleches)
    {
        $this->_nbFleches = $_nbFleches;
    }
    
    public function __construct($forceInitiale,$_nomPerso,$_localisation,$_nbFleches)
    {
        $this->_nbFleches = $_nbFleches;
        parent::__construct($forceInitiale,$_nomPerso,$_localisation);
    }
    
    public function frapper($ennemi)
    {
        $this->_nbFleches -= 1;
        parent::frapper($ennemi);
        echo ('Nombre de fleches restantes à '.$this->_nomPerso.' : '.$this->_nbFleches);
        echo("<br/>");
    }
    
    public function rechargerVie()
    {
        $_pointVie = 100;
        echo ("Les points de vie de ".$this->_nomPerso." sont rechargés à 100");
    }
    
    public function deplacer()
    {
        $this->_localisation += 1;
        echo ($this->_nomPerso." se trouve maintenant à la case : ".$this->_localisation);
    }
    public function afficheImage()
    {
        echo("<img src='./class/img/archer.png' heigth='300' width='150'>");
        echo("<br/>");
    }
}

?>