<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
   <?php
        $texto = file_get_contents("login.txt");
        $conteudo = explode("\n", $texto);
        foreach($conteudo as $valores){
            $loginInfo = explode(":", $valores);
            $usuario = $loginInfo[0];
            $senhatxt = $loginInfo[1];
            (int)$idade = $loginInfo[2];
            (float)$saldotxt = $loginInfo[3];
        } 
        echo "<h1>Saldo: $saldotxt</h1>"
    ?>
    <form action="conta.php" method="GET">
        <label>Atualizar:</label>
        <input type="number" min="0.00" name="atualizar"><br>
        <input value = "Depositar" type="submit">
    </form>
    <?php
    //ainda está com problemas
    //o valor de saldo no topo não é atualizado
    //a pagina precisa ser atualizada novamente
    //usando o botão de depositar
    (float)$valorDeposito = $_GET['atualizar'];
    $novoValor = $saldotxt + $valorDeposito;
    echo ('A ser depositado: ');
    echo "$valorDeposito <br>";
    echo ('Saldo atual: ');
    echo "$saldotxt<br>";
    echo ('Saldo atualizado: ');
    echo "$novoValor<br>";
    file_put_contents("login.txt","$usuario:$senhatxt:$loginInfo[2]:$novoValor");
    
    ?> 
  </body>
</html>