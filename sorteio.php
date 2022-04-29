<?php
    $valores = array();

    for($i = 0; $i <= 5; $i++){
        $valores[] = rand(1, 10);
    }

    $count_array = array_count_values($valores);

    $mensagem = '';

    $mensagem .= '<div class="sucesso">';
    $mensagem .= '<p>Array Sorteado: '. implode(',', $valores) .'</p>';
    $mensagem .= '<p>Os números que não se repetem são: ';
    foreach($count_array as $key => $valor){
        if($valor == 1){
            $mensagem .= $key .'; ';
        }
    }
    $mensagem .= '</p></div>';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <main>
        <div class="painel">
            <h2>Resultado do Sorteio</h2>
            <div class="conteudo-painel">
                <?php echo $mensagem; ?>
                <a class="botao" href="index.php">Voltar</a>
            </div>
        </div>
    </main>    
</body>
</html>