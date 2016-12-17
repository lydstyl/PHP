<div>
    <!--
        <?php echo "coco" ?>
        <?= "Hello";?> 
    -->
        <?php
            /*     
            # Variables      
            $text = "mon texte"; # déclaration variable
            $nombre = 1.235;
            $tab = Array();
            $tab[0] = "text1";
            $tab[1] = "text2";

            print_r($tab);

            $tab = Array();
            $tab[0] = "text1";
            $tab[1] = "text2";
    
            $tab = Array("textA", "textB"); #autre façon
            print_r($tab); # Affiche le tableau mit en forme pour débuger le code

            echo("Mon prenom est $prenom"); # le double quote anaylyse les variables c'est donc plus long
            echo('Mon prenom est $prenom'); # ce n'est pas le même du simple quote qui est plus rapide
            $prenom = 'Gabriel';

            $date = date("Y-m-d");
            $date = date("d-m-Y H:i:s");
            # Y année en 4 chiffres, y en 2 chiffres, m 2 chiffres M en 3 lettres, de 0 à 31 D en 3 lettres, h 0 à 12 H 0 à 23, a am/pm
            $date = date('d/m/Y');
            echo('Bonjour nous somme le '.$date.' aujourd\'hui');
            echo'Bonjour nous somme le ',$date,' aujourd\'hui'; # plusieurs parametre de echo ne pas mettre de parenthèse pour echo
            echo('Bonjour nous somme le ',$date,' aujourd\'hui');
            $date = date('d/m/Y');
            $date .=" Aujourd'hui";
            echo $date;
            #$date =. "ne marche pas";
            
            # Structure de controle
            if/else/elseif/switch
            for/while/dowhile
            
            # Variable serveur
            // en utilisant http://localhost/PHP/01/?text=OUI
            print_r($_GET);
            echo $_GET['text'];
            
            if(isset($_GET["text"])){ # Si la variable éxiste
                echo $_GET["text"]." affiche1"; # On l'Affiche
                # ! c'est la négation 1 --> 0 alors que l'inverse de 1 est -1
            }
            if(!empty($_GET["text"])){ # Si la variable éxiste
                echo $_GET["text"]." affiche2"; # On l'Affiche
                # ! c'est la négation 1 --> 0 alors que l'inverse de 1 est -1
            }
            */

        ?>
        <?php if(true){ ?>
            <form>
                mon form
            </form>
        <?php }else{ ?>
            <div>
                mon div
            </div>
        <?php } ?>
        
        <?php 
            if(true){ 
            
        ?>
</div>