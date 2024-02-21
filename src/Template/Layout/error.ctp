<!DOCTYPE html>
<html>
<head>
<title><?= $this->fetch('title') ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />
	<?= $this->Html->css(['/erro/css/font-awesome.min.css','/erro/css/style.css']) ?>
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
</head>
<body>
<div class="error_main">
	<div class="content">
			<div class="error_content">
			<h1>        
				<?php 
					echo $this->Html->image("/publico/img/logo-azul-dc-energia.png", [
					"alt" => 'DC Energia',
					//'width' => '60',
					'class' =>'logo-nv'
					]);              
				?>
			</h1>
				<span class="fa fa-frown-o"></span>
				<h2>Ops... Algo deu errado ou não foi encontrado...</h2>
				<?= $this->Flash->render() ?>
				<p><?= $this->fetch('content') ?></p>

				<a class="b-home" href="<?php echo $this->Url->build('/', true);?>">Voltar para a página inicial</a>
			</div>
		<div class="footer">
		</div>
	</div>
	
</div>

</body>
</html>