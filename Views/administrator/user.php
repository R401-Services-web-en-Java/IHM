<br>
<div id="products">
<h1>Liste des utilisateur</h1>
<div id="productsList">
<?php
foreach($A_view as $A_product){
    echo '
    <div class ="product">  <h2>'. $A_product["username"] .'</h2>
    <p>'.$A_product['firstname'].' ' .$A_product['lastname'].'</p>
    <form method="post" action="/administrator/modifyordeleteuser">
            <input type="hidden" name="username" value="'. $A_product["username"] .'">
            <input type="submit" name="submit" value="Voir le compte">
            <input type="submit" name="submit" value="Supprimmer">
        </form>
    </div>
    ';
}
?>
</div></div>