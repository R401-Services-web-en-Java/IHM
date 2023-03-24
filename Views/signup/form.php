<form method="post" action="/Signup/register">
    <h2>Inscription</h2>
    <label for="id">Pseudo :</label>
    <input type="text" placeholder="Votre pseudo" name="id" required>
    <label for="id">Email :</label>
    <input id="password" type="password" placeholder="Votre mot de passe" name="password"  minlength="12" required >
    <label for="passwordConfirm">Confirmation de passe :</label>
    <input id="password_confirm" type="password" placeholder="Confirmation du mot de passe" title="Confirmation du mot de passe" required >
    <p>Déjà inscris ? <a href="/signin">Connectez vous !</a></p>
    <input class="submit" type="submit" value="Valider">
</form>
