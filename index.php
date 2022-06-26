
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/estilos.css">
  <title>Login</title>
</head>
<body>





   <div class="recuadro">
    <h1>Login</h1>
    <form method="post">
      <div class="txt_campo">
        <input type="text" required>
        <span></span>
        <label>Usuario</label>
      </div>
      <div class="txt_campo">
        <input type="password" required>
        <span></span>
        <label>Contraseña</label>
      </div>
      <input type="submit" value="Ingresar">
      <div class="registrar"> Si no tenes cuenta <a href="registrate.php">Registrate</a></div>
      

    </form>
   </div>

   <?php
      include("registro.php");
    ?>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>     
   
</body>
</html>