<section class="page-section">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">Slides</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/slides/add', true);?>">
                    Novo Slide
                </a>
            <div class="divider-custom-line"></div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="table-responsive">
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Inicial') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('chamada1') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('imagem') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                        <th scope="col" class="actions"><?= __('') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($slides as $slide): ?>
                    <tr>
                        <td><?= h($slide->id) ?></td>
                        <td><?= h($slide->active) ?></td>
                        <td><?= h($slide->chamada1) ?></td>
                        <td>
                            <?php 
                                echo $this->Html->image("/publico/img/".$slide->uploadfile, [
                                "alt" => $slide->uploadfile,
                                'width' => '60',
                                'class' =>'rounded-lg border img-thumbnail'
                                ]);              
                            ?>
                        </td>
                        <td><?= h($slide->status) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $slide->id]) ?>
                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $slide->id], ['confirm' => __('Deletar slide # {0}?', $slide->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>