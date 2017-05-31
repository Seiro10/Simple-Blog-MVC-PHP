<?php

include(LAYOUT_PATH . 'header.php');
?>


<div class="container">

<?php

foreach ($this->post as $post){

    echo "<h1><a href='index.php?p=post&id=" . $post->id ."'>". $post->nom ."</a></h1>";
    echo "<p>".substr($post->contenu, 0,200)."</p>";
    echo "<a href='index.php?p=byId&id=" . $post->id ."'>Voir la suite</a></br>";
}

?>

</div>


<?php
include(LAYOUT_PATH .'footer.php');
?>