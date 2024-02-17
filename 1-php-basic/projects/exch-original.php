<?php include "./template/header.php"; ?>
<?php include "./template/sidebar.php"; ?>

<section class=" bg-gray-100 p-10 rounded-lg">
    <!-- Start of Breadcrumb -->
    <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="./index.php">
                Home
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </li>
        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            Exchange
        </li>
    </ol>
    <!-- End of Breadcrumb -->
    <hr class=" border-violet-600 border my-3">

    <?php

    include "./testExc.php";

    ?>

    <!-- IF YOU USE form liek THIS, YOU NEED TO ADD form="form_id" to EVERY SINGLE thing
    YOU WANT TO CARRY OVER POST -->

    <form method="post" id="exchangeForm">

    </form>
    <div class=" mt-3">
        <label for="amount" class="block text-md font-medium mb-2 dark:text-white">Enter the currency amount.</label>
        <input type="number" id="amount" form="exchangeForm" name="amount" required class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="">
        <!-- notice form="form_id" -->
    </div>

    <div class="flex gap-3 w-full">
        <div class="p-5 my-3 flex flex-col gap-3 justify-around w-1/2">
            <label for="sourceCurrency" class=" text-xl">
                From
            </label>
            <select name="sourceCurrency" id="sourceCurrency" form="exchangeForm" class=" w-full h-10 bg-gray-200 rounded-md">
                <!-- notice form="form_id" -->

                <option value="MMK" class=" text-center">MMK</option>
                <?php
                foreach ($exchangeRates as $name => $value) :
                ?>
                    <option value="<?= $name ?>" class=" text-center">
                        <?= $name ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="p-5 my-3 flex flex-col gap-3 justify-around w-1/2">
            <label for="targetCurrency" class=" text-xl">
                To
            </label>
            <select name="targetCurrency" id="targetCurrency" form="exchangeForm" class=" w-full h-10 bg-gray-200 rounded-md">
                <!-- notice form="form_id" -->

                <option value="MMK" class=" text-center">MMK</option>
                <?php
                foreach ($exchangeRates as $name => $value) :
                ?>
                    <option value="<?= $name ?>" class=" text-center">
                        <?= $name ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <button type="submit" name="convert" form="exchangeForm" class="py-3 px-4 w-full mt-0 inline-flex items-center justify-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
        Convert
    </button>
</section>


<?php include "./template/footer.php"; ?>