<section class="page-section">
    <div class="container-fluid">
        <h5 class="text-center text-uppercase text-secondary mt-5">Adicionar Post</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/contents', true);?>">
                    Posts
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
                            <a class="text-center" href="<?php echo $this->Url->build('/contents', true);?>"><i class="fas fa-caret-right"></i> Listar Posts</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-center" href="<?php echo $this->Url->build('/kits', true);?>"><i class="fas fa-caret-right"></i> Listar Kits</a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-center" href="<?php echo $this->Url->build('/kits/add', true);?>"><i class="fas fa-caret-right"></i> Novo Kits</a>
                        </li>
                    </ul>
                </div>
            </div><!--FIM COL-->

        

            <div class="col-lg-8 mx-auto">
                <?php echo $this->Form->create($content, array('enctype' => 'multipart/form-data')); ?>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Título</label>
                            <?php echo $this->Form->control('titulo',['class'=>'form-control', 'label'=>false,'placeholder'=>'Título']);?>
                        </div>
                    </div>
                                        
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Slug</label>
                            <?php echo $this->Form->control('slug',['class'=>'form-control', 'label'=>false,'placeholder'=>'slug']);?>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Texto</label>
                            <?php echo $this->Form->control('texto',['class'=>'form-control', 'label'=>false,'placeholder'=>'Texto']);?>
                        </div>
                    </div>


                    <div class="control-group">
                        <label>Imagem</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <?php echo $this->Form->file('uploadfile', ['type' => 'file', 'class'=>'']);?>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="ml-3">Status</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <?php echo $this->Form->select(
                                    'status',
                                    ['ativo' => 'ativo', 'inativo' => 'inativo'],
                                    ['empty' => '- Selecione -','class'=>'form-control','label'=>'Deve ser exibido?']
                                );
                            ?>
                        </div>
                    </div>


                    <br>
                    <div class="form-group"><button class="btn btn-primary btn-xl" type="submit">Salvar</button></div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>