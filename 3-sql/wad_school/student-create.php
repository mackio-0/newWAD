<?php require_once "./db_connect.php"; ?>

<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>

<section class=" bg-gray-100 p-10 rounded-lg">

    <ol class="flex items-center whitespace-nowrap " aria-label="Breadcrumb">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="/student-list.php">
                Manage Student
                <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            Add A New Student
        </li>
    </ol>

    <hr class="  border-gray-300 my-4">

    <form action="student-store.php" method="post" class=" mb-8">
        <div class="flex flex-col gap-3 w-1/2">
            <div class="">
                <label for="batch_name" class="block text-sm font-medium mb-2 dark:text-white">Batch Name</label>
                <input required type="text" id="batch_name" name="name" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Batch Name">
            </div>

            <div class="">
                <label for="course_name" class="block text-sm font-medium mb-2 dark:text-white">Course Name</label>
                <select name="course_id" id="course_name" class="py-3 px-4 pe-9 block w-full bg-white border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    <option selected="">Select a course</option>
                    <?php

                    $sql = "SELECT * FROM courses";
                    $query = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($query)) :
                    ?>
                        <option value="<?= $row["id"] ?>"><?= $row["title"] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div class="">
                <label for="start_date" class="block text-sm font-medium mb-2 dark:text-white">Start date</label>
                <input required type="date" id="start_date" name="start_date" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Start Date">
            </div>

            <div class="flex gap-3">
                <div class="w-full">
                    <label for="start_time" class="block text-sm font-medium mb-2 dark:text-white">Start Time</label>
                    <input required type="time" id="start_time" name="start_time" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Start Time">
                </div>

                <div class="w-full">
                    <label for="end_time" class="block text-sm font-medium mb-2 dark:text-white">End Time</label>
                    <input required type="time" id="end_time" name="end_time" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="End Time">
                </div>
            </div>

            <div class="">
                <label for="student_limit" class="block text-sm font-medium mb-2 dark:text-white">Student Limit</label>
                <input required type="number" id="student_limit" name="student_limit" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Student Limit">
            </div>

            <div class="py-3">
                <div class="flex">
                    <input type="checkbox" name="is_register_open" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-checked-checkbox" value="1" checked="">
                    <label for="hs-checked-checkbox" class="text-sm text-black ms-3 dark:text-neutral-400">Register Open</label>
                </div>
            </div>

            <button type="submit" class="py-3 px-4 inline-flex items-center justify-center gap-x-2 font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Add Batch
            </button>
        </div>
    </form>

</section>

<?php include("./template/footer.php");
