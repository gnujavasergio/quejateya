<script type="text/javascript">
    $(document).ready(function () {
        function reload() {
            window.location = '<?php echo $this->Url->build(['controller' => 'cities', 'action' => 'index']); ?>?'
                    + 'name=' + $("#name").val()
                    + '&code=' + $("#code").val()
                    + '&published=' + $("#published").val();
        }

        $("#btnFilter").click(function () {
            reload();
        });
    });
</script>


<section class="content-header">
    <h1>
        <?= __('Ciudades') ?>
        <small><?= __('Listado') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-dashboard"></i> <?= __('Inicio') ?></a></li>
        <li><?= __('Ciudades') ?></li>
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
                    <h3 class="box-title">Listado de Ciudades</h3>
                    <div class="pull-right">
                        <a href="<?php echo $this->Url->build('/cities/add'); ?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> <?= __('Nuevo') ?></a>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <table class="table table-striped ">
                        <thead>
                            <?php
                            echo $this->Form->create(null, [
                                'url' => ['controller' => 'cities', 'action' => 'index'],
                                'type' => 'get',
                                'onsubmit' => 'return false;'
                            ]);
                            $this->Form->templates([
                                'inputContainer' => '{{content}}'
                            ]);
                            ?>
                            <tr>
                                <th style="width: 50px">#</th>
                                <th><?= $this->Paginator->sort('name', 'Nombre') ?></th>
                                <th><?= $this->Paginator->sort('code', 'Código') ?></th>
                                <th><?= $this->Paginator->sort('published', 'Publicado') ?></th>
                                <th class="actions text-center" style="width: 100px"><?= __('Acciones') ?></th>
                            </tr>
                            <tr class="hidden-xs">
                                <td></td>
                                <td><?php echo $this->Form->input('name', ['label' => false, 'value' => $params['name']]); ?></td>
                                <td><?php echo $this->Form->input('code', ['label' => false, 'value' => $params['code']]); ?></td>
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
                                            '<i class="fa fa-trash"></i>', '/cities', ['escape' => false, 'class' => 'btn btn-sm btn-default', 'title' => __('Limpiar resultados')]
                                    );
                                    ?>
                                </td>
                            </tr>

                        </thead> 
                        <tbody>
<?php
if ($cities) {
    $page = $this->Paginator->current('cities');
    $i = ($page - 1) * 20;
    foreach ($cities as $city): $i++;
        ?>
                                    <tr>
                                        <td><?= $this->Number->format($i) ?></td>
                                        <td><?= h($city->name) ?></td>
                                        <td><?= h($city->code) ?></td>
                                        <td><?= ($city->published) ? __('Si') : __('No') ?></td>
                                        <td class="actions text-right">
        <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $city->id], ['escape' => false, 'class' => 'btn btn-xs btn-info', 'title' => __('Ver')]) ?>
                                            <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $city->id], ['escape' => false, 'class' => 'btn btn-xs btn-warning', 'title' => __('Modificar')]) ?>
                                            <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['action' => 'delete', $city->id], ['confirm' => __('¿Está seguro de eliminar el País con nombre {0}?', $city->name), 'escape' => false, 'class' => 'btn btn-xs btn-danger', 'title' => __('Eliminar')]) ?>
                                        </td>
                                    </tr>

        <?php
    endforeach;
}
?>
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
