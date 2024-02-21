<br>
<div class="container mt-5">
    <h1><strong>ENVIE SEU CURRÍCULO</strong></h1>
    <p>Envie seu currículo através do formulário esta página, caso você seja selecionado, nós entraremos em contato para dar continuidade ao processo de seleção.</p>
	<?= $this->Flash->render() ?>
<?php echo $this->Form->create($document, array('enctype' => 'multipart/form-data')); ?>

    <div class="row">
      <div class="col-md-6">
          <div class="mb-3">
            <label for="nome" class="form-label fw-bold fs-6">Nome</label>
			<?php echo $this->Form->control('nome',['class'=>'form-control', 'label'=>false,'placeholder'=>'Seu nome completo']);?>
          </div>
          <div class="row g-3">
            <div class="col">
              <label for="idade" class="form-label fw-bold fs-6">Idade</label>
			  <?php echo $this->Form->control('idade',['class'=>'form-control', 'label'=>false,'placeholder'=>'Sua idade']);?>
            </div>
            <div class="col">
              <label for="telefone" class="form-label fw-bold fs-6">Telefone</label>
			  <?php echo $this->Form->control('telefone',['class'=>'form-control', 'label'=>false,'placeholder'=>'Seu telefone']);?>
            </div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label fw-bold fs-6">Email</label>
			<?php echo $this->Form->control('email',['class'=>'form-control', 'label'=>false,'placeholder'=>'Seu email']);?>
          </div>
          <div class="mb-3">
            <label for="empresa" class="form-label fw-bold fs-6">Empresa</label>

			<?php echo $this->Form->select('empresa', $filiais, ['default' => 'Selecione a empresa', 'class' => 'form-select']);?>			
	
			
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3">
              <label class="form-label fw-bold fs-6">Gênero</label>

				<br>
				  <?php 
					  echo $this->Form->radio('genero', [
							['value' => 'Masculino', 'text' => ' Masculino ', 'class' => 'form-check-input me-1 ms-2'],
							['value' => 'Feminino', 'text' => ' Feminino ', 'class' => 'form-check-input  me-1 ms-3'],
						]);
				  ?>

              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label class="form-label fw-bold fs-6">Possui deficiência?</label>
	
				  <br>
				  <?php 
					  echo $this->Form->radio('deficiencia', [
							['value' => 'Sim', 'text' => ' Sim ', 'class' => 'form-check-input me-1 ms-2'],
							['value' => 'Não', 'text' => ' Não ', 'class' => 'form-check-input  me-1 ms-3'],
						]);
				  ?>

				  
				

              </div>
            </div>
          </div>
        </form>
      </div>
  
      <div class="col-md-6">
        <div class="mb-3">
          <label class="form-label fw-bold fs-6 fw-bold fs-5">Setor</label>

				  <br>
				  <?php 
					  echo $this->Form->radio('setor', [
							['value' => 'Administrativo', 'text' => ' Administrativo ', 'class' => 'form-check-input me-1 ms-2'],
							['value' => 'Equipe de Montagem', 'text' => ' Equipe de Montagem ', 'class' => 'form-check-input  me-1 ms-3'],
						]);
				  ?>



        </div>
        
        <div class="mb-3">
          <label for="escolaridade" class="form-label fw-bold fs-6">Escolaridade</label>
			<?php echo $this->Form->select('escolaridade', $opcoesEscolaridade, ['default' => 'Selecione a escolaridade', 'id' => 'escolaridade', 'class' => 'form-select']);?>
        </div>
        <div class="mb-3">
          <label for="curriculo" class="form-label fw-bold fs-6">Selecione seu currículo em PDF (até 4MB)</label>
		  <?php echo $this->Form->file('uploadfile', ['type' => 'file', 'class'=>'form-control']);?>
        </div>

        <div class="py-3">
			<button class="btn btn-warning rounded-pill small text-center w-100 fw-bold" type="submit" style="color:#fff !important">Enviar</button>
        </div>
      </div>
    </div>
	<?= $this->Form->end() ?>
    
  </div>