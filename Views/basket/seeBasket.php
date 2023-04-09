<?php

if(empty($A_view)){
    echo'<h2> Pas de produit dans le panier </h2>';
}else{
    foreach($A_view as $A_content){
        echo '
        <div class ="basket">
            <form action="basket/modifyordeleteproduct" method="post">
            <h2>'.$A_content["product_name"].'</h2>
                <input type="hidden" name="product_name" value="'.$A_content["product_name"].'">
                <input type="text" name="quantity" value="'.$A_content["quantity"].'">
                <input type="hidden" name="basket_id" value="'.$A_basket["basket_id"].'">
                <input type="submit" name="submit" value="Modifier">
                <input type="submit" name="submit" value="Supprimer">
            </form>
        </div>
        ';
    }
}
