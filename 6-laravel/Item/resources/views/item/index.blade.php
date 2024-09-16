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

    {{-- {{ dd($items) }} --}}

    <div class="container max-w-5xl mx-auto p-5">
        <div class="relative overflow-x-auto">
            {{-- {{ $appName }} --}}
            <form action="{{ route('item.search') }}" method="GET">
                <div class="mx-4 my-3">
                    <input type="text" id="query" name="query"
                        class=" bg-gray-50 border border-gray-800 rounded-md" value="{{ isset($query) ? $query : '' }}">
                    <button type="submit"
                        class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg px-5 py-2.5 text-center me-2 mb-2">
                        Search
                    </button>
                    <a href="{{ route('item.index') }}"
                        class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg px-5 py-3 text-center me-2 mb-2">Item
                        List</a>
                </div>
            </form>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-800 uppercase bg-gray-400 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Stock
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Details
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ $item->id }}
                            </td>
                            <th scope="row"
                                class="px-6 py-4 text-wrap font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->name }}
                            </th>
                            <td class="px-6 py-4">
                                @foreach ($item->item_images as $image)
                                    <img src="{{ asset('storage/itemImages/' . $image) }}"
                                        alt="{{ $item->name }}'s picture" width="100px" height="100px">
                                @endforeach
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->price }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->stock }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->category->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->status }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('item.show', $item->id) }}"
                                    class="focus:outline-none text-black bg-yellow-200 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2.5 mb-2 dark:focus:ring-yellow-900">
                                    Details
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2 lg:flex-row md:flex-col">
                                    <a href="{{ route('item.edit', $item->id) }}"
                                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2.5 mb-2 dark:focus:ring-yellow-900">
                                        Edit
                                    </a>
                                    <form action="{{ route('item.destroy', $item->id) }}" method="POST"
                                        class=" inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2.5 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="p-6">
                {{-- {{ $items->links('pagination::tailwind') }} --}}
            </div>
        </div>
        <div class="flex w-full items-center justify-center">
            <a href="{{ route('item.create') }}"
                class="focus:outline-none w-40 text-center text-white bg-black hover:bg-gray-700 focus:ring-4 focus:ring-gray-500 font-medium rounded-lg text-sm px-4 py-2.5 mb-2 dark:focus:ring-yellow-900">
                Create
            </a>
        </div>
    </div>

</body>

</html>
