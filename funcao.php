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

    echo '<a href="' . $destaque["link"] . '">LEIA MAIS</a>';

    echo '</div>';

    echo '</div>';

    echo '</div>';
}


function mostrarCaixa($conteudo)
{
    echo '<div class="Caixa2">';

    echo '<h1>Destaque da semana</h1>';

    echo '<img src="' . $conteudo["imagem"] . '" alt="' . $conteudo["titulo"] . '">';

    echo '<h2>' . $conteudo["titulo"] . '</h2>';
    
    echo '<p>' . $conteudo["descricao"] . '</p>';

    echo '</div>';
}

?>