<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-12 col-lg-4">
        <h2>Détails <?= heading('male') ? 'du' : 'de la' ?> <?= heading('singular') ?></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href=".">Accueil</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= route('home') ?>"><?= heading('title') ?></a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Consultation</strong>
            </li>
        </ol>
    </div>
    <?php if (has_right(get_actions('view')['print'])): ?>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="<?= route('printing', ['id' => $data['id']]) ?>"
                   class="btn btn-success d-print-none"><i class="fa fa-print"></i>
                    Imprimer <?= heading('male') ? 'le' : 'la' ?> <?= heading('singular') ?></a>
            </div>
        </div>
    <?php endif; ?>
</div>
<div class="wrapper wrapper-content">
    <div class="row animated fadeInRight">
        <div class="col-md-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Le certificat</h5>
                </div>
                <div>
                    <div class="ibox-content no-padding border-left-right"></div>
                    <div class="ibox-content profile-content">
                        <h4><strong>Numéro du certificat</strong></h4>
                        <p class="font-bold"><i class="fa fa-hashtag"></i> <?= $data['numero'] ?></p>

                        <h4><strong>Description</strong></h4>
                        <p>La sage-femme <b><?= $data['user'] ?></b> a fait accoucher <b><?= $data['mere'] ?></b> le
                            <b><?= $data['date'] ?> à <?= $data['heure'] ?></b>. D'un enfant
                            <b><?= $data['nature'] ?></b> de sexe <b><?= $data['sexe'] ?></b>.</p>
                        <div class="user-button">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="<?= route('edit', ['id' => $data['id']]) ?>"
                                       class="btn btn-primary btn-sm btn-block"><i
                                                class="fa fa-edit"></i> Modifier
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="<?= route('delete', ['id' => $data['id']]) ?>"
                                       class="btn btn-danger btn-sm btn-block"><i
                                                class="fa fa-trash"></i> Supprimer
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <?php if (count($data['declaration']) > 0) : ?>
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>La déclaration de naissance <span
                                    class="badge badge-warning font-bold">#<?= $data['declaration']['decl_numero'] ?></span>
                            de <?= $data['declaration']['decl_de'] ?>
                        </h5>
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
                        <div class="row">
                            <div class="col-lg-4">
                                <table class="table small">
                                    <tbody>
                                    <tr>
                                        <td class="no-borders">
                                            <span>Nom de l'enfant</span><br>
                                            <strong><?= $data['declaration']['enf_nom'] . ' ' . $data['declaration']['enf_prenom'] ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Naissance</span><br>
                                            <strong>Né
                                                le <?= $data['declaration']['enf_date_naiss'] . ' à ' . $data['declaration']['enf_heure_naiss'] . ' à ' . $data['declaration']['enf_lieu_naiss'] ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Identification</span><br>
                                            <strong><?= $data['declaration']['enf_type'] . ' de sexe ' . $data['declaration']['enf_sexe'] ?></strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table class="table small">
                                    <tbody>
                                    <tr>
                                        <td class="no-borders">
                                            <span>Père</span><br>
                                            <strong><?= $data['declaration']['pere_nom_compl'] ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Naissance</span><br>
                                            <strong>Né
                                                le <?= change_format($data['declaration']['pere_date_naiss']) . ' à ' . $data['declaration']['pere_lieu_naiss'] ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Domicile : <strong><?= $data['declaration']['pere_domicile'] ?></strong></span>,
                                            téléphone : <strong><?= $data['declaration']['pere_tel'] ?></strong><br>
                                            Profession : <strong><?= $data['declaration']['pere_profession'] ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Nationalité : </span>
                                            <strong><?= $data['declaration']['pere_nationalite'] ?></strong>, coutume :
                                            <strong><?= $data['declaration']['pere_coutume'] ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Pièce d'identité : </span><strong><?= $data['declaration']['pere_piece'] ?></strong><br>
                                            Numéro : <strong><?= $data['declaration']['pere_piece_num'] ?></strong><br>Valable
                                            jusqu'au :
                                            <strong><?= change_format($data['declaration']['pere_piece_validite']) ?></strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table class="table small">
                                    <tbody>
                                    <tr>
                                        <td class="no-borders">
                                            <span>Mère</span><br>
                                            <strong><?= $data['declaration']['mere_nom_compl'] ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Naissance</span><br>
                                            <strong>Né
                                                le <?= change_format($data['declaration']['mere_date_naiss']) . ' à ' . $data['declaration']['mere_lieu_naiss'] ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Domicile : <strong><?= $data['declaration']['mere_domicile'] ?></strong></span>,
                                            téléphone : <strong><?= $data['declaration']['mere_tel'] ?></strong><br>
                                            Profession : <strong><?= $data['declaration']['mere_profession'] ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Nationalité : </span>
                                            <strong><?= $data['declaration']['mere_nationalite'] ?></strong>, coutume :
                                            <strong><?= $data['declaration']['mere_coutume'] ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Pièce d'identité : </span><strong><?= $data['declaration']['mere_piece'] ?></strong><br>
                                            Numéro : <strong><?= $data['declaration']['mere_piece_num'] ?></strong><br>Valable
                                            jusqu'au :
                                            <strong><?= change_format($data['declaration']['mere_piece_validite']) ?></strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="middle-box text-center animated fadeInRight" style="margin-top: 10px">
                    <h3 class="font-bold"> <?= heading('male', 'declaration') ? 'Aucun' : 'Aucune' ?> <?= heading('singular', 'declaration') ?>
                        pour
                        le moment</h3>
                    <div class="error-desc">
                        Il n'y a pas encore de <?= heading('singular', 'declaration') ?> de naissance pour ce
                        certificat. Vous pouvez en ajouter en
                        cliquant sur
                        le bouton ci-dessous.<br/>
                        <a href="<?= route('add', ['id' => $data['id']], 'declaration') ?>"
                           class="btn btn-primary m-t"><i class="fa fa-plus"></i>
                            Ajouter <?= heading('male', 'declaration') ? 'un' : 'une' ?> <?= heading('singular', 'declaration') ?>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>