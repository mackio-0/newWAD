<?php template("header"); ?>

<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
            <h1 class=" text-7xl font-bold mb-10">404 Not Found</h1>
            <p class="leading-relaxed text-lg">
                Sorry, the page you requested does not exist.
            </p>
            <span class="inline-block h-1 w-10 rounded bg-indigo-500 my-4"></span>
            <div>
                <a href="<?= url("/") ?>" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                    Go to Home
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<?php template("footer"); ?>