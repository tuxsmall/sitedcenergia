<?php 
  $conta_depo = count($exibeclientes);
  if ($conta_depo >= 1): 
    //debug($exibeclientes);exit;
?>
<div class="container-xxl py-5">
  <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <h6 class="text-primary">Resultados</h6>
    <h1 class="mb-4">Clientes felizes</h1>
  </div>

<?php //debug($exibeprojetos); ?>

    <section class="photo-gallery">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 gallery-grid">
          <?php foreach($exibeprojetos as $projeto){ ?>
              <div class="col">
                <a class="gallery-item" href="<?php echo $this->Url->build('/publico/img/'.$projeto->uploadfile, true);?>"  rel="lightbox[projetos]"  title="<?php echo $projeto->nome; ?>">
                  <?php 
                      echo $this->Html->image("/publico/img/".$projeto->uploadfile, [
                      "alt" => $projeto->nome,
                      'class' =>'img-fluid img-thumbnail'
                      ]);              
                  ?>
                </a>
              </div>
          <?php } ?>

        </div>
      </div>
    </section>




  
  <section class="splide mt-4">
    <div class="splide__track">
      <ul class="splide__list">
        <?php foreach($exibeclientes as $depo){ ?>  
        <?php //debug($depo); ?>  
            <li class="splide__slide m-1">
              <div class="card" style="width: 27rem;">
                <a href="https://www.youtube.com/watch?v=ya4Mm96Db4s" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#abremodal<?php echo $depo->id;?>">
                  <?php 
                      echo $this->Html->image("/publico/img/".$depo->uploadfile, [
                      "alt" => $depo->uploadfile,
                      'class' =>'card-img-top'
                      ]);              
                  ?>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $depo->nome;?></h5>
                    <p class="card-text"><?php echo $depo->local;?></p>
                  </div>
                </a>
              </div>
            </li>
        <?php } ?>
      </ul>
		<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
		<div class="elfsight-app-0758517a-082b-46c4-99c8-75e5434f333e" data-elfsight-app-lazy></div>
		
		
	  <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
		<h4 class="text-primary fw-bold py-3">Veja nossas Filiais</h4>
		<div class="row">
    <div class="col-6">
        <a href="https://www.instagram.com/dcenergiace/" class="btn btn-primary p-2 w-100 fw-bold rounded-pill">
            <i class="fab fa-instagram"></i> Filial do Ceará
        </a>
    </div>
    <div class="col-6">
        <a href="https://www.instagram.com/dcenergiadf/" class="btn btn-primary p-2 w-100 fw-bold rounded-pill">
            <i class="fab fa-instagram"></i> Filial de Brasília
        </a>
    </div>
</div>

	  </div>		
		
		
		
		
    </div>
  </section>
          <?php foreach($exibeclientes as $modais){ ?>

        <!-- Modal -->
        <div class="modal fade" id="abremodal<?php echo $modais->id;?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-fullscreen-sm-down">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalLabel"><?php echo $modais->nome;?> (<?php echo $modais->local;?>)</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <iframe width="467" height="315" src="https://www.youtube.com/embed/<?php echo $modais->url;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>

            </div>
          </div>
        </div>
        <!-- Modal -->

        <?php } ?>
</div>

<?php endif; ?>
