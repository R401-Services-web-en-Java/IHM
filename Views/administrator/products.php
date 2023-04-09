<br>

<form method="post" action="/administrator/addProduct"><h1>Ajouter un produit</h1>
    <label>Nom du produit : </label>
    <input type="text" required name="name" placeholder="Nom"><br>
    <label>Prix du produit : </label>
    <input type="number" step="0.01"  max="9999999.99" required name="price" placeholder="Prix"><br>
    <label>Quantité du produit : </label>
    <input type="number" required name="quantity_stock" placeholder="Quantité"><br>
    <fieldset required>
    <legend>Choisir une unité:</legend>
    <div>
        <input type="radio" id="kg" name="unit" value="kg" checked>
        <label for="kg">kg</label>
    </div>
    <div>
        <input type="radio" id="litre" name="unit" value="litre">
        <label for="dewey">litre</label>
    </div>
    <div>
        <input type="radio" id="unité" name="unit" value="unité">
        <label for="unité">unité</label>
    </div>
    </fieldset>
    <br>
    <input type="submit" value="Ajouter">
</form>
<div id="products">
<h1>La liste de nos produits</h1>
<div id="productsList">
<?php
foreach($A_view as $A_product){
    echo '
    <div class ="product">  
        <h2>'. $A_product["name"] .'</h2>
        <br> prix : '. $A_product["price"] .'€ /'.$A_product["unit"] .'
        <br> Quantité restante : '. $A_product["quantity_stock"].'
        <form method="post" action="/administrator/modifyorDeleteProduct">
            <input type="hidden" name="name" value="'. $A_product["name"] .'">
            <input type="hidden" name="price" value="'. $A_product["price"] .'">
            <input type="hidden" name="quantity_stock" value="'. $A_product["quantity_stock"] .'">
            <input type="submit" name="submit" value="Modifier">
            <input type="submit" name="submit" value="Supprimmer">
        </form>
    </div>
    ';
}
?>
</div></div>

