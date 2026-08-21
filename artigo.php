<?php

include 'dados.php';

?>

<?php include 'header.php'; ?>

<main>

    <article class="artigo">

        <span>TECNOLOGIA E PROGRAMAÇÃO</span>

        <h1><?php echo $destaque["titulo"]; ?></h1>

        <h2>
            <?php echo $destaque["descricao"]; ?>
        </h2>

        <img 
            src="<?php echo $destaque["imagem"]; ?>" 
            alt="<?php echo $destaque["titulo"]; ?>"
        >

        <p>
            A música "Gols e Travessuras" é uma obra que combina elementos de
            crítica social, narrativa poética e musicalidade envolvente. A letra
            aborda temas como a vida urbana, desafios pessoais e a busca por
            significado em meio às adversidades.
        </p>

        <p>
            A melodia da música é cativante, com uma combinação de ritmos que
            refletem a diversidade cultural e musical da sociedade contemporânea.
            A instrumentação é cuidadosamente elaborada, criando uma atmosfera
            que complementa a mensagem da letra.
        </p>

    </article>

</main>

<?php include 'footer.php'; ?>