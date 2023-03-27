<p>Bienvenus</p> 
<?php
    echo '
    <div class ="product">  
        <h2>'. $A_view["username"] .'</h2> <p>
        <br> Prenom : '. $A_view["firstname"].'
        <br> Nom : '. $A_view["lastname"].'
        <br> mail : '. $A_view["mail"].'
        <br> role : '. $A_view["role"].'
    </p></div>
    ';
?>
Afficher mes paniers:
    * les voir
    * les modifier
    * les supprimer