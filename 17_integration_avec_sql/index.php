<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo PHP</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link href="../static/css/normalize.css" rel="stylesheet" type="text/css" />
    <!--link href="../static/css/font-awesome.css" rel="stylesheet" type="text/css" /-->
    <script src="https://use.fontawesome.com/541031d17a.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <link href="./css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <style type="text/css"></style>
  </head>
  <body>
    <?php 
        session_start();
        //session_destroy();
        //connexion BDD
        $mysqli = mysqli_connect("localhost","root", "", "gucci") or die(
            "Impossible de se connecter : ".mysqli_error()
            //printf("Message d'erreur : %s\n", mysqli_error($mysqli));
        );
        mysqli_query($mysqli, 'SET NAMES UTF8');
    ?>
    <div id="page">
      <header>
        <div class="firstBar">
          <div>            
            <ul>
              <li><a href="#"><img src="./img/english.jpg" alt="english flag"></a></li>
              <li>
                    <?php
                        $hrefAdmin = '#';
                        // génération du nouveau password ou ...
                        if(isset($_POST['initpassword']) && isset($_POST['mail']) && $_POST['mail'] != ''){
                            $md5 = md5(time());
                            $pass = substr($md5, 0, 6); // à partir du premier caractère retourne 6 caractères
                            $message = "Votre nouveau mot de passe est : ".$pass." http://localhost/PHP/17_integration_avec_sql/index.php";
                            //enregistrement dans la BDD du nouveau mot de passe
                            $hashedPass = md5($pass);
                            mysqli_query($mysqli, 'UPDATE `user` SET `password`="'.$hashedPass.'" WHERE `mail`="'.$_POST['mail'].'"');
                            // email du password                          
                            mail($_POST['mail'], 'Votre nouveau mot de passe', $message);
                            //echo "Nouveau password envoyé";
                            header('Location: index.php'); 
                        }else if(isset($_POST['mail']) && $_POST['mail'] !=''){ // si pas d'id user mais une demande de connexion via login = email                      
                            $resultat = mysqli_query($mysqli, 'SELECT * FROM user WHERE `mail`="'.$_POST['mail'].'"');
                            $data = mysqli_fetch_assoc($resultat);
                            if($data['mail'] != $_POST['mail']){ // si email non reconnu
                                $firstname = 'mauvais e-mail';
                            }else{ // sinon si email reconnu on test le password
                                $password = md5($_POST['password']);
                                if($password != $data['password']){
                                    $firstname = 'mauvais password';
                                }else{ // Le pass est bon;
                                    $firstname = $data['firstname'];
                                    if($data['is_admin']){
                                        $hrefAdmin = './admin.php'; // le lien menera vers admin.php
                                    }                                    
                                    $_SESSION['id'] = $data['id']; // Sauvegarde en session de l'id de l'utilisateur
                                }   
                            }
                        }else if(isset($_SESSION['id'])){ // si session avec id de l'user
                            if(isset($_GET['logout'])){ // si demande de déconnexion
                                session_unset();
                                header("Location: index.php");
                            }else{ // sinon on se connecte via l'id du user
                                $resultat = mysqli_query($mysqli, 'SELECT * FROM user WHERE `id`='.$_SESSION['id']);
                                $data = mysqli_fetch_assoc($resultat);
                                $firstname = $data['firstname'];
                                if($data['is_admin']){
                                    $hrefAdmin = './admin.php'; // le lien menera vers admin.php
                                }
                            }
                        }else{ // sinon par default on est pas connecté
                            $firstname = "Non connecté";
                        }
                    ?>
                    <a href="<?= $hrefAdmin ?>">
                        <span>Good Evening,</span>
                        <!--<span> <?php print_r($_SESSION) ?></span>-->
                        <span> <?= $firstname ?></span>
                    </a>
              </li>
              <li><a href="#"><i class="fa fa-comment"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-heart"></i></a></li>
              <li>
                    <?php
                        if(isset($_POST['addToBasketId'])){
                            if(isset($_SESSION['basket'])){ // si session basket existe
                                if(isset($_SESSION['basket'][$_POST['addToBasketId']])){
                                    $_SESSION['basket'][$_POST['addToBasketId']] ++; // qty = 1
                                }else{
                                    $_SESSION['basket'][$_POST['addToBasketId']] = 1; // key == addToBasketId
                                }                            
                            }else{ // si session basket n'existe pas
                                $_SESSION['basket'] = [];
                                $_SESSION['basket'][$_POST['addToBasketId']] = 1; // key == addToBasketId
                            }
                        }
                            //print_r($_SESSION);
                    ?>
                    <a href="basket.php">
                        <i class="fa fa-shopping-basket"></i>
                    </a>
              </li>
              <li>
                <a href="#"><i class="fa fa-lock"></i></a>
                <div class="login">
                    <form method="post" action="#">
                        <div><span>E-mail : </span><input type="text" placeholder="votre@email.xxx" name="mail"></div>
                        <div><span>Password : </span><input type="password" placeholder="password" name="password"></div>
                        <a href="./initPassword.php">Mot de passe oublié</a>
                        <input type="submit" value="login">
                    </form>
                    <a href="?logout">logout</a>
                </div>
              </li>
            </ul>
            <div class="clear"></div>
          </div>
        </div>
        <!--slider-->
                <div class="regular slider">
        <?php
            $resultat = mysqli_query($mysqli, 'SELECT * FROM `slider` ORDER BY `position`,`id` DESC LIMIT 3');
            while($data = mysqli_fetch_assoc($resultat)){
                $img = $data['image_name'];
        ?>
                    <div><img src="./img/<?= $img ?>"></div>
        <?php
            }
        ?>
                </div>
                  <!--/* menu et sous menu */
                //   $leMenu = array(
                //         "Home" => array(
                //               "Shoes",
                //               "Ready to wear",
                //               "Belts",
                //               "Fragrance",
                //               "Hats",
                //               "Sunglasses",
                //               "Ties",
                //               "Wallets",
                //               "Watches",
                //               "Sports",
                //               "Popular items",
                //               "Top selling"
                //         ),
                //         "Kids" => array(
                //               "Shoes",
                //               "Hats",
                //               "Sunglasses"
                //         ),-->
        <div class="menu">     
            <ul>
            <?php 
                $resultat = mysqli_query($mysqli, 'SELECT * FROM `menu` ORDER BY `position` DESC');
                $li = "";
                while($data = mysqli_fetch_assoc($resultat)){ // tant que tu reçois des données tu les affiches
                    $idMenu = $data['id'];
                    $menuName = $data['name'];
                    $li .=  "  
                                <li>".$menuName."
                                    <ul class='submenu'>
                                        <div class='topBar'></div>
                            ";
                    $resultat2 = mysqli_query($mysqli, "SELECT * FROM `submenu` WHERE `id_menu`=".$idMenu." ORDER BY `id_menu`,`id`");
                    $i = 0;

                    while($data2 = mysqli_fetch_assoc($resultat2)){
                        $id_menu = $data2['id_menu'];
                        $subMenuName = $data2['name'];
                        $subMenuNb = mysqli_fetch_assoc(mysqli_query($mysqli, 'SELECT COUNT(*) FROM `submenu`'));
                        $subMenuNb =  $subMenuNb['COUNT(*)'];
                        $li .= "<li>".$subMenuName."</li>";
                    }
                    $li .=  "
                                        <div class='clear'></div>
                                    </ul>
                                </li>
                            ";
                }
                echo $li;
            ?>
          </ul>
        </div>
      </header>
      <div class="middle">
            <div class="featuredBar">
                  <div class="titleBar row">
                        <div class="col-md-9 left">
                              <div class="col-md-3">
                                    <h2>Featured items</h2>
                              </div>
                              <div class="col-md-3">     </div>
                              <div class="col-md-3">
                              </div>
                              <div class="col-md-3">
                                    <span class="view">
                                          <a href="#">
                                                <span class="fa fa-arrow-right"></span>
                                                <span>view all items</span>
                                          </a>
                                    </span>
                              </div>
                        </div>
                        <div class="col-md-3 right">
                              <h2>Top selling brands</h2>
                        </div>
                        <div class="clear"></div>
                  </div>
                  <div class="row">
                        <div class="col-md-9 left">
                            <div class="row picture4">
                            <?php
                            $resultat = mysqli_query($mysqli, 'SELECT * FROM `product` WHERE `featured`>0 ORDER BY `featured` DESC, `id` LIMIT 4');
                            while($data = mysqli_fetch_assoc($resultat)){
                            ?>
                                <div class="col-md-3">
                                    <img src="<?= $data['image'] ?>" alt="img">
                                    <div><a href="#"><?= $data['name'] ?></a></div>
                                </div>
                            <?php
                            }
                            ?>
                            </div>
                        </div>
                        <div class="col-md-3 right">
                              <div>GUCCI</div>
                              <div class="clear"></div>
                              <div>
                                    <a href="#">
                                          <span class="fa fa-arrow-right"></span>
                                          <span>view our brands</span>
                                    </a>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="centerBox">
                  <div class="colLeft">
                        <h2>Popular categories</h2>                          
                           
                        <?php 
                              $arrow = [
                                    "WOMEN" => [
                                          "normal" => "SHOES STARTS FROM",
                                          "price" => "50"
                                    ],
                                    "MEN" => [
                                          "normal" => "DRESS SHOES STARTS FROM",
                                          "price" => "170"
                                    ],
                                    "OTHER" => [
                                          "normal" => "SHOES STARTS FROM",
                                          "price" => "50"
                                    ],
                                    "THING" => [
                                          "normal" => "SHOES STARTS FROM",
                                          "price" => "50"
                                    ]
                              ];
                              foreach($arrow as $strong => $the){
                        ?>
                        <div class="arrow"><a href="#"><strong><?= $strong ?></strong><span> <?= $the["normal"] ?></span><span>$<?= $the["price"] ?></span></a></div> 
                        <?php } ?>

                        <div class="clear"></div>
                        <h2>What's hot</h2>  
                        <div class="store">
                              <div class="left">
                                    <a href="#"><h3>WOMEN STORE</h3></a><strong>GARMENTS & ACCESSORIES</strong>
                              </div>
                              <div class="right">
                                    <div>Starts from</div><div><span>$</span><div>45</div></div>
                              </div>
                        </div>    
                        <div class="store men">
                              <div class="left">
                                    <a href="#"><h3>MEN STORE</h3></a><strong>GARMENTS & ACCESSORIES</strong>
                              </div>
                              <div class="right">
                                    <div>Starts from</div><div><span>$</span><div>50</div></div>
                              </div>
                        </div>    
                        <h2>Promotions</h2>    
                        <div class="promotion1">NO PROMOTION ATM</div>
                        <hr>
                        <div class="promotion2">NO PROMOTION ATM</div>  
                  </div>
                  <div class="colRight">
                        <h2>Top selling items</h2>  
                        <span class="view">
                              <a href="#">
                                    <span class="fa fa-arrow-right"></span>
                                    <span>view all items</span>
                              </a>
                        </span>    
                        <div class="clear"></div>
                        <form>
                              <i class="fa fa-search" aria-hidden="true"></i>
                              <select name="select">
                                    <option value="value1">Valeur 1</option> 
                                    <option value="value2" selected>Valeur 2</option>
                                    <option value="value3">Valeur 3</option>
                              </select>
                              <input type="text" name="choose" value="">
                              <input type="submit" name="search" value="Search">
                        </form>
                        <?php
                            // on affiche le détail d'un produit ou ...
                            if(isset($_GET['productId']) && $_GET['productId'] > 0){

                                $resultat = mysqli_query($mysqli, 'SELECT * FROM `product` WHERE `id`='.$_GET['productId']);
                                $data = mysqli_fetch_assoc($resultat);
                        echo '<div class="productDetail">';
                        ?>
                                <h4><?= $data["name"] ?></h4>
                                <div class="imgBox">                                    
                                    <img src="<?= $data["image"] ?>" alt="img">
                                </div>
                                <div>$<?= $data["price"] ?></div>                         
                                <p><?= $data["description"] ?></p>  
                                <!--<a href="./index.php">Ajouter au panier</a>   -->
                                <form method='post' action='./index.php'>
                                    <input type="hidden" name="addToBasketId" value="<?= $_GET["productId"] ?>">
                                    <input type="submit" value="Ajouter au panier">
                                </form>                    
                                <a href="./index.php">retour à la liste</a>                       

                        <?php
                            }else{ // ... ou on affiche une liste de produit + la pagination
                                echo '<div class="list">';
                                if(isset($_GET['page']) && $_GET['page'] != ''){ // && $_GET['page'] is a number ...
                                    // affichage des produit sur 1 ou plusieurs pages.
                                    // LIMIT 5 -- 5 premiers résultats
                                    // LIMIT 5,10 --remonte les résultats 6 à 15. 5 est l'offset
                                    $limit1 = 9 * ($_GET['page'] - 1);
                                }else{
                                    $limit1 = 0;
                                }
                                $limit2 = 9;
                                $resultat = mysqli_query($mysqli, 'SELECT * FROM `product` ORDER BY `id` LIMIT '.$limit1.', '.$limit2);
                                $li = "";
                                $i = 0;
                                while($data = mysqli_fetch_assoc($resultat)){ 
                                    $id = $data['id'];
                                    $name = $data['name'];
                                    $price = $data['price'];
                                    $description = $data['description'];
                                    $image = $data['image'];
                            ?>
                                <div class='product'>
                                    <div class='imgBox'>
                                        <img src="<?= $image ?>" alt='image'>
                                        <div class='possibility'>
                                                <div>$<?= $price ?></div>
                                                <div class='more'>
                                                    <div><a href='#'><i class='fa fa-cart-plus' aria-hidden='true'></i></a></div>
                                                    <div><a href='#'><i class='fa fa-heart' aria-hidden='true'></i></a></div>
                                                    <div><a href='?productId=<?= $id ?>'>View Details</a></div>
                                                </div>
                                        </div>
                                    </div>
                                    <h4><?= $name ?></h4>
                                    <p><?= $description ?></p>
                                </div>
                            <?php
                                    $i ++;
                                    if($i == 3  || $i == 6 || $i == 9){
                                        echo"<hr>";
                                    }
                                }
                            ?>
                            </div>
                            <?php
                            // pagination
                            $resultat = mysqli_query($mysqli, 'SELECT COUNT(name) AS elementNumber FROM `product`');
                            $data = mysqli_fetch_assoc($resultat);
                            $elementNumber = $data['elementNumber']; // équivaut à $elementNumber = $data['COUNT(name)']; // sans le AS
                            $pageNumber = ceil($elementNumber / 9); //arrondi supérieur
                            ?>
                            <div class="pagination">
                                <div class="left">
                                        <div><a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div>
                                    <?php
                                    for ($i=1, $il=$pageNumber+1; $i < $il; $i++) { 
                                    ?>
                                        <div class="num"><a href="?page=<?= $i ?>"><?= $i ?></a></div>
                                    <?php
                                    }
                                    ?>
                                        <div><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
                                </div>
                                <div class="right"><a href="#">more +</a></div>
                                <div class="clear"></div>
                            </div>
                        <?php
                            }
                        ?>
                  </div>
            </div>
      </div>
      <footer>
            <div class="centerBox">
                  <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Developers</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Copyright</a></li>
                  </ul>
                  <div class="right">
                        <div>Connect with us</div>
                        <div><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                        <div><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                        <div><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></div>
                  </div>
                  <div class="clear"></div>
            </div>
            <div class="lastBar"></div>
      </footer>
    </div>
    <?php mysqli_close($mysqli); ?>

      <script type="text/javascript" src="../static/js/jquery.js"></script>
      <script type="text/javascript"></script>

      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
      <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript">
      $(document).on('ready', function() {
            $(".regular").slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1
            });
      });
      </script>
  </body>
</html>