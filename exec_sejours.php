

<?php
include('./db.php');
session_start();
$id_tut = $_SESSION['id_tut'];
// $result = mysqli_query($con, "SELECT * FROM enfants WHERE fk_id_tut='$id_tut'");
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$date = $_POST['date'];
$result = mysqli_query(
    $con,
    "SELECT * FROM participe_sejours WHERE 
    fk_idenf='$id_tut'"
);
$num_rows = mysqli_num_rows($result);
$e = mysqli_error($con);
header("location: ./welcome.php?remarks=error&value=$e");
if ($num_rows) {
    echo $num_rows ; 
} else {

    if (mysqli_query($con, "INSERT INTO enfants(prenom_enf, nom_enf, date_naiss_enf,fk_id_tut)
        VALUES('$prenom', '$nom','$date','$id_tut')")) {
        header("location: ./welcome.php?remarks=success");
    } else {
        $e = mysqli_error($con);
        header("location: ./welcome.php?remarks=error&value=$e");
    }
}
?>