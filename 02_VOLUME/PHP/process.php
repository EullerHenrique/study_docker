<?php

    $mensagem = $_POST['mensagem'];
    $files = scandir('./mensagens');
    $num_files = count($files) - 2;// . e ..
    $file = fopen("./mensagens/msg-$num_files.txt", "x");
    fwrite($file, $mensagem);
    fclose($file);
    header("Location: ./index.php");

?>