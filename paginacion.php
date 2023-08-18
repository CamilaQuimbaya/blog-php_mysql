<?php $numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="paginacion">
        <ul>
            <?php if(pagina_actual() === 1): ?>
                <li><a class="disabled">&laquo;</a></li>
            <?php else: ?>
                <li><a href="index.php?p=<?php echo pagina_actual() - 1 ?>">&laquo;</a></li>
            <?php endif; ?>
            
            <?php for($i = 1; $i <= $numero_paginas; $i++): ?>
                <?php if(pagina_actual() === $i): ?>
                    <li class="active">
                        <?php echo $i; ?>
                    </li>
                <?php else: ?>
                    <li><a href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endif; ?>
            <?php endfor; ?>
            

            <?php if(pagina_actual() == $numero_paginas): ?>
                <li><a class="disabled">&raquo;</a></li>
            <?php else: ?>
                <li><a href="index.php?p=<?php echo pagina_actual() + 1 ?>">&raquo;</a></li>
            <?php endif; ?>


        </ul>




    </section>
</body>
</html>