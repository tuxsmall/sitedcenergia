<?php
    $this->assign('title', 'Bem vindo ao Orbe Display - Faça Login para entrar.'); 
?>
<section class="page-section" id="contact">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mt-5">Faça login</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>

        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?= $this->Form->create() ?>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email</label>
                            <?php echo $this->Form->control('username',['class'=>'form-control', 'label'=>false,'placeholder'=>'Email']);?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Senha</label>
                            <?php echo $this->Form->control('password',['class'=>'form-control', 'label'=>false,'placeholder'=>'Senha']);?>
                        </div>
                    </div>

                    <br>
                    <div class="form-group"><button class="btn btn-primary btn-xl" type="submit">Entrar</button></div>
                <?= $this->Form->end() ?>
                <p class="mb-2 text-muted text-center">Esqueceu sua senha? <a href="<?php echo $this->Url->build('/users/recuperarsenha', true);?>" class="f-w-900 btn btn-success text-white">Recuperar senha</a></p>

            </div>
        </div>
    </div>
</section>




