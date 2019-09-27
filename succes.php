<?php include 'head.php'; ?>
    <body>
<?php include 'navbar.php'; ?>


<div id="succes">
    <p>Merci de cliquer sur le lien que nous vous avons envoyé à l'adresse: <?php echo $_GET["mail"]; ?> <br> Nous vous répondrons dans les meilleurs délais </p>
</div>






<?php include 'footer.php';
include 'age_check.php'; ?>
</section>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibWFydGlucml2aWVyZSIsImEiOiJjazBubXBvczQwMWRpM2hwcGV4c3pubHJ1In0.qtYexkvHKigcd_hgl4Q9jA';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/martinriviere/ck0nkniw001wt1crx8wpias1s', // replace this with your style URL
        center: [2.3922962, 46.7737294],
        zoom: 4
    });

</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    </body>
</html>
