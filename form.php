<!-- tous les champs sont required et le champ mail a un type email -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <form action="thanks.php" method="POST">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_name" required>
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="user_first_name" required>
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_email" required>
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="text" id="phone" name="user_phone" required>
        </div>
        <div>
            <label for="subject">Sujet :</label>
            <select id="subject" name="user_subject" required>
                <option value="panne">Panne</option>
                <option value="informations">Informations</option>
                <option value="gestion">Gestion</option>
                <option value="autres">Autres</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" required></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>

</html>