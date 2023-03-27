<form method="post" action="/signup/register">
    <h2>Inscription</h2>

    <label for="username">Pseudo :</label>
    <input type="text" placeholder="Votre pseudo" name="username" required>

    <label for="lastname">Nom :</label>
    <input type="text" placeholder="Votre nom" name="lastname" required>

    <label for="firstname">Prénom :</label>
    <input type="text" placeholder="Votre prénom" name="firstname" required>

    <label for="email">Pseudo :</label>
    <input type="email" placeholder="Votre email" name="mail" required>

    <label for="id">Mot de passe :</label>
    <input type="password" placeholder="Votre mot de passe" name="password"  minlength="12" required >
    <label for="passwordConfirm">Confirmation le mot de passe :</label>
    <input name="passwordConfirm" type="password" placeholder="Confirmation du mot de passe" title="Confirmation du mot de passe" required >
    <p>Déjà inscris ? <a href="/signin">Connectez vous !</a></p>
    <input class="submit" type="submit" value="S'inscrire">
</form>
