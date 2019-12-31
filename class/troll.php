<?php
namespace jeu;
class Troll extends Personnage implements imageJeuRole
{
    private $_ptZerk;
    
    public function getPtZerk()
    {
        return $this->_ptZerk;
    }
    public function setPtZerk($_ptZerk)
    {
        $this->_ptZerk = $_ptZerk;
    }
    
    public function __construct($forceInitiale,$_nomPerso,$_localisation,$_ptZerk)
    {
        $this->_ptZerk = $_ptZerk;
        parent::__construct($forceInitiale,$_nomPerso,$_localisation);
    }
    
    public function frapper($ennemi)
    {
        $this->_ptZerk -= 1;
        parent::frapper($ennemi);
         echo ('Points de zerk restants à '.$this->_nomPerso.' : '.$this->_ptZerk);
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
        echo('<img src="./class/img/troll.png" height="100" width="150">');
        echo("<br/>");
    }
}

?>