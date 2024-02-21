<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="container" style="margin-top:120px; margin-bottom: -90px;">
    <div class="alert alert-danger" onclick="this.classList.add('hidden');"><?= $message ?></div>
</div>