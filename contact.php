<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>

<body class="bg-dark">
    <?php include "header.php"; ?>
    <div class="container-fluid d-flex-row justify-content-start">
        <div class="row d-flex-row justify-content-center mb-5">
            <h1 class="text-white">Nous contacter</h1>
        </div>
        <div class="row">

            <div class="col-6  text-white text-center">
            <h5>2 Rue Ernest Castan, 34090 Montpellier</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11553.603335991736!2d3.8811282!3d43.6190156!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x92ff8424f62abf17!2sAmiti%C3%A9%20C%C3%A9venole%20(AEPC)!5e0!3m2!1sfr!2sfr!4v1606397902024!5m2!1sfr!2sfr" width="450" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
            <div class="col-6 ">
                <form action="./execute.php" onsubmit="return validateForm()" name="reg" method="POST" id="reg">

                    <div class="row form-group">
                        <div class="col-md-4">
                            <p class="text-right text-white"><label for="prenom-form">Prénom : </label></p>
                            <p class="text-right text-white"> <label id="nom">Nom : </label></p>
                            <p class="text-right text-white"> <label id="tb-name">Email : </label></p>
                            <p class="text-right text-white"> <label id="tb-name">Message : </label></p>
                        </div>
                        <div class="col-md-8">
                            <p> <input type="text" name="prenom" id="prenom-form" required /> </p>
                            <p><input type="text" name="nom" id="nom-form" required /></p>
                            <p><input type="text" id="" name="email" required /></p>
                            <p><input  type="text" id="" name="message" required /></p>
                        </div>
                    </div>
                    <button class="btn btn-primary register-button" name="submit" type="submit" value="envoyer">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
    <?php include './footer.php' ?>
</body>

</html>