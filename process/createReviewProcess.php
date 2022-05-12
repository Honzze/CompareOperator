<?php 
include '../config/connectBDD.php';
include '../config/autoload.php';

$manager = new Manager();
if (isset($_POST['review']) ?? empty($_POST['review']) && isset($_POST['username']) ?? empty($_POST['username'])&& isset($_POST['idto']) ?? empty($_POST['idto'])){
    $manager->createReview($_POST['review'], $_POST['username'], $_POST['idto']);
}

header("Location:../operator.php") 
?>