<section class="content-header">
    <h1>
        <?= __('Paises') ?>
        <small><?= __('Nuevo') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-dashboard"></i> <?= __('Inicio') ?></a></li>
        <li><a href="<?php echo $this->Url->build('/countries'); ?>"><i class="fa fa-dashboard"></i> <?= __('Paises') ?></a></li>
        <li class="active"><?= __('Nuevo') ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Nuevo País'); ?></h3>
                </div>
                <?= $this->Form->create($country) ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->control('name', ['label' => __('Nombre')]);
                    echo $this->Form->control('code', ['label' => __('Código')]);
                    echo $this->Form->button(__('Guardar'));
                    ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>