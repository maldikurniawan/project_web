<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>
<body>

</body>
</html>
    <div class="w-full mx-auto">

        <div class="flex flex-col">
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden ">
                        <table class="w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Id
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Nama depan
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Nama Belakang
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        NPM
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        No Telepon
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Jenjang Studi
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Semeseter
                                    </th>


                                    <th scope="col" class="p-4">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                                @foreach ($data as $item)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->id }}</td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->nama_depan }}</td>
                                        <td
                                            class="py-4 px-6 w-auto text-sm font-medium text-gray-500 truncate dark:text-white">
                                            {{ $item->nama_belakang }}</td>
                                        <td
                                            class="py-4 px-6 w-auto text-sm font-medium text-gray-500 truncate dark:text-white">
                                            {{ $item->npm }}</td>
                                        <td
                                            class="py-4 px-6 w-auto text-sm font-medium text-gray-500 truncate dark:text-white">
                                            {{ $item->no_telp }}</td>
                                        <td
                                            class="py-4 px-6 w-auto text-sm font-medium text-gray-500 truncate dark:text-white">
                                            {{ $item->jenjang_studi }}</td>
                                        <td
                                            class="py-4 px-6 w-auto text-sm font-medium text-gray-500 truncate dark:text-white">
                                            {{ $item->semester }}</td>

                                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                            <a href=" {{ route('detail.student', ['student' => $item->id]) }}"
                                                class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>

