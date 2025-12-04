<?php

    $filme =[
        'nome' => $_POST['nome'],
        'ano' => $_POST['ano'],
        'nota' => $_POST['nota'],
        'genero' => $_POST['genero'],
      
    ];

    file_put_contents(
        'filmes.json',
        json_encode($filme) . PHP_EOL,
        FILE_APPEND
    );


    header('Location: sucesso.php?nome=' . urlencode($filme['nome']));
    exit;