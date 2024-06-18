<?php require_once "./db_connect.php"; ?>

<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>

<section class=" bg-gray-100 p-10 rounded-lg">

    <ol class="flex items-center whitespace-nowrap " aria-label="Breadcrumb">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="/batch-list.php">
                Students
                <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            Enrollment
        </li>
    </ol>

    <hr class="  border-gray-300 my-4">

    <?php

    $id = $_GET["row_id"];

    $sql = "SELECT * FROM students WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    $student = mysqli_fetch_assoc($query);

    $batchSql = "SELECT * FROM batches WHERE is_register_open=1";
    $batchQuery = mysqli_query($conn, $batchSql);

    ?>

    <form action="enroll-store.php" method="post" class=" mb-8">
        <div class="flex flex-col gap-3 w-1/2">

            <div>
                <h3 class=" text-xl">
                    Student <b><?= $student['name'] ?></b> enroll at
                </h3>
            </div>

            <input type="hidden" name="student_id" value="<?= $id ?>">

            <div class="">
                <label for="batch_name" class="block text-sm font-medium mb-2 dark:text-white">Batch Name</label>
                <select name="batch_id" id="batch_name" class="py-3 px-4 pe-9 block w-full bg-white border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    <option selected="">Select a batch</option>
                    <?php

                    while ($row = mysqli_fetch_assoc($batchQuery)) :
                    ?>
                        <option value="<?= $row["id"] ?>"><?= $row["name"] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>

            <button type="submit" class="py-3 px-4 inline-flex items-center justify-center gap-x-2 font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Enroll Now
            </button>
        </div>
    </form>


</section>

<?php include("./template/footer.php");
