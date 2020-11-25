<?php include "logincheck.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include_once 'head.php'; ?>
</head>


<body class="bg-dark">
  <div class="container-fluid ">
    <?php include 'header.php'; ?>
    <div class="card" style="width: 80%; margin:2% 10%">
      <a href="sejours.php"><img class="card-img-top" src="img/logo/skieur2.png" alt="Card image cap"></a>
      <div class="card-body">
        <p class="card-text">Un grand merci, pour les séjours de cet été, à Mons la Trivalle, à Camprieu et à Valras. Nous repartons de plus belle pour vous proposer de beaux séjours en 2021.

          Rentrons dans le vif du sujet à présent. Comme vous avez pu le ressentir ces derniers jours, le froid pointe le bout de son nez, and Winter is coming.

          Il est donc tout naturel de commencer à penser à, à… la raclette ?!

          Et non ! Nous parlons bien évidemment de nos séjours de ski ESCAPADE D'HIVER 2021 (mais oui aussi de la raclette).</p>
      </div>
    </div>

    <!-- Container-fluid-->

    <div class="row caroussel-container">
      <div class="col-8">
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
  <!-- Script Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>

  <footer class="page-footer ">
    <?php include 'footer.php' ?>
    <div class="footer-copyright text-center text-white">© 2020 Copyright :
      <a href="index.php"> Amitié Cévenole</a>
    </div>
  </footer>
</body>

</html>