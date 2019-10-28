<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-12 col-lg-4">
        <h2>Ajout d'un <?= heading('singular') ?></h2>
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
                            <label class="col-lg-3 col-form-label">Sage-Femme</label>
                            <div class="col-lg-9">
                                <input type="text" disabled="" placeholder="<?= session('n'); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Mère</label>
                            <div class="col-lg-9">
                                <input type="text" name="mere" placeholder="Nom complet de la mère" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Date</label>
                            <div class="col-lg-3">
                                <input type="date" name="date" required value="<?= date('Y-m-d'); ?>" class="form-control">
                            </div>
                            <label class="col-lg-1 col-form-label">Heure</label>
                            <div class="col-lg-5">
                                <input type="text" name="heure" required value="<?= date('H:i'); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Nature de l'enfant</label>
                            <div class="col-lg-3">
                                <input type="text" name="nature" required class="form-control">
                            </div>
                            <label class="col-sm-1 col-form-label">Sexe</label>
                            <div class="col-sm-5">
                                <select class="form-control m-b" name="sexe" required>
                                    <option value="1" selected>Masculin</option>
                                    <option value="2">Feminin</option>
                                </select>
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