<section class="content-header">
    <h1>
        <?= __('Valoraciones') ?>
        <small><?= __('Ver') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-dashboard"></i> <?= __('Inicio') ?></a></li>
        <li><a href="<?php echo $this->Url->build('/valuations'); ?>"><i class="fa fa-dashboard"></i> <?= __('Valoraciones') ?></a></li>
        <li class="active"><?= $valuation->name ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Datos de la Valoración'); ?></h3>
                </div>
                <?= $this->Form->create($valuation) ?>
                <div class="box-body">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 40%;"><?= __('Nombre') ?></th>
                            <td><?= h($valuation->name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Posición') ?></th>
                            <td><?= h($valuation->position) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Publicado') ?></th>
                            <td><?= ($valuation->published == 'S') ? 'Si' : 'No' ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Creado por') ?></th>
                            <td><?= $this->Number->format($valuation->user_created) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modificado por') ?></th>
                            <td><?= $this->Number->format($valuation->user_modified) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Creado') ?></th>
                            <td><?= $this->Time->format($valuation->created, 'dd/MM/Y HH:mm:ss') ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modificado') ?></th>
                            <td><?= $this->Time->format($valuation->modified, 'dd/MM/Y HH:mm:ss') ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</section>
