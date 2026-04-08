<?php

$nomeFilme = "Thor: Ragnarok";

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
default => "gênero desconhecido",
};


Echo "O filme $nomeFilme é do gênero $genero\n";