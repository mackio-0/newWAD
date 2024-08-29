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
            <form action="{{ route('item.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 mb-3">
                    <label for="name" class=" block text-sm">Name</label>
                    <input type="text" id="name" name="name"
                        class=" bg-gray-50 border border-gray-800 rounded-md @error('name') border-red-600 @enderror"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror

                    <label for="image" class=" block text-sm">Image</label>
                    <input type="file" id="image" name="images[]"
                        class=" bg-gray-50 border border-gray-800 rounded-md @error('image') border-red-600 @enderror"
                        value="" multiple>
                    @error('image')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror

                    <label for="price" class=" block text-sm">Price</label>
                    <input type="text" id="price" name="price"
                        class=" bg-gray-50 border border-gray-800 rounded-md @error('price') border-red-600 @enderror"
                        value="{{ old('price') }}">
                    @error('price')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror

                    <label for="stock" class=" block text-sm">Stock</label>
                    <input type="text" id="stock" name="stock"
                        class=" bg-gray-50 border border-gray-800 rounded-md @error('stock') border-red-600 @enderror"
                        value="{{ old('stock') }}">
                    @error('stock')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror

                    <label for="description" class=" block text-sm">Description</label>
                    <textarea type="text" id="description" name="description"
                        class=" bg-gray-50 border border-gray-800 rounded-md mb-3 @error('description') border-red-600 @enderror">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror

                    <div class="">
                        {{-- {{ $categories }} --}}
                        <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Select a category
                        </label>
                        <select id="categories" name="category_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('category_id') border-red-600 @enderror">
                            <option selected>Choose a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <p class=" mb-3 text-sm border-gray-500 border-b-2 inline-block">Available Status</p>
                        <div class="flex items-center mb-4">
                            <input checked id="available" type="radio" value="available" name="status"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 @error('status') border-red-600 @enderror">
                            <label for="available" class="ms-2 text-sm text-gray-900 dark:text-gray-300">
                                Available
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input {{ old('status') == 'unavailable' ? 'checked' : '' }} id="unavailable"
                                type="radio" value="unavailable" name="status"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="unavailable"
                                class="ms-2 text-sm text-gray-900 dark:text-gray-300 @error('status') border-red-600 @enderror">
                                Unavailable
                            </label>
                        </div>

                        @error('status')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 mt-3 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</button>
                </div>
            </form>
        </div>
    </div>


</body>

</html>
