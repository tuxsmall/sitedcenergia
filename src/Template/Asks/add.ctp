<section class="page-section">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">Nova Pergunta</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/asks', true);?>">
                    Perguntas
                </a>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?= $this->Form->create($ask) ?>



                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Pergunta</label>
                            <?php echo $this->Form->control('pergunta',['class'=>'form-control', 'label'=>false,'placeholder'=>'Pergunta']);?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Resposta</label>
                            <?php echo $this->Form->control('resposta',['class'=>'form-control', 'label'=>false,'placeholder'=>'Resposta']);?>
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
                    <div class="form-group"><button class="btn btn-primary btn-xl" type="submit">Salvar pergunta</button></div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>








