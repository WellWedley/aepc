<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include_once 'head.php'; ?>
</head>


<body class="bg-dark">
  <?php include 'header.php'; ?>
  <div class="container-fluid">
    <div class="row d-flex justify-content-center mb-5">
      <div class="card col-md-6">
        <a href="sejours.php"><img class="card-img-top" src="img/logo/skieur2.png" alt="Card image cap"></a>
        <div class="card-body">
          <p class="card-text">Un grand merci, pour les séjours de cet été, à Mons la Trivalle, à Camprieu et à Valras. Nous repartons de plus belle pour vous proposer de beaux séjours en 2021.

            Rentrons dans le vif du sujet à présent. Comme vous avez pu le ressentir ces derniers jours, le froid pointe le bout de son nez, and Winter is coming.

            Il est donc tout naturel de commencer à penser à, à… la raclette ?!

            Et non ! Nous parlons bien évidemment de nos séjours de ski ESCAPADE D'HIVER 2021 (mais oui aussi de la raclette).</p>
        </div>
      </div>
    </div>

    <!-- Container-fluid-->

    <div class="row d-flex justify-content-center mt-5">
      <div class="col-6 ">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/sejours/2020/winter/flyers_sejours_ski/enfants_ski.jpg" alt="First slide">

            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/sejours/2020/winter/flyers_sejours_ski/enfants_repas_gite_colo.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/sejours/2020/winter/flyers_sejours_ski/enfant_snowboard.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/sejours/2020/winter/flyers_sejours_ski/jump_snowboard.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Photo précédédente</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Photo suivante</span>
          </a>
        </div>
      </div>
    </div>

  </div>
  <script src="snow.js"></script>
  <?php include 'footer.php' ?>

</body>

</html>