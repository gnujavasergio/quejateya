<?php
/**
  * @var \App\View\AppView $this
  */
?>
                     <div class="pull-right">
                        <a href="<?php echo $this->Url->build('/priorities/add'); ?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> <?= __('Nueva prioridad') ?></a>
                    </div>

<div class="box-body no-padding text-center">
    <h3><?= __('Prioridades') ?></h3>
    <table class="table table-striped text-center">  <!--esta class lo que hace es espaciar las columnas -->
        <thead>
            <tr>
                <th style="width: 20px">#</th>
               
                <th><?= $this->Paginator->sort('name','Nombre') ?></th>
                <th><?= $this->Paginator->sort('level','Nivel') ?></th>
                <th><?= $this->Paginator->sort('color') ?></th>
                <th><?= $this->Paginator->sort('published','Publicado') ?></th>
                <th><?= $this->Paginator->sort('created','Creado') ?></th>
                <th><?= $this->Paginator->sort('modified','Modificado') ?></th>
                <th class="actions" style="width: 200px"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($priorities as $priority): ?>
            <tr>
               
                <td><?= $this->Number->format($priority->id) ?></td>
                <td><?= h($priority->name) ?></td>
                <td><?= $this->Number->format($priority->level) ?></td>
                <td><?= h($priority->color) ?></td>
                <td><?= h($priority->published) ?></td>
                <td><?= h($priority->created) ?></td>
                <td><?= h($priority->modified) ?></td>
                <td class="actions text-right">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $priority->id], ['escape' => false, 'class' => 'btn btn-xs btn-info', 'title' => __('Ver')]) ?>
                    <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $priority->id], ['escape' => false, 'class' => 'btn btn-xs btn-warning', 'title' => __('Modificar')]) ?>
                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['action' => 'delete', $priority->id], ['confirm' => __('¿Está seguro de eliminar la Prioridad con nombre {0}?', $priority->name), 'escape' => false, 'class' => 'btn btn-xs btn-danger', 'title' => __('Eliminar')]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator text-center">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p class="text-center"><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro de un total de {{count}} total')]) ?></p>
    </div>
</div>
