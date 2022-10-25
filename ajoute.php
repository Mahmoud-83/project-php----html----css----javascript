<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "gestion_de_produit";

$id = (int)$_POST["ID"];
$name = $_POST["NAME"];
$pr = (float) $_POST['PRIX'];
$qte =(int) $_POST['QTE'];
 
$cnx=mysqli_connect($servername, $username, $password, $dbname);


$sql ="INSERT INTO `produit` (`id`, `name`, `prix`, `qte`) VALUES ('$id', '$name', '$pr', '$qte')";
$res=mysqli_query($cnx,$sql);
if($res){


    echo"<h5>produit ajoute avec succès </h5><br>";
    echo"<a href="."affiche.php"." style='   background-color: black;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;'> affiche votre produit</a>";}
else
    echo "<h5>erreur </h5>";



?>