<section class="page-section">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">Categorias</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/categories/add', true);?>">
                    Nova Categoria
                </a>
            <div class="divider-custom-line"></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="table-responsive">
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('categoria') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('ordem') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                        <th scope="col" class="actions"><?= __('') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $category): ?>
                    <tr>
                        <td><?= h($category->categoria) ?></td>
                        <td><?= h($category->ordem) ?></td>
                        <td><?= h($category->slug) ?></td>
                        <td><?= h($category->status) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver '), ['action' => 'view', $category->id]) ?>
                            <?= $this->Html->link(__(' Editar '), ['action' => 'edit', $category->id]) ?>
                            <?= $this->Form->postLink(__(' Deletar'), ['action' => 'delete', $category->id], ['confirm' => __('Deletar categoia # {0}?', $category->categoria)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>