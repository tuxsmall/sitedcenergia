  <nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo $this->Url->build('/', true);?>">
        <?php 
            echo $this->Html->image("/publico/img/logo-azul-dc-energia.png", [
            "alt" => 'DC Energia',
            //'width' => '60',
            'class' =>'logo-nv'
            ]);              
        ?>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->Url->build('/', true);?>">Início</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              DC Energia
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo $this->Url->build('/historia/mais-de-10-anos', true);?>">Sobre Nós</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="<?php echo $this->Url->build('/filiais', true);?>">Filiais</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="<?php echo $this->Url->build('/duvidas-comuns-sobre-energia-solar', true);?>">Dúvidas mais comuns</a></li>
			  <hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="<?php echo $this->Url->build('/trabalhe-conosco', true);?>">Trabalhe conosco</a></li>

            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Equipamentos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo $this->Url->build('/kits-solares', true);?>">Kits solares</a></li>
              <li> <hr class="dropdown-divider"> </li>
              <li><a class="dropdown-item" href="<?php echo $this->Url->build('/calculadora-solar', true);?>">Calculadora</a></li>
            </ul>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->Url->build('/noticias', true);?>">Notícias</a>
          </li>



          <li class="nav-item">
            <a class="nav-link ico-whats" href="<?php echo $this->Url->build('/filiais', true);?>"><i class="fa-brands fa-whatsapp"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
