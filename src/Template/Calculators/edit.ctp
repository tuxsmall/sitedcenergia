<section class="page-section">
    <div class="container-fluid">
        <h2 class="text-center text-uppercase text-secondary mt-5">Atualizar atendimento</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center" href="<?php echo $this->Url->build('/calculators', true);?>">
                    Calculadora
                </a>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?php echo $this->Form->create($calculator, array('enctype' => 'multipart/form-data')); ?>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Nome do cliente</label>
                            <?php echo $this->Form->control('nome',['class'=>'form-control', 'label'=>false,'placeholder'=>'Nome do cliente']);?>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Cidade do cliente</label>
                            <?php echo $this->Form->control('cidade',['class'=>'form-control', 'label'=>false,'placeholder'=>'Nome do cliente']);?>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="ml-3">Status de atendimento</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <?php echo $this->Form->select(
                                    'status',
                                    ['contatado' => 'contatado', 'Não contatado' => 'Não contatado'],
                                    ['empty' => '- Selecione -','class'=>'form-control','label'=>'Status de atendimento']
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
