<section class="page-section">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">Posts</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/contents/add', true);?>">
                    Novo Post
                </a>
            <div class="divider-custom-line"></div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="table-responsive">
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('acessos') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('foto') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                        <th scope="col" class="actions"><?= __('') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contents as $content): ?>
                    <tr>
                        <td><?= h($content->titulo) ?></td>
                        <td><?= h($content->acessos) ?></td>
                        <td><?= h($content->slug) ?></td>
                        <td>
                            <?php 
                                echo $this->Html->image("/publico/img/".$content->uploadfile, [
                                "alt" => $content->uploadfile,
                                'width' => '60',
                                'class' =>'rounded-lg border img-thumbnail'
                                ]);              
                            ?>
                        </td>
                        <td><?= h($content->status) ?></td>
                        <td><?= h($content->created) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $content->id]) ?>
                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $content->id], ['confirm' => __('Deletar post # {0}?', $content->titulo)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>