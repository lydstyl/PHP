<?php 
    class Voiture{
        var $roueVD;
        var $roueVG;
        var $roueRD;
        var $roueRG;
        function __construct($ma,$pr,$ta){
            $this->roueVD = new Roue($ma,$pr,$ta);
            $this->roueVG = new Roue($ma,$pr,$ta);
            $this->roueVD = new Roue($ma,$pr,$ta);
            $this->roueVG = new Roue($ma,$pr,$ta);
            echo "Nouvelle voiture crée</br>";
            //echo this->roueVG->marque;
        }
        function changer_roues_avant($ma,$pr,$ta){
            $this->roueVD = new Roue($ma,$pr,$ta);
            $this->roueVG = new Roue($ma,$pr,$ta);
            echo "Roues avants changées";
        }
        function changer_roues_arriere($ma,$pr,$ta){
            $this->roueRD = new Roue($ma,$pr,$ta);
            $this->roueRG = new Roue($ma,$pr,$ta);
            echo "Roues arrières changées";
        }
        function afficher_detail_roues(){
            echo "";
        }
    }
?>