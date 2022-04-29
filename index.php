<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Números Repetidos</title>
</head>

<body>

    <main>
        <div class="painel">
            <h2>Instruções</h2>
            <div class="conteudo-painel">
                <p>Esta aplicação tem como finalidade preencha um array com 20 números inteiros sorteados entre 1 e 10 e informar qual ou quais deles não se repetiram!</p>       
                <p>Exemplo:</p>

                <ul>
                    <li>Array sorteado = <b>[2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]</b></li>
                    <li>Os números que não se repetem são o <b>4 e 7.</b></li>
                </ul>
            </div>
        </div>

        <div class="painel">
            <h2>Sortear Números Aleatórios</h2>

            <div class="conteudo-painel">
                <form action="sorteio.php" method="GET">
                    <button class="botao" type="submit">Sortear</button>
                </form>
            </div>
        </div>
    </main>

</body>
</html>