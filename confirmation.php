<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Réinitialisation de mot de passe</title>
</head>
<body>
<form action="enregistrer.php" method="post">
    <input name="password1" type="password" id="pass1">
    <input type="password" id="pass2">
    <button id="submit">Valider</button>
    <div id="entropy"></div>
</form>
<script src="zxcvbn.js"></script>
<script src="script.js"></script>
</body>
</html>