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
    <?php include 'navbar.php' ?>

    <div class="container">
      <?php include 'carousel.php' ?>
      
      <div>
        <div class="container bloc_product">
          <div class="row">
            <!-- Ceci est une carte -->
            <div class="card_product col-12 col-lg-6">
              <a href="#">
              <div class="card" style="height: 100%;">
                <div class="row no-gutters">
                  <div class="col-12 col-sm-4">
                    <img src="./images/Canette bleue.jpg" class="img-fluid" alt="canette bleue">
                  </div>
                  <div class="col-12 col-sm-8" style="background-color: #F7F7F7;border-radius: 20px;">
                    <div class="card-body">
                      <h5 class="card-title">Bière bleue</h5>
                      <p class="card-text">Cette bière blanche trouble combine les saveurs fruitées des levures belges avec le côté épicé de la graine de coriandre et des écorces d’oranges. Très agréable à boire car elle est très pétillante. Servir frappée.</p>
                      <table class="table table-borderless">
                        <tbody>
                        <tr>
                          <th scope="row">Style</th>
                          <td>Blanche</td>
                        </tr>
                        <tr>
                          <th scope="row">Contenu</th>
                          <td>33cl</td>
                        </tr>
                        <tr>
                          <th scope="row">Degré d'alcool</th>
                          <td colspan="2">5,4%</td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <!-- Ceci est une carte -->
            <div class="card_product col-12 col-lg-6">
              <a href="#">
              <div class="card" style="height: 100%;">
                <div class="row no-gutters" style="height: 100%;">
                  <div class="col-12 col-sm-4">
                    <img src="./images/Canette rouge.jpg" class="img-fluid" alt="canette rouge">
                  </div>
                  <div class="col-12 col-sm-8" style="background-color: #F7F7F7;border-radius: 20px;">
                    <div class="card-body" >
                      <h5 class="card-title">Bière rouge</h5>
                      <p class="card-text">Une bière d’hiver rousse tirant sur le brun. Très parfumée, avec une agréable saveur de clou de girofle et de cannelle. Le goût reste cependant plutôt frais et léger.</p>
                      <table class="table table-borderless">
                        <tbody>
                        <tr>
                          <th scope="row">Style</th>
                          <td>Ambré</td>
                        </tr>
                        <tr>
                          <th scope="row">Contenu</th>
                          <td>33cl</td>
                        </tr>
                        <tr>
                          <th scope="row">Degré d'alcool</th>
                          <td colspan="2">6,8%</td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <!-- Ceci est une carte -->
            <div class="card_product col-12 col-lg-6">
              <a href="#">
              <div class="card" style="height: 100%;">
                <div class="row no-gutters">
                  <div class="col-12 col-sm-4">
                    <img src="./images/Canette verte.jpg" class="img-fluid" alt="canette verte">
                  </div>
                  <div class="col-12 col-sm-8" style="background-color: #F7F7F7;border-radius: 20px;">
                    <div class="card-body">
                      <h5 class="card-title">Bière verte</h5>
                      <p class="card-text">Bière verte aux saveurs herbales et légèrement amères. Au nez, elle est mentholée. La finale en bouche est courte et assez herbale.Le gluten est éliminé au cours du processus de brassage – chaque lot est contrôlé à un niveau inférieur à 20 ppm.</p>
                      <table class="table table-borderless">
                        <tbody>
                        <tr>
                          <th scope="row">Style</th>
                          <td>Blonde</td>
                        </tr>
                        <tr>
                          <th scope="row">Contenu</th>
                          <td>33cl</td>
                        </tr>
                        <tr>
                          <th scope="row">Degré d'alcool</th>
                          <td colspan="2">5,9%</td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <!-- Ceci est une carte -->
            <div class="card_product col-12 col-lg-6">
              <a href="#">
              <div class="card" style="height: 100%;">
                <div class="row no-gutters" style="height: 100%;">
                  <div class="col-12 col-sm-4">
                    <img src="./images/Canette jaune.jpg" class="img-fluid" alt="canette jaune">
                  </div>
                  <div class="col-12 col-sm-8" style="background-color: #F7F7F7;border-radius: 20px;">
                    <div class="card-body">
                      <h5 class="card-title">Bière jaune</h5>
                      <p class="card-text">Bière trappiste parfaitement équilibrée à la robe brun-rouge. Léger goût sucré et arômes de chocolat, de fruits secs, de pain grillé et de caramel.</p>
                      <table class="table table-borderless">
                        <tbody>
                        <tr>
                          <th scope="row">Style</th>
                          <td>Brune</td>
                        </tr>
                        <tr>
                          <th scope="row">Contenu</th>
                          <td>33cl</td>
                        </tr>
                        <tr>
                          <th scope="row">Degré d'alcool</th>
                          <td colspan="2">8,0%</td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
          </div>
        </div>
      </div>      

    </div>
    <?php include 'footer.php' ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>