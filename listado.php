<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <header>

    </header>
    <main>
        <?php
        $productos=array(
            "producto1"=>array("camiseta", "$20000", "blanco","https://www.dwork.com.co/wp-content/uploads/2017/06/camiseta-t-shirt-blanca-h.jpg"),
            "producto2"=>array("camisa", "$30000", "blanco","https://www.dhresource.com/0x0/f2/albu/g10/M01/55/0D/rBVaWVxHIzaAa74-AACli5fghKY607.jpg"),
            "producto3"=>array("camisilla", "$15000", "blanco", "https://www.mitiendavision.com/content/images/thumbs/0032318_camisilla-hollister-talle-l-y-xl_550.jpeg")
        );
        ?>
        <div class= "container">
            <div class="row row-cols-1 row-cols-md-3">
                <?php foreach ($productos as $producto): ?>

                    <div class="col mb-4">
                         <div class="card h-100">
                            <img src="<?php echo($producto[3])?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo($producto[0]) ?></h5>
                                <h5 class="card-title"><?php echo($producto[1]) ?></h5>
                                <h5 class="card-title"><?php echo($producto[2]) ?></h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                     </div>

                <?php endforeach ?>
            </div> 
        </div> 
    </main>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>