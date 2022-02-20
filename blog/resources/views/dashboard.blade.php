<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-800">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-400">
                                        <thead class="bg-ray-700">
                                            <tr>
                                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider" scope="col">Name</th>
                                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider" scope="col">Title</th>
                                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider" scope="col">Body</th>
                                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-gray-600 text-white divide-y divide-gray-500">
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">{{$post->user->name}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap">{{$post->title}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap">{{$post->body}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <a href="" class="bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white text-sm py-1 px-2 rounded">Edit</a>
                                                        <a href="" class="bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white text-sm py-1 px-2 rounded">Delete</a>
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
            </div>
        </div>
    </div>
</x-app-layout>
