<?php

include 'dados.php';

$noticias = [
    "destaque" => $destaque,
    "milagre" => $programacao,
    "genio" => $webdesign
];

$noticiaSelecionada = $_GET["noticia"] ?? "destaque";

if (isset($noticias[$noticiaSelecionada])) {
    $artigo = $noticias[$noticiaSelecionada];
} else {
    $artigo = $destaque;
}

?>

<?php include 'header.php'; ?>

<main>

    <article class="artigo">

        <div class="artigo-conteudo">

            <span>TECNOLOGIA E PROGRAMAÇÃO</span>

            <h1><?php echo $artigo["titulo"]; ?></h1>

            <h2>
                <?php echo $artigo["descricao"]; ?>
            </h2>

            <img 
                src="<?php echo $artigo["imagem"]; ?>" 
                alt="<?php echo $artigo["titulo"]; ?>"
            >

            <p>
                <?php echo $artigo["texto"]; ?>
            </p>

            <a class="voltar" href="index.php">← Voltar</a>

        </div>

    </article>

</main>

<?php include 'footer.php'; ?>