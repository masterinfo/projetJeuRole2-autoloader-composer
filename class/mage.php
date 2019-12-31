<?php
namespace jeu;
 
class Mage extends Personnage implements imageJeuRole
{
    private $_ptMagie;
    const GAIN_EXP = 100 ;
    const MESSAGE1 = 'Points de magie restants à ';
    public function getPtMagie()
    {
        return $this->_ptMagie;
    }
    public function setPtMagie($_ptMagie)
    {
        $this->_ptMagie = $_ptMagie;
    }
    
    public function __construct($forceInitiale=1,$_nomPerso,$_localisation,$_ptMagie = 2,$_ptVie=500  )
    {
        parent::__construct($forceInitiale,$_nomPerso,$_localisation,$_ptVie );
        $this->_ptMagie = $_ptMagie;
        $this->_PtDeplacement =1;

    }

    public function frapper($ennemi)
    {
        $this->_ptMagie -= 1;

        echo (get_class($this)::MESSAGE1.$this->_nomPerso.' : '.$this->_ptMagie);
        echo("<br/>");

        parent::frapper($ennemi);

    }
    
    public function rechargerVie()
    {
        $_pointVie = 100;
        echo ("Les points de vie de ".$this->_nomPerso." sont rechargés à 100");
    }
    
    public function deplacer()
    {

         echo("<script> alert(  '$this->_nomPerso se déplace ') </script>") ;

        parent::deplacer();
    }
    




}

?>