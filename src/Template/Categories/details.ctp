  <br>
  <br>

  <div class="container-xxl section-padding py-5" id="kitsolar">
    <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-primary">Nossos Kits</h6>
        <h2 class="mb-4 display-3 animated slideInDown fw-bold fs-2 themed-grid-col fw-medium text-secondary start text-center"><i class="fa-solid fa-solar-panel"></i> <?php echo $category->categoria;?></h2>
      </div>
      <div class="row g-4">

      <?php if(!empty($category->aplicacao)){ ?>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button fw-bold text-secondary bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <i class="fa-solid fa-caret-right"></i> &nbsp;Para quem serve <?= (mb_strtolower($category->categoria,"utf-8")); ?>?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <?php echo($category->aplicacao);?>
              </div><!--body-->
            </div>
          </div>
        </div>
      <?php } ?>

        <?php if(!empty($category->kits)){ ?>
          <?php foreach($category->kits as $kits){ ?>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item rounded overflow-hidden">
                <?php 
                    echo $this->Html->image("/publico/img/".$kits->uploadfile, [
                    "alt" => $kits->uploadfile,
                    'class' =>'img-fluid',
                    'url'=>'/kit/'.$kits->slug
                    ]);              
                ?>
                <div class="position-relative p-4 pt-0">
                  <div class="service-icon">
                    <i class="fa fa-solar-panel fa-3x"></i>
                  </div>
                  <h4 class="mb-4 display-3 animated slideInDown fw-bold fs-6 themed-grid-col fw-medium text-secondary start text-center"><?php echo $kits->nome;?></h4>
                  <p class="text-secondary"><?php echo $kits->descricao_curta;?></p>
                  <div class="container btn-geral">
                      <div class="d-grid gap-2">
                          <a class="botao rounded-pill small text-center" href="<?php echo $this->Url->build('/kit/'.$kits->slug, true);?>"><span>Saiba mais <i class="fa-solid fa-angles-right"></i></span></a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        <?php }else{ ?>
          <div class="alert alert-warning">
            <i class="fa-solid fa-circle-info"></i> Nenhum produto nessa linha foi encontrado.
          </div>
        <?php } ?>


      </div>
    </div>
  </div>
