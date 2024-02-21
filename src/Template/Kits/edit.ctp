<section class="page-section">
    <div class="container-fluid">
        <h5 class="text-center text-uppercase text-secondary mt-3">Editando Kit</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/kits', true);?>">
                    Kits
                </a>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            
            <div class="col-lg-2 mx-auto">
                <div class="card d-none d-lg-block" style="width: 18rem;">
                    <div class="card-header font-weight-bold">
                        Atalhos
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a class="text-center" href="<?php echo $this->Url->build('/categories', true);?>"><i class="fas fa-caret-right"></i> Listar categorias</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-center" href="<?php echo $this->Url->build('/categories/add', true);?>"><i class="fas fa-caret-right"></i> Nova categoria</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-center" href="<?php echo $this->Url->build('/kits', true);?>"><i class="fas fa-caret-right"></i> Listar Kits</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-center" href="<?php echo $this->Url->build('/kits/add', true);?>"><i class="fas fa-caret-right"></i> Novo Kit</a>
                        </li>
                    </ul>
                </div>
            </div><!--FIM COL-->

            <div class="col-lg-9 mx-auto">
                <?php echo $this->Form->create($kit, array('enctype' => 'multipart/form-data')); ?>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm"></div><!--fim coluna-->
                    </div><!--fim row-->
                </div><!--fim container-->
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Nome do Kit</label>
                            <?php echo $this->Form->control('nome',['class'=>'form-control', 'label'=>false,'placeholder'=>'Nome do Kit']);?>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Slug</label>
                            <?php echo $this->Form->control('slug',['class'=>'form-control', 'label'=>false,'placeholder'=>'slug (É a URL. Se esse campo ficar branco, o slug é gerado automaticamente. )']);?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Descrição Curta</label>
                            <?php echo $this->Form->control('descricao_curta',['rows'=>2,'class'=>'form-control', 'label'=>false,'placeholder'=>'Descrição Curta']);?>
                        </div>
                    </div>


                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Descrição Longa</label>
                            <?php echo $this->Form->control('descricao_longa',['rows'=>10,'class'=>'form-control', 'label'=>false,'placeholder'=>'Descrição Longa']);?>
                        </div>
                    </div>                
                <div class="container m-1">
                    <div class="row">
                        <div class="col-sm">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="border-top:none">
                                    <label>Garantia</label>
                                    <?php echo $this->Form->control('garantia',['class'=>'form-control', 'label'=>false,'placeholder'=>'Garantia']);?>
                                </div>
                            </div>
                        </div><!--fim coluna-->
                        <div class="col-sm">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="border-top:none">
                                    <label>Valor</label>
                                    <?php echo $this->Form->control('valor',['class'=>'form-control', 'label'=>false,'placeholder'=>'Valor']);?>
                                </div>
                            </div>
                        </div><!--fim coluna-->
                        <div class="col-sm">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="border-top:none">
                                    <label>Forma de pagamento</label>
                                    <?php echo $this->Form->control('formaPagamento',['class'=>'form-control', 'label'=>false,'placeholder'=>'Forma de pagamento']);?>
                                </div>
                            </div>
                        </div><!--fim coluna-->
                    </div><!--fim row-->
                </div><!--fim container-->
    


                <div class="container m-1">
                    <div class="row">
                        <div class="col-sm">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="border-top:none">
                                    <label>Status</label>
                                    <?php echo $this->Form->select(
                                            'status',
                                            ['ativo' => 'ativo', 'inativo' => 'inativo'],
                                            ['empty' => '- Selecione -','class'=>'form-control','label'=>'Deve ser exibido?']
                                        );
                                    ?>
                                </div>
                            </div>



                        </div><!--fim coluna-->
                        <div class="col-sm">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="border-top:none">
                                    <label>Categoria</label>
                                    <?php echo $this->Form->control('category_id',['options' => $categories,'class'=>'form-control', 'label'=>false,'placeholder'=>'Categoria']);?>
                                </div>
                            </div>
                        </div><!--fim coluna-->
                    </div><!--fim row-->
                </div><!--fim container-->
    

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Para quem é indicado</label>
                            <?php echo $this->Form->control('indicado',['class'=>'form-control', 'label'=>false,'placeholder'=>'Para quem é indicado']);?>
                        </div>
                    </div>


                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Foto do Kit</label>
                            <?php echo $this->Form->file('uploadfile', ['type' => 'file', 'class'=>'']);?>
                        </div>
                    </div>


                    <br>
                    <div class="form-group"><button class="btn btn-primary btn-xl" type="submit">Salvar Kit</button></div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>



