<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ask $ask
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ask'), ['action' => 'edit', $ask->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ask'), ['action' => 'delete', $ask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ask->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Asks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ask'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="asks view large-9 medium-8 columns content">
    <h3><?= h($ask->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pergunta') ?></th>
            <td><?= h($ask->pergunta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($ask->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ask->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ask->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ask->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Resposta') ?></h4>
        <?= $this->Text->autoParagraph(h($ask->resposta)); ?>
    </div>
</div>
