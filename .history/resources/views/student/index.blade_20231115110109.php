<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Students') }}
        </h2>
    </x-slot>

    <div class="py-12">

<center>
    <table class="hover:table-fixed">
        <tr>
            <th class="text-white">ID</th>
            <th class="text-white">Name</th>
            <th class="text-white">Email</th>
            <th class="text-white">Phone</th>
            <th width="10%" class="text-white">Action</th>
        </tr>
        <tbody>
               @foreach($records as $record)
               <tr>
               <td class="text-white">{{ $record->id }}</td>
                <td class="text-white">{{ $record->name }}</td>
                <td class="text-white">{{ $record->email }}</td>
                <td class="text-white">{{ $record->phone }}</td>
                <td class="text-white"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button></td>
                <td class="text-white"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Delete</button></td>
            </tr>
               @endforeach

        </tbody>
    </table>
</center>
</div>
</div>
</div>
</div>
</x-app-layout>
