    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown fw-bold"><?= h($kit->nome) ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo $this->Url->build('/', true);?>">Início</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"><a class="text-white" href="<?php echo $this->Url->build('/kits-solares', true);?>">Kits Solares</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"><a class="text-white" href="<?php echo $this->Url->build('/kit-solar/'.$kit->category->slug, true);?>"><?= (mb_strtolower($kit->category->categoria,"utf-8")); ?></a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"><?= (mb_strtolower($kit->nome,"utf-8")); ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container">
    <?php //debug($kit->category); ?>
        <div class="row mb-3 text-center">
            <div class="col-md-4 themed-grid-col">
                <?php 
                    echo $this->Html->image("/publico/img/".$kit->uploadfile, [
                    "alt" => $kit->uploadfile,
                    //'width' => '360',
                    'class' =>'rounded-lg border img-thumbnail img-fluid'
                    ]);              
                ?>
            </div>
            <div class="col-md-8" style="text-align:start">
                <span class="badge text-bg-primary" style="font-size:10px"><i class="fa-solid fa-award"></i> <?php echo strtoupper($kit->garantia); ?></span>
                <span class="badge text-bg-warning" style="font-size:10px"><i class="fa-solid fa-truck"></i> COMPRE AGORA COM FRETE GRÁTIS</span>
                <h1 class="display-3 m-2 animated slideInDown fw-bold fs-1 themed-grid-col fw-medium text-secondary start"><?= h($kit->nome) ?></h1>
                <small>
                    <div class="ps-3 text-warning">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                </small>

                <hr class="border border-secondary border-1 opacity-75">
                <?= $kit->descricao_longa; ?>
                <?php if(!empty($kit->valor)){ ?>
                    <div class="fs-4 fw-bold text-secondary"><?php echo $kit->valor; ?></div>
                    <div class="fs-6 fw-semibold text-secondary mb-2"><?php echo($kit->formaPagamento); ?></div>
                <?php } ?>
                
                <?php //debug($kit);?>
                <?php if(!empty($kit->indicado)){ ?>
                    <div class="border border-secondary-subtle rounded p-3">
                        <div style="font-size:10px; font-weight:bold" class="text-dark">
                            <i class="fa-solid fa-check"></i> APLICAÇÕES 
                        </div>
                        <div class="fw-semibold text-dark"> <i class="fa-solid fa-plug-circle-check"></i> <?php echo $kit->indicado; ?></div>
                    </div>
                <?php } ?>
                <div class="d-grid gap-2 mt-5">
                <?php if(empty($kit->valor)){ ?>
                    <a class="botao rounded-pill small text-center btn-lg" href="https://wa.me/5586999985015?text=Eu+quero+comprar+o+<?= h($kit->nome) ?>"><span>FAÇA SEU ORÇAMENTO <i class="fa-solid fa-arrow-right"></i></span></a>
                <?php }else{?>
                    <a class="botao rounded-pill small text-center btn-lg" href="https://wa.me/5586999985015?text=Eu+quero+comprar+o+<?= h($kit->nome) ?>"><span>COMPRAR AGORA <i class="fa-solid fa-arrow-right"></i></span></a>
                <?php }?>
                </div>
            </div>
        </div>


        <?php if(!empty($outroskits)){ ?>
                <div class="text-center mx-auto py-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <hr>
                    <h2 class="mb-4 fs-5 text-secondary fw-bold"><i class="fa-solid fa-magnifying-glass"></i> VEJA OUTROS <?php echo  mb_strtoupper($kit->category->categoria,"utf-8");?></h2>
                </div>
                <div class="row g-4">
                    <?php foreach($outroskits as $outrokit) { ?>
                        <?php //debug($outrokit);?>

                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded overflow-hidden">
                            <?php 
                                echo $this->Html->image("/publico/img/".$outrokit['uploadfile'], [
                                "alt" => $outrokit['nome'],
                                //'width' => '360',
                                'class' =>'img-fluid',
                                'url'=>'/kit/'.$outrokit['slugKit']
                                ]);              
                            ?>
                            <div class="position-relative p-4 pt-0">

                                <h4 class="mb-4 display-3 animated slideInDown fw-bold fs-6 themed-grid-col fw-medium text-secondary start text-center"><?php echo $outrokit['nome'];?></h4>
                                <p><?php echo $outrokit['descricao_curta']?></p>

                                <div class="container btn-geral">
                                    <div class="d-grid gap-2">
                                        <a class="botao rounded-pill small text-center" href="<?php echo $this->Url->build('/kit/'.$outrokit['slugKit'], true);?>"><span>Saiba mais <i class="fa-solid fa-angles-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                    <?php } ?>
                </div>
        <?php } ?>
    </div>