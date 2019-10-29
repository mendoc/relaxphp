<?php
/**
 * Created by PhpStorm.
 * User: Dimitri
 * Date: 24/10/2019
 * Time: 13:25
 */
?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-12 col-lg-4">
        <h2>Liste des <?= heading('plural') ?></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href=".">Accueil</a>
            </li>
            <li class="breadcrumb-item active">
                <strong><?= heading('title') ?></strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <a href="<?= route('add') ?>"
               class="btn btn-primary d-print-none"><i class="fa fa-plus"></i>
                Ajouter <?= heading('male') ? 'un' : 'une' ?> <?= heading('singular') ?></a>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content">
    <?php if (count($data) > 0) : ?>
        <div class="col-lg-12 animated fadeInRight">
            <div class="ibox">
                <div class="ibox-title d-print-none">
                    <h5><?= heading('listing')['title'] ?> </h5>
                    <div><span><?= count($data); ?> au total</span></div>
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
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <?php foreach (heading('listing')['columns'] as $thead) : ?>
                                <th><?= (is_array($thead)) ? $thead['label'] : $thead ?></th>
                            <?php endforeach; ?>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data as $item) : ?>
                            <tr>
                                <?php foreach (heading('listing')['columns'] as $field => $thead) : ?>
                                    <td><?= $item[$field] ?></td>
                                <?php endforeach; ?>
                                <td class="d-print-none">
                                    <?php foreach (heading('listing')['actions'] as $action) : ?>
                                        <?php if (isset($action['group']) and $action['group']) continue; ?>
                                        <a href="<?= route($action['handler'], ['id' => $item['id']]) ?>" <?= (isset($action['target'])) ? 'target="' . $action['target'] . '"' : '' ?>
                                           class="btn btn-<?= $action['color'] ?> btn-xs btn-fill"><i
                                                    class="fa fa-<?= $action['icon'] ?>"></i> <?= $action['text'] ?></a>
                                    <?php endforeach; ?>
                                    <?php if (has_actions_grouped()) : ?>
                                        <div class="btn-group">
                                            <button data-toggle="dropdown"
                                                    class="btn btn-primary btn-xs dropdown-toggle">
                                                <i class="fa fa-cogs"></i> Actions
                                            </button>
                                            <ul class="dropdown-menu">
                                                <?php foreach (heading('listing')['actions'] as $action) : ?>
                                                    <?php if (isset($action['group']) and $action['group']) : ?>
                                                        <li><a class="dropdown-item text-<?= $action['color'] ?>"
                                                               href="<?= route($action['handler'], ['id' => $item['id']]) ?>" <?= (isset($action['target'])) ? 'target="' . $action['target'] . '"' : '' ?>><i
                                                                        class="fa fa-<?= $action['icon'] ?>"></i> <?= $action['text'] ?>
                                                            </a></li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="middle-box text-center animated bounceIn">
            <h3 class="font-bold"> <?= heading('male') ? 'Aucun' : 'Aucune' ?> <?= heading('singular') ?> pour le
                moment</h3>
            <div class="error-desc">
                Il n'y a pas encore de <?= heading('plural') ?> pour le moment. Vous pouvez en ajouter en cliquant sur
                le bouton ci-dessous.<br/>
                <a href="<?= route('add') ?>"
                   class="btn btn-primary m-t"><i class="fa fa-plus"></i>
                    Ajouter <?= heading('male') ? 'un' : 'une' ?> <?= heading('singular') ?></a>
            </div>
        </div>
    <?php endif; ?>
</div>