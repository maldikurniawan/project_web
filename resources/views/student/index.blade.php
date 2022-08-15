<x-app-layout>


    <!-- component -->
<!-- This is an example component -->
<div class="w-full mx-auto">

	<div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>

                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Id
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Nama Depan
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Nama Belakang
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                NPM
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Semester
                            </th>
                            <th scope="col" class="p-4">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                        @foreach ($data as $value)
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$value -> id}}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                            {{$value -> nama_depan}}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$value -> nama_belakang}}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$value -> npm}}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$value -> semester}}</td>
                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                <div class="flex">
                                    <div>
                                        <a href="{{route('student.index', ['student' => $value ->id])}}"
                                            class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                                    </div>

                                    {{-- <div class="ml-5">
                                        <form action="{{route('delete.data', ['student' => $value->id])}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button
                                                class="text-red-600 dark:text-red-500 hover:underline">Delete</a>
                                            </form>

                                    </div> --}}
                                </div>


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


</x-app-layout>
