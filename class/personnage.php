<?php namespace jeu;
        abstract class Personnage  // je ne peux pas intancier
        {
            
            //Attributs ou propriétés de la classe
            protected $_nomPerso;
            protected $_force;
            protected $_localisation =0;
            protected $_experience;
            protected $_degats = 0;
            protected $_pointVie ;
            protected $_nomImage;
            protected $_PtDeplacement ;




            static $_texteAdire = 'Je suis un personnage de jeu de role !';
            static $_compteur = 0;

            const FORCE_PETITE = 20;
            const FORCE_MOYENNE = 50;
            const FORCE_GRANDE = 80;
            
            //Getters et setters
            public function getPtDeplacement()
            {
                return $this->_PtDeplacement;
            }

            public function setPtDeplacement($PtDeplacement)
            {
                $this->_PtDeplacement = $PtDeplacement;
            }
            public function getForce()
            {
                return $this->_force;
            }
            public function getLocalisation()
            {
                return $this->_localisation;
            }
            public function getExperience()
            {
                return $this->_experience;
            }
            public function getDegats()
        {
            return $this->_degats;
        }
            //Set
            public function setForce($_force)
            {
                $this->_force = $_force;
            }
            public function setLocalisation($_localisation)
            {
                $this->_localisation = $_localisation;
            }
            public function setExperience($_experience)
            {
                $this->_experience = $_experience;
            }
            public function setDegats($_degats)
            {
                $this->_degats = $_degats;
            }
            
            //Constructeur de la classe Personnage
            public function __construct($forceInitiale,$_nomPerso,$_localisation, $_ptVie )
            {
                $this->_force = $forceInitiale;
                $this->_nomPerso = $_nomPerso;
                $this->_localisation = $_localisation;
                $this->_pointVie =  $_ptVie ;
            }
            
            //Méthodes de la classe Personnage
            public function gagnerExperience($valexp)
            {
                $this->_experience = $valexp;
            }
            public function augmenteDegats($valdegat)
            {
                $this->_degats = $valdegat; 
            }
            public function parle($message)
            {
                echo 'Je parle : '.$message.'<br/>';
            }
            public function frapper($ennemi){

                $ennemi->augmenteDegats( $this->_force);// a modifier en diminue point devie


                $this->_experience += get_class($ennemi)::GAIN_EXP;
                echo ($this->_nomPerso." vient d'attaquer ".$ennemi->_nomPerso." lui infligeant '$this->_force' points de dégats.<br/>");
                $ennemi->_pointVie = $ennemi->_pointVie - $this->_force;
                echo("Il reste à ".$ennemi->_nomPerso." ".$ennemi->_pointVie." points de vie." );
                echo('<br/>');
                $this->afficheImage();
                $ennemi->afficheImage();
            }


            //Methodes static de la classe Personnage
            public static function parler()
            {
                echo 'Je suis un personnage <br/>';
            }

            abstract public function rechargerVie();

              public function deplacer()
            { $this->_localisation += $this->_PtDeplacement;
              echo ($this->_nomPerso." se trouve maintenant à la case : ".$this->_localisation);
            }


            public function afficheImage()
            {

                $str=str_replace("jeu\\","",get_class($this));
                echo $str;
                echo ("<img src='./class/img/$str.png'>");

               // $str1=$this->_nomPerso;
               // echo ("<img src='./class/img/$str1.png'>");
            }
            
        }
        ?>
 