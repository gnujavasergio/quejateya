<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $valuation->id],
                ['confirm' => __('Estás seguro de querer eliminar la siguiente valoración?: # {0}?', $valuation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Valuations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="valuations form large-9 medium-8 columns content">
    <?= $this->Form->create($valuation) ?>
    <fieldset>
        <legend><?= __('Edit Valuation') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('position');
            echo $this->Form->control('published');
            echo $this->Form->control('user_created');
            echo $this->Form->control('user_modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
