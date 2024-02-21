<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">Usuários</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/users/add', true);?>">
                        Novo Usuário
                    </a>
                </div>
            <div class="divider-custom-line"></div>
        </div>

    </div>
    <div class="container-fluid">
    <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
    <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
            <th scope="col"><?= $this->Paginator->sort('username') ?></th>
            <th scope="col"><?= $this->Paginator->sort('status') ?></th>
            <th scope="col"><?= $this->Paginator->sort('data') ?></th>
            <th scope="col" class="actions"><?= __('Ações') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= h($user->nome) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->status) ?></td>
                <td><?= h($user->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>

    </div>
</section>
