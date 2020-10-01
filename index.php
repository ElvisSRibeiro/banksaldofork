<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form class="login-form" action="index.php" method="POST">
          <input type="text" placeholder="username" name="username"/>
          <input type="password" placeholder="password" name="password"/>
          <button type="submit" name="enviar"/ >LOGIN</button>
    </form>
    <?php 
      $sucesso = false;
      while ($sucesso != true) {
        
        $contador = 1;
        echo('user = elvis senha = 1');
        $myFile = "$contador.txt";
        $contents = file_get_contents($myFile);
        $contents = explode("\n", $contents);

        foreach($contents as $values){
        $loginInfo = explode(":", $values);
            $user = $loginInfo[0];
            $password = $loginInfo[1];
            $age = $loginInfo[2];
            $saldo = $loginInfo[3];
        if(isset($_POST['username'])) {
          if(isset($_POST['password'])) {
            $userN = $_POST['username'];
            $passW = $_POST['password'];
            if($user == $_POST['username'] && $password == $_POST['password']){
              $sucesso = true;
              if($age >=18 ){
                echo /*'<script>alert("Bem vindo a sua pagina inicial");</script>';*/
                header("Location: conta.php");
              } else {
                echo ('<script>alert("Você ainda é muito jovem. Toma um Toddynho");</script>');
                header("Location: https://www.toddynho.com.br/");
              }
              
            }
          }
        
              
        } else {
          $contador = $contador +1;
          echo ("Please verify your username and password.");
          
          }
        } 
      }
          
    ?>
    
  </body>
</html>