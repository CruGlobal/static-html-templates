<?php

function the_header($title, $id, $classes = '') {

?>
<html>
<head>
  <title><?php echo $title; ?></title>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0"/>
 <!--  <link rel="stylesheet" href="http://give-static-stage.cru.org/give.min.css" /> -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" />
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
</html>
<?php

}

?>