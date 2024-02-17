<?php


// // isset() is to check whether a variable is present or not
// echo "width : ";
// var_dump(isset($_POST["width"]));
// echo "<br>";
// echo "breadth : ";
// var_dump(isset($_POST["breadth"]));
// echo "<br>";
// echo "btn : ";
// var_dump(isset($_POST["calc_btn"]));

// // empty() is to check whether a variable has any value or not
// echo "width : ";
// var_dump(empty($_POST["width"]));
// echo "<br>";
// echo "breadth : ";
// var_dump(empty($_POST["breadth"]));
// echo "<br>";
// echo "btn : ";
// var_dump(empty($_POST["calc_btn"]));

// die("<br><br>--- finished ---");

if (empty($_POST["width"]) || empty($_POST["breadth"])) {
    // die("Need to fill all input!!");
    header("Location:index.php");
}

?>