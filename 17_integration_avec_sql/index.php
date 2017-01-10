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
    <div id="page">
      <header>
        <div class="firstBar">
          <div>            
            <ul>
              <li><a href="#"><img src="./img/english.jpg" alt="english flag"></a></li>
              <li><a href="#"><span>Good Evening,</span><span> versesdesign</span></a></li>
              <li><a href="#"><i class="fa fa-comment"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-heart"></i></a></li>
              <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>
              <li><a href="#"><i class="fa fa-lock"></i></a></li>
            </ul>
            <div class="clear"></div>
          </div>
        </div>
        <div class="regular slider">
          <div><img src="./img/bigImage.jpg"></div>
          <div><img src="./img/bigImage.jpg"></div>
        </div>
                  <!--/* génération du menu et sous menu */
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


                $mysqli = mysqli_connect("localhost","root", "", "gucci") or die(
                    "Impossible de se connecter : ".mysqli_error()
                    //printf("Message d'erreur : %s\n", mysqli_error($mysqli));
                );
                mysqli_query($mysqli, 'SET NAMES UTF8');

                $resultat = mysqli_query($mysqli, 'SELECT * FROM `menu` ORDER BY `id`');
                $li = "";
                while($data = mysqli_fetch_assoc($resultat)){ // tant que tu reçois des données tu les affiches
                    $idMenu = $data['id'];
                    $menuName = $data['name'];
                    //$menuName = $data[0]; // ne marche pas
                    // echo "<div>";
                    // echo $menuName;
                    // echo "</div>";
                    $li .=  "  
                                <li>".$menuName."
                                    <ul class='submenu'>
                                        <div class='topBar'></div>
                            ";
                    

                    $resultat2 = mysqli_query($mysqli, "SELECT * FROM `submenu` WHERE `id_menu`=".$idMenu." ORDER BY `id_menu`,`id`");
                    $i = 0;
                    while($data2 = mysqli_fetch_assoc($resultat2)){
                        //$id = $data2['id'];
                        $id_menu = $data2['id_menu'];
                        $subMenuName = $data2['name'];
                        //$subMenuName = "test";
                        $subMenuNb = mysqli_fetch_assoc(mysqli_query($mysqli, 'SELECT COUNT(*) FROM `submenu`'));
                        $subMenuNb =  $subMenuNb['COUNT(*)'];
                        // $resultat3 = mysqli_query($mysqli, 'SELECT COUNT(*) FROM `submenu`');


                        // if($i == 0 || $i == 6){
                        //     $li .= "<li><ul class='column'>";
                        // }
                        // $li .= "<a href='#'><li>".$subMenuName."</li></a>";
                        // if($i == 5 || $i == ($subMenuNb - 1)){
                        //     $li .= "</ul></li>";
                        // } 
                        // $i ++;
                       
                        $li .= "<li>".$subMenuName."</li>";

                    }





                    $li .=  "
                                        <div class='clear'></div>
                                    </ul>
                                </li>
                            ";
                }
                echo $li;


                //   foreach($leMenu as $key => $value){
                //         $li ="<li>".$key."<ul class='submenu'><div class='topBar'></div>";

                //         for($i=0, $il = count($value); $i < $il; $i++){
                //               if($i == 0 || $i == 6){
                //                     $li .= "<li><ul class='column'>";
                //               }
                //               $li .= "<a href='#'><li>".$value[$i]."</li></a>";
                //               if($i == 5 || $i == ($il - 1)){
                //                     $li .= "</ul></li>";
                //               } 
                //         }

                //         $li .= "<div class='clear'></div></ul></li>";
                //         echo $li;
                //   }
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
                                          $featuredItem = array(
                                                "Gucci Shoes" => "./img/costume.jpg",
                                                "Nike Sports Shoes" => "./img/costume.jpg",
                                                "The veste" => "./img/featured.jpg",
                                                "Nike Golf Cap" => "./img/costume.jpg"
                                          );
                                          foreach($featuredItem as $title => $imageUrl){
                                    ?>
                                    <div class="col-md-3">
                                          <img src="<?= $imageUrl; ?>">
                                          <div><a href="#"><?= $title; ?></a></div>
                                    </div>
                                    <?php } ?>
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
                              $productList = array(
                                    "Gucci ready to wear" => array(
                                          "image" => "./img/clothe.jpg",
                                          "prix" => "$525",
                                          "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing."
                                    ),
                                    "Veste" => array(
                                          "image" => "./img/veste.jpg",
                                          "prix" => "$200",
                                          "description" => "Veste légère en kevlar."
                                    ),
                                    "Robe" => array(
                                          "image" => "./img/clothe.jpg",
                                          "prix" => "$525",
                                          "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing."
                                    ),
                                    "Pull" => array(
                                          "image" => "./img/clothe.jpg",
                                          "prix" => "$525",
                                          "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing."
                                    ),
                                    "String" => array(
                                          "image" => "./img/clothe.jpg",
                                          "prix" => "$525",
                                          "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing."
                                    ),
                                    "Chaussette" => array(
                                          "image" => "./img/clothe.jpg",
                                          "prix" => "$525",
                                          "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing."
                                    ),
                                    "Pijama" => array(
                                          "image" => "./img/clothe.jpg",
                                          "prix" => "$100",
                                          "description" => "Un pijama Babar."
                                    ),
                                    "Blouson" => array(
                                          "image" => "./img/clothe.jpg",
                                          "prix" => "$525",
                                          "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing."
                                    ),
                                    "Ceinture" => array(
                                          "image" => "./img/clothe.jpg",
                                          "prix" => "$25",
                                          "description" => "Une superbe ceinture."
                                    ),
                              );
                              /* génération de la liste des articles */
                              /* version mini pour insérer une variable dans du html : <?= "Hello";?> */
                              $productNumber = count($productList);
                              $i = 0;
                              $html = "";
                              foreach($productList as $title => $product){
                                    $i ++;
                                    if($i == 1){
                                          $html .= "<div class='list'>";
                                    }
                                    if($i == 4 || $i == 7){
                                          $html .= "<hr>";
                                    }
                                    $html .= "
                                          <div class='product'>
                                                <div class='imgBox'>
                                                      <img src=".$product['image']." alt=''>
                                                      <div class='possibility'>
                                                            <div>".$product['prix']."</div>
                                                            <div class='more'>
                                                                  <div><a href='#'><i class='fa fa-cart-plus' aria-hidden='true'></i></a></div>
                                                                  <div><a href='#'><i class='fa fa-heart' aria-hidden='true'></i></a></div>
                                                                  <div><a href='#'>View Details</a></div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <h4>".$title."</h4>
                                                <p>".$product['description']."</p>
                                          </div>
                                    ";
                                    if($i == $productNumber){
                                          $html .= "</div><hr>";
                                    }
                              }
                              echo $html;
                        ?>
                        <div class="pagination">
                              <div class="left">
                                    <div><a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div>
                                    <div class="num"><a href="#">1</a></div>
                                    <div class="num"><a href="#">2</a></div>
                                    <div class="num"><a href="#">3</a></div>
                                    <div class="num"><a href="#">4</a></div>
                                    <div class="num"><a href="#">5</a></div>
                                    <div><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
                              </div>
                              <div class="right"><a href="#">more +</a></div>
                              <div class="clear"></div>
                        </div>
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