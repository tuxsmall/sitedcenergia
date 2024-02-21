<section class="page-section">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">Novo Cliente</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/clients', true);?>">
                    Clientes
                </a>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?php echo $this->Form->create($client, array('enctype' => 'multipart/form-data')); ?>

                    <div class="control-group">
                        <label class="ml-3">Tipo</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <?php echo $this->Form->select(
                                    'tipo',
                                    ['projeto' => 'projeto', 'depoimento' => 'depoimento'],
                                    ['empty' => '- Selecione -','class'=>'form-control','label'=>'Escolha um tipo', 'id' => 'tipo','required']
                                );
                            ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label>Imagem</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <?php echo $this->Form->file('uploadfile', ['type' => 'file', 'class'=>'','required']);?>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Nome</label>
                            <?php echo $this->Form->control('nome',['class'=>'form-control', 'label'=>false,'placeholder'=>'Nome']);?>
                        </div>
                    </div>
                    <div class="control-group" id="campolocal">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>local</label>
                            <?php echo $this->Form->control('local',['class'=>'form-control', 'label'=>false,'placeholder'=>'local']);?>
                        </div>
                    </div>
                    <div class="control-group" id="campourl">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>URL</label>
                            <?php echo $this->Form->control('url',['class'=>'form-control', 'label'=>false,'placeholder'=>'url']);?>
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
                    <div class="form-group"><button class="btn btn-primary btn-xl" type="submit">Salvar depoimento</button></div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>

