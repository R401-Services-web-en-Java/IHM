<header>
    <h1> <a href="/home">Mon Panier </a></h1> 
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