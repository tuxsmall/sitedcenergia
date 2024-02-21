<?php
  $conta = count($exibenews);
  //debug($conta);
  if($conta > 0){ 
?>
    <div class="containter noticias py-5" id="noticias">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
          <h6 class="text-primary">Notícias e Artigos</h6>
          <h1 class="mb-4 display-3 animated slideInDown fw-bold fs-2 themed-grid-col fw-medium text-secondary start text-center">Tudo sobre Energia Solar</h1>
        </div>
        
        <div class="articles">
          <?php foreach($exibenews as $new){ ?>
            <!-- noticia 01 -->
            <article>
              <figure>
                  <?php 
                    echo $this->Html->image("/publico/img/".$new->uploadfile, [
                    "alt" => $new->uploadfile,
                    'class' =>'img-fluid',
                    'url'=>'/noticias/'.$new->slug
                    ]);              
                  ?>
              </figure>
              <div class="article-preview">
                <h2 class="mb-4 display-3 animated slideInDown fw-bold fs-5 themed-grid-col fw-medium text-secondary start text-center"><?php echo $new->titulo;?></h2>
                  <div class="container btn-geral">
                    <a class="botao rounded-pill small" href="<?php echo $this->Url->build('/noticias/'.$new->slug, true);?>"><span>Leia +</span></a>
                  </div>
              </div>
            </article>
          <?php } ?>
        </div>
      </div>
<?php }?>