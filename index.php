<?php

require_once('Product.php');


$Product1 = new Product;
$Product1->setName("First Product");
$Product1->price = "600";
$Product1->brand = "Amriaa";
$Product1->image = "https://fakeimg.pl/50x50/";
$Product1->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni provident soluta temporibus iste facilis molestias.";

$Product2 = new Product;
$Product2->setName("Second Product");
$Product2->price = "1000";
$Product2->brand = "Amriaa";
$Product2->image = "https://fakeimg.pl/50x50/";
$Product2->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni provident soluta temporibus iste facilis molestias.";

$Product3 = new Product;
$Product3->setName("Third Product");
$Product3->price = "2000";
$Product3->brand = "Amriaa";
$Product3->image = "https://fakeimg.pl/50x50/";
$Product3->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni provident soluta temporibus iste facilis molestias.";


$all_Products = [$Product1, $Product2, $Product3];



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Task 1</title>
</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            Task 1
        </a>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <?php foreach ($all_Products as $product): ?>
                <div class="col-4">
                    <div class="card" style="width: 25rem;">
                    <img class="card-img-top" height="250px" src="<?= $product->image ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->getName(); ?> </h5>
                            <p class="card-subtitle mb-2 text-muted"><?= $product->brand ?></p>
                            <p class="card-text"><?= $product->description ?></p>
                            <del class="fs-14 opacity-60 ml-2"><?= $product->priceTax() ?> EGP</del>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $product->getFinalPrice() ?> EGP</h6>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>