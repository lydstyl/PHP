<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo PHP</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link href="../static/css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="../static/css/font-awesome.css" rel="stylesheet" type="text/css" />
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
          <div><img src="http://placehold.it/990x300?text=1"></div>
          <div><img src="http://placehold.it/990x300?text=2"></div>
          <div><img src="http://placehold.it/990x300?text=3"></div>
          <div><img src="http://placehold.it/990x300?text=4"></div>
          <div><img src="http://placehold.it/990x300?text=5"></div>
        </div>
        <div class="menu">     
          <ul>
            <li>Home</li>
            <li>Kids</li>
            <li>Men</li>
            <li>Women</li>
            <li>Brands</li>
            <li>Blog</li>
            <li>Community</li>
            <li>Delivery</li>
            <li>Stores</li>
            <li>Contacts</li>
          </ul>
        </div>
      </header>
      <section>
        <div class="featuredBar">
          <div class="topBar"></div>
          <div class="col-md-9 left">
            <div class="col-md-3"><img src="http://placehold.it/160x150?text=1"></div>
            <div class="col-md-3"><img src="http://placehold.it/160x150?text=2"></div>
            <div class="col-md-3"><img src="http://placehold.it/160x150?text=3"></div>
            <div class="col-md-3"><img src="http://placehold.it/160x150?text=4"></div>
          </div>
          <div class="col-md-3 right"><img src="http://placehold.it/250x150?text=5"></div>
        </div>
        <div></div>
      </section>
      <footer>
        
      </footer>
    </div>
  </body>
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
      // $(".center").slick({
      //   dots: true,
      //   infinite: true,
      //   centerMode: true,
      //   slidesToShow: 3,
      //   slidesToScroll: 3
      // });
      // $(".variable").slick({
      //   dots: true,
      //   infinite: true,
      //   variableWidth: true
      // });
    });
  </script>
</html>