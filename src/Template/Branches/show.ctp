    <div class="containter noticias py-5 mt-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
          <h6 class="text-primary">Onde estamos</h6>
          <h1 class="mb-4 display-3 animated slideInDown fw-bold fs-2 themed-grid-col fw-medium text-secondary start text-center">Nossas filiais</h1>
        </div>
        
        <div class="articles">
          <?php foreach($branches as $filial){ ?>
            <!-- noticia 01 -->
            <article>
              <figure>
                  <?php 
                    echo $this->Html->image("/publico/img/".$filial->uploadfile, [
                    "alt" => $filial->uploadfile,
                    'class' =>'img-fluid',
                    ]);              
                  ?>
              </figure>
              <div class="article-preview">
                <h2 class="mb-4 display-3 animated slideInDown fw-bold fs-5 themed-grid-col fw-medium text-secondary start text-center"><?php echo $filial->cidade . ' - '. $filial->estado ;?></h2>
                <p class="text-secondary fw-semibold">
                    <i class="fa-solid fa-location-dot" aria-hidden="true"></i> <?php echo $filial->endeco;?>
                </p>
				<p class="text-secondary fw-semibold">
                    <a href="<?php echo $filial->instagram;?>" class="btn btn-primary p-2 w-100 fw-bold rounded-pill">
						<i class="fab fa-instagram"></i> <?php echo $filial->label;?>
					</a>
                </p>



                <div class="container btn-geral align-self-end">
                    <div class="d-grid gap-2">
                        <a class="botao rounded-pill small text-center" href="https://wa.me/55<?php echo $filial->whatsapp;?>?text=Ol%C3%A1%21+Estou+precisando+de+informa%C3%A7%C3%B5es%2C+pode+me+ajudar%3F"><span>Fale com esta filial <i class="fab fa-whatsapp"></i></span></a>
                    </div>
                </div>




              </div>
            </article>
          <?php } ?>
        </div>
    </div>