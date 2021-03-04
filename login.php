<?php
   session_start(); 
   if(isset($_GET['register']) && $_GET['register'] == '1'){
      $_SESSION['authenticated'] = 'YES';
      header('Location: home.php');
   } 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form-style.css">
</head>
<body>
    <main>
        <h1>Login</h1>

        <form action="./validate-login.php" method="POST">
            <input class="input" type="email" name="email" id="email" placeholder="E-mail" required>

            <input class="input" type="password" name="password" id="password" placeholder="Password" required>

            <?php if(isset($_GET['login']) && $_GET['login'] == 'error'){ ?>
                <div class="erro">
                    <p>Usuário ou senha inválidos</p>
                </div>
            <?php } ?>
        
            <?php if(isset($_GET['login']) && $_GET['login'] == 'error2'){ ?>
                <div class="erro">
                    <p>É preciso logar para ter acesso á página </p>
                </div>
            <?php } ?>
           
            <button class="button" type="submit">Sign in</button>
        </form>
        

    </main>

    
</body>
</html>