<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-12 col-lg-4">
        <h2>Modification d'<?= heading('male') ? 'un' : 'une' ?> <?= heading('singular') ?></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href=".">Accueil</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= route('home') ?>"><?= heading('title') ?></a>
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
                    <h5>Formulaire de modification des
                        informations <?= heading('male') ? (apostrophe(heading('singular')) ? 'de l\'' : 'du ') : 'de la ' ?><?= heading('singular') ?></h5>
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
                        <?php if (isset($data['fields'])) : ?>
                            <input type="hidden" name="id" value="<?= $data['item']['id']; ?>">
                            <p class="font-italic">Les champs marqués d'un astérix <span class="text-danger">*</span>
                                sont
                                obligatoires</p>
                            <?php foreach ($data['fields'] as $pos => $field) : ?>
                                <?php if ($pos % 2 == 0) : ?>
                                    <div class="form-group row">
                                <?php endif; ?>
                                <label class="col-lg-2 col-form-label">
                                    <?= isset($field['label']) ? $field['label'] : str_replace('_', ' ', ucfirst($field['name'])) ?>
                                    <span class="text-danger">
                                    <?= (isset($field['required']) and $field['required']) ? '*' : ''; ?>
                                </span>
                                </label>
                                <div class="col-lg-4">
                                    <?php if (isset($field['type']) and $field['type'] == 'select') : ?>
                                        <select name="<?= $field['name']; ?>"
                                                class="form-control" <?= (isset($field['required']) and $field['required']) ? 'required' : ''; ?>>
                                            <?php foreach ($field['options'] as $key => $option) : ?>
                                                <option value="<?= $key ?>" <?= ($data['item'][$field['name']] == $key) ? 'selected' : ''; ?>><?= $option ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    <?php else: ?>
                                        <input type="<?= isset($field['type']) ? $field['type'] : 'text' ?>"
                                               name="<?= $field['name']; ?>" value="<?= $data['item'][$field['name']]; ?>"
                                               placeholder="<?= (isset($field['placeholder'])) ? $field['placeholder'] : str_replace('_', ' ', ucfirst($field['name'])); ?>"
                                               class="form-control" <?= (isset($field['required']) and $field['required']) ? 'required' : ''; ?>>
                                    <?php endif; ?>
                                </div>
                                <?php if ($pos % 2 != 0 or ($pos == count($data['fields']) - 1)) : ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <div class="form-group row mt-5">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-sm btn-primary" type="submit">Enregistrer</button>
                                </div>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>