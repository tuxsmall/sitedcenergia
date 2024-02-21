<section class="page-section">
    <div class="container-fluid">
        <h2 class="text-center text-uppercase text-secondary mt-5">Editar História</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center" href="<?php echo $this->Url->build('/biographies', true);?>">
                    História
                </a>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?php echo $this->Form->create($biography, array('enctype' => 'multipart/form-data')); ?>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Chamada 1</label>
                            <?php echo $this->Form->control('chamada1',['class'=>'form-control', 'label'=>false,'placeholder'=>'Chamada 1']);?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Chamada 2</label>
                            <?php echo $this->Form->control('chamada2',['class'=>'form-control', 'label'=>false,'placeholder'=>'Chamada 2']);?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Bullet 1</label>
                            <?php echo $this->Form->control('bullet1',['class'=>'form-control', 'label'=>false,'placeholder'=>'Bullet 1']);?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Bullet 2</label>
                            <?php echo $this->Form->control('bullet2',['class'=>'form-control', 'label'=>false,'placeholder'=>'Bullet 1']);?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Bullet 3</label>
                            <?php echo $this->Form->control('bullet3',['class'=>'form-control', 'label'=>false,'placeholder'=>'Bullet 3']);?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Texto</label>
                            <?php echo $this->Form->control('texto',['rows'=>7,'class'=>'form-control', 'label'=>false,'placeholder'=>'Texto']);?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Missão</label>
                            <?php echo $this->Form->control('missao',['rows'=>7,'class'=>'form-control', 'label'=>false,'placeholder'=>'Missão']);?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Visão</label>
                            <?php echo $this->Form->control('visao',['rows'=>7,'class'=>'form-control', 'label'=>false,'placeholder'=>'Visão']);?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Valores</label>
                            <?php echo $this->Form->control('valores',['rows'=>7,'class'=>'form-control', 'label'=>false,'placeholder'=>'Valores']);?>
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
                    <div class="control-group">
                        <label>Imagem</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <?php echo $this->Form->file('uploadfile', ['type' => 'file', 'class'=>'']);?>
                        </div>
                    </div>


                    <br>
                    <div class="form-group"><button class="btn btn-primary btn-xl" type="submit">Salvar</button></div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>