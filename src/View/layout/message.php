<?php

if (!empty($this->errorMessage)) : ?>

    <div class="alert alert-danger"><?= $this->errorMessage ?></div>

<?php endif ?>

<?php if (!empty($this->successMessage)) : ?>

        <div class="alert alert-success"><?= $this->successMessage ?></div>

<?php endif ?>






