<section class="page-section">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mt-5">Editar Parceiro</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/partners', true);?>">
                    Parceiros
                </a>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?php echo $this->Form->create($partner, array('enctype' => 'multipart/form-data')); ?>

                    
                    <div class="control-group">
                        <label>Imagem</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <?php echo $this->Form->file('uploadfile', ['type' => 'file', 'class'=>'']);?>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Nome do parceiro</label>
                            <?php echo $this->Form->control('nome',['class'=>'form-control', 'label'=>false,'placeholder'=>'Nome do parceiro']);?>
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