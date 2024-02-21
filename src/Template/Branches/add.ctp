<section class="page-section">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">Adicionar Filial</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/branches', true);?>">
                    Filiais
                </a>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?php echo $this->Form->create($branch, array('enctype' => 'multipart/form-data')); ?>
                    <div class="control-group">
                        <label>Foto</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <?php echo $this->Form->file('uploadfile', ['type' => 'file', 'class'=>'']);?>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Estado</label>
                            <?php echo $this->Form->control('estado',['class'=>'form-control', 'label'=>false,'placeholder'=>'Estado']);?>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Cidade</label>
                            <?php echo $this->Form->control('cidade',['class'=>'form-control', 'label'=>false,'placeholder'=>'Cidade']);?>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Endereço</label>
                            <?php echo $this->Form->control('endeco',['class'=>'form-control', 'label'=>false,'placeholder'=>'Endereço completo da filial']);?>
                        </div>
                    </div>


                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Whatsapp</label>
                            <?php echo $this->Form->control('whatsapp',['class'=>'form-control', 'label'=>false,'placeholder'=>'Whatsapp da filial (sem espaços ou caracteres especiais)']);?>
                        </div>
                    </div>

                    <br>
                    <div class="form-group"><button class="btn btn-primary btn-xl" type="submit">Salvar</button></div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>



