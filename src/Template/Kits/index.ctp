<section class="page-section">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">Kits</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/kits/add', true);?>">
                    Novo Kit
                </a>
            <div class="divider-custom-line"></div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="table-responsive">
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acessos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kits as $kit): ?>
            <tr>
                <td><?= h($kit->nome) ?></td>
                <td>
                    <?php 
                        echo $this->Html->image("/publico/img/".$kit->uploadfile, [
                        "alt" => $kit->uploadfile,
                        'width' => '60',
                        'class' =>'rounded-lg border img-thumbnail'
                        ]);              
                    ?>
                </td>
                <td><?= h($kit->acessos) ?></td>
                <td><?= $kit->has('category') ? $this->Html->link($kit->category->categoria, ['controller' => 'Categories', 'action' => 'view', $kit->category->id]) : '' ?></td>
                <td><?= h($kit->valor) ?></td>
                <td><?= h($kit->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Editar '), ['action' => 'edit', $kit->id]) ?>
                    <?= $this->Form->postLink(__(' Deletar'), ['action' => 'delete', $kit->id], ['confirm' => __('Deletar kit # {0}?', $kit->nome)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
        </div>
    </div>
</section>


