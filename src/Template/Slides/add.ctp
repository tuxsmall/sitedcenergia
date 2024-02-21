<section class="page-section">
    <div class="container-fluid">
        <h2 class="text-center text-uppercase text-secondary mt-5">Adicionar Slide</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/slides', true);?>">
                    Slides
                </a>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?php echo $this->Form->create($slide, array('enctype' => 'multipart/form-data')); ?>
                    <div class="control-group">
                        <label class="ml-3">Slide inicial</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <?php echo $this->Form->select(
                                    'active',
                                    ['active' => 'sim', 'não' => 'não'],
                                    ['empty' => '- Selecione -','class'=>'form-control','label'=>'Slide inicial']
                                );
                            ?>
                        </div>
                    </div>

                    
                    <div class="control-group">
                        <label>Imagem</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <?php echo $this->Form->file('uploadfile', ['type' => 'file', 'required']);?>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Chamada 1</label>
                            <?php echo $this->Form->control('chamada1',['class'=>'form-control', 'label'=>false,'placeholder'=>'Chamada 1']);?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>titulo</label>
                            <?php echo $this->Form->control('titulo',['class'=>'form-control', 'label'=>false,'placeholder'=>'titulo']);?>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Link</label>
                            <?php echo $this->Form->control('link',['class'=>'form-control', 'label'=>false,'placeholder'=>'Link']);?>
                        </div>
                    </div>



                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Texto</label>
                            <?php echo $this->Form->control('texto',['class'=>'form-control', 'label'=>false,'placeholder'=>'Texto']);?>
                        </div>
                    </div>


                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Ordem</label>
                            <?php echo $this->Form->control('ordem',['class'=>'form-control', 'label'=>false,'placeholder'=>'Ordem']);?>
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
