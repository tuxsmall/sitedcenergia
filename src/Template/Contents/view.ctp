<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Content $content
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Content'), ['action' => 'edit', $content->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Content'), ['action' => 'delete', $content->id], ['confirm' => __('Are you sure you want to delete # {0}?', $content->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Content'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contents view large-9 medium-8 columns content">
    <h3><?= h($content->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($content->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($content->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uploadfile') ?></th>
            <td><?= h($content->uploadfile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($content->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($content->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($content->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($content->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Texto') ?></h4>
        <?= $this->Text->autoParagraph(h($content->texto)); ?>
    </div>
</div>
