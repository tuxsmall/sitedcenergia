<?php

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1 style="color:#fff">Administração</h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><?= $this->Html->link(__('Categorias'), ['controller'=>'categories','action' => 'index']) ?>        </li></li>
                <li><?= $this->Html->link(__('Nova Categoria'), ['controller'=>'categories','action' => 'add']) ?>        </li></li>
                <li><?= $this->Html->link(__('Produtos'), ['controller'=>'products','action' => 'index']) ?>        </li></li>
                <li><?= $this->Html->link(__('Adicionar Produto'), ['controller'=>'products','action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('Usuários'), ['controller'=>'users','action' => 'index']) ?>             </li>    
                <li><?= $this->Html->link(__('Sair'), ['controller'=>'users','action' => 'logout']) ?></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
