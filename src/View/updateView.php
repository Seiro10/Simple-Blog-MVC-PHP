<?php

include(LAYOUT_PATH . 'header.php');
?>

<?php include(LAYOUT_PATH .'message.php')?>

<div class="container-fluid">



    <div id="update">

        <?php foreach ($this->post as $post) : ?>


        <form method="post" style="width: 500px; margin: auto">
            <label for="titre">Titre de l'article</label></br>
            <input value="<?= htmlspecialchars($post->nom) ?>" type="text" name="titre" id="titre" required="required"></br></br>
            <label for="contenu">Contenu de l'article</label></br>
            <textarea style="resize: none;" maxlength="500" name="contenu" id="contenu" rows="12" cols="70" required="required"><?= htmlspecialchars($post->contenu) ?></textarea></br></br>
            <label for="tag">Tag de l'article</label></br>
            <input value="<?= htmlspecialchars($post->tag) ?>" type="text"  name="tag" id="tag" required="required"></br></br>
            <button type="submit"  name="update_btn" id="update_btn"  class="btn btn-primary">Modifier l'article</button>

        </form></br>

<?php endforeach ; ?>
    </div>

</div>


<?php
include(LAYOUT_PATH .'footer.php');
?>


