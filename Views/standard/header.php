<header>
     <a href="/home">Mon Panier </a>
<?php if(Session::getSession()){
    echo '<a href ="/myaccount"> Mon Compte </a>';
    if(Session::getSession()['status'] == "admin"){
        echo '<a href ="/administrator"> Espace Administrateur </a>';
    }
    echo'<a href ="/signin/disconnect"> Se deconnecter </a>';
}else{
    echo '<a href ="/Signin"> Connexion </a>';
}
?>
</header>