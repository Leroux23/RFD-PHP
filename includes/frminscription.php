<form method="post" action="index.php?page=inscription">
    <div>
        <label for="nom">Nom&nbsp; :</label>
        <input type="text" id="nom" name="nom" />
    </div>
    <div>
        <label for="mail">Adresse mail&nbsp; :</label>
        <input type="text" id="mail" name="mail" />
    </div>
    <div>
        <label for="mdp">Mot de passe&nbsp; :</label>
        <input type="password" id="mdp" name="mdp" />
    </div>
    <input type="reset" value="Effacer" />
    <input type="submit" value="Envoyer" onclick="validerFrm()"/>
</form>