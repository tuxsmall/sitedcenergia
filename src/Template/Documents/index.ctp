<section class="page-section">
    <div class="container">
        <h5 class="text-center text-uppercase text-secondary mt-5">Currículos</h5>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="table-responsive">
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
				<thead>
					<tr>
						<th scope="col"><?= $this->Paginator->sort('nome') ?></th>
						<th scope="col"><?= $this->Paginator->sort('email') ?></th>
						<th scope="col"><?= $this->Paginator->sort('idade') ?></th>
						<th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
						<th scope="col"><?= $this->Paginator->sort('empresa') ?></th>
						<th scope="col"><?= $this->Paginator->sort('genero') ?></th>
						<th scope="col"><?= $this->Paginator->sort('deficiencia') ?></th>
						<th scope="col"><?= $this->Paginator->sort('setor') ?></th>
						<th scope="col"><?= $this->Paginator->sort('escolaridade') ?></th>
						<th scope="col"><?= $this->Paginator->sort('currículo') ?></th>
						<th scope="col"><?= $this->Paginator->sort('data') ?></th>
						<th scope="col" class="actions"><?= __('') ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($documents as $document): ?>
					<tr>
						<td><?= h($document->nome) ?></td>
						<td><?= h($document->email) ?></td>
						<td><?= $this->Number->format($document->idade) ?></td>
						<td><?= h($document->telefone) ?></td>
						<td><?= h($document->empresa) ?></td>
						<td><?= h($document->genero) ?></td>
						<td><?= h($document->deficiencia) ?></td>
						<td><?= h($document->setor) ?></td>
						<td><?= h($document->escolaridade) ?></td>
						<td>
							<a class="text-center btn btn-primary" href="<?php echo $this->Url->build('/publico/img/'.$document->uploadfile, true);?>" target="_blank">
								<?= h($document->uploadfile) ?>
							</a>
						</td>
						<td><?= h($document->created) ?></td>
						<td class="actions">
							<?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $document->id], ['confirm' => __('QUer mesmo deletar o cúrriculo de # {0}?', $document->nome)]) ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>  
  
        </div>
    </div>
</section>