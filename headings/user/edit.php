<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-12 col-lg-4">
        <h2>Modification d'un compte <?= heading('singular') ?></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href=".">Accueil</a>
            </li>
            <li class="breadcrumb-item">
                <a href="."><?= heading('title') ?></a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Modifier <?= heading('male') ? 'un' : 'une' ?> <?= heading('singular') ?></strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><?= heading('edit')['title'] ?></h5>
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
                        <input type="hidden" name="id" value="<?= $data['id']; ?>">
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Nom complet</label>
                            <div class="col-lg-10">
                                <input type="text" name="name" value="<?= $data['name']; ?>" placeholder="Nom complet" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Profil</label>
                            <div class="col-sm-10">
                                <select class="form-control m-b" name="profile">
                                    <option value="1" <?= ($data['profile'] == 1) ? 'selected' : ''; ?>>Administrateur</option>
                                    <option value="2" <?= ($data['profile'] == 2) ? 'selected' : ''; ?>>Sage Femme</option>
                                    <option value="3" <?= ($data['profile'] == 3) ? 'selected' : ''; ?>>Major</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Mot de passe</label>
                            <div class="col-lg-4">
                                <input type="password" name="pass" placeholder="Mot de passe" class="form-control">
                                <span class="form-text m-b-none">Laissez vide si vous ne voulez pas changer le mot de passe</span>
                            </div>
                            <label class="col-lg-2 col-form-label">Confirmation du mot de passe</label>
                            <div class="col-lg-4">
                                <input type="password" name="pass_confirm" placeholder="Confirmation du mot de passe" class="form-control">
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