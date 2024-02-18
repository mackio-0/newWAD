<?php

// echo "width : ";
// var_dump(isset($_POST["width"]));
// echo "<br>";
// echo "breadth : ";
// var_dump(isset($_POST["breadth"]));
// echo "<br>";
// echo "btn : ";
// var_dump(isset($_POST["calc_btn"]));

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




<?php include "./template/header.php"; ?>

<?php include "./template/sidebar.php"; ?>


<section class=" bg-gray-100 p-10 rounded-lg">
    <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="#">
                Home
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </li>
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="index.php">
                Area Calculator
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </li>
        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            Calculation Result
        </li>
    </ol>
    <hr class=" border-violet-600 border my-3">

    <?php

    // form value empty checking is done on top of the file

    $width = $_POST["width"];
    $breadth = $_POST["breadth"];

    $area = $width * $breadth;

    $fileName = "saveCalcRecord.txt";
    if (!file_exists($fileName)) {
        touch($fileName);
    }

    $fileStream = fopen($fileName, "a");
    fwrite($fileStream, "\nwidth ($width) * breadth ($breadth) = area ($area)");
    fclose($fileStream);

    ?>

    <p class=" text-5xl my-10 text-center">
        <?= $area ?> Sqft
    </p>

    <div class=" flex gap-3">
        <a href="./record_list.php" type="button" class=" flex-grow justify-center px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:bg-blue-100 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:bg-blue-800/30 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Records
        </a>
        <a href="./index.php" type="button" class=" flex-grow py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Calculate again?
        </a>
    </div>

</section>

<?php include "./template/footer.php"; ?>