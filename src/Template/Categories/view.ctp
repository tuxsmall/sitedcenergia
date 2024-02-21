<br>
<br>
<div class="container p-3 mt-5">
    <h3><?= h($category->categoria) ?></h3>
    <table class="table table-hover table-striped">

        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($category->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($category->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($category->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atualizado') ?></th>
            <td><?= h($category->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Kits dessa categoria') ?></h4>
        <?php if (!empty($category->kits)): ?>
        <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
            <tr>
                <th scope="col"><?= __('Kit') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('') ?></th>
            </tr>
            <?php foreach ($category->kits as $kits): ?>
            <tr>
                <td><?= h($kits->nome) ?></td>
                <td><?= h($kits->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Kits', 'action' => 'edit', $kits->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Kits', 'action' => 'delete', $kits->id], ['confirm' => __('deletar esse kit # {0}?', $kits->nome)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
