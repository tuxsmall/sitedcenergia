

    <?php  if(!empty($nome)){ ?>

        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo $this->Url->build('/biographies/', true);?>">
                História
            </a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo $this->Url->build('/branches/', true);?>">
                Filiais
            </a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo $this->Url->build('/clients/', true);?>">
                Clientes
            </a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo $this->Url->build('/categories/', true);?>">
                Categorias
            </a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo $this->Url->build('/kits/', true);?>">
                Kits
            </a>
        </li>

        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo $this->Url->build('/partners', true);?>">
                Parceiros
            </a>
        </li>

        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo $this->Url->build('/asks', true);?>">
                Perguntas
            </a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo $this->Url->build('/slides', true);?>">
                Slide
            </a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo $this->Url->build('/contents', true);?>">
                Posts
            </a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo $this->Url->build('/calculators', true);?>">
                Calculadora
            </a>
        </li>



        <li class="nav-item dropdown nav-item mx-0 mx-lg-1 mt-2">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mais
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item font-weight-bold" href="<?php echo $this->Url->build('/users', true);?>" style="font-size:10px">
                Usuários
            </a>
            <a class="dropdown-item font-weight-bold" href="<?php echo $this->Url->build('/', true);?>" target="_blank" style="font-size:10px">
                Visitar site
            </a>
			
            <a class="dropdown-item font-weight-bold" href="<?php echo $this->Url->build('/documents', true);?>" target="_blank" style="font-size:10px">
                Currículos
            </a>			
            <a class="dropdown-item font-weight-bold" href="<?php echo $this->Url->build('/users/logout', true);?>" style="font-size:10px">
                Sair do sistema
            </a>

        </div>
      </li>











    <?php }else{ ?>
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo $this->Url->build('/', true);?>" target="_blank">
                Visite o Site
            </a>
        </li>
    <?php } ?>


