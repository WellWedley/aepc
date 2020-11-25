<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <?php
        $connexion = new mysqli( 'localhost', 'root', '', 'abonnes', '8080') ;
        $etat='';

        if ($connexion === false) {
            echo "Erreur de connexion";
        } else {
            if (isset($_GET['id'])) {
                $etat='Update';
                $id = $_GET['id'];

                $sql = 'SELECT * FROM abonne WHERE id=' .$id .';';
                $result = $connexion->query( $sql ) ;

                if ($result === false) {
                    echo "Erreur de récupération des données";
                } else {
                    $row = $result->fetch_array( MYSQLI_ASSOC );
                    displayForm($row, $etat);

                    if (isset($_POST['nom'])) {
                        $sql = 'UPDATE abonne
                                SET nom = "'.$_POST['nom'].'",
                                prenom = "'.$_POST['prenom'].'",
                                date_naissance = "'.$_POST['date_naissance'].'",
                                adresse = "'.$_POST['adresse'].'",
                                code_postal = "'.$_POST['code_postal'].'",
                                ville = "'.$_POST['ville'].'",
                                date_inscription = "'.$_POST['date_inscription'].'",
                                date_fin_abo = "'.$_POST['date_fin_abo'].'"
                                WHERE id =' .$id .';';
                        $result = $connexion->query( $sql ) ;

                        if ($result === false) {
                            echo "Erreur de récupération des données";
                        } else { ?>
                            <br><h4 class="text-center"> <?= $connexion-> affected_rows?> ligne modifiée </h4>
                        <?php
                        }     
                    }
                }
            } else {
                $etat='Création';
                $row = [];
                displayForm($row, $etat);

                if (isset($_POST['nom'])) {
                    $sql = 'INSERT INTO abonne(prenom, nom,
                                            date_naissance,
                                            adresse, code_postal,
                                            ville, date_inscription,
                                            date_fin_abo)
                            VALUES ("'.$_POST['prenom'].'",
                                    "'.$_POST['nom'].'",
                                    "'.$_POST['date_naissance'].'",
                                    "'.$_POST['adresse'].'",
                                    "'.$_POST['code_postal'].'",
                                    "'.$_POST['ville'].'",
                                    "'.$_POST['date_inscription'].'",
                                    "'.$_POST['date_fin_abo'].'")';
                    $result = $connexion->query( $sql ) ;

                    if ($result === false) {
                        echo "Erreur de création de l'abonné·e";
                    } else { ?>
                        <br><h4 class="text-center"> <?= $connexion-> affected_rows?> ligne ajoutée</h4>
                    <?php
                    }
                }
            }
        }

        function displayForm($row, $etat) {
            echo '<div class="container-fluid">
            <br><br><h1 class="text-center">' .$etat .' d\'abonné·e</h1><br>
            <form method="post">
                <input type="hidden" name="identite" value="silvert">
                <div class="row">
                    <div class="col-6 text-right">
                        <div class="row">
                            <div class="col-12">
                                <label for="nom">Nom</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="prenom">Prénom</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="date_naissance">Date de naissance</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="date_inscription">Date d\'inscription</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="date_fin_abo">Date de fin d\'abonnement</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <input type="text" name="nom" id="nom" value="' .(isset($row["nom"]) ? $row["nom"] : "").'">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="text" name="prenom" id="prenom" value="' .(isset($row["prenom"]) ? $row["prenom"] : "") .'">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="date" name="date_naissance" id="date_naissance" value="' .(isset($row["date_naissance"]) ? $row["date_naissance"] : "") .'">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="date" name="date_inscription" id="date_inscription" value="' .(isset($row["date_inscription"]) ? $row["date_inscription"] : "") .'">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="date" name="date_fin_abo" id="date_fin_abo" value="' .(isset($row["date_fin_abo"]) ? $row["date_fin_abo"] : "") .'">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <fieldset class="col-12">
                        <legend class="text-center">Adresse :</legend>
                        <div class="row">
                            <div class="col-6 text-right">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="adresse">Adresse</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="codePostal">Code postal</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="ville">Ville</label>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="adresse" value="' .(isset($row["adresse"]) ? $row["adresse"] : "") .'"><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="number" name="code_postal" value="' .(isset($row["code_postal"]) ? $row["code_postal"] : "") .'"><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="ville" value="' .(isset($row["ville"]) ? $row["ville"] : "") .'">
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </fieldset>
                </div>
                <br><div class="row padding-up">
                    <div class="col-6 text-right">
                        <input class="btn btn-danger" type="reset" value="Annuler">
                    </div>
                    <div class="col-6">
                        <input class="btn btn-success" type="submit" value="Soumettre"">
                    </div>
                </div>
            </form>
            </div>
            </div>';
        }
    ?>
</body>
</html>