<div class="container-fluid page-header py-4 mb-1 mt-5">
        <div class="container py-2">
            <h1 class="display-3 text-white mb-3 animated slideInDown fw-bold">Notícias</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo $this->Url->build('/', true);?>">Início</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Notícias</li>
                </ol>
            </nav>
        </div>
    </div>


<div class="container-xxl section-padding py-5" id="kitsolar">
    <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-primary">Notícias e Artigos</h6>
        <h2 class="mb-4 display-3 animated slideInDown fw-bold fs-2 themed-grid-col fw-medium text-secondary start text-center">Tudo sobre Energia Solar</h2>
      </div>
      <div class="row g-4">
	  
	  
        <?php if (!empty($contents->toArray())){ ?>

        <div class="articles">
          <?php foreach ($contents as $content){ ?>
<!-- noticia 01 -->
<!-- noticia 01 -->
<!-- noticia 01 -->
<article style="display: flex; flex-direction: column;">
    <figure>
        <?php echo $this->Html->image("/publico/img/".$content->uploadfile, [
            "alt" => $content->uploadfile,
            'class' =>'img-fluid',
            'url'=>'/noticias/'.$content->slug
        ]); ?>
    </figure>
    <div class="article-preview" style="flex-grow: 1; display: flex; flex-direction: column;">
        <h2 class="mb-4 display-3 animated slideInDown fw-bold fs-6 themed-grid-col fw-medium text-secondary start text-center">
            <?php echo $content->titulo;?>
        </h2>
        <div class="container text-center btn-geral" style="align-self: flex-end;">
            <a class="botao rounded-pill small" href="<?php echo $this->Url->build('/noticias/'.$content->slug, true);?>">
                <span>Leia +</span>
            </a>
        </div>
    </div>
</article>




          <?php } ?>

        <?php }else{ ?>
            <div class="alert alert-warning">
                <i class="fa-solid fa-circle-info"></i> Nenhum notícia foi encontrada no momento.
            </div>
        <?php } ?>

      </div>
    </div>
</div>
