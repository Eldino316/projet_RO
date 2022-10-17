<?php
include("connexion.php");
?>
<?php

session_start();
?>

<?php

if (!isset($_SESSION['note'])) {
    $_SESSION['note'] = 0;
}

if($_POST){
    $questions ="select * from questions";
$bnquest= mysqli_query($conn,$questions);
$total = mysqli_num_rows($bnquest);
$nombre = $_POST['nombre'];
$selectchoix = $_POST['choix'];
$suivant = $nombre + 1 ;


$query ="select * from options where a = $nombre and b = 1 ";
$resultat = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($resultat);
$reponse = $row['optionsid'];

if ($selectchoix == $reponse) {
    $_SESSION['note']++;
    
}

if ($nombre == $total) {
    header("LOCATION: final.php");
}else{
header("LOCATION: examen.php?n=".$suivant);
}

}



/*$nombre = $_GET['n'];
include("header.php");


$question = mysqli_fetch_assoc($result);

$req= "select * from options where a = $nombre";
$options = mysqli_query($conn,$req);



*/

?>