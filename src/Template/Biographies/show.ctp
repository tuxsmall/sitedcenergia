    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown fw-bold"><?= h($biography->chamada1) ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo $this->Url->build('/', true);?>">Início</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Nossa história</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container">
        <div class="row mb-3 text-center">
            <div class="col-md-4 themed-grid-col">
                <?php 
                    echo $this->Html->image("/publico/img/".$biography->uploadfile, [
                    "alt" => $biography->uploadfile,
                    //'width' => '360',
                    'class' =>'rounded-lg border img-thumbnail img-fluid'
                    ]);              
                ?>
            </div>
            <div class="col-md-8 themed-grid-col fw-medium text-secondary start fs-5" style="text-align:start">
                <p class="fs-4 fw-semibold">Conheça um pouco da nossa história</p>
                <?php echo $biography->texto; ?>
                
                <p style="font-size:25px; font-weight:bold" class="text-center"><i class="fas fa-check"></i> Missão</p>
                <div><?php echo $biography->missao;?></div>
                
                
                <p style="font-size:25px; font-weight:bold" class="text-center"><i class="fas fa-check"></i> Visão</p>
                <div><?php echo $biography->visao;?></div>

                
                <p style="font-size:25px; font-weight:bold" class="text-center"><i class="fas fa-check"></i> Valores</p>
                <div><?php echo $biography->valores;?></div>

            </div>
        </div>
    </div>