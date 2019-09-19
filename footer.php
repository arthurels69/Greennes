<footer class="page-footer font-small blue py-4 mt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3  mt-md-0 mt-3">

        <!-- Content -->
        <h5 >Nous trouver</h5>
        <br>
        <p>Lieu de brassage : 17 rue Delandine 69002 Lyon</p>
        <p>Bureau : 20 avenue de la Répubique 69002 Lyon</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
      </div>
      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5>Informations</h5>
        <br>

        <ul class="list-unstyled">
          <li>
            <a href="index.php">Acceuil</a>
          </li>
          <li>
            <a href="product.php">Produits</a>
          </li>
          <li>
            <a href="contact.php">Contact</a>
          </li>
          <li>
            <a href="https://www.labierepression.fr/votre-age/?origin=https%3A%2F%2Fwww.labierepression.fr%2F">Lien Beertender</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5>Nous suivre</h5>
        <br>

        <ul class="list-unstyled">
          <li>
          <a href="#" class="pt-2 fa fa-facebook"></a>
          <a href="#" class="pt-2 fa fa-twitter"></a>

          </li>
          <li>
            <a href="#" class="pt-3 fa fa-instagram"></a>
            <a href="#" class="pt-3 fa fa-pinterest"></a>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!--message bas -->
  <div class="message-bas">
    © 2019 Greenness :<a href="https://www.wildcodeschool.com/fr-FR"> By WildCodeSchool</a> - Good Beers, Enjoy !
  <!-- message bas -->
  </div>

</footer>

<script>
  let totalQuantity
  const nbItems = document.getElementById("nbItems")
  if (sessionStorage.getItem('cart')) {
      totalQuantity = parseInt(sessionStorage.getItem('cart'))
      nbItems.textContent = totalQuantity
      nbItems.style.display = "block"
  } else {
      totalQuantity = 0
  }
</script>
