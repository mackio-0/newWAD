<?php

echo "<pre>";

$saveFolder = "photos";

if (!is_dir($saveFolder)) {
    mkdir($saveFolder, 0777);
}

// $ext = pathinfo($_FILES["upload"]["name"])["extension"];
// $saveFilePath = $saveFolder . "/" . uniqid() . "." . $ext;

// if (move_uploaded_file($_FILES["upload"]["tmp_name"], $saveFilePath)) {
//     header("Location:gallery.php");
// }

$uploadError = false;

foreach ($_FILES["upload"]["name"] as $key => $name) {
    $ext = pathinfo($name)["extension"];
    $saveFielPath = $saveFolder . "/" . uniqid() . "." . $ext;
    // print($ext);

    if (!move_uploaded_file($_FILES["upload"]["tmp_name"][$key], $saveFielPath)) {
        $uploadError = true;
    }
}

if ($uploadError === false) {
    header("Location:gallery.php");
}


// var_dump(is_dir($saveFolder));
// echo $saveFilePath;
// var_dump(move_uploaded_file($_FILES["upload"]["tmp_name"], $saveFilePath)); true or flase
// print_r($ext);
// Array
// (
//     [dirname] => .
//     [basename] => wp-1.jpg
//     [extension] => jpg
//     [filename] => wp-1
// )

print_r($_FILES);

// For single file
// Array
// (
//     [upload] => Array
//         (
//             [name] => wp-1.jpg
//             [full_path] => wp-1.jpg
//             [type] => image/jpeg
//             [tmp_name] => /tmp/phpBruMI8
//             [error] => 0
//             [size] => 10269
//         )

// )

// For multi files
// Array
// (
//     [upload] => Array
//         (
//             [name] => Array
//                 (
//                     [0] => Screenshot from 2024-02-19 19-51-55.png
//                     [1] => Screenshot from 2024-02-19 19-51-16.png
//                     [2] => Screenshot from 2024-02-19 19-50-04.png
//                     [3] => Screenshot from 2024-02-19 19-49-11.png
//                     [4] => Screenshot from 2024-02-19 19-47-17.png
//                     [5] => Screenshot from 2024-02-19 19-46-02.png
//                     [6] => Screenshot from 2024-02-19 19-44-07.png
//                 )

//             [full_path] => Array
//                 (
//                     [0] => Screenshot from 2024-02-19 19-51-55.png
//                     [1] => Screenshot from 2024-02-19 19-51-16.png
//                     [2] => Screenshot from 2024-02-19 19-50-04.png
//                     [3] => Screenshot from 2024-02-19 19-49-11.png
//                     [4] => Screenshot from 2024-02-19 19-47-17.png
//                     [5] => Screenshot from 2024-02-19 19-46-02.png
//                     [6] => Screenshot from 2024-02-19 19-44-07.png
//                 )

//             [type] => Array
//                 (
//                     [0] => image/png
//                     [1] => image/png
//                     [2] => image/png
//                     [3] => image/png
//                     [4] => image/png
//                     [5] => image/png
//                     [6] => image/png
//                 )

//             [tmp_name] => Array
//                 (
//                     [0] => /tmp/phpKwgG2D
//                     [1] => /tmp/phpTB4aQ1
//                     [2] => /tmp/phpnzrmrk
//                     [3] => /tmp/phpOUxTOV
//                     [4] => /tmp/phpdb53me
//                     [5] => /tmp/php2odMv3
//                     [6] => /tmp/phpjOGfHz
//                 )

//             [error] => Array
//                 (
//                     [0] => 0
//                     [1] => 0
//                     [2] => 0
//                     [3] => 0
//                     [4] => 0
//                     [5] => 0
//                     [6] => 0
//                 )

//             [size] => Array
//                 (
//                     [0] => 442650
//                     [1] => 453539
//                     [2] => 596457
//                     [3] => 474940
//                     [4] => 758006
//                     [5] => 398379
//                     [6] => 483957
//                 )

//         )

// )