<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Whélynton" />
        <title>Administração</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <?= $this->Html->css('/adm/css/styles.css') ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?php echo $this->Url->build('/admin', true);?>">DC Energia</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto" style="font-size:10px">
                        <?php echo $this->element('menu');?>
                    </ul>
                </div>
            </div>
        </nav>
            <div style="margin-top:110px; margin-bottom: -110px;">
                <?= $this->Flash->render() ?>
            </div>
        <?= $this->fetch('content') ?>

        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h3 class="page-section-heading text-center text-uppercase text-white">DC Energia</h3>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>

                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="lead">Prontos para o futuro!</p>
                    </div>
                    
                </div>
                <!-- About Section Button-->

            </div>
        </section>


        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Desenvolvido por Whélynton Júnior - tuxsmall@gmail.com</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>

                <!-- Bootstrap core JS-->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/44qrfh1v9hlqxnzqexqal69ieszs0h5tokfqgb9nddvlzx5b/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            });
        </script>
        <?php echo $this->Html->script([
            '/adm/js/scripts.js',
            '/publico/js/ajax.js'
			])
		?>
        <script>
            $(document).ready(function () {
                // Inicialmente, esconder os campos URL e Local com fade
                $('#campourl, #campolocal').hide();

                $('#tipo').change(function () {
                    if ($(this).val() === 'projeto') {
                        $('#campourl, #campolocal').fadeOut();
                    } else {
                        $('#campourl, #campolocal').fadeIn();
                    }
                });
            });
        </script>

    </body>
</html>
