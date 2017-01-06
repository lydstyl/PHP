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
              <li><img src="./img/english.jpg" alt="english flag"></li>
              <li><span>Good Evening,</span><span> versesdesign</span></li>
              <li><i class="fa fa-comment"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-heart"></i></li>
              <li><i class="fa fa-shopping-basket"></i></li>
              <li><i class="fa fa-lock"></i></li>
            </ul>
            <div class="clear"></div>
          </div>
        </div>
        <div class="regular slider">
          <div><img src="./img/bigImage.jpg"></div>
          <div><img src="./img/bigImage.jpg"></div>
        </div>
        <div class="menu">     
            <ul>
            <?php 
                  /* génération du menu et sous menu */
                  $leMenu = array(
                        "Home" => array(
                              "Shoes",
                              "Ready to wear",
                              "Belts",
                              "Fragrance",
                              "Hats",
                              "Sunglasses",
                              "Ties",
                              "Wallets",
                              "Watches",
                              "Sports",
                              "Popular items",
                              "Top selling"
                        ),
                        "Kids" => array(
                              "Shoes",
                              "Hats",
                              "Sunglasses"
                        ),
                        "Men" => array(
                              "Shoes",
                              "Ready to wear",
                              "Belts",
                              "Fragrance",
                              "Hats",
                              "Sunglasses",
                              "Ties",
                              "Wallets",
                              "Watches",
                              "Sports",
                              "Popular items",
                              "Top selling"
                        ),
                        "Women" => array(
                              "Shoes",
                              "Ready to wear",
                              "Belts",
                              "Fragrance",
                              "Hats",
                              "Sunglasses",
                              "Ties"
                        ),
                        "Brands" => array(
                              "Test",
                              "Ready to wear",
                              "Belts",
                              "Fragrance",
                              "Ties",
                              "Wallets",
                              "Watches",
                              "Sports",
                              "Popular items"
                        ),
                        "Blog" => array(
                              "Shoes",
                              "Ready to wear",
                              "Belts",
                              "Fragrance",
                              "Hats",
                              "Sunglasses",
                              "Ties",
                              "Wallets",
                              "Watches",
                              "Sports",
                              "Popular items",
                              "Top selling"
                        ),
                        "Community" => array(
                              "Shoes",
                              "Ready to wear",
                              "Belts",
                              "Fragrance",
                              "Hats",
                              "Sunglasses",
                              "Ties",
                              "Wallets",
                              "Watches",
                              "Sports",
                              "Popular items",
                              "Top selling"
                        ),
                        "Delivery" => array(
                              "Shoes",
                              "Ready to wear",
                              "Belts",
                              "Fragrance",
                              "Hats",
                              "Sunglasses",
                              "Ties",
                              "Wallets",
                              "Watches",
                              "Sports",
                              "Popular items",
                              "Top selling"
                        ),
                        "Stores" => array(
                              "Shoes",
                              "Ready to wear",
                              "Belts",
                              "Fragrance",
                              "Hats",
                              "Sunglasses",
                              "Ties",
                              "Wallets",
                              "Watches",
                              "Sports",
                              "Popular items",
                              "Top selling"
                        ),
                        "Contacts" => array(
                              "Shoes",
                              "Ready to wear",
                              "Belts",
                              "Fragrance",
                              "Hats",
                              "Sunglasses",
                              "Ties",
                              "Wallets",
                              "Watches",
                              "Sports",
                              "Popular items",
                              "Top selling"
                        ),
                  );
                  foreach($leMenu as $key => $value){
                        $li ="<li>".$key."<ul class='submenu'><div class='topBar'></div>";

                        for($i=0, $il = count($value); $i < $il; $i++){
                              if($i == 0 || $i == 6){
                                    $li .= "<li><ul class='column'>";
                              }
                              $li .= "<li>".$value[$i]."</li>";
                              if($i == 5 || $i == ($il - 1)){
                                    $li .= "</ul></li>";
                              } 
                        }

                        $li .= "<div class='clear'></div></ul></li>";
                        echo $li;
                  }
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
                                          <span class="fa fa-arrow-right"></span>
                                          <span>view all items</span>
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
                                    <div class="col-md-3">
                                          <img src="./img/costume.jpg">
                                          <div>Gucci Shoes</div>
                                    </div>
                                    <div class="col-md-3">
                                          <img src="./img/costume.jpg">
                                          <div>Nike Sports Shoes</div>
                                    </div>
                                    <div class="col-md-3">
                                          <img src="./img/costume.jpg">
                                          <div>Nike Golf Cap</div>
                                    </div>
                                    <div class="col-md-3">
                                          <img src="./img/costume.jpg">
                                          <div>Nike Golf Cap</div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-md-3 right">
                              <div>GUCCI</div>
                              <div class="clear"></div>
                              <div>
                                    <span class="fa fa-arrow-right"></span>
                                    <span>view our brands</span>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="centerBox">
                  <div class="colLeft">
                        <h2>Popular categories</h2>     
                        <div class="arrow"><strong>WOMEN </strong><span>SHOES STARTS FROM</span><span>$50</span></div> 
                        <div class="arrow"><strong>MEN </strong><span>DRESS SHOES STARTS FROM</span><span>$170</span></div> 
                        <div class="arrow"><strong>WOMEN </strong><span>SHOES STARTS FROM</span><span>$50</span></div> 
                        <div class="arrow"><strong>WOMEN </strong><span>SHOES STARTS FROM</span><span>$50</span></div> 
                        <div class="clear"></div>
                        <h2>What's hot</h2>  
                        <div class="store">
                              <div class="left">
                                    <h3>WOMEN STORE</h3><strong>GARMENTS & ACCESSORIES</strong>
                              </div>
                              <div class="right">
                                    <div>Starts from</div><div><span>$</span><div>45</div></div>
                              </div>
                        </div>    
                        <div class="store men">
                              <div class="left">
                                    <h3>MEN STORE</h3><strong>GARMENTS & ACCESSORIES</strong>
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
                              <span class="fa fa-arrow-right"></span>
                              <span>view all items</span>
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
                        <div class="list">
                              <div class="product">
                                    <div class="imgBox">
                                          <img src="./img/clothe.jpg" alt="">
                                          <div class="possibility">
                                                <div>$525</div>
                                                <div class="more">
                                                      <div><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></div>
                                                      <div><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></div>
                                                      <div><a href="#">View Details</a></div>
                                                </div>
                                          </div>
                                    </div>
                                    <h4>Gucci ready to wear</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                              </div>
                              <div class="product">
                                    <div class="imgBox">
                                          <img src="./img/clothe.jpg" alt="">
                                          <div class="possibility">
                                                <div>$525</div>
                                                <div class="more">
                                                      <div><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></div>
                                                      <div><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></div>
                                                      <div><a href="#">View Details</a></div>
                                                </div>
                                          </div>
                                    </div>
                                    <h4>Gucci ready to wear</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                              </div>
                              <div class="product">
                                    <div class="imgBox">
                                          <img src="./img/clothe.jpg" alt="">
                                          <div class="possibility">
                                                <div>$525</div>
                                                <div class="more">
                                                      <div><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></div>
                                                      <div><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></div>
                                                      <div><a href="#">View Details</a></div>
                                                </div>
                                          </div>
                                    </div>
                                    <h4>Gucci ready to wear</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                              </div>
                        </div>
                        <hr>
                        <div class="list">
                              <div class="product">
                                    <div class="imgBox">
                                          <img src="./img/clothe.jpg" alt="">
                                          <div class="possibility">
                                                <div>$525</div>
                                                <div class="more">
                                                      <div><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></div>
                                                      <div><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></div>
                                                      <div><a href="#">View Details</a></div>
                                                </div>
                                          </div>
                                    </div>
                                    <h4>Gucci ready to wear</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                              </div>
                              <div class="product">
                                    <div class="imgBox">
                                          <img src="./img/clothe.jpg" alt="">
                                          <div class="possibility">
                                                <div>$525</div>
                                                <div class="more">
                                                      <div><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></div>
                                                      <div><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></div>
                                                      <div><a href="#">View Details</a></div>
                                                </div>
                                          </div>
                                    </div>
                                    <h4>Gucci ready to wear</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                              </div>
                              <div class="product">
                                    <div class="imgBox">
                                          <img src="./img/clothe.jpg" alt="">
                                          <div class="possibility">
                                                <div>$525</div>
                                                <div class="more">
                                                      <div><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></div>
                                                      <div><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></div>
                                                      <div><a href="#">View Details</a></div>
                                                </div>
                                          </div>
                                    </div>
                                    <h4>Gucci ready to wear</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                              </div>
                        </div>
                        <hr>
                        <div class="list">
                              <div class="product">
                                    <div class="imgBox">
                                          <img src="./img/clothe.jpg" alt="">
                                          <div class="possibility">
                                                <div>$525</div>
                                                <div class="more">
                                                      <div><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></div>
                                                      <div><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></div>
                                                      <div><a href="#">View Details</a></div>
                                                </div>
                                          </div>
                                    </div>
                                    <h4>Gucci ready to wear</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                              </div>
                              <div class="product">
                                    <div class="imgBox">
                                          <img src="./img/clothe.jpg" alt="">
                                          <div class="possibility">
                                                <div>$525</div>
                                                <div class="more">
                                                      <div><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></div>
                                                      <div><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></div>
                                                      <div><a href="#">View Details</a></div>
                                                </div>
                                          </div>
                                    </div>
                                    <h4>Gucci ready to wear</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                              </div>
                              <div class="product">
                                    <div class="imgBox">
                                          <img src="./img/clothe.jpg" alt="">
                                          <div class="possibility">
                                                <div>$525</div>
                                                <div class="more">
                                                      <div><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></div>
                                                      <div><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></div>
                                                      <div><a href="#">View Details</a></div>
                                                </div>
                                          </div>
                                    </div>
                                    <h4>Gucci ready to wear</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                              </div>
                        </div>
                        <hr>
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
                        <li>Blog</li>
                        <li>About</li>
                        <li>Contact</li>
                        <li>Press</li>
                        <li>Developers</li>
                        <li>Careers</li>
                        <li>Terms</li>
                        <li>Privacy</li>
                        <li>Copyright</li>
                  </ul>
                  <div class="right">
                        <div>Connect with us</div>
                        <div><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div><i class="fa fa-rss" aria-hidden="true"></i></div>
                  </div>
                  <div class="clear"></div>
            </div>
            <div class="lastBar"></div>
      </footer>
    </div>

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