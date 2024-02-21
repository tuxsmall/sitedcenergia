    <!-- Page Header Start -->
    <div class="container-fluid page-header py-4 mb-1 mt-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown fw-bold"><?= h($content->titulo) ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo $this->Url->build('/', true);?>">Início</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Notícias</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->








    <div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <?php //debug($content);?>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="display-3 m-3 animated slideInDown fw-bold fs-1 themed-grid-col fw-medium text-secondary start"><?= h($content->titulo) ?></h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2"><?= h($content->created) ?></div>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4">
                    <?php 
                        echo $this->Html->image("/publico/img/".$content->uploadfile, [
                        "alt" => $content->uploadfile,
                        //'width' => '360',
                        'class' =>'img-fluid rounded'
                        ]);              
                    ?>
                </figure>
                <!-- Post content-->
                <section class="mb-5">
                    <?php echo($content->texto) ?>
                </section>
            </article>
            <hr>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4 bnrs-promo">
            <h2 class="fw-bolder mb-4">Leia mais!</h2>
                <?php if(!empty($outrosposts)){ ?>
                    <?php foreach ($outrosposts as $post){ ?>
                        <div class="bnr mb-4">
                            <figure class="mb-4">
                                <?php 
                                    echo $this->Html->image("/publico/img/".$post['uploadfile'], [
                                    "alt" => $post['uploadfile'],
                                    //'width' => '360',
                                    'class' =>'img-fluid rounded',
                                    'url'=>'/noticias/'.$post['slug']
                                    ]);              
                                ?>
                                <a href="<?php echo $this->Url->build('/noticias/'.$post['slug'], true);?>" style="text-decoration:none;font-weight:600">
                                    <?php echo $post['titulo'];?>
                                </a>
                            </figure>
                        </div>
                    <?php } ?>
                <?php } ?>

        </div>
    </div>
</div>
