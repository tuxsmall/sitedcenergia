<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Slide $slide
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Slide'), ['action' => 'edit', $slide->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Slide'), ['action' => 'delete', $slide->id], ['confirm' => __('Are you sure you want to delete # {0}?', $slide->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Slides'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Slide'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="slides view large-9 medium-8 columns content">
    <h3><?= h($slide->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= h($slide->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chamada1') ?></th>
            <td><?= h($slide->chamada1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($slide->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uploadfile') ?></th>
            <td><?= h($slide->uploadfile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($slide->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($slide->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordem') ?></th>
            <td><?= $this->Number->format($slide->ordem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($slide->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($slide->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Texto') ?></h4>
        <?= $this->Text->autoParagraph(h($slide->texto)); ?>
    </div>
</div>
