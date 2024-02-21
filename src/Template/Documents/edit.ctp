<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $document->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $document->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Documents'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="documents form large-9 medium-8 columns content">
    <?= $this->Form->create($document) ?>
    <fieldset>
        <legend><?= __('Edit Document') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('email');
            echo $this->Form->control('idade');
            echo $this->Form->control('telefone');
            echo $this->Form->control('empresa');
            echo $this->Form->control('genero');
            echo $this->Form->control('deficiencia');
            echo $this->Form->control('setor');
            echo $this->Form->control('escolaridade');
            echo $this->Form->control('uploadfile');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
