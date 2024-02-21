<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kit $kit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Kit'), ['action' => 'edit', $kit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Kit'), ['action' => 'delete', $kit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Kits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="kits view large-9 medium-8 columns content">
    <h3><?= h($kit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uploadfile') ?></th>
            <td><?= h($kit->uploadfile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($kit->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $kit->has('category') ? $this->Html->link($kit->category->categoria, ['controller' => 'Categories', 'action' => 'view', $kit->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($kit->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao Curta') ?></th>
            <td><?= h($kit->descricao_curta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Indicado') ?></th>
            <td><?= h($kit->indicado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= h($kit->valor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FormaPagamento') ?></th>
            <td><?= h($kit->formaPagamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($kit->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($kit->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($kit->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($kit->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao Longa') ?></h4>
        <?= $this->Text->autoParagraph(h($kit->descricao_longa)); ?>
    </div>
</div>
