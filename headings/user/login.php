<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $app['name']; ?> | Connexion</title>

    <link href="<?= theme_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= theme_url(); ?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?= theme_url(); ?>css/animate.css" rel="stylesheet">
    <link href="<?= theme_url(); ?>css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Bienvenue sur <?= $app['name']; ?></h2>

                <p>
                    <strong><?= $app['name']; ?></strong> est une plateforme de <?= $app['description']; ?>.
                </p>
                <p>
                    Il offre également une visibilité sur tous le traffic lié aux utilisateurs, aux naissances, etc. Ce
                    qui fait de lui un outil statistique et décisionnel.
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" method="post" action="<?= route('verify'); ?>">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Nom d'utilisateur" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="">
                        </div>
                        <button type="submit" name="user-verify" class="btn btn-primary block full-width m-b">Connexion</button>
                    </form>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright ALTIS
            </div>
            <div class="col-md-6 text-right">
               <small>© 2019</small>
            </div>
        </div>
    </div>

</body>

</html>
