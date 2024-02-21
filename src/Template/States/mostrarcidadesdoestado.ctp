<?php if (empty($gerarcidades)){ ?>
      <option>.::Sem cidades nesse estado. Escolha novamente::.</option>
<?php }else{ ?>
        <?php
                echo $this->Form->control('cidade', [
                'id'=>'listacidades',
                'label'=> false,
                'type' => 'select',
                'multiple' => false,
                'options' => $gerarcidades, 
                'empty' => "Selecione sua cidade",
                'class' =>'form-control'
                ]);
        ?>                     
<?php } ?>