<?php  require 'views/header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo RUTA ?>/css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Borel&family=Lily+Script+One&family=Pacifico&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Mi primer blog</title>
</head>
<body>
    

    <div class="container d-flex justify-content-center mt-3 flex-column">
        <div class="card">
            <div class="header">
                <div class="image">
                    <span class="tag">Art</span>
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/img/<?php echo $post['thumb'] ?>" alt="">
                    </a>
                </div>
                <div class="date">
                    <span><?php echo fecha($post['fecha']); ?></span>
                </div>
            </div>
            <div class="info">
                <a rel="noopener noreferrer" href="views/single.php" class="block">
                    <span class="title"><?php echo $post['titulo']; ?></span>
                </a>
                <p class="description"><?php echo $post['texto']; ?></p>
		    </div>
        
	    </div>
    </div>


        <?php require 'views/footer.php' ?>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

