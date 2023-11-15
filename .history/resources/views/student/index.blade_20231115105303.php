<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
<center>X
<table class="hover:table-fixed">
    <tr>
        <th class="text-white">ID</th>
        <th class="text-white">Name</th>
        <th class="text-white">Email</th>
        <th class="text-white">Phone</th>
        <th class="text-white">Action</th>
    </tr>
    <tbody>
           @foreach($records as $record)
           <tr>
           <td class="text-white">{{ $record->id }}</td>
            <td class="text-white">{{ $record->name }}</td>
            <td class="text-white">{{ $record->email }}</td>
            <td class="text-white">{{ $record->phone }}</td>
            <td class="text-white"><button class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Edit</button></td>
            <td class="text-white"><button class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Delete</button></td>
        </tr>
           @endforeach

    </tbody>
</table>

</div>
</div>
</div>
</div>
</x-app-layout>
