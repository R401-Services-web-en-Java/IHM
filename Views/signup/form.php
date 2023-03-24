<form method="post" action="/signup/register">
    <h2>Inscription</h2>
    <label for="id">Pseudo :</label>
    <input type="text" placeholder="Votre pseudo" name="id" required>
    <label for="id">Mot de passe :</label>
    <input type="password" placeholder="Votre mot de passe" name="password"  minlength="12" required >
    <label for="passwordConfirm">Confirmation le mot de passe :</label>
    <input name="passwordConfirm" type="password" placeholder="Confirmation du mot de passe" title="Confirmation du mot de passe" required >
    <p>Déjà inscris ? <a href="/signin">Connectez vous !</a></p>
    <input class="submit" type="submit" value="S'inscrire">
</form>
