<section class="content-header">
    <h1>
        <?= __('Prioridades') ?>
        <small><?= __('Ver') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build('/priorities'); ?>"><i class="fa fa-dashboard"></i> <?= __('Inicio') ?></a></li>
        <li><a href="<?php echo $this->Url->build('/priorities'); ?>"><i class="fa fa-dashboard"></i> <?= __('Prioridades') ?></a></li>
        <li class="active"><?= $priority->name ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Datos de la Categoria'); ?></h3>
                </div>
                <?= $this->Form->create($priority) ?>
                <div class="box-body">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 40%;"><?= __('Nombre') ?></th>
                            <td><?= h($priority->name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('nivel') ?></th>
                            <td><?= h($priority->level) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('color') ?></th>
                            <td><?= h($priority->color) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Publicado') ?></th>
                            <td><?= ($priority->published == 'S')?'Si':'No' ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Creado por') ?></th>
                            <td><?= $this->Number->format($priority->user_created) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modificado por') ?></th>
                            <td><?= $this->Number->format($priority->user_modified) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Creado') ?></th>
                            <td><?= $this->Time->format($priority->created, 'dd/MM/Y HH:mm:ss') ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modificado') ?></th>
                            <td><?= $this->Time->format($priority->modified, 'dd/MM/Y HH:mm:ss') ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Publicaciones relacionadas'); ?></h3>
                </div>
                <?= $this->Form->create($priority) ?>
                <div class="box-body">
                    <?php if (!empty($priority->posts)): ?>
                    <table class="table table-striped">
                        <tr>
                            <th>#</th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Código') ?></th>
                            <th><?= __('Publicado') ?></th>
                        </tr>
                        <?php $i = 0; foreach ($priority->posts as $posts): $i++; ?>
                        <tr>
                            <td><?= h($i) ?></td>
                            <td><?= h($post->name) ?></td>
                            <td><?= h($post->code) ?></td>
                            <td><?= ($post->published == 1)?'Si':'No' ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                
            </div>
        </div>
    </div>
</section>