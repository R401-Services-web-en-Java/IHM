<?php
echo'
<a href="/basket/add">Cree un nouveaux panier</a>
';
foreach($A_view as $A_basket){
    echo '
    <div class ="basket">  
        <form action="/basket/seeBasket" method="post">
        <h2> Panier n° '. $A_basket["basket_id"] .'</h2>
            <input type="hidden" name="basket_id" value="'.$A_basket["basket_id"].'">
            <input type="submit"  name="submit" value="Voir le panier">
            <input type="submit"  name="submit" value="Supprimer">
        </form>
    </div>
    ';
}