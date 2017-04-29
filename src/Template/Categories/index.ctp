<section class="content-header">
    <h1>
        <?= __('Categorias') ?>
        <small><?= __('Listado') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-dashboard"></i> <?= __('Inicio') ?></a></li>
        <li><?= __('Categorias') ?></li>
        <li class="active"><?= __('Listado') ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Listado de categorias</h3>                                   
                     
                </div>
                <div class="box-body no-padding">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th style="width: 50px">#</th>
                                <th><?= $this->Paginator->sort('name', 'Nombre') ?></th>
                                <th><?= $this->Paginator->sort('hashtag', 'hashtag') ?></th>
                                <th><?= $this->Paginator->sort('published', 'publicado') ?></th>
                                <th class="actions" style="width: 150px"><?= __('Acciones') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $category): ?>
                            <tr>
                                <td><?= $this->Number->format($category->id) ?></td>
                                <td><?= h($category->name) ?></td>
                                <td><?= h($category->hashtag) ?></td>
                                <td><?= h($published->published) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $category->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="box box-footer">
                    <div class="paginator text-center">
                        <ul class="pagination">
                            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
                            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
                            <?= $this->Paginator->last(__('Último') . ' >>') ?>
                        </ul>
                        <p class="text-center"><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registros de un total de {{count}}')]) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>