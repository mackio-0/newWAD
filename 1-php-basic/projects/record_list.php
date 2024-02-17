<?php include "./template/header.php"; ?>
<?php include "./template/sidebar.php"; ?>



<section class=" bg-gray-100 p-10 rounded-lg">
    <!-- Start Breadcrumb -->
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
            Result Record List
        </li>
    </ol>
    <!-- End Breadcrumb -->
    <hr class=" border-violet-600 border my-3">

    <section>

        <?php
        $fileName = "saveCalcRecord.txt";
        if (!file_exists($fileName)) {
            touch($fileName);
        }

        $fileStream = fopen($fileName, "r");

        while (!feof($fileStream)) :
            $record = fgets($fileStream);
            if ($record === "\n")   continue;
        ?>

            <p class=" font-mono text-gray-700 bg-white rounded-md mb-3 p-5">
                <!-- <?= "hehe" ?> -->
                <?= $record; ?>
            </p>

        <?php
        endwhile;
        // fclose($fileStream);
        ?>



        <a href="./index.php" class=" mt-4 w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Calculate again?
        </a>
    </section>
</section>

<?php include "./template/footer.php"; ?>