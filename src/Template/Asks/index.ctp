<section class="page-section">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">FAQ</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/asks/add', true);?>">
                    Nova Pergunta
                </a>
            <div class="divider-custom-line"></div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="table-responsive">
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('pergunta') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($asks as $ask): ?>
                    <tr>
                        <td><?= h($ask->pergunta) ?></td>
                        <td><?= h($ask->status) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Editar '), ['action' => 'edit', $ask->id]) ?>
                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $ask->id], ['confirm' => __('Deletar pergunta # {0}?', $ask->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>