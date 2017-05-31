<?php

include(LAYOUT_PATH . 'header.php');
?>


<div class="container">

    <?php

    foreach ($this->post as $post){

        echo "<h1>" .$post->nom. "</h1>";
        echo "<p>".$post->contenu."</p>";

    }
    ?>

</div>




<?php
include(LAYOUT_PATH .'footer.php');
?>