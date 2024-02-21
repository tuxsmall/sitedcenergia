<section class="page-section">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">Clientes</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/clients/add', true);?>">
                    Novo Cliente
                </a>
            <div class="divider-custom-line"></div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="table-responsive">
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('foto') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('local') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Vídeo') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                        <th scope="col" class="actions"><?= __('') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clients as $client): ?>
                    <tr>
                        <td><?= h($client->tipo) ?></td>
                        <td>
                            <?php 
                                echo $this->Html->image("/publico/img/".$client->uploadfile, [
                                "alt" => $client->uploadfile,
                                'width' => '60',
                                'class' =>'rounded-lg border img-thumbnail'
                                ]);              
                            ?>
                        </td>
                        <td><?= h($client->nome) ?></td>
                        <td><?= h($client->local) ?></td>
                        <td><?= h($client->url) ?></td>
                        <td><?= h($client->status) ?></td>
                        <td><?= h($client->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $client->id]) ?>
                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $client->id], ['confirm' => __('Quer mesmo deletar # {0}?', $client->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>