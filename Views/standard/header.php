<header>
    <h1> Mon Panier </h1> 
<?php if(Session::getSession()){
    echo '<a href ="#"> Mon Compte </a>';
    if(Session::getSession()['status'] == "admin"){
        echo '<a href ="#"> Espace Administrateur </a>';
    }
}else{
    echo '<a href ="/Signin"> Connexion </a>';
}
?>
</header>