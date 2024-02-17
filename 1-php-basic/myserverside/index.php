<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>My serverside</h1>

    <?php
    
    $products = [
        [
            "id" => 1,
            "name" => "apple",
            "price" => 500
        ],
        [
            "id" => 2,
            "name" => "orange",
            "price" => 600
        ],
        [
            "id" => 3,
            "name" => "Banana",
            "price" => 100
        ],
        [
            "id" => 4,
            "name" => "grape",
            "price" => 300
        ]
    ];



    ?>

    <?php foreach($products as $product): ?>
        <div>
            <h1> <?= $product["name"] ?> </h1>
            <p> <?= $product["price"] ?> </p>
            <hr>
        </div>
    <?php endforeach; ?>

</body>

</html>