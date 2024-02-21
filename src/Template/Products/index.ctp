<section class="page-section portfolio" id="portfolio">
            <div class="container">
                <h4 class="page-section-heading text-center text-uppercase text-secondary mt-5">Todos os produtos</h4>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="text-center" style="margin-top:-30px">
                    <?= $this->Paginator->counter(['format' => __('{{count}} produtos registrados.')]) ?>
                </div>

            </div>

            <div class="container-fluid">
                <table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('descrição') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('imagem') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('slide') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('destaque') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('categoria') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                            <th scope="col" class="actions"><?= __('Ações') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= h($product->nome) ?></td>
                            <td><?= h($product->descricao) ?></td>
                            <td>
                                <?php 
                                    echo $this->Html->image("/cliente/img/produtos/".$product->imagem, [
                                    "alt" => $product->nome,
                                    'width' => '70',
                                    'class' =>'rounded-lg border img-thumbnail'
                                    ]);              
                                ?>
                            </td>
                            <td><?= h($product->status) ?></td>
                            <td>R$<?= $this->Number->format($product->valor) ?></td>
                            <td><?= h($product->slide) ?></td>
                            <td><?= h($product->destaque) ?></td>
                            <td><?= $product->has('category') ? $this->Html->link($product->category->categoria, ['controller' => 'Categories', 'action' => 'gerenciar', $product->category->id]) : '' ?></td>
                            <td><?= h($product->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['action' => 'view', $product->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $product->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>