<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Orbecode Soluções Web">

  <meta name="description" content="">
  <link rel="icon" type="image/svg+xml" href="img/favicon-dc.svg">

  <!-- FONT UBUNTU -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

  <?= $this->Html->css(['/publico/css/bootstrap.min.css','/publico/css/estilo.css','/publico/css/lightbox.css']) ?>
  <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

  <!-- FONT AWESOME (ICONS) -->
  <script src="https://kit.fontawesome.com/c904d81f66.js" crossorigin="anonymous"></script>


  <meta name="author" content="Orbecode Soluções Web">
  <meta name="title" content="DC Energia - Prontos para o Futuro" />
  <meta name="url" content="https://dcenergia.com/" />
  <meta name="description" content="DC Energia - Prontos para o Futuro" />
  <meta name="keywords"
    content="dc energia, painel solar, renovável, sustentável, fotovoltaico, inovação, eficiência, solaire, sustentabilidade, tecnologia limpa, captação solar, energia verde, energia renovável, emissão zero, geração solar, sistemas fotovoltaicos," />
  <meta name="revisit-after" content="10" />
  <title>DC Energia - Prontos para o Futuro</title>

</head>
</head>

<body>

  <!-- SESSÃO NAVBAR  -->
    <?php echo $this->element('navbar');?>
  <!-- SESSÃO HOME  -->
  <div class="home" id="home">
    <?php echo $this->element('slide');?>
    <?php echo $this->element('card');?>
  </div>
  
  <?php echo $this->element('kits');?>
  <?php echo $this->element('acessecalc');?>
  <?php echo $this->element('sobre');?>
  <?php echo $this->element('logos');?>

  <?php echo $this->element('noticias');?>
  <?php echo $this->element('depoimentos');?>
  <?php echo $this->element('mapa');?>
  <?php echo $this->element('footer');?>


  <div>
    <a href="#." target="_blank">
        <?php 
            echo $this->Html->image("/publico/img/whatsapp.png", [
            "alt" => 'DC Energia',
            'class' =>'whatsapp'
            ]);              
        ?>
    </a>
  </div>

  <!-- Java Script -->
  <?php echo $this->Html->script([
          '/publico/js/jquery.min.js','/publico/js/bootstrap.bundle.min.js','/publico/js/cookies.js','/publico/js/animacao.js','/publico/js/ajax.js','/publico/js/lightbox.js'
			])
		?>


  <script>
    var copy = document.querySelector(".logos-slide").cloneNode(true);
    document.querySelector(".logos").appendChild(copy);
    ///////////////////
  </script>



<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<script>





var splide = new Splide( '.splide', {
  type     : 'loop',
  height   : '23rem',
  focus    : 'center',
  autoWidth: true,
  autoplay:true
} );

splide.mount();
</script>

</body>

</html>