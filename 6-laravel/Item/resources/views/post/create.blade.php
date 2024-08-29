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
        {{ $users }}
        <div class="max-w-md w-full mx-auto bg-white shadow-lg rounded-lg p-8">
            <form action="{{ route('post.store') }}" method="post">
                @csrf
                <div class="grid gap-4 mb-3">
                    <label for="title" class=" block text-sm">Post Title</label>
                    <input type="text" id="title" name="title"
                        class=" bg-gray-50 border border-gray-800 rounded-md" value="">
                    <div>
                        @foreach ($users as $user)
                            <div class="flex items-center">
                                <input id="username-checkbox" type="checkbox" name="user_ids[]"
                                    value="{{ $user->id }}"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="username-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $user->name }}</label>
                            </div>
                        @endforeach
                    </div>

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</button>
                </div>
            </form>
        </div>
    </div>


</body>

</html>
