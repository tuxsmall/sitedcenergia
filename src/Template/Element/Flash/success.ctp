<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="container mt-2">
    <div class="alert alert-success text-center fw-bold" onclick="this.classList.add('hidden')"><i class="fa-solid fa-calculator"></i> <?= $message ?> </div>
</div>

