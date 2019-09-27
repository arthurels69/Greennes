
<!doctype html>
<html lang="en">
  <?php include 'head.php'; ?>
  <body>
    <?php include 'navbar.php'; ?>

    	<img class="beer" src="images/beerbanner.jpg" alt="Beer picture"></img>
    
    	<div class="container" style="margin-top: 80px;">
	<div class="row">
		<!--Produit 1 -->
		<div class="col-12 col-lg-6">
			<div class="produit">
				<div class="row">
					<div class="col-12 col-md-5 col-lg-12 col-lg-12">
						<img src="./images/Canette_bleu.png" alt="canette bleue" class="img-fluid rounded mx-auto d-block" style="width: 75%">
					</div>
					<div class="descriptif col-12 col-md-7 col-lg-12">
						<h5>
							Bière bleue
						</h5>
						<p>
							Cette bière blanche trouble combine les saveurs fruitées des levures belges avec le côté épicé de la graine de coriandre et des écorces d’oranges. Très agréable à boire car elle est très pétillante. Servir frappée.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h6>
							Amertume
						</h6>
						<div class="progress" style="height:12px">
							<div class="progress-bar" role="progressbar" style="width: 20%; background-color:#474747 !important;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-12">
						<h6>
							Douceur
						</h6>
						<div class="progress" style="height:12px">
							<div class="progress-bar" role="progressbar" style="width: 80%; background-color:#474747 !important;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-12">
						<h6>
							Acidité
						</h6>
						<div class="progress" style="height:12px">
							<div class="progress-bar" role="progressbar" style="width: 40%; background-color:#474747 !important;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col d-flex justify-content-center">
						<button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#infos1">Achète moi !</button>
						
					</div>
					<div class="modal fade" id="infos1">
						<div class="modal-dialog">
							<div class="modal-content">
								<?php include('tarifbleue.php'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--Produit 2 -->
		<div class="col-12 col-lg-6">
			<div class="produit">
				<div class="row">
					<div class="col-12 col-md-5 col-lg-12">
						<img src="./images/Canette_jaune.png" alt="canette jaune" class="img-fluid rounded mx-auto d-block" style="width: 75%">
					</div>
					<div class="descriptif col-12 col-md-7 col-lg-12">
						<h5>
							Bière jaune
						</h5>
						<p>
							Bière trappiste parfaitement équilibrée à la robe brun-rouge. Léger goût sucré et arômes de chocolat, de fruits secs, de pain grillé et de caramel.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h6>
							Amertume
						</h6>
						<div class="progress" style="height:12px">
							<div class="progress-bar" role="progressbar" style="width: 60%; background-color:#474747 !important;; background-color:#474747 !important;; background-color:#474747 !important;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-12">
						<h6>
							Douceur
						</h6>
						<div class="progress" style="height:12px">
							<div class="progress-bar" role="progressbar" style="width: 25%; background-color:#474747 !important;; background-color:#474747 !important;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-12">
						<h6>
							Acidité
						</h6>
						<div class="progress" style="height:12px">
							<div class="progress-bar" role="progressbar" style="width: 40%; background-color:#474747 !important;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col d-flex justify-content-center">
						<button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#infos2">Achète moi !</button>
					</div>
					<div class="modal fade" id="infos2">
						<div class="modal-dialog">
							<div class="modal-content">
								<?php include('tarifjaune.php'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Produit 3 -->
		<div class="col-12 col-lg-6">
			<div class="produit">
				<div class="row">
					<div class="col-12 col-md-5 col-lg-12 col-lg-12">
						<img src="./images/Canette_rouge.png" alt="canette rouge" class="img-fluid rounded mx-auto d-block" style="width: 75%">
					</div>
					<div class="descriptif col-12 col-md-7 col-lg-12">
						<h5>
							Bière rouge
						</h5>
						<p>
							Une bière d’hiver rousse tirant sur le brun. Très parfumée, avec une agréable saveur de clou de girofle et de cannelle. Le goût reste cependant plutôt frais et léger.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h6>
							Amertume
						</h6>
						<div class="progress" style="height:12px">
							<div class="progress-bar" role="progressbar" style="width: 90%; background-color:#474747 !important;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-12">
						<h6>
							Douceur
						</h6>
						<div class="progress" style="height:12px">
							<div class="progress-bar" role="progressbar" style="width: 10%; background-color:#474747 !important;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-12">
						<h6>
							Acidité
						</h6>
						<div class="progress" style="height:12px">
							<div class="progress-bar" role="progressbar" style="width: 50%; background-color:#474747 !important;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col d-flex justify-content-center">
						<button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#infos3">Achète moi !</button>
					</div>
					<div class="modal fade" id="infos3">
						<div class="modal-dialog">
							<div class="modal-content">
								<?php include('tarifrouge.php'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Produit 4 -->
		<div class="col-12 col-lg-6">
			<div class="produit">
				<div class="row">
					<div class="col-12 col-md-5 col-lg-12">
						<img src="./images/Canette_verte.png" alt="canette verte" class="img-fluid rounded mx-auto d-block" style="width: 75%">
					</div>
					<div class="descriptif col-12 col-md-7 col-lg-12">
						<h5>
							Bière verte
						</h5>
						<p>
							Bière verte aux saveurs herbales et légèrement amères. Au nez, elle est mentholée. La finale en bouche est courte et assez herbale.Le gluten est éliminé au cours du processus de brassage – chaque lot est contrôlé à un niveau inférieur à 20 ppm.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h6>
							Amertume
						</h6>
						<div class="progress" style="height:12px">
							<div class="progress-bar" role="progressbar" style="width: 25%; background-color:#474747 !important;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-12">
						<h6>
							Douceur
						</h6>
						<div class="progress" style="height:12px">
							<div class="progress-bar" role="progressbar" style="width: 40%; background-color:#474747 !important;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-12">
						<h6>
							Acidité
						</h6>
						<div class="progress" style="height:12px">
							<div class="progress-bar" role="progressbar" style="width: 90%; background-color:#474747 !important;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col d-flex justify-content-center">
						<button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#infos4">Achète moi !</button>
					</div>
				</div>
				<div class="modal fade" id="infos4">
					<div class="modal-dialog">
						<div class="modal-content">
							<?php include('tarifverte.php'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


	<div class="livraison" >
	<div id="logo"class="container">
	<div  class="row no-gutters">
		<div class=" col-12 col-md-4  ">
		<p class="fa fa-home fa-4x"><p>
			<p><b> Livraison  domicile</b> <br><br>Gratuite dés 10l achetés</p>

		</div>
		<div id="rocket" class="col-12 col-md-4 ">
		<p class="fa fa-rocket fa-4x"><p>
			<p><b>Livraison express</b><br> <br>Garantie en 24H </p>
		</div>
		<div class="col-12 col-md-4 ">
		<p class="fa fa-gift fa-4x"><p>
			<p> <b>Avantages</b><br> <br>Bénéficiez <br> de 5€ tous les 100€ d'achats</p>
			<p>
		</div>
	</div>
	</div>
	</div>

  <?php include 'footer.php';
  include 'age_check.php'; ?>
  <script src="cart.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>