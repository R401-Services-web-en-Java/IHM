<header>
    <h1> Mon Panier </h1> 
<?php if(Session::getSession()){
    echo '<a href ="myaccount"> Mon Compte </a>';
    if(Session::getSession()['status'] == "admin"){
        echo '<a href ="administrator"> Espace Administrateur </a>';
    }
}else{
    echo '<a href ="/Signin"> Connexion </a>';
}
?>
</header>