<?php  require '../views/header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo RUTA ?>css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Borel&family=Lily+Script+One&family=Pacifico&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Mi primer blog</title>
</head>
<body>
    

    <div class="container d-flex justify-content-center mt-3 flex-column">
        <h2 class="textt">Panel de control</h2>
        <div class="container d-flex justify-content-start mt-3 flex-row" >
            <a href="nuevo.php">

            <button class="cssbuttons-io-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg>
                <span>Add</span>
                </button>
            </a>
            <a href="cerrar.php" class="closesesion">
            <button class="Btn">
                
                <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
                
                <div class="text">Logout</div>
</button>
            </a>
        </div>
        <?php  foreach($posts as $post): ?>
            <div class="card">
                <div class="header">
                    <div class="buttonoptions">
                        <a href="editar.php?id=<?php echo $post['id']; ?>" class="edit">
                            <button class="edit-button"><i class="fas fa-edit"></i></button>
                    
                        </a>
                        <a href="borrar.php?id=<?php echo $post['id']; ?>" class="delete">
                            <button class="delete-button"><i class="fas fa-trash-alt"></i></button>
                        </a>

                        <a href="../single.php?id=<?php echo $post['id']; ?>">
                            <button class="edit-button"><i class="fas fa-eye"></i></button>
                        </a>

                    </div>
                    <div class="date">
                        <span><?php echo fecha($post['fecha']); ?></span>
                    </div>
                </div>
                <div class="info">
                    <a rel="noopener noreferrer" href="single.php?id=<?php  echo $post['id']; ?>" class="block">
                        <span class="title"><?php echo $post['id'] .  '. ' .  $post['titulo']; ?></span>
                    </a>
                    <p class="description"><?php echo $post['extracto']; ?></p>
                </div>
        
	    </div>
        <?php endforeach; ?>


    </div>


    <?php  require '../paginacion.php'; ?>

    <?php require '../views/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>