<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= get('name'); ?> | 404 Error</title>

    <link href="<?= theme_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= theme_url(); ?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?= theme_url(); ?>css/animate.css" rel="stylesheet">
    <link href="<?= theme_url(); ?>css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center animated fadeInDown">
        <h1>404</h1>
        <h3 class="font-bold">Page Non Trouvée</h3>

        <div class="error-desc">
            Désolé, mais la page que vous tentez d'afficher n'existe pas. Vérifiez s'il n'y a pas d'erreurs dans l'URL et réessayez.
            <a href="" class="btn btn-primary m-t-lg">Actualiser</a>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?= theme_url(); ?>js/jquery-3.1.1.min.js"></script>
    <script src="<?= theme_url(); ?>js/popper.min.js"></script>
    <script src="<?= theme_url(); ?>js/bootstrap.js"></script>

</body>

</html>
