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
                ['action' => 'delete', $priority->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $priority->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Priorities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="priorities form large-9 medium-8 columns content">
    <?= $this->Form->create($priority) ?>
    <fieldset>
        <legend><?= __('Edit Priority') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('level');
            echo $this->Form->control('color');
            echo $this->Form->control('published');
            echo $this->Form->control('user_created');
            echo $this->Form->control('user_modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
