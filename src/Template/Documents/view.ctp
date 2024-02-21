<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Document'), ['action' => 'edit', $document->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Document'), ['action' => 'delete', $document->id], ['confirm' => __('Are you sure you want to delete # {0}?', $document->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Documents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="documents view large-9 medium-8 columns content">
    <h3><?= h($document->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($document->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($document->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($document->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= h($document->empresa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genero') ?></th>
            <td><?= h($document->genero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deficiencia') ?></th>
            <td><?= h($document->deficiencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Setor') ?></th>
            <td><?= h($document->setor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Escolaridade') ?></th>
            <td><?= h($document->escolaridade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uploadfile') ?></th>
            <td><?= h($document->uploadfile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($document->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idade') ?></th>
            <td><?= $this->Number->format($document->idade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($document->created) ?></td>
        </tr>
    </table>
</div>
