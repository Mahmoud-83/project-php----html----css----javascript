<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "gestion_de_produit";

$id = (int)$_POST["ID"];

 
$cnx=mysqli_connect($servername, $username, $password, $dbname);
$sql ="DELETE FROM `produit` WHERE `id`='$id' ";
$res=mysqli_query($cnx,$sql);
if($res){
    echo"<h5>produit supprimer avec succès </h5><br>";
    echo"<a href="."affiche.php"." style='   background-color: black;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;'> affiche votre produit</a>";}
else{
    echo"<h5>EREUR </h5>";
}

?>