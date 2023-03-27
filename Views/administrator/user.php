<br>
<div id="products">
<h1>Liste des utilisateur</h1>
<div id="productsList">
<?php
foreach($A_view as $A_product){
    echo '
    <div class ="product">  <h2>'. $A_product["username"] .'</h2>
    <form method="post" action="#">
            <input type="hidden" name="id" value="'. $A_product["username"] .'">
            <input type="submit" value="Voir le compte">
            <input type="submit" value="Supprimmer">
        </form>
    </div>
    ';
}
?>
</div></div>