<?php 

require __DIR__ . '/db.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>

    <header class="d-flex justify-content-between">
        <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/spotify-icon-marilyn-scott-0.png" alt="">
    
    </header>
    
    <main>
    <div class="container ">
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5">
                    <?php foreach ($albums as $album ) :?>
                    <div class="col text-center p-4">
                        <div class="card h-100 ">
                            <img src="<?= $album["poster"]; ?>" alt="<?= $album["title"]; ?>">
                            <h5 class="mt-3"><?= $album["title"]?></h5>
                            <div class="info mt-1">
                                <div class="author">
                                    <span><?= $album["author"] ?></span>
                                </div>
                                <div class="year"> 
                                    <span><?= $album["year"] ?></span>
                                </div>
                            </div>
                        </div>
                        
                    </div>  
                    <?php endforeach ?>
            </div>
        </div>


    </main>
   
    
</body>
</html>