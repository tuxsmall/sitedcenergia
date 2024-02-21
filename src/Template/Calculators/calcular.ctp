
<?php //debug($tipo_projeto_res); ?>
<?php if(isset($calculator->projeto)){ ?>
    <div class="container-fluid resultado border rounded mt-5">
        <div class="container info-resultado p-3" id="info-resultado">
            <div class="row justify-content-center align-items-center">
            <?= $this->Flash->render() ?>
            <div class="col-md-5 text-center">
                <?php 
                    echo $this->Html->image("/publico/img/img-result.png", [
                    "alt" => 'Sucesso ao executar seu cálculo solar',
                    'class' =>'img-resultado my-2 img-fluid'
                    ]);              
                ?>
            </div>
            <div class="col-md-7 text-center">
                <div class="py-2">
                <h2 class="ttl">Resultado da Calculadora Solar</h2>
                </div>
                <div class="py-2">
                <p>Projeto: <strong><?php echo($calculator->projeto); ?></strong></p> <!-- Aqui é pra mostrar o que foi escolhido na 1 pagina -->
                <p>Local: <strong><?php echo($calculator->cidade); ?></strong></p> <!-- Aqui é pra mostrar o que foi escolhido na 1 pagina -->
                <p>Sua última conta de luz: <strong>R$ <?php echo($calculator->consumo); ?></strong></p> <!-- Aqui é pra mostrar o que foi escolhido na 1 pagina -->
                </div>
                <div class="py-2">
                <p>Investimento aproximado</p>
                <h3 id="investimento">
                <?php 
                    $valor_formatado = number_format($calculator->investimento, 2, ',', '.');
                    echo 'R$ ' . $valor_formatado;
                ?>
                </h3>
                </div>
                <div class="py-2">
                <p>Payback aproximado</p>
                <h3 id="payback">
                <?php echo($calculator->payback); ?> anos
                </h3>
                </div>
            </div>
            </div>
            <a href="<?php echo $this->Url->build('/calculadora-solar', true);?>" class="w-100 btn btn-primary btn-lg">Refazer cálculo <i class="fa-solid fa-arrow-right" aria-hidden="true"></i> </a>
        </div>
    </div>
<?php }else{ ?>

<div class="container-fluid calculadora mt-5">
        <div class="container info-calculo">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="ttl">Calculadora solar</h1>
                    <p class="text-white-20">Faça você mesmo o cálculo da Energia Solar, e descubra o kit ideal para seu projeto!</p>
                </div>
                <div class="col-md-6">
                    <?php //debug($calculator);?>
                    <?php echo $this->Form->create($calculator);?>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="tipoProjeto" class="form-label fw-bold text-secondary">Tipo de Projeto</label>



                                <?php echo $this->Form->select(
                                        'projeto',
                                        ['RESIDENCIAL' => 'RESIDENCIAL', 'COMERCIAL' => 'COMERCIAL', 'INDUSTRIAL' => 'INDUSTRIAL'],
                                        ['empty' => '.::Escolha::.','class'=>'form-control','label'=>'Tipo de projeto'],
                                        ['class'=>'form-select']
                                    );
                                ?>




                            </div>
                            <div class="col-md-4">
                                <label for="estado" class="form-label fw-bold text-secondary">Estado</label>

                                <!---->
                                <?php
                                    echo $this->Form->control('estado', [
                                    'id'=>'escolhaestado',
                                    'label'=> false,
                                    'type' => 'select',
                                    'multiple' => false,
                                    'options' => $lista_estados, 
                                    'empty' => ".::Selecione seu estado::.",
                                    'class' =>'form-control',
                                    'required'

                                    ]);
                                ?>                     
                                <!---->
                            </div>
                            <div class="col-md-4">
                                <label for="cidade" class="form-label fw-bold text-secondary">Cidade</label>

                                <!---->
                                <?php
                                    echo $this->Form->control('cidade', [
                                    'id'=>'listacidades',
                                    'label'=> false,
                                    'type' => 'select',
                                    'multiple' => false,
                                    'empty' => ".::Escolha um estado::.",
                                    'class' =>'form-control',
                                    'required'

                                    ]);
                                ?>                     
                                <!---->


                            </div>
                        </div>
    
                        <hr class="my-2">
    
                        <div class="mb-2">
                            <label class="form-label fw-bold text-secondary">Informe o valor da sua última conta de luz:</label>
                            <?php echo $this->Form->control('consumo', ['class'=>'form-control','label'=> false,'placeholder'=>'Informe um valor inteiro, não use vírgula ou ponto','type'=>'number', 'required']);?>
                        </div>
                        <hr class="my-1">
                        <div class="row my-4">
                            <!-- Coluna 1 -->
                            <div class="col-md-6 p-2">
                                <label class="form-label fw-bold text-secondary">Seu nome:</label>
                                <?php echo $this->Form->control('nome', ['class'=>'form-control','label'=> false]);?>
                            </div>

                            <!-- Coluna 2 -->
                            <div class="col-md-6 p-2">
                                <label class="form-label fw-bold text-secondary">Seu número do whatsapp:</label>
                                <?php echo $this->Form->control('whats', ['type'=>'tel','class'=>'form-control whats','label'=> false]);?>
                            </div>
                        </div>
    
                        <button type="submit" class="w-100 btn btn-primary btn-lg">
                            Calcular Economia <i class="fa-solid fa-arrow-right" aria-hidden="true"></i> 
                        </button>
                    <?php echo $this->Form->end();?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>