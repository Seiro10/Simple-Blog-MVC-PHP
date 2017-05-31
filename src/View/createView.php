<?php

include(LAYOUT_PATH . 'header.php');
?>

<div class="container-fluid">

    <?php include(LAYOUT_PATH . 'message.php'); ?>

    <div id="update">


        <form method="post" style="width: 500px; margin: auto">
            <label for="titre">Titre de l'article</label></br>
            <input  type="text" name="titre" id="titre" required="required"></br></br>
            <label for="contenu">Contenu de l'article</label></br>
            <textarea style="resize: none;" maxlength="500" name="contenu" id="contenu" rows="12" cols="70" required="required"></textarea></br></br>
            <label for="tag">Tag de l'article</label></br>
            <input type="text"  name="tag" id="tag" required="required"></br></br>
            <button type="submit"  name="create" id="create"  class="btn btn-primary">Creer un article</button>

        </form></br>


    </div>

</div>


<?php
include(LAYOUT_PATH .'footer.php');
?>


