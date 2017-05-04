<script type="text/javascript">
    $(document).ready(function () {
        function reload() {
            window.location = '<?php echo $this->Url->build(['controller' => 'valuations', 'action' => 'index']); ?>?'
                + 'name=' + $("#name").val()
                + '&position=' + $("#position").val()
                + '&published=' + $("#published").val();
        }

        $("#btnFilter").click(function () {
            reload();
        });
    });
</script>

<section class="content-header">
    <h1>
        <?= __('Valoraciones') ?>
        <small><?= __('Listado') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-dashboard"></i> <?= __('Inicio') ?></a></li>
        <li><?= __('Valoraciones') ?></li>
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
                    <h3 class="box-title">Lista de Valoraciones</h3>
                    <div class="pull-right">
                        <a href="<?php echo $this->Url->build('/valuations/add'); ?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> <?= __('Nuevo') ?></a>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <table class="table table-striped ">
                        <thead>
                            <?php
                            echo $this->Form->create(null, [
                                'url' => ['controller' => 'valuations', 'action' => 'index'],
                                'type' => 'get',
                                'onsubmit' => 'return false;'
                            ]);
                            $this->Form->templates([
                                'inputContainer' => '{{content}}'
                            ]);
                            ?>
                            <tr>
                                <th style="width: 50px">#</th>
                                <th><?= $this->Paginator->sort('name', __('Nombre')) ?></th>
                                <th><?= $this->Paginator->sort('position', 'Posiciónn') ?></th>
                               <th><?= $this->Paginator->sort('published', 'Publicado') ?></th>
                                <th class="actions text-center" style="width: 100px"><?= __('Acciones') ?></th>
                            </tr>
                            
                         
                            <tr class="hidden-xs">
                                <td></td>
                                <td><?php echo $this->Form->input('name', ['label' => false, 'value' => $params['name']]); ?></td>
                                <td><?php echo $this->Form->input('position', ['label' => false, 'value' => $params['position']]); ?></td>
                                <td>
                                    <?php
                                    echo $this->Form->input('published', [
                                        'label' => false,
                                        'div' => false, 
                                        'options' => [
                                            '' => __('Todos'),
                                            '1' => 'Si',
                                            '0' => 'No'
                                        ],
                                        'class' => 'form-control select2',
                                        'value' => $params['published']
                                    ]);
                                    ?>
                                </td>
                                <td class="actions text-right">
                                    <button type="submit" title="<?= __('Filtrar resultados') ?>" class="btn btn-sm btn-default" id="btnFilter"><i class="fa fa-filter"></i></button>
                                    <?php
                                    echo $this->Html->link(
                                        '<i class="fa fa-trash"></i>', 
                                        '/valuations', 
                                        ['escape' => false, 'class' => 'btn btn-sm btn-default', 'title' => __('Limpiar resultados')]
                                    );
                                    ?>
                                </td>
                            </tr>
                            <?php echo $this->Form->end(); ?>   
                            
                        </thead>
                        <tbody>
                            <?php foreach ($valuations as $valuation): ?>
                            <tr>
                                <td><?= $this->Number->format($valuation->id) ?></td>
                                <td><?= h($valuation->name) ?></td>
                                <td><?= h($valuation->code) ?></td>
                                <td><?= ($valuation->published)?__('Si'):__('No') ?></td>
                                <td class="actions text-right">
                                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $valuation->id], ['escape' => false, 'class' => 'btn btn-xs btn-info', 'title' => __('Ver')]) ?>
                                    <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $valuation->id], ['escape' => false, 'class' => 'btn btn-xs btn-warning', 'title' => __('Modificar')]) ?>
                                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['action' => 'delete', $valuation->id], ['confirm' => __('¿Está seguro de eliminar la Valoración {0}?', $valuation->name), 'escape' => false, 'class' => 'btn btn-xs btn-danger', 'title' => __('Eliminar')]) ?>
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