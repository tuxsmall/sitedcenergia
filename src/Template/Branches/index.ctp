<section class="page-section">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">Filiais</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/branches/add', true);?>">
                    Nova Filial
                </a>
            <div class="divider-custom-line"></div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="table-responsive">
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('Estado') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Cidade') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Foto') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('endereço') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('whatsapp') ?></th>
                        <th scope="col" class="actions"><?= __('') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($branches as $branch): ?>
                    <tr>
                        <td><?= h($branch->estado) ?></td>
                        <td><?= h($branch->cidade) ?></td>
                        <td><?= h($branch->uploadfile) ?></td>
                        <td><?= h($branch->endeco) ?></td>
                        <td><?= h($branch->whatsapp) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $branch->id]) ?>
                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $branch->id], ['confirm' => __('Deletar filial # {0}?', $branch->endeco)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>