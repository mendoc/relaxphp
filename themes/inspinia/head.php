<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $app['name']; ?> | <?= $app['description']; ?></title>

    <link href="<?= theme_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= theme_url(); ?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?= theme_url(); ?>css/animate.css" rel="stylesheet">
    <link href="<?= theme_url(); ?>css/style.css" rel="stylesheet">

</head>
<body class="no-skin-config">
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" height="48" src="<?= theme_url(); ?>img/1.png"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold"><?= session('n'); ?></span>
                            <span class="text-muted text-xs block"><?= session('p'); ?> <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="<?= route('logout', [], 'user') ?>">Déconnexion</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        PAD
                    </div>
                </li>
                <?php foreach ($app['headings'] as $heading) : ?>
                    <li<?= ($heading['name'] == heading('name')) ? ' class="active"' : ''?>>
                        <a href="?<?= $heading['route'] ?>"><i class="fa fa-<?= $heading['icon'] ?>"></i> <span
                                    class="nav-label"><?= $heading['title'] ?></span></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                                class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Bienvenue sur <?= $app['name']; ?></span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i> <span class="label label-primary">2</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-book fa-fw"></i> Une déclaration a été créée
                                        <span class="float-right text-muted small">12:47</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="#" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-sticky-note fa-fw"></i> Un certificat a été ajouté
                                        <span class="float-right text-muted small">12:40</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="<?= route('logout', [], 'user') ?>">
                            <i class="fa fa-sign-out"></i> Déconnexion
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
