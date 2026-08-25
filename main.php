<?php

include 'dados.php';
include 'funcao.php';

?>

<div class="layout">

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

    <?php include 'aside.php'; ?>

</div>