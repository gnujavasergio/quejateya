<section class="content-header">
    <h1>
        <?= __('Ciudades') ?>
        <small><?= __('Ver') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-dashboard"></i> <?= __('Inicio') ?></a></li>
        <li><a href="<?php echo $this->Url->build('/tags'); ?>"><i class="fa fa-dashboard"></i> <?= __('Paises') ?></a></li>
        <li class="active"><?= $city->name ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Datos la Ciudad'); ?></h3>
                </div>
                <?= $this->Form->create($city) ?>
                <div class="box-body">
                                      
                        <h3><?= h($city->name) ?></h3>
                             <table class="table table-striped">   
                                <tr>
                                    <th style="width: 40%;"><?= __('Nombre') ?></th>
                                    <td><?= h($city->name) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Código') ?></th>
                                    <td><?= h($city->code) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Country') ?></th>
                                    <td><?= $city->has('country') ? $this->Html->link($city->country->name, ['controller' => 'Countries', 'action' => 'view', $city->country->id]) : '' ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Creado por') ?></th>
                                    <td><?= $this->Number->format($city->user_created) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Modificado por') ?></th>
                                    <td><?= $this->Number->format($city->user_modified) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Creado') ?></th>
                                    <td><?= $this->Time->format($city->created, 'dd/MM/Y HH:mm:ss') ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Modificado') ?></th>
                                    <td><?= $this->Time->format($city->modified, 'dd/MM/Y HH:mm:ss') ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Publicado') ?></th>
                                    <td><?= ($city->published == 'S') ? 'Si' : 'No' ?></td>
                                </tr>
                            </table>
                        </div>
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?= __('Paises relacionados'); ?></h3>
                    </div>
                    <?= $this->Form->create($city) ?>
                    <div class="box-body">
                        <?php if (!empty($city->posts)): ?>
                            <table class="table table-striped">
                                <tr>
                                    <th>#</th>
                                    <th><?= __('Nombre') ?></th>
                                    <th><?= __('Código') ?></th>
                                    <th><?= __('Publicado') ?></th>
                                </tr>
                                <?php $i = 0;
                                foreach ($city->cities as $country): $i++;
                                    ?>
                                    <tr>
                                        <td><?= h($i) ?></td>
                                        <td><?= h($city->name) ?></td>
                                        <td><?= h($city->code) ?></td>
                                        <td><?= ($city->published == 1) ? 'Si' : 'No' ?></td>
                                    </tr>
                            <?php endforeach; ?>
                            </table>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
</section>