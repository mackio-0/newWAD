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
            <form action="{{ route('phone.store') }}" method="post">
                @csrf
                <div class="grid gap-4 mb-3">
                    <label for="phone_number" class=" block text-sm">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number"
                        class=" bg-gray-50 border border-gray-800 rounded-md">

                    <div class="">
                        {{-- {{ $phone_number }} --}}
                        <label for="person" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Select a person
                        </label>
                        <select id="person" name="person_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a person</option>
                            @foreach ($persons as $person)
                                <option value="{{ $person->id }}">{{ $person->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</button>
                </div>
            </form>
        </div>
    </div>


</body>

</html>
