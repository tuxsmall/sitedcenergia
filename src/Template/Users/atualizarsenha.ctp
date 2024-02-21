<?php
    $this->assign('title', 'Crie sua nova senha'); 
?>




<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mt-4">Crie uma nova senha</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><svg class="svg-inline--fa fa-user fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fas fa-star"></i> --></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?= $this->Form->create() ?>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Crie uma nova senha</label>
                            <?php echo $this->Form->control('password',['class'=>'form-control', 'label'=>false,'placeholder'=>'Sua nova senha']);?>
                        </div>
                    </div>


                    <br>
                    <div class="form-group"><button class="btn btn-primary btn-xl  btn-block" type="submit">Salvar nova senha</button></div>
					<p class="mb-2 text-muted text-center">Já tem uma conta? <a href="<?php echo $this->Url->build('/users/login', true);?>" class="f-w-900 btn btn-success text-white">Faça login</a></p>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>





