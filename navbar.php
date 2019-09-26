<?php
    $navigation=[
            "Accueil"=>["index.php"],
            "Produits"=>["product.php"],
            "Contact"=>["contact.php"],

];
?>


      <!-- Navbar -->
<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
  <a href="index.php"><img class="glogo" src="images/glogo.png" "alt="logo greenness"></a>
  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-center" id="navbarNav">
    <ul class="navbar-nav ml-auto mr-auto">
      <?php
      foreach($navigation as $nom => $lien) {
          echo "<li id='$nom'><a class=\"nav-link\" href=\"$lien[0]\"> $nom</a>
      </li>";
      };

      ?>
    </ul>
  </div>
    <div id="panier">
      <div id="basket-container" class="position-relative">
        <span class="position-absolute fa fa-shopping-basket fa-lg" ></span>
        <span id="nbItems"></div>
      </div>
    </div>
</nav>