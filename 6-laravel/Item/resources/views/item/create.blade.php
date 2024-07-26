<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Item</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="container mx-auto my-10">
        <div class="max-w-md w-full mx-auto bg-white shadow-lg rounded-lg p-8">
            <form action="{{ route('item.store') }}" method="post">
                @csrf
                <div class="grid gap-4 mb-3">
                    <label for="name" class=" block text-sm">Name</label>
                    <input type="text" id="name" name="name"
                        class=" bg-gray-50 border border-gray-800 rounded-md">
                    <label for="price" class=" block text-sm">Price</label>
                    <input type="text" id="price" name="price"
                        class=" bg-gray-50 border border-gray-800 rounded-md">
                    <label for="stock" class=" block text-sm">Stock</label>
                    <input type="text" id="stock" name="stock"
                        class=" bg-gray-50 border border-gray-800 rounded-md">
                    <label for="description" class=" block text-sm">Description</label>
                    <textarea type="text" id="description" name="description" class=" bg-gray-50 border border-gray-800 rounded-md mb-3"></textarea>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</button>
                </div>
            </form>
        </div>
    </div>


</body>

</html>
