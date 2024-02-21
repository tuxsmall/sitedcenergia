<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calculator $calculator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Calculators'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="calculators form large-9 medium-8 columns content">
    <?= $this->Form->create($calculator) ?>
    <fieldset>
        <legend><?= __('Add Calculator') ?></legend>
        <?php
            echo $this->Form->control('projeto');
            echo $this->Form->control('estado');
            echo $this->Form->control('cidade');
            echo $this->Form->control('consumo');
            echo $this->Form->control('nome');
            echo $this->Form->control('whats');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
