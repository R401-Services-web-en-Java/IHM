<br>
<div id="products">
<h1>La liste de nos produits</h1>
<div id="productsList">
<?php
foreach($A_view as $A_product){
    echo '
    <div class ="product">  
        <h2>'. $A_product["id"] .'</h2>
        <br> prix : '. $A_product["price"] .'€ /'.$A_product["unit"] .'
        <br> Quantité restante : '. $A_product["quantity_stock"].'
        <form method="post" action="#">
            <input type="hidden" name="id" value="'. $A_product["id"] .'">
            <input type="hidden" name="price" value="'. $A_product["price"] .'">
            <input type="hidden" name="quantity" value="'. $A_product["quantity_stock"] .'">
            <input type="submit" value="Modifier">
            <input type="submit" value="Supprimmer">
        </form>
    </div>
    ';
}
?>
</div></div>

