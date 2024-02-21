<br><br><br><br><br>
<div class="container">
    <h3><?= h($user->nome) ?></h3>
    <table class="table">

        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Nível') ?></th>
            <td><?= h($user->level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($user->status) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atualizado') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
</div>
