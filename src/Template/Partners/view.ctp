<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partner $partner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Partner'), ['action' => 'edit', $partner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Partner'), ['action' => 'delete', $partner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Partners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partner'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="partners view large-9 medium-8 columns content">
    <h3><?= h($partner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uploadfile') ?></th>
            <td><?= h($partner->uploadfile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($partner->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($partner->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($partner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($partner->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($partner->modified) ?></td>
        </tr>
    </table>
</div>
