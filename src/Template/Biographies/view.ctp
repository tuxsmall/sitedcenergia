<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Biography $biography
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Biography'), ['action' => 'edit', $biography->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Biography'), ['action' => 'delete', $biography->id], ['confirm' => __('Are you sure you want to delete # {0}?', $biography->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Biographies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biography'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="biographies view large-9 medium-8 columns content">
    <h3><?= h($biography->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Chamada1') ?></th>
            <td><?= h($biography->chamada1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chamada2') ?></th>
            <td><?= h($biography->chamada2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bullet1') ?></th>
            <td><?= h($biography->bullet1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bullet2') ?></th>
            <td><?= h($biography->bullet2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bullet3') ?></th>
            <td><?= h($biography->bullet3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uploadfile') ?></th>
            <td><?= h($biography->uploadfile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($biography->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($biography->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($biography->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($biography->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Texto') ?></h4>
        <?= $this->Text->autoParagraph(h($biography->texto)); ?>
    </div>
</div>
