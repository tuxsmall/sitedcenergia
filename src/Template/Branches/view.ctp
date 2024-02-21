<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Branch $branch
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Branch'), ['action' => 'edit', $branch->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Branch'), ['action' => 'delete', $branch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Branches'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Branch'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="branches view large-9 medium-8 columns content">
    <h3><?= h($branch->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uploadfile') ?></th>
            <td><?= h($branch->uploadfile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endeco') ?></th>
            <td><?= h($branch->endeco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Whatsapp') ?></th>
            <td><?= h($branch->whatsapp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($branch->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($branch->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($branch->modified) ?></td>
        </tr>
    </table>
</div>
