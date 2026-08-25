<?php

function mostrarDestaque($destaque)
{
    echo '<div class="Caixa1">';

    echo '<h1>Destaque da Semana</h1>';

    echo '<div class="destaque-conteudo">';

    echo '<img src="' . $destaque["imagem"] . '" alt="' . $destaque["titulo"] . '">';

    echo '<div class="destaque-texto">';

    echo '<h2>' . $destaque["titulo"] . '</h2>';

    echo '<p>' . $destaque["descricao"] . '</p>';

    echo '<button type="button" onclick="window.location.href=\'' . $destaque["link"] . '\'">LEIA MAIS</button>';

    echo '</div>';

    echo '</div>';

    echo '</div>';
}


function mostrarCaixa($conteudo)
{
    echo '<div class="Caixa2">';

    // TÍTULO
    echo '<h2>' . $conteudo["titulo"] . '</h2>';

    // IMAGEM
    echo '<img src="' . $conteudo["imagem"] . '" alt="' . $conteudo["titulo"] . '">';

    // DESCRIÇÃO
    echo '<p>' . $conteudo["descricao"] . '</p>';

    // BOTÃO
    echo '<button type="button" onclick="window.location.href=\'' . $conteudo["link"] . '\'">LEIA MAIS</button>';

    echo '</div>';
}

?>