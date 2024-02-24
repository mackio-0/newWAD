<?php include "./template/header.php"; ?>
<?php include "./template/sidebar.php"; ?>

<!-- READ MORE about file handling doc in php website -->
<!-- https://www.php.net/manual/en/features.file-upload.post-method.php -->

<section class=" bg-gray-100 p-10 rounded-lg">
    <form enctype="multipart/form-data" method="post" action="./gallery-process.php">
        <label for="upload" class="sr-only">Choose file</label>
        <input type="file" name="upload[]" id="upload" multiple class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600
    file:bg-gray-50 file:border-0
    file:me-4
    file:py-3 file:px-4
    dark:file:bg-gray-700 dark:file:text-gray-400">
        <button type="submit" class=" mt-5 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Upload
        </button>
    </form>
</section>
<section>
    <?php
    // $photos = scandir("photos");     // include . and .. as extra so we need to filter it
    $photos = array_filter(scandir("photos"), fn ($el) => $el != "." && $el != "..");
    ?>
    <div class=" columns-3 gap-3 mt-5">
        <?php foreach ($photos as $photo) : ?>
            <!-- <div class=" inline-block relative group mb-3">
                <img class=" rounded-lg " src="photos/<?= $photo ?>" alt="">
                <a href="./gallery-delete.php" class="py-2 px-3 absolute bottom-0 right-0 hidden pointer-events-none group-hover:inline-flex group-hover:pointer-events-auto items-center gap-x-2 text-sm font-semibold rounded-lg border border-red-500 text-red-500 hover:border-red-400 hover:text-red-400 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    Button
                </a>
            </div> -->
            <div class="relative inline-block group mb-3">
                <img class=" rounded-lg " src="photos/<?= $photo ?>" alt="">
                <a onclick="return confirm('Are you sure to delete this photo?')" href="./gallery-delete.php?file_name=<?= $photo ?>" class="py-2 px-3 absolute right-1 bottom-1 hidden pointer-events-none group-hover:inline-flex group-hover:pointer-events-auto items-center gap-x-2 text-sm font-semibold rounded-lg border border-red-500 text-red-500 hover:border-red-400 hover:text-red-400 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    Button
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include "./template/footer.php"; ?>