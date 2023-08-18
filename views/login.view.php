<?php require 'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Borel&family=Lily+Script+One&family=Pacifico&family=Quicksand&display=swap" rel="stylesheet">
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Blog</title>
</head>
<body>


    <div class="container d-flex justify-content-center mt-3 flex-column align-items-center">

      <div>
          <h1 class="textt">Login</h1>
          <div class="login-box">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formu" method="post">
              <div class="user-box">
                <input type="text" name="usuario" required="" placeholder="usuario">                
              </div>
              <div class="user-box">
                <input type="password" name="password" required="" placeholder="Contraseña">
              </div>
              <div class="user-box">
                <input type="submit" value="Ingresar" class="buttonlogin">
              </div>
          </form>
      </div>
    </div>
    
    </div>

	<?php require 'views/footer.php'; ?>

	

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>