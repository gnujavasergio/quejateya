<section class="content-header">
    <h1>
        <?= __('Categorias') ?>
        <small><?= __('Ver') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-dashboard"></i> <?= __('Inicio') ?></a></li>
        <li><a href="<?php echo $this->Url->build('/categories'); ?>"><i class="fa fa-dashboard"></i> <?= __('Categorias') ?></a></li>
        <li class="active"><?= $category->name ?></li>
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
                <?= $this->Form->create($category) ?>
                <div class="box-body">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 40%;"><?= __('Nombre') ?></th>
                            <td><?= h($category->name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Hastag') ?></th>
                            <td><?= h($category->hashtag) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Publicado') ?></th>
                            <td><?= ($category->published == 'S')?'Si':'No' ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Creado por') ?></th>
                            <td><?= $this->Number->format($category->user_created) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modificado por') ?></th>
                            <td><?= $this->Number->format($category->user_modified) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Creado') ?></th>
                            <td><?= $this->Time->format($category->created, 'dd/MM/Y HH:mm:ss') ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modificado') ?></th>
                            <td><?= $this->Time->format($category->modified, 'dd/MM/Y HH:mm:ss') ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Publicaciones relacionadas'); ?></h3>
                </div>
                <?= $this->Form->create($category) ?>
                <div class="box-body">
                    <?php if (!empty($category->posts)): ?>
                    <table class="table table-striped">
                        <tr>
                            <th>#</th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Código') ?></th>
                            <th><?= __('Publicado') ?></th>
                        </tr>
                        <?php $i = 0; foreach ($category->posts as $posts): $i++; ?>
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