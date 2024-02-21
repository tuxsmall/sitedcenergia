<?php 
  $conta_logos = count($exibeslogos);
  if ($conta_logos >= 1): 
?>
  <div class="container carrossel-logos">
    <div class="logos">
      <div class="logos-slide">
        <?php foreach($exibeslogos as $logo){ ?>
            <?php 
                echo $this->Html->image("/publico/img/".$logo->uploadfile, [
                "alt" => $logo->uploadfile,
                'class' =>''
                ]);              
            ?>
        <?php } ?>
      </div>
    </div>
  </div>
<?php endif; ?>