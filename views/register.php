<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/js/register.js" defer></script>
    <title>Inscriptions - ProConnect</title>
</head>

<body>
    <h1>Crée un compte</h1>

    <main>
        <form action="" method="post">
            <div>
                <label for="role">Je m'inscris en tant que :</label>
                <select name="role" id="role" required>
                    <option value="">-- Choisissez un rôle --</option>
                    <option value="particulier">Particulier</option>
                    <option value="professionnel">Professionnel</option>
                </select>
            </div>

            <!-- Bloc spécifique pour les Particuliers (masqué par défaut via CSS plus tard) -->
            <fieldset id="form-particulier">
                <legend>Informations Personnelles</legend>
                <!-- TODO 1: Ajoute les inputs pour 'name', 'surname' et 'birth_date' (type="date") -->
                <label for="surname">Nom :</label>
                <input type="text" name="surname" id="surname" placeholder="Dupont" maxlength="50" required>

                <label for="name">Prénom :</label>
                <input type="text" name="name" id="name" placeholder="Jean" maxlength="50" required>

                <label for="birth_date">Date de naissance</label>
                <input type="date" name="birth_date" id="birth_date" required>
            </fieldset>

            <!-- Bloc spécifique pour les Professionnels -->
            <fieldset id="form-professionnel">
                <legend>Informations Entreprise</legend>
                <!-- TODO 2: Ajoute les inputs pour 'company_name', 'num_siret' (pattern à définir !), 'price_moy' et 'description' -->
                <label for="company_name">Nom de l'entreprise</label>
                <input type="text" name="company_name" id="company_name" required>

                <label for="num_siret">Numéro de Siret</label>
                <input type="text" name="num_siret" id="num_siret" pattern="[0-9]{14}" maxlength="14" inputmode="numeric">

                <label for="price_moy">Prix moyen des préstations en €</label>
                <input type="number" name="price_moy" id="price_moy" inputmode="numeric">

                <label for="description">Description des préstations</label>
                <textarea name="description" id="description" rows="4" maxlength="550" placeholder="Votre description ici..."></textarea>
            </fieldset>

            <div>
                <label for="email">Adresse email :</label>
                <input type="email" name="email" id="email" placeholder="Ex : dupont@gmail.com" required>
            </div>

            <div>
                <label for="phone">N° Téléphone :</label>
                <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" maxlength="10" inputmode="numeric" placeholder="Ex : 0659798544" value="" required>
            </div>

            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" autocomplete="off" minlength="8" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*]).{8,}" required>
            </div>

            <div>
                <label for="verifPassword">Confirmer le mot de passe :</label>
                <input type="password" class="form-control" name="verifPassword" id="verifPassword" autocomplete="off" minlength="8" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*]).{8,}" required>
            </div>

            <div>
                <label for="postalCode">Code postal :</label>
                <input type="text" name="postalCode" id="postalCode" pattern="[0-9]{5}" maxlength="5" inputmode="numeric" placeholder="Ex : 59250" value="" required>
            </div>

            <div>
                <label for="city">Ville :</label>
                <input type="text" name="city" id="city" required>
            </div>

            <div>
                <button type="submit">Envoyer le formulaire</button>
            </div>
        </form>
    </main>

</body>

</html>