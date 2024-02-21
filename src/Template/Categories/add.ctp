<section class="page-section">
    <div class="container-fluid">
        <h5 class="text-center text-uppercase text-secondary mt-5">Adicionar Categoria</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/categories', true);?>">
                    Categorias
                </a>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?= $this->Form->create($category) ?>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Nome da categoria</label>
                            <?php echo $this->Form->control('categoria',['class'=>'form-control', 'label'=>false,'placeholder'=>'Nome da categoria']);?>
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
                            <label>Aplicação</label>
                            <?php echo $this->Form->control('aplicacao',['class'=>'form-control', 'label'=>false,'placeholder'=>'Para quem serve esse tipo de kit']);?>
                        </div>
                    </div>



                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Ordem</label>
                            <?php echo $this->Form->control('ordem',['class'=>'form-control', 'label'=>false,'placeholder'=>'Ordem de exibição']);?>
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






