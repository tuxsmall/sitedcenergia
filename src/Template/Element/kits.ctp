<?php 
  $conta_kits = count($exibecats);
  if ($conta_kits >= 1): 
?>

<div class="container-xxl section-padding py-5" id="kitsolar">
    <div class="container">
      <div class="text-center mx-auto mb-1 wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-primary">Nossos Kits</h6>
        <h2 class="mb-4 display-3 animated slideInDown fw-bold fs-2 themed-grid-col fw-medium text-secondary start text-center">Veja qual o melhor kit para seu Projeto Solar</h2>
      </div>

            <div class="row g-4">
              <?php foreach ($exibecats as $category): ?>
                  <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                      <div class="service-item rounded overflow-hidden">
                          <?php 
                              echo $this->Html->image("/publico/img/kitsolar-cat.jpg", [
                              "alt" => $category->categoria,
                              //'width' => '360',
                              'class' =>'img-fluid',
                              'url'=>'/kit-solar/'.$category->slug
                              ]);              
                          ?>
                          <div class="position-relative p-4 pt-0">
                          <div class="service-icon">
                              <i class="fa fa-solar-panel fa-2x" aria-hidden="true"></i>
                          </div>
                          <h4 class="mb-4 display-3 animated slideInDown fw-bold fs-5 themed-grid-col fw-medium text-secondary start text-center"><?php echo $category->categoria;?></h4>
                          <p><?php ?></p>
                          <div class="container btn-geral">
                              <div class="d-grid gap-2">
                                  <a class="botao rounded-pill small text-center" href="<?php echo $this->Url->build('/kit-solar/'.$category->slug, true);?>"><span>Ver Linha Completa <i class="fa-solid fa-angles-right"></i></span></a>
                              </div>
                          </div>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
            </div>
    </div>
</div>
<?php endif; ?>