<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-12 col-lg-4">
        <h2>Ajout d'<?= heading('male', 'declaration') ? 'un' : 'une' ?> <?= heading('singular', 'declaration') ?></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href=".">Accueil</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= route('home') ?>"><?= heading('title') ?></a>
            </li>
            <li class="breadcrumb-item active">
                <strong><?= heading('male', 'declaration') ? 'Nouveau' : 'Nouvelle' ?> <?= heading('singular', 'declaration') ?></strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><?= heading('add', 'declaration')['title'] ?></h5>
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
                    <form method="post" action="<?= route('save', [], 'declaration'); ?>">
                        <input type="hidden" name="decl_numero" value="<?= $_GET['c'] ?>">
                        <div class="form-group text-center m-b-lg">
                            <label class="font-bold">Numéro de certificat</label>
                            <input type="text" disabled value="<?= $_GET['c'] ?>" class="form-control text-center offset-lg-4 col-lg-4">
                        </div>
                        <h3 class="m-t-none m-b">1 - Identification de l'enfant</h3>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Nom(s)</label>
                            <div class="col-lg-4">
                                <input type="text" name="enf_nom" placeholder="Entrez le nom de l'enfant" class="form-control" required>
                            </div>
                            <label class="col-lg-2 col-form-label">Prénom(s)</label>
                            <div class="col-lg-4">
                                <input type="text" name="enf_prenom" placeholder="Entrez le prénom de l'enfant" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Date de naissance</label>
                            <div class="col-lg-4">
                                <input type="date" name="enf_date_naiss" class="form-control" required>
                            </div>
                            <label class="col-lg-2 col-form-label">Heure de naissance</label>
                            <div class="col-lg-4">
                                <input type="text" name="enf_heure_naiss" placeholder="Heure de naissance" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Lieu de naissance</label>
                            <div class="col-lg-4">
                                <input type="text" name="enf_lieu_naiss" placeholder="Lieu de naissance" class="form-control" required>
                            </div>
                            <label class="col-sm-2 col-form-label">Sexe</label>
                            <div class="col-sm-4">
                                <select class="form-control m-b" name="enf_sexe" required>
                                    <option value="1" selected>Masculin</option>
                                    <option value="2">Feminin</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Statut de l'enfant</label>
                            <div class="col-sm-4">
                                <select class="form-control m-b" name="enf_type" required>
                                    <option value="1">Enfant légitime</option>
                                    <option value="2">Enfant naturel</option>
                                    <option value="3">Enfant naturel ou non reconnu</option>
                                    <option value="4">Enfant retrouvé</option>
                                </select>
                            </div>
                            <label class="col-lg-2 col-form-label">Bullentin de naissance de</label>
                            <div class="col-lg-4">
                                <input type="text" name="decl_de" placeholder="Bullentin de naissance de" class="form-control" required>
                            </div>
                        </div>
                        <h3 class="m-t-none m-b">2 - Identification du père</h3>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Nom complet du père</label>
                            <div class="col-lg-4">
                                <input type="text" name="pere_nom_compl" placeholder="Entrez le nom du père" class="form-control" required>
                            </div>
                            <label class="col-lg-2 col-form-label">Domicile</label>
                            <div class="col-lg-4">
                                <input type="text" name="pere_domicile" placeholder="Entrez le domicile du père" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Date de naissance</label>
                            <div class="col-lg-4">
                                <input type="date" name="pere_date_naiss" class="form-control" required>
                            </div>
                            <label class="col-lg-2 col-form-label">Lieu de naissance</label>
                            <div class="col-lg-4">
                                <input type="text" name="pere_lieu_naiss" placeholder="Lieu de naissance" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Profession</label>
                            <div class="col-lg-4">
                                <input type="text" name="pere_profession" placeholder="Profession" class="form-control" required>
                            </div>
                            <label class="col-lg-2 col-form-label">Téléphone</label>
                            <div class="col-lg-4">
                                <input type="text" name="pere_tel" placeholder="Téléphone" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Nationalité</label>
                            <div class="col-lg-4">
                                <input type="text" name="pere_nationalite" placeholder="Naionalité" value="Gabonaise" class="form-control" required>
                            </div>
                            <label class="col-lg-2 col-form-label">Coutume</label>
                            <div class="col-lg-4">
                                <input type="text" name="pere_coutume" placeholder="Coutume" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Pièce</label>
                            <div class="col-lg-3">
                                <input type="text" name="pere_piece" placeholder="Nature de la pièce fournie" class="form-control" required>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" name="pere_piece_num" placeholder="Numéro de la pièce fournie" class="form-control" required>
                            </div>
                            <div class="col-lg-3">
                                <input type="date" name="pere_piece_validite" placeholder="Date de validité" class="form-control" required>
                            </div>
                        </div>
                        <h3 class="m-t-none m-b">3 - Identification du mère</h3>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Nom complet du mère</label>
                            <div class="col-lg-4">
                                <input type="text" name="mere_nom_compl" placeholder="Entrez le nom du mère" class="form-control" required>
                            </div>
                            <label class="col-lg-2 col-form-label">Domicile</label>
                            <div class="col-lg-4">
                                <input type="text" name="mere_domicile" placeholder="Entrez le domicile du mère" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Date de naissance</label>
                            <div class="col-lg-4">
                                <input type="date" name="mere_date_naiss" class="form-control" required>
                            </div>
                            <label class="col-lg-2 col-form-label">Lieu de naissance</label>
                            <div class="col-lg-4">
                                <input type="text" name="mere_lieu_naiss" placeholder="Lieu de naissance" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Profession</label>
                            <div class="col-lg-4">
                                <input type="text" name="mere_profession" placeholder="Profession" class="form-control" required>
                            </div>
                            <label class="col-lg-2 col-form-label">Téléphone</label>
                            <div class="col-lg-4">
                                <input type="text" name="mere_tel" placeholder="Téléphone" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Nationalité</label>
                            <div class="col-lg-4">
                                <input type="text" name="mere_nationalite" placeholder="Naionalité" value="Gabonaise" class="form-control" required>
                            </div>
                            <label class="col-lg-2 col-form-label">Coutume</label>
                            <div class="col-lg-4">
                                <input type="text" name="mere_coutume" placeholder="Coutume" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Pièce</label>
                            <div class="col-lg-3">
                                <input type="text" name="mere_piece" placeholder="Nature de la pièce fournie" class="form-control" required>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" name="mere_piece_num" placeholder="Numéro de la pièce fournie" class="form-control" required>
                            </div>
                            <div class="col-lg-3">
                                <input type="date" name="mere_piece_validite" placeholder="Date de validité" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row m-t-lg">
                            <div class="col-lg-12">
                                <button class="btn btn-sm btn-primary float-right m-t-lg" type="submit">Enregistrer la déclaration</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>