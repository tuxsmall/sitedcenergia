<section class="page-section">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">Parceiros</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/partners/add', true);?>">
                    Novo Parceiro
                </a>
            <div class="divider-custom-line"></div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="table-responsive">
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('Logo') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                        <th scope="col" class="actions"><?= __('') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($partners as $partner): ?>
                    <tr>
                        <td>
                            <?php 
                                echo $this->Html->image("/publico/img/".$partner->uploadfile, [
                                "alt" => $partner->uploadfile,
                                'width' => '60',
                                'class' =>'rounded-lg border img-thumbnail'
                                ]);              
                            ?>
                        </td>
                        <td><?= h($partner->nome) ?></td>
                        <td><?= h($partner->status) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $partner->id]) ?>
                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $partner->id], ['confirm' => __('Deletar parceiro # {0}?', $partner->id)]) ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
