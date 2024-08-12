<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container mx-auto mt-10">
        <div class="w-full max-w-md mx-auto bg-white shadow-lg rounded-lg p-8">
            <h3 class="text-xl font-bold mb-4">Category Details</h3>
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                <p class=" mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Item Name: {{ $category->name }}
                </p>
                <p class=" mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Item Description: {{ $category->description }}
                </p>
            </div>

        </div>
    </div>
</body>

</html>
