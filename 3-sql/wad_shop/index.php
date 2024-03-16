<?php

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
    <title>SQL & PHP shop</title>
</head>

<body>
    <form action="save.php" method="post">
        <input type="text" name="name" required>
        <input type="text" name="price" required>
        <input type="number" name="stock" required>
        <button>Add</button>
    </form>

    <br>

    <table>
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Created at</th>
            <th>Action</th>
        </thead>
        <?php
        $sql = "SELECT * FROM products";
        $query = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($query)) :
        ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['price'] ?></td>
                <td><?= $row['stock'] ?></td>
                <td><?= $row['created_at'] ?></td>
                <td><a href="./edit.php?row_id=<?= $row['id'] ?>">Update</a> | <a onclick="return confirm('Are you sure to delete <?= $row['name'] ?>')" href="./delete.php?row_id=<?= $row['id'] ?>">Delete</a> </td>
            </tr>
        <?php endwhile ?>
    </table>
</body>

</html>