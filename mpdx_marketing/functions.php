<?php

function the_header($title, $id, $classes = '') {

?>
<html>
<head>
  <title><?php echo $title; ?></title>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0"/>
  <link rel="stylesheet" href="https://cru.org/css/cru.css" />
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.8/jquery.bxslider.css" />
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.8/jquery.bxslider.min.js"></script>
  <script src="assets/js/jquery.matchHeight-min.js"></script>
  <script src="https://use.typekit.net/usb5wjy.js"></script>
  <link rel="stylesheet" href="styles.css" />

  <style>
  .mpdx-pages .prod-cat1 {background-color: #f9b625;}
  .mpdx-pages .prod-img-overlay.prod-cat1 {background-color: rgba(249, 182, 37, 0.6);}
  .mpdx-pages .hero .prod-img-overlay.prod-cat1 {background-color: rgba(249, 182, 37, 0.3);}
  .mpdx-pages .prod-cat2 {background-color: #3eb1c8;}
  .mpdx-pages .prod-img-overlay.prod-cat2 {background-color: rgba(62, 177, 200, 0.6);}
  .mpdx-pages .hero .prod-img-overlay.prod-cat2 {background-color: rgba(62, 177, 200, 0.3);}
  .mpdx-pages .prod-cat3 {background-color: #007398;}
  .mpdx-pages .prod-img-overlay.prod-cat3 {background-color: rgba(0, 115, 152, 0.6);}
  .mpdx-pages .hero .prod-img-overlay.prod-cat3 {background-color: rgba(0, 115, 152, 0.3);}

  .godtools-pages .prod-cat1 {background-color: #f00;}
  .godtools-pages .prod-img-overlay.prod-cat1 {background-color: rgba(255, 0, 0, 0.6);}
  .godtools-pages .hero .prod-img-overlay.prod-cat1 {background-color: rgba(255, 0, 0, 0.3);}
  .godtools-pages .prod-cat2 {background-color: #0f0;}
  .godtools-pages .prod-img-overlay.prod-cat2 {background-color: rgba(0, 255, 0, 0.6);}
  .godtools-pages .hero .prod-img-overlay.prod-cat2 {background-color: rgba(0, 255, 0, 0.3);}
  .godtools-pages .prod-cat3 {background-color: #00f;}
  .godtools-pages .prod-img-overlay.prod-cat3 {background-color: rgba(0, 0, 255, 0.6);}
  .godtools-pages .hero .prod-img-overlay.prod-cat3 {background-color: rgba(0, 0, 255, 0.3);}
  </style>

  <script>
    $(function() {
      $('.product-homepage .answer').matchHeight();
    });
  </script>

</head>

<body class="product-pages product-<?php echo $id; ?> <?php echo $classes; ?>">

  <div class="testing-nav">
    <a href="/">Home</a>
    <a href="features.php">Features</a>
    <a href="blog.php">Blog</a>
    <a href="post.php">Post</a>
  </div>
<?php

}

function the_footer() {

?>
</body>

<script>
  try{Typekit.load({ async: true });}catch(e){}

  $(function() {
    $('.uniform-height .uni-col').matchHeight();
    $('.bxslider').bxSlider();
  });
</script>


</html>
<?php

}

?>