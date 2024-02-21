<?php //debug($tipo_projeto_res); ?>
<?php if(isset($tipo_projeto_res)){ ?>
    <div class="container-fluid resultado">
        <div class="container info-resultado" id="info-resultado">
            <div class="row justify-content-center align-items-center">
            <div class="col-md-6 text-center">
                <img src="img/img-result.jpg" class="img-resultado">
            </div>
            <div class="col-md-6 text-center">
                <div class="py-2">
                <h2 class="ttl">Resultado da Calculadora Solar</h2>
                <p>Um parágrafo de exemplo abaixo do título.</p>
                </div>
                <div class="py-2">
                <p>Projeto: <strong><?php echo($tipo_projeto_res); ?></strong></p> <!-- Aqui é pra mostrar o que foi escolhido na 1 pagina -->
                <p>Local: <strong><?php echo($local_res); ?></strong></p> <!-- Aqui é pra mostrar o que foi escolhido na 1 pagina -->
                <p>Custo Mensal: <strong>R$ <?php echo($custo_mensal_res); ?></strong></p> <!-- Aqui é pra mostrar o que foi escolhido na 1 pagina -->
                </div>
                <div class="py-2">
                <p>Investimento aproximado</p>
                <h3 id="investimento" class="border p-3">
                <?php 
                    $valor_formatado = number_format($investimento_res, 2, ',', '.');
                    echo 'R$ ' . $valor_formatado;
                ?>
                </h3>
                </div>
                <div class="py-2">
                <p>Payback aproximado</p>
                <h3 id="payback" class="border p-3">
                <?php echo($payback_anos_res); ?>
                </h3>
                </div>
            </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="container-fluid calculadora">
        <div class="container info-calculo">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="ttl">Calculadora solar</h1>
                    <p class="text-white-20">Faça você mesmo o cálculo da Energia Solar, e descubra o kit ideal para seu projeto!</p>
                </div>
                <div class="col-md-6">
                    <?php echo $this->Form->create(null, ['url' => ['controller'=>'calculators','action' => 'calcular']]);?>
                        <div class="row g-3">
                            <div class="col">
                                <label for="tipoProjeto" class="form-label">Tipo de Projeto</label>
                                <select class="form-select" id="tipoProjeto" name="projeto" required>
                                    <option value="residencial">Residencial</option>
                                    <option value="comercial">Comercial</option>
                                    <option value="industrial">Industrial</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="estado" class="form-label">Estado</label>

                                <!---->
                                <?php
                                    echo $this->Form->control('estado', [
                                    'id'=>'escolhaestado',
                                    'label'=> false,
                                    'type' => 'select',
                                    'multiple' => false,
                                    'options' => $lista_estados, 
                                    'empty' => ".::Selecione seu estado::.",
                                    'class' =>'form-control choosen',
                                    'required'

                                    ]);
                                ?>                     
                                <!---->
                            </div>
                            <div class="col">
                                <label for="cidade" class="form-label">Cidade</label>
                                    <select id="listacidades" name="cidade" class="form-control" required>
                                        <option>.::Escolha um estado::.</option>
                                    </select>
                            </div>
                        </div>
    
                        <hr class="my-4">
    
                        <p>Informe o valor da sua última conta de luz.</p>
                        <div class="mb-3">
                            <input type="number" name="consumo" class="form-control" id="valor" placeholder="R$" required>
                        </div>
                        <hr class="my-4">
                        <div class="row my-4">
                            <!-- Coluna 1 -->
                            <div class="col-md-6">
                                <input name="nome" class="form-control" placeholder="Seu nome" required>
                            </div>

                            <!-- Coluna 2 -->
                            <div class="col-md-6">
                                <input name="whats" class="form-control" placeholder="Seu Whatsapp" required>
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