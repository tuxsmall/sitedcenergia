<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($product->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($product->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagem') ?></th>
            <td><?= h($product->imagem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slide') ?></th>
            <td><?= h($product->slide) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Destaque') ?></th>
            <td><?= h($product->destaque) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($product->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $product->has('category') ? $this->Html->link($product->category->id, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($product->valor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
    </table>
</div>
