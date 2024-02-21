<?php 
  $conta = count($slideinicial);
  if ($conta == 1): 


    //debug($slideinicial);


?>
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php foreach($slideinicial as $slide){ ?>
            <div class="carousel-item active c-item">
              <?php 
                  echo $this->Html->image("/publico/img/".$slide->uploadfile, [
                  "alt" => $slide->chamada1,
                  'class' =>'d-block w-100 c-img'
                  ]);              
              ?>
              <div class="carousel-caption top-0 mt-4">
                <p class="mt-5 fs-3 text-uppercase"><?php echo($slide->chamada1);?></p>
                <h1 class="display-1 fw-bolder text-capitalize"><?php echo($slide->titulo);?></h1>
                <div class="container btn-geral">
                  <?php if(empty($slide->link)){ ?>
                    <a class="botao rounded-pill small" href="<?php echo $this->Url->build('/ver/'.$slide->id, true);?>"><span>Saiba +</span></a>
                    <?php }else{ ?>
                      <a class="botao rounded-pill small" href="<?php echo $this->Url->build($slide->link, true);?>"><span>Saiba +</span></a>
                  <?php } ?>
                </div>
              </div>
            </div>
        <?php } ?>

          <?php foreach($exibeslides as $slides){ ?>
            <?php //debug($slides);?>
            <div class="carousel-item c-item">
              <?php 
                  echo $this->Html->image("/publico/img/".$slides->uploadfile, [
                  "alt" => $slides->uploadfile,
                  'class' =>'d-block w-100 c-img'
                  ]);              
              ?>
              <div class="carousel-caption top-0 mt-4">
                <p class="mt-5 fs-3 text-uppercase"><?php echo($slides->chamada1);?></p>
                <h1 class="display-1 fw-bolder text-capitalize"><?php echo($slides->titulo);?></h1>
                <div class="container btn-geral">


                  <?php if(empty($slides->link)){ ?>
                    <a class="botao rounded-pill small" href="<?php echo $this->Url->build('/ver/'.$slides->id, true);?>"><span>Saiba +</span></a>
                    <?php }else{ ?>
                      <a class="botao rounded-pill small" href="<?php echo $this->Url->build($slides->link, true);?>"><span>Saiba +</span></a>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php } ?>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
<?php endif; ?>