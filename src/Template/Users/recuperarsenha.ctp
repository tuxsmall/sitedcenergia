<?php
    $this->assign('title', 'Recupere sua senha'); 
?>

<section class="page-section" id="contact">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">Recupere sua senha</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?= $this->Form->create() ?>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Informe o email cadastrado</label>
                            <?php echo $this->Form->control('username',['class'=>'form-control', 'label'=>false,'placeholder'=>'Seu Email']);?>
                        </div>
                    </div>


                    <br>
                    <div class="form-group"><button class="btn btn-primary btn-xl  btn-block" type="submit">Enviar link de recuperação</button></div>
					<p class="mb-2 text-muted text-center">Já tem uma conta? <a href="<?php echo $this->Url->build('/users/login', true);?>" class="f-w-900 btn btn-success text-white">Faça login</a></p>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>




