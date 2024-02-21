    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown fw-bold">Perguntas mais comuns</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo $this->Url->build('/', true);?>">Início</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">FAQ</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container">
        <div class="row mb-3 text-center">
            <div class="col-md-4 themed-grid-col">
				  <?php 
					  echo $this->Html->image("/publico/img/img_pag-duvidas.jpg", [
					  "alt" => 'Dúvidas mais comuns',
					  'class' =>'img-fluid img-thumbnail'
					  ]);              
				  ?>

            </div>

            <div class="col-md-8" style="text-align:start">
                <h1 class="display-3 mb-3 animated slideInDown fw-bold fs-2 themed-grid-col fw-medium text-secondary start">Tire suas dúvidas: Perguntas mais comuns</h1>
                    <div class="accordion" id="accordionExample">
                        <?php foreach ($asks as $ask): ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#ask<?php echo($ask->id);?>" aria-expanded="true" aria-controls="ask<?php echo($ask->id);?>">
                                        <?php echo($ask->pergunta);?>
                                    </button>
                                </h2>
                                <div id="ask<?php echo($ask->id);?>" class="accordion-collapse collapse" data-bs-parent="#ask<?php echo($ask->id);?>">
                                    <div class="accordion-body fs-5">
                                        <?php echo($ask->resposta);?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
            </div>
        </div>
    </div>