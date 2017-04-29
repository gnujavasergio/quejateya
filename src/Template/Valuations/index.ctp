<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Valuation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="valuations index large-9 medium-8 columns content">
    <h3><?= __('Valuations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NAME') ?></th>
                <th scope="col"><?= $this->Paginator->sort('POSITION') ?></th>
                <th scope="col"><?= $this->Paginator->sort('published') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($valuations as $valuation): ?>
            <tr>
                <td><?= $this->Number->format($valuation->id) ?></td>
                <td><?= h($valuation->NAME) ?></td>
                <td><?= $this->Number->format($valuation->POSITION) ?></td>
                <td><?= h($valuation->published) ?></td>
                <td><?= h($valuation->created) ?></td>
                <td><?= h($valuation->modified) ?></td>
                <td><?= $this->Number->format($valuation->user_created) ?></td>
                <td><?= $this->Number->format($valuation->user_modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $valuation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $valuation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $valuation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $valuation->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
