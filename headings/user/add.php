<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-12 col-lg-4">
        <h2>Ajout d'un compte <?= heading('singular') ?></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href=".">Accueil</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= route('home') ?>"><?= heading('title') ?></a>
            </li>
            <li class="breadcrumb-item active">
                <strong><?= heading('male') ? 'Nouveau' : 'Nouvelle' ?> <?= heading('singular') ?></strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><?= heading('add')['title'] ?></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" action="<?= route('save'); ?>">
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Nom complet</label>
                            <div class="col-lg-4">
                                <input type="text" name="name" placeholder="Nom complet" class="form-control">
                            </div>
                            <label class="col-lg-2 col-form-label">Nom d'utilisateur</label>
                            <div class="col-lg-4">
                                <input type="text" name="username" placeholder="Nom d'utilisateur" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Profil</label>
                            <div class="col-sm-10">
                                <select class="form-control m-b" name="profile">
                                    <option value="1">Administrateur</option>
                                    <option value="2" selected>Sage Femme</option>
                                    <option value="3">Major</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Mot de passe</label>
                            <div class="col-lg-4">
                                <input type="password" name="pass" placeholder="Password" value="1234" class="form-control">
                                <span class="form-text m-b-none">Mot de passe par défaut : <b>1234</b></span>
                            </div>
                            <label class="col-lg-2 col-form-label">Confirmation du mot de passe</label>
                            <div class="col-lg-4">
                                <input type="password" name="pass_confirm" placeholder="Password" value="1234" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-sm btn-primary" type="submit">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>