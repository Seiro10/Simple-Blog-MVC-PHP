<?php

include(LAYOUT_PATH . 'header.php');
?>

<div class="container">

    <div class="pagination">

        <form method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required="required">
            <label for="password">Mot de Passe</label>
            <input type="password" name="password" id="password" required="required">
            <button class="btn btn-primary" href="index.php?p=login">Se connecter</button>
        </form>

    </div>

</div>


<?php
include(LAYOUT_PATH .'footer.php');
?>


