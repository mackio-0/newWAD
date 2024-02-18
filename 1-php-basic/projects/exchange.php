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

    <section>
        <?php

        $contents = file_get_contents("http://forex.cbm.gov.mm/api/latest");
        $obj = json_decode($contents);
        // var_dump($obj->rates);

        include "./exchangeBackend.php";

        ?>


        <!-- WHILE USING FORM LIKE THIS, YOU NEED TO ADD form="form_id" to EVERY SINGLE THING YOU WANT TO
        CARRY OVER POST -->

        <form method="post" id="exc">

        </form>

        <div class="grid grid-cols-2 gap-5">
            <div class=" col-span-full">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Currency amount</label>
                <input type="number" id="input-label" form="exc" name="amount" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                <!-- notice form="form_id" -->

            </div>
            <div class=" col-span-1">
                <!-- Select -->
                <div class="relative">
                    <select data-hs-select='{
      "placeholder": "From currency",
      "toggleTag": "<button type=\"button\"></button>",
      "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600",
      "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-slate-900 dark:border-gray-700",
      "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-slate-900 dark:hover:bg-slate-800 dark:text-gray-200 dark:focus:bg-slate-800",
      "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
    }' class="hidden" name="from_currency" form="exc">
                        <!-- notice form="form_id" -->

                        <option value="">From currency</option>
                        <option value="MMK">MMK</option>
                        <?php foreach ($obj->rates as $key => $rate) :
                        ?>
                            <option value="<?= $key ?>-<?= $rate ?>"><?= $key ?></option>
                        <?php
                        endforeach;
                        ?>
                    </select>

                    <div class="absolute top-1/2 end-3 -translate-y-1/2">
                        <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m7 15 5 5 5-5" />
                            <path d="m7 9 5-5 5 5" />
                        </svg>
                    </div>
                </div>
                <!-- End Select -->
            </div>

            <div class="col-span-1">
                <!-- Select -->
                <div class="relative">
                    <select data-hs-select='{
      "placeholder": "To currency",
      "toggleTag": "<button type=\"button\"></button>",
      "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600",
      "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-slate-900 dark:border-gray-700",
      "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-slate-900 dark:hover:bg-slate-800 dark:text-gray-200 dark:focus:bg-slate-800",
      "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
    }' class="hidden" name="to_currency" form="exc">
                        <!-- notice form="form_id" -->

                        <option value="">To Currency</option>
                        <option value="MMK">MMK</option>
                        <?php foreach ($obj->rates as $key => $rate) :
                        ?>
                            <option value="<?= $key ?>-<?= $rate ?>"><?= $key ?></option>
                        <?php
                        endforeach;
                        ?>
                    </select>

                    <div class="absolute top-1/2 end-3 -translate-y-1/2">
                        <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m7 15 5 5 5-5" />
                            <path d="m7 9 5-5 5 5" />
                        </svg>
                    </div>
                </div>
                <!-- End Select -->
            </div>
        </div>
        <div class=" flex gap-5 mt-5">
            <a href="./exchRecordList.php" type="button" class=" flex-grow justify-center py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:bg-blue-100 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:bg-blue-800/30 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Records
            </a>
            <button type="submit" name="convert" form="exc" class="flex-grow px-4 py-3 inline-flex items-center justify-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Convert
            </button>
        </div>


    </section>
</section>


<?php include "./template/footer.php"; ?>