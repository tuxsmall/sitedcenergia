<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calculator $calculator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Calculator'), ['action' => 'edit', $calculator->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Calculator'), ['action' => 'delete', $calculator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calculator->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Calculators'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calculator'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="calculators view large-9 medium-8 columns content">
    <h3><?= h($calculator->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= h($calculator->projeto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($calculator->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($calculator->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consumo') ?></th>
            <td><?= h($calculator->consumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($calculator->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Whats') ?></th>
            <td><?= h($calculator->whats) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($calculator->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($calculator->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($calculator->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($calculator->modified) ?></td>
        </tr>
    </table>
</div>
