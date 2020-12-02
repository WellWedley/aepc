

<?php
include('./db.php');
session_start();
$id_tut = $_SESSION['id_tut'];

if (isset($_POST['ajout_enf'])) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $date = $_POST['date'];
    $result = mysqli_query(
        $con,
        "SELECT * FROM enfants WHERE 
        fk_id_tut='$id_tut' AND prenom_enf='$prenom' AND nom_enf='$nom'"
    );
    $num_rows = mysqli_num_rows($result);
    $e = mysqli_error($con);
    header("location: ./welcome.php?remarks=error&value=$e");
    if ($num_rows) {
        header("location: ./welcome.php?remarks=failed");
    } else {

        if (mysqli_query($con, "INSERT INTO enfants(prenom_enf, nom_enf, date_naiss_enf,fk_id_tut)
            VALUES('$prenom', '$nom','$date','$id_tut')")) {
            header("location: ./welcome.php?remarks=success");
        } else {
            $e = mysqli_error($con);
            header("location: ./welcome.php?remarks=error&value=$e");
        }
    }
} elseif (isset($_POST['ajout_sej'])) {
    print_r($_POST);
    $sejour_choisi = $_POST['choix_sejour'];
    $enfant_choisi = $_POST['choix_enf'];
    $result = mysqli_query(
        $con,
        "SELECT * 
        FROM participe_sejour 
        WHERE fk_id_sejour=$sejour_choisi 
        AND fk_id_enf=$enfant_choisi "
    );
    $num_rows = mysqli_num_rows($result);

    if ($num_rows) {
        header("location: ./welcome.php?remarks=failed");
    } else {

        if (mysqli_query($con, "INSERT INTO participe_sejour(fk_id_enf, fk_id_sejour)
        VALUES($enfant_choisi,$sejour_choisi) 
        ")) {
            header("location: ./welcome.php?remarks=success");
        } else {
            $e = mysqli_error($con);
            header("location: ./welcome.php?remarks=error&value=$e");
        }
    }
}

?>