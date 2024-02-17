<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <h1>
        <?php echo "Hi I am php"; ?>
    </h1>

    <p>
        <?= 'san kyi tar' ?>
    </p> -->

    <!-- <?php // if (false) : 
            ?>
        <h1>It is true</h1>
    <?php // else :  
    ?>
        <h1>It is false</h1>
    <?php // endif; 
    ?> -->

    <?php

    $fruits = array("Apple", "Orange", "Banana", "Grapes", "Mango");

    ?>

    <ul>
        <?php foreach($fruits as $fruit) : ?>
            <li>
                <?= $fruit ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <pre>
        <?php
            // print_r($fruits);
        ?>
    </pre>



</body>

</html>