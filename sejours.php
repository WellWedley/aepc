<?php session_start(); ?>
<!DOCTYPE html>

<html lang="fr">
<!-- Head commune à toutes les pages -->
<?php include "head.php"; ?>



<body class="bg-dark">
    <div class="container-fluid">
        <?php include "header.php"; ?>
        <div class="container">
            <div class="row">
                <div class="col-3d-6 container_winter">
                    <a href="" download="./img/sejours/2020/winter/flyers_sejours_ski/flyer_ski2020.png">
                        <img class="img_sejour1" width="200" src="img/sejours/2020/winter/flyers_sejours_ski/flyer_ski2020.png" alt="">
                        <div class="overlay">
                            <div class="text"> Télécharger ce fichier</div>
                        </div>
                    </a>
                </div>
                <div class="col-md6">
                    <a href="" download="./img/sejours/summer/mer_et_soleil/vacances_a_la_mer0.png">
                        <img class="img_sejour" width="200" src="img/sejours/2020/summer/mer_et_soleil/vacances_a_la_mer0.png" alt=>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-3d-6">
                    <a href="" download="?.img/sejours/2020/summer/cevennes_explor/flyer_cevennes_explor.png">
                        <img class="img_sejour" width="200" src="img/sejours/2020/summer/cevennes_explor/flyer_cevennes_explor.png" alt="">
                    </a>
                </div>
                <div class="col-3d-6">
                    <a href="" download="./img/sejours/2020/summer/explor_ados/intro_explor_ados_2020.png">
                        <img class="img_sejour" width="200" src="img/sejours/2020/summer/explor_ados/intro_explor_ados_2020.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php 
    include "./footer.php"
    ?>

</body>

</html>