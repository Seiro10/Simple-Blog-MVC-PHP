<?php

include(LAYOUT_PATH . 'header.php');
?>


<?php include(LAYOUT_PATH . 'message.php'); ?>

<div class="container-fluid">



    <table class="table table-bordered">
        <thead>
            <tr style="background-color: #9acfea">
                <th>Id de l'article</th>
                <th>Nom de l'article</th>
                <th>Contenu</th>
                <th>Tag de l'article</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

     <?php foreach ($this->post as $post) : ?>

            <tr>
                <td><?= $post->id ?></td>
                <td><?=  $post->nom ?></td>
                <td><a href="admin.php?p=post&id=<?= $post->id ?>">Voir le contenu</a></td>
                <td><?= $post->tag ?></td>
                <td><a class="btn btn-primary" href="admin.php?p=update&id=<?= $post->id ?>">Modifier un Article</a> <a class="btn btn-danger" href="admin.php?p=delete&id=<?= $post->id ?>">Supprimer un Article</a></td>

            </tr>

    <?php endforeach; ?>
        </tbody>

    </table>




</div>


<?php
include(LAYOUT_PATH .'footer.php');
?>


