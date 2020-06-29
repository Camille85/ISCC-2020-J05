
<h3>
<?php
$nom_produit = "t-shirt simple";
echo'Le nom du produit est ';
echo$nom_produit;
?>

<p>

    <?php
$quantité = '10';
echo 'Il reste ';
echo $quantité;
echo ' produit en stock';
?>

<p>

<?php
$couleur = 'blanc';
echo 'Le produit ';
echo $nom_produit;
echo ' est de couleur ';
echo$couleur;
?>
</h3>

<h4>
<?php
$prix = "10.50";
echo'Acheter 3 produits coûterait ';
echo$prix+$prix+$prix;
?> 

<p>

<?php
$prix = "10.50";
echo'Acheter la totalité des produits disponible coûterait ';
echo$prix*$quantité;
?> 

<p>

<?php
$prix = "10.50";
echo'Si 3 produits sont vendus, il reste ';
echo$quantité-3;
echo' produits en stock';
?> 

</h4>

<p>
<?php
$disponible = 'true';
$quantité = '10';
$nom_produit = "t-shirt simple";

if ($quantité >0)
{
    echo 'Le produit ';
    echo$nom_produit;
    echo ' est disponible en ligne.';
    $disponible = 'true';
}
else 
{
    echo "le produit ";
    echo$nom_produit;
    echo " n'est malheureusement plus disponible en ligne.";
    $disponible = 'false';
}
?>
</p>

<p>
<?php
$disponible = 'true';
$quantité = '3';
$nom_produit = "t-shirt simple";

if ($quantité >5)
{
    echo 'Il reste ';
    echo$quantité;
    echo ' produits en magasin.';
    
}
elseif ($quantité <5)
{
    echo 'Il ne reste plus que ';
    echo$quantité;
    echo ' produits en magasin.';
    
}
elseif ($quantité =1)
{
    echo "Il ne reste plus qu'un produit en magasin. ";
}
elseif ($quantité =0)
{
    echo "Il ne reste plus qu'un produit en magasin.";
}
?>
</p>




<?php
$nom_produit = "t-shirt simple";
$prix = '10.50';
$quantité = '10';
$couleur = 'blanc';
$disponible = 'true';
?>


