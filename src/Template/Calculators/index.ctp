<section class="page-section">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">Calculadora Solar</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">

            <div class="divider-custom-line"></div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('projeto') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('cidade') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('última conta') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('whats') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                    <th scope="col" class="actions"><?= __('') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php //debug($calculators); ?>
                <?php foreach ($calculators as $calculator): ?>
                    <?php
                        $rowClass = $calculator->status == 'Não contatado' ? 'table-warning' : 'table-info';
                    ?>
                    <tr class="<?= $rowClass ?>">
                        <td><?= h($calculator->projeto) ?></td>
                        <td><?= h($calculator->cidade) ?></td>
                        <td><?= h($calculator->consumo) ?></td>
                        <td><?= h($calculator->nome) ?></td>
                        <td><?= h($calculator->whats) ?></td>
                        <td><?= h($calculator->status) ?></td>
                        <td><?= h($calculator->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $calculator->id]) ?>
                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $calculator->id], ['confirm' => __('Deletar esse lead # {0}?', $calculator->nome)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        </div>

        

        <div class="paginator">
            <ul class="pagination">
                <li class="page-item"><?= $this->Paginator->first('<span class="page-link">' . __('<< Primeira') . '</span>', ['escape' => false]) ?></li>
                <li class="page-item"><?= $this->Paginator->prev('<span class="page-link">' . __('Anterior') . '</span>', ['escape' => false]) ?></li>
                <?php
                    $numbers = $this->Paginator->numbers([
                        'tag' => 'li',
                        'currentTag' => 'span',
                        'currentClass' => 'page-item active',
                        'class' => 'page-item',
                        'separator' => '',
                        'escape' => false
                    ]);
                    echo str_replace('<a', '<a class="page-link"', $numbers);
                ?>
                <li class="page-item"><?= $this->Paginator->next('<span class="page-link">' . __('Próxima') . '</span>', ['escape' => false]) ?></li>
                <li class="page-item"><?= $this->Paginator->last('<span class="page-link">' . __('Última >>') . '</span>', ['escape' => false]) ?></li>
            </ul>
            <p class="text-center"><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}. Mostrando {{current}} registro(s) de um total de {{count}}.')]) ?></p>
        </div>
        



        





    </div>
</section>