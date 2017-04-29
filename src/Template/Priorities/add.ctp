<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="priorities form large-9 medium-8 columns content">
    <?= $this->Form->create($priority) ?>
    <fieldset>
        <legend><?= __('Agregar prioridad') ?></legend>
        <?php
            echo $this->Form->control(__('Nombre'));
            echo $this->Form->control(__('Nivel'));
            echo $this->Form->control(__('color'));
            echo $this->Form->control(__('Publicado'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
