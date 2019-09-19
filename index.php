<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Greenness</title>

      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">

      <!-- Maps -->
      <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.js'></script>
      <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.css' rel='stylesheet' />

      <!-- Fonts & icons -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,900,900i&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css"><link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
  <body>
    <?php include 'navbar.php'; ?>

     <img class="background" src="images/Greenness_bg.jpg" alt="background"></img>

    <div class="container">
      <?php include 'carousel.php'; ?>
     
  
  <!--Bullet Points Section -->

  <div class="container1">
          <div class="box">
            <span class="bullet-title">Protège la nature</span>
            <img class="bullet-image"src="/images/1.png" alt="Protect the nature">
            <p>Grâce aux nouvelles techniques développées par nos ingénieurs nous réussissons à brasser notre bière en respectant l’environnement. Nous garantissons le zéro émission carbone pour chaque procédé ( énergie solaire, transport électrique, agriculture biologique .. ).De plus nous vous recommandons de faire vos besoins en pleine nature après consommation, en effet la Greennes permet de générer de l’engrais bio qui accélère grandement la croissance des végétaux.<p>
  </div>
          <div class="box">
            <span class="bullet-title">Protège ta santé</span>
            <img class="bullet-image" src="/images/2.png" alt="Protect your health">      
            <p class="cup">Notre bière est la toute première boisson alcoolisée totalement inoffensive pour la santé. Grâce à tous les oligo-éléments générés lors du brassage, la Greennes prévient des risques cardio-vasculaires. Au revoir la gueule de bois et bonjour les lendemains actifs ! Aucun effet secondaire lors de surconsommation de notre produit, au contraire, un état de forme optimum le lendemain se fait ressentir, non vous ne rêvez pas !! </p>
          </div>
  
          <div class="box">
            <span class="bullet-title">Protège ton portefeuille</span>
            <img class="bullet-image" src="/images/3.png" alt="Protect your wallet">
            <p>Le rapport qualité prix de la Greennes défi toute concurrence, nous avons développé un procédé original qui permet de contenir l’équivalent de trois bières dans une. Il suffit tout simplement de mélanger chaque tiers de celle-ci avec de l’eau, goût, texture et onctuosité sont préservés. Satisfait ou remboursé, à vous de voir ! </p>
          </div>
  </div>

<!--Youtube video section-->
 </div>  

<h2>Nous ne faisons pas que de la bière, nous poursuivons un rêve</h2>
<div class="video">
        
        <div class="video-part2">
          <iframe class="yt" width="560" height="315" src="https://www.youtube.com/embed/Vcvo_nA9hFY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
</div>

    <?php include 'footer.php';
    include 'age_check.php'; ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>