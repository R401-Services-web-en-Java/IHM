<br>
<div id="products">
<h1>La liste de nos produits</h1>
<div id="productsList">
<?php
$I_basketID = $A_view['basket_id'];
unset($A_view['basket_id']);
foreach($A_view as $A_product){
    if($A_product["quantity_stock"] != 0){
        echo '
        <div class ="product">  
            <h2>'. $A_product["name"] .'</h2>
            <p> <br> prix : '. $A_product["price"] .'€ /'.$A_product["unit"] .'
            <br> Quantité restante : '. $A_product["quantity_stock"].'
            <form action="/basket/addProduct" method="post">
                <input type="hidden" name="basket_id" value="'.$I_basketID.'">
                <input type="hidden" name="product_name" value="'.$A_product["name"].'">
                <label for="quantity">Quantité :</label>
                <input type="number" name="quantity" value="1">
                <input type="submit" name="submit" value="Ajouter">
            </form>
        </p></div>
        ';
    }else{
        echo '
        <div class ="product">  
            <h3>'. $A_product["name"] .' Plus dispo </h3>
            <p> <br> prix : '. $A_product["price"] .'€ /'.$A_product["unit"] .'
        </p></div>
        ';  
    }
}
?>
</div></div>