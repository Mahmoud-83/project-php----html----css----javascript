
<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "gestion_de_produit";
 
$conn=mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
echo (" La connexion a échoué :\n " . mysqli_connect_error());
}
//echo "connexion a la base de donnes";
$req="select * from produit  ";
$resultat = mysqli_query($conn,$req);
if(mysqli_num_rows($resultat)>0)
{
    echo "<h3 style='text-align:center; color:#8D7570'><I>voici  votre resultat du base de donnes</I> </h3>";
    echo"<table style='width:70%;text-align:center;  margin-left: auto;margin-right: auto;  padding-top:1% ' border=1 >";
    echo"<caption >CSF STORE</caption>";
    echo "<tr>";
    echo"<th> "."ID"."</th>";
    echo"<th> "."NAME"."</th>";
    echo"<th> "."PRIX"."</th>";
    echo"<th> "."QANTITE"."</th>";
    echo"</tr>";
    foreach($resultat as $res){
       
        echo "<tr>";
        echo "<td>";
        echo"$res[id]";
        echo "</td>";
        echo "<td>";
        echo"$res[name]";
        echo "</td>";
        echo "<td>";
        echo"$res[prix]";
        echo "</td>";
        echo "<td>";
        echo"$res[qte]";
        echo "</td>";
        echo "</tr>";

        
    }
    echo"</table>";

}
else{


    echo"<h3>0 resultat ...  </h3><br> ";
    echo"<a href="."ajoute.html"." style='   background-color: blue;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;'> ajoute un produit</a>";}
    echo"<a href="."ajoute.html"." style='   background-color: blue;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;'> ajoute un produit</a>";

    echo"<a href="."sup.html"." style='   background-color: #f44336;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;'> supprime un produit par ID</a>";
    echo"<a href="."mod.html"." style='   background-color: #916810;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;'> modifier un produit</a>";

mysqli_close($conn);
?>
<html>
    <body>
    
    </body>
</html>