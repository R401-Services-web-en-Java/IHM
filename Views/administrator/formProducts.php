<?php
echo '
<form method="post" action="/administrator/modifyProduct">
    <label>Nom : </label>
    <input type="text" name="name" value="'. $A_view["name"] .'"> <br>
    <label>Prix : </label>
    <input type="text" name="price" value="'. $A_view["price"] .'"> <br>
    <label>Quantité : </label>
    <input type="text" name="quantity_stock" value="'. $A_view["quantity_stock"] .'"> <br>
    <input type="submit" value="Modifier">
</form> ';