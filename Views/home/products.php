<br>
<div id="products">
<h1>La liste de nos produits</h1>
<div id="productsList">
<?php
foreach($A_view as $A_product){
    echo '
    <div class ="product">  
        <h2>'. $A_product["id"] .'</h2>
        <p> <br> prix : '. $A_product["price"] .'€ / '.$A_product["unit"] .'
        <br> Quantité restante : '. $A_product["quantity_stock"].'
    </p></div>
    ';
}
?>
</div></div>