<?php

include 'dados.php';
include 'funcao.php';

?>

<main>

    <?php

    mostrarDestaque($destaque);

    ?>

    <section class="conteudos">

        <?php

        mostrarCaixa($programacao);
        mostrarCaixa($webdesign);

        ?>

    </section>

</main>