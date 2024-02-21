<?php 
  if($historia != false):
?>
  <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0 section-padding" id="sobre">
    <div class="container sobrenos px-lg-0">
      <div class="row g-0 mx-lg-0">
        <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <?php 
                echo $this->Html->image("/publico/img/".$historia->uploadfile, [
                'alt' => $historia->uploadfile,
                'class' =>'position-absolute img-fluid w-100 h-100 img-thumbnail',
                'style' =>'object-fit: cover;'
                ]);              
            ?>
          </div>
        </div>
        <div class="col-lg-6 sobrenos-text py-5 wow fadeIn" data-wow-delay="0.5s">
          <div class="p-lg-5 pe-lg-0">
            <h6 class="text-primary">Nossa História</h6>
            <h1 class="mb-4"><?php echo $historia->chamada1?></h1>
            <p><?php echo $historia->chamada2?></p>
            <p><i class="fa fa-check-circle text-primary me-3"></i><?php echo $historia->bullet1?></p>
            <p><i class="fa fa-check-circle text-primary me-3"></i><?php echo $historia->bullet2?></p>
            <p><i class="fa fa-check-circle text-primary me-3"></i><?php echo $historia->bullet3?></p>
            <div class="container btn-geral">
              <a class="botao rounded-pill small" href="<?php echo $this->Url->build('/historia/'.$historia->slug, true);?>"><span>Conheça a DC Energia</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
