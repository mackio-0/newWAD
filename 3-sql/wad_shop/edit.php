<?php

// print_r($_GET['row_id']);

$conn = mysqli_connect("localhost", "mkk", "asdffdsa", "wad_shop");

if (!$conn) {
    die("Connection Failed " . mysqli_connect_error());
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Edit Product</h3>

    <?php

    $id = $_GET['row_id'];

    $sql = "SELECT * FROM products WHERE id = $id";
    $query = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($query);
    ?>
    <form action="update.php" method="post">
        <input type="hidden" name="row_id" value="<?= $row['id'] ?>" required>
        <input type="text" name="name" value="<?= $row['name'] ?>" required>
        <input type="text" name="price" value="<?= $row['price'] ?>" required>
        <input type="number" name="stock" value="<?= $row['stock'] ?>" required>
        <button>Add</button>
    </form>
</body>

</html>