<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Exercícios PHP</h1>
        <form method="POST">
            <div class="indbox">
                <label style="color: #2b134b;">001</label>
            </div>
            <label for="">Valor 1</label>
            <input name="n1" type="number" placeholder="Digite um valor numérico">
            <label for="">Valor 2</label>
            <input name="n2" type="number" placeholder="Digite um valor numérico">
            <div class="btn-center">
                <button name="botao1">enviar</button>
            </div>

            <?php
                if(isset($_POST['botao1'])) {
                    $n1 = $_POST['n1'];
                    $n2 = $_POST['n2'];
                    $soma = $n1 + $n2;

                    if ($soma > 20) {
                        print("<p>");
                            print("Valor: ".($soma = $soma + 8));
                        print("</p>");
                    }else {
                        print("<p>");
                            print("Valor: ".($soma = $soma - 5));
                        print("</p>");
                    }

                }
            ?>
        </form>

        <form method="POST">
            <div class="indbox">
                <label style="color: #2b134b;">002</label>
            </div>
            <label for="">Numero 1</label>
            <input name="n1" type="number" placeholder="Digite um valor numérico">
            <label for="">Numero 2</label>
            <input name="n2" type="number" placeholder="Digite um valor numérico">
            <label for="">Numero 3</label>
            <input name="n3" type="number" placeholder="Digite um valor numérico">
            <div class="btn-center">
                <button name="botao2">enviar</button>
            </div>
            <?php
                if(isset($_POST['botao2'])) {
                    $n1 = $_POST['n1'];
                    $n2 = $_POST['n2'];
                    $n3 = $_POST['n3'];

                
                    if ($n1 > $n2 && $n1 > $n3) {
                        print("<p>");
                            print("O maior número é $n1");
                        print("</p>");
                    }else if ($n2 > $n1 && $n2 > $n3) {
                        print("<p>");
                            print("O maior número é $n2");
                        print("</p>");
                    }else {
                        print("<p>");
                            print("O maior número é $n3");
                        print("</p>");
                    }

                }
            ?>
            
        </form>

        <form method="POST" action="index.php">
            <div class="indbox">
                <label style="color: #2b134b;">003</label>
            </div>
            <label for="">Digite um número: </label>
            <input name="n1" type="number" placeholder="Digite um valor numérico" max=12>
            <div class="btn-center">
                <button name="botao3">enviar</button>
            </div>
            <?php
                if(isset($_POST['botao3'])) {
                    $n1 = $_POST['n1'];
                    for($i=0; $i <= 10; $i = $i + 1) {
                        if (!empty($_POST)) {
                            print("<p>");
                                print("$n1 x $i = ".$n1*$i);
                            print("</p>");
                    }
                    }
                }
            ?>
            
        </form>

        <form method="POST" action="index.php">
            <div class="indbox">
                <label style="color: #2b134b;">004</label>
            </div>
            <label for="">Valor int 1: </label>
            <input name="n1" type="number" placeholder="Digite um valor numérico">
            <label for="">Valor int 2: </label>
            <input name="n2" type="number" placeholder="Digite um valor numérico">
            <label for="">Valor int 3: </label>
            <input name="n3" type="number" placeholder="Digite um valor numérico">
            <div class="btn-center">
                <button name="botao4">enviar</button>
            </div>
            <?php
                if(isset($_POST['botao4'])) {
                    $n1 = $_POST['n1'];
                    $n2 = $_POST['n2'];
                    $n3 = $_POST['n3'];
                    $soma = $n1 + $n2 + $n3;

                    print("<p>");
                        print("Soma: $soma");
                    print("</p>");
                }
            ?>
            
        </form>

        <form method="POST" action="index.php">
            <div class="indbox">
                <label style="color: #2b134b;">005</label>
            </div>
            <label for="">Distancia em Km</label>
            <input name="dista" type="number" placeholder="Digite um valor numérico">
            <label for="">Consumo do carro em litros</label>
            <input name="litros" type="number" placeholder="Digite um valor numérico">
            <label for="">Preço da gasolina</label>
            <input name="preço" type="number" placeholder="Digite um valor numérico">
            <div class="btn-center">
                <button name="botao5">enviar</button>
            </div>
            <?php

                if(isset($_POST['botao5'])) {
                   $dista = $_POST['dista']; 
                   $litros = $_REQUEST['litros'];
                   $preço = $_POST['preço'];

                   $final = ($dista/$litros)*$preço;

                   print("<p>");
                       print('O custo da sua viagem será de R$: '.$final);                

                   print("</p>"); 

                }
            ?>
            
        </form>
        <form method="POST" action="index.php">
            <div class="indbox">
                <label style="color: #2b134b;">006</label>
            </div>
            <label>Anos fumados</label>
            <input type="number" name="anosFumados" placeholder="Digite um valor numérico">
            <label>Quantos cigarros por dia</label>
            <input type="number" name="CigarrosDia" placeholder="Digite um valor numérico"> 
            <label>Preço do maço</label>
            <input type="number" name="preço" placeholder="Digite um valor numérico">
            <div class="btn-center">
                <button name="botao6">Enviar</button>
            </div>
            <?php
                if(isset($_POST['botao6'])) {
                    $cigarrosAnos = $_POST['anosFumados'];
                    $cigarrosDias = $_POST['CigarrosDia'];
                    $preçoMaço = $_POST['preço'];

                    $calc = ($cigarrosAnos*365)*$cigarrosDias;
                    $final = ($calc/20)*$preçoMaço;
                    print("<p>");
                        print("Você em sua vida fumou aproximadamente $calc cigarros");
                    print("</p>");
                    print("<p>");
                        print("Você gastou aproximadamente nestes $cigarrosAnos anos".(' R$').($final).(" em carteiras de cigarro"));
                    print("</p>");
                }
            ?>
        </form>
        <form method="POST" action="index.php">
            <div class="indbox">
                <label style="color: #2b134b;">007</label>
            </div>
            <label>Linhas</label>
            <input type="number" name="lines" placeholder="Digite um valor numérico">
            <label>Colunas</label>
            <input type="number" name="columns" placeholder="Digite um valor numérico">
            <label>Texto</label>
            <input type="text" name="texto" placeholder="Digite um texto qualquer">
            <div class="btn-center">
                <button name="botao7">Enviar</button>
            </div>
            <?php  
                if(isset($_POST['botao7'])) {
                    $lines = $_POST['lines'];
                    $columns = $_POST['columns'];
                    $texto = $_POST['texto'];
                    print("<table>");
                    for ($cont=1; $cont <= $lines; $cont++) { 
                        print("<tr>");
                            for($cont2 = 1; $cont2 <= $columns; $cont2++) {
                                print("<td>");
                                    print("$texto");
                                print("</td>");
                            }
                        print("</tr>");
                    }
                    print("</table>");
                }
            ?>
        </form>
    </main>
</body>
</html>