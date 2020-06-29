<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>patie 9 exercice 8</title>
</head>
<body>
    <?php 
        //affiche la date au timestamp -22jours
        $passeDate = date('d-m-Y', strtotime('-22 days'));
    ?>
    <p><?= 'Il y a 22 jours nous etions le  ' . $passeDate ?></p>
</body>
</html>