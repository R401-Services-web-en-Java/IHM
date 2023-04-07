<?php
echo '
<form method="post" action="/administrator/modifyProduct">
    <label>Nom : </label>
    <input type="text" name="name" value="'. $A_view["name"] .'"> <br>
    <label>Prix : </label>
    <input type="text" name="price" value="'. $A_view["price"] .'"> <br>
    <label>Quantité : </label>
    <input type="text" name="quantity_stock" value="'. $A_view["quantity_stock"] .'"> <br>
    <fieldset>
    <legend>Choisir une unité:</legend>
    <div>';
    if($A_view["name"] == "kg"){
echo'   <input type="radio" id="kg" name="unit" value="kg" checked>
        <label for="kg">kg</label>
    </div>
    <div>
            <input type="radio" id="litre" name="unit" value="litre">
            <label for="dewey">litre</label>
    </div>
    <div>
            <input type="radio" id="unité" name="unit" value="unité">
            <label for="unité">unité</label>';
    }
    elseif($A_view["name"] == "kg"){
echo'   <input type="radio" id="kg" name="unit" value="kg" >
        <label for="kg">kg</label>
    </div>
    <div>
        <input type="radio" id="litre" name="unit" value="litre" checked>
        <label for="dewey">litre</label>
    </div>
    <div>
        <input type="radio" id="unité" name="unit" value="unité">
        <label for="unité">unité</label>';
    }
    else{
        echo' <input type="radio" id="kg" name="unit" value="kg" >
        <label for="kg">kg</label>
    </div>
    <div>
        <input type="radio" id="litre" name="unit" value="litre">
        <label for="dewey">litre</label>
    </div>
    <div>
        <input type="radio" id="unité" name="unit" value="unité" checked>
        <label for="unité">unité</label>';
    };
    echo'
    </div>
    </fieldset>
    <br>
    <input type="submit" value="Ajouter">
    </form>';
     
    
