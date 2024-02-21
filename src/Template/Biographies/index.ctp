<section class="page-section">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">Nossa história</h5>
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
                        <th scope="col"><?= $this->Paginator->sort('chamada 1') ?></th>
                        <th scope="col">Imagem</th>

                        <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                        <th scope="col" class="actions"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($biographies as $biography): ?>
                    <tr>
                        <td><?= h($biography->chamada1) ?></td>
                        <td>
                            <?php 
                                echo $this->Html->image("/publico/img/".$biography->uploadfile, [
                                "alt" => $biography->uploadfile,
                                'width' => '60',
                                'class' =>'rounded-lg border img-thumbnail'
                                ]);              
                            ?>
                        </td>

                        <td><?= h($biography->status) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $biography->id]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>