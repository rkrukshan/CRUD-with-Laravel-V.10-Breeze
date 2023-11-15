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
            <th width="10%" class="text-white">ID</th>
            <thwidth="10%" class="text-white">Name</thwidth=>
            <thwidth="10%" class="text-white">Email</thwidth=>
            <th class="text-white">Phone</th>
            <th class="text-white">Action</th>
        </tr>
        <tbody>
               @foreach($records as $record)
               <tr>
               <td width="10%" class="text-white">{{ $record->id }}</td>
                <tdwidth="10%" class="text-white">{{ $record->name }}</tdwidth=>
                <tdwidth="10%" class="text-white">{{ $record->email }}</tdwidth=>
                <tdwidth="10%" class="text-white">{{ $record->phone }}</tdwidth=>
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
