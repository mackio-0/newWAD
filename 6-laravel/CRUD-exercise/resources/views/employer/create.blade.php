<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employer Info</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-slate-100">

    <div class=" flex flex-col items-center mx-auto">
        <h1 class=" text-3xl text-center font-bold my-10 underline text-gray-600">Employer Informations</h1>
        <div class="flex w-1/2 justify-center">
            <a href="{{ route('employer.index') }}"
                class="text-white bg-emerald-400 hover:bg-emerald-600 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-1 dark:bg-pink-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                View All Employers
            </a>
        </div>
    </div>

    <div class="container mx-auto my-10">
        <form class="max-w-sm mx-auto" method="POST" action="{{ route('employer.store') }}">
            @csrf
            <div class=" mb-3">
                <label for="name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                    The company name
                </label>
                <input type="text" id="name" name="name"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-sm bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class=" mb-3">
                <label for="phone" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                    Phone number.
                </label>
                <input type="text" id="phone" name="phone"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-sm bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class=" mb-3">
                <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="email" name="email"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-sm bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-3">
                <label for="address"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <input type="text" id="address" name="address"
                    class="block w-full p-4 text-gray-900 border border-gray-300 rounded-sm bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <button type="submit"
                class=" w-full my-4 text-white bg-emerald-400 hover:bg-emerald-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-pink-500 dark:focus:ring-blue-800">
                Add Employer
            </button>
        </form>
    </div>



</body>

</html>
