<section class="content-header">
    <h1>
        <?= __('Paises') ?>
        <small><?= __('Ver') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-dashboard"></i> <?= __('Inicio') ?></a></li>
        <li><a href="<?php echo $this->Url->build('/tags'); ?>"><i class="fa fa-dashboard"></i> <?= __('Paises') ?></a></li>
        <li class="active"><?= $tag->name ?></li>
    </ol>
</section>
<section class="content">
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Datos de la Etiqueta'); ?></h3>
            </div>
            <?= $this->Form->create($tag) ?>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th scope="row"><?= __('Nombre') ?></th>
                        <td><?= h($tag->name) ?></td>
                    </tr> 
                    <tr>
                        <th scope="row"><?= __('publicado') ?></th>
                        <td><?= $tag->published ? __('Yes') : __('No'); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Creado por') ?></th>
                        <td><?= $this->Number->format($tag->user_created) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Modificado por') ?></th>
                        <td><?= $this->Number->format($tag->user_modified) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Creado') ?></th>
                        <td><?= h($tag->created) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Modificado') ?></th>
                        <td><?= h($tag->modified) ?></td>
                    </tr>
                   
                </table>
          
            </div>
        </div>
        
    </div>
</div>
</section>
