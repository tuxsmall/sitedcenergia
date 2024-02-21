<section class="page-section" id="contact">
    <div class="container">
    <h5 class="text-center text-uppercase text-secondary mt-5">Editando usuário</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/users', true);?>">
                        Usuários
                    </a>
                </div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?= $this->Form->create($user) ?>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Seu nome completo</label>
                            <?php echo $this->Form->control('nome',['class'=>'form-control', 'label'=>false,'placeholder'=>'Nome']);?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email</label>
                            <?php echo $this->Form->control('username',['class'=>'form-control', 'label'=>false,'placeholder'=>'Email']);?>
                        </div>
                    </div>

                    <br>
                    <div class="form-group"><button class="btn btn-primary btn-xl" type="submit">Salvar alterações</button></div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>