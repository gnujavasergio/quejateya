<section class="content-header">
    <h1>
        <?= __('Paises') ?>
        <small><?= __('Ver') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-dashboard"></i> <?= __('Inicio') ?></a></li>
        <li><a href="<?php echo $this->Url->build('/countries'); ?>"><i class="fa fa-dashboard"></i> <?= __('Paises') ?></a></li>
        <li class="active"><?= $country->name ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Datos del País'); ?></h3>
                </div>
                <?= $this->Form->create($country) ?>
                <div class="box-body">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 40%;"><?= __('Nombre') ?></th>
                            <td><?= h($country->name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Código') ?></th>
                            <td><?= h($country->code) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Publicado') ?></th>
                            <td><?= ($country->published == 'S')?'Si':'No' ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Creado por') ?></th>
                            <td><?= $this->Number->format($country->user_created) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modificado por') ?></th>
                            <td><?= $this->Number->format($country->user_modified) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Creado') ?></th>
                            <td><?= h($country->created) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modificado') ?></th>
                            <td><?= h($country->modified) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Ciudades relacionadas'); ?></h3>
                </div>
                <?= $this->Form->create($country) ?>
                <div class="box-body">
                    <?php if (!empty($country->cities)): ?>
                    <table class="table table-striped">
                        <tr>
                            <th>#</th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Código') ?></th>
                            <th><?= __('Publicado') ?></th>
                        </tr>
                        <?php $i = 0; foreach ($country->cities as $city): $i++; ?>
                        <tr>
                            <td><?= h($i) ?></td>
                            <td><?= h($city->name) ?></td>
                            <td><?= h($city->code) ?></td>
                            <td><?= ($city->published == 1)?'Si':'No' ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                
            </div>
        </div>
    </div>
</section>