<?php
namespace jeu;
class Dragon extends Personnage implements imageJeuRole
{
    const MESSAGE1 = 'Points de feu restants à ';
    const GAIN_EXP = 300 ;
    private $_ptFeu;

    
    public function getPtFeu()
    {
        return $this->_ptFeu;
    }
    public function setPtFeu($_ptFeu)
    {
        $this->_ptFeu = $_ptFeu;
    }
    
    public function __construct($forceInitiale=10,$_nomPerso,$_localisation,$_ptFeu =5 ,$_ptVie=2000 )
    {

        parent::__construct($forceInitiale,$_nomPerso,$_localisation,$_ptVie );
        $this->_ptFeu = $_ptFeu;
        $this->_PtDeplacement =5;

    }
    
    public function frapper($ennemi)
    {
        $this->_ptFeu -= 1;

        echo (get_class($this)::MESSAGE1 .$this->_nomPerso.' : '.$this->_ptFeu);
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
       // $this->_localisation += $this->_PtDeplacement;
        //echo ($this->_nomPerso." se trouve maintenant à la case : ".$this->_localisation);
        echo("<script> alert(  '$this->_nomPerso se déplace ') </script>") ;
        parent::deplacer();
    }

}

?>