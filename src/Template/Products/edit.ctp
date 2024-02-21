<section class="page-section" id="contact">
    <div class="container-fluid">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mt-4">Editando Produto</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fas fa-star"></i> --></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?php echo $this->Form->create($product, array('enctype' => 'multipart/form-data')); ?>

                    <div class="control-group">
                        <label>Foto do produto</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <?php echo $this->Form->file('imagem', ['type' => 'file', 'class'=>'']);?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Nome do produto</label>
                            <?php echo $this->Form->control('nome',['class'=>'form-control', 'label'=>false,'placeholder'=>'Nome do produto']);?>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Valor</label>
                            <?php echo $this->Form->control('valor',['class'=>'form-control', 'label'=>false,'placeholder'=>'Valor do produto']);?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Descrição</label>
                            <?php echo $this->Form->control('descricao',['class'=>'form-control', 'label'=>false,'placeholder'=>'Descrição do produto','rows'=>2]);?>
                        </div>
                    </div>
<br>
                    <!--COMEÇO-->
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm">
                        
                        <div class="control-group">
                            <label class="ml-3">Exibir no slide?</label>
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <?php echo $this->Form->select(
                                        'slide',
                                        ['sim' => 'sim', 'não' => 'não'],
                                        ['empty' => '- Selecione -','class'=>'form-control','label'=>'Deve ser exibido como primeiro produto?']
                                    );
                                ?>
                            </div>
                        </div>

                        </div><!--FIM-->
                        <div class="col-sm">
                        
                        <div class="control-group">
                            <label class="ml-3">Destaque</label>
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <?php echo $this->Form->select(
                                        'destaque',
                                        ['sim' => 'sim', 'não' => 'não'],
                                        ['empty' => '- Selecione -','class'=>'form-control','label'=>'Deve ser exibido como primeiro produto?']
                                    );
                                ?>
                            </div>
                        </div>                        
                        </div><!--FIM-->
                        <div class="col-sm">
                        
                        <div class="control-group">
                            <label class="ml-3">Categoria</label>
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <?php echo $this->Form->control('category_id',['class'=>'form-control','label'=>false]);;?>
                            </div>
                        </div>                        

                        </div><!--FIM-->
                    </div>
                    </div>
                    <!--FIM-->
                    <!--COMEÇO-->
                    <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                                <div class="control-group">
                                    <label class="ml-3">Expira</label>
                                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                        <?php echo $this->Form->control('expira',['class'=>'form-control', 'label'=>false,'placeholder'=>'Expira']);?>
                                    </div>
                                </div>
                        </div><!--FIM-->
                        <div class="col-sm-4">
                                <div class="control-group">
                                    <label class="ml-3">Tipo de publicação</label>
                                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                        <?php echo $this->Form->select(
                                                'tipo',
                                                ['video' => 'video', 'carrossel' => 'carrossel','outros'=>'outros', 'banner'=>'banner'],
                                                ['empty' => '- Selecione -','class'=>'form-control','label'=>'Onde exibir?']
                                            );
                                        ?>
                                    </div>
                                </div>
                        </div><!--FIM-->
                        <div class="col-sm-3">
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
                        </div><!--FIM-->

                    </div>
                    </div>
                    <!--FIM-->
                    <br>
                    <div class="form-group"><button class="btn btn-primary btn-xl btn-block" type="submit">Salvar alterações no produto</button></div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>