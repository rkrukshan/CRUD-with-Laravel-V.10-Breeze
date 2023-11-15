<x-app-layout>
<br>
<table class="hover:table-fixed">
    <tr>
        <th class="">ID</th>
        <th class="">Name</th>
        <th class="">Email</th>
        <th class="">Phone</th>
        <th class="">Action</th>
    </tr>
    <tbody>
           @foreach($records as $record)
           <tr>
           <td class="">{{ $record->id }}</td>
            <td class="">{{ $record->name }}</td>
            <td class="">{{ $record->email }}</td>
            <td class="">{{ $record->phone }}</td>
            <td class=""><button class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Edit</button></td>
            <td class=""><button class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Delete</button></td>
        </tr>
           @endforeach

    </tbody>
</table>


<br>


</form>
</div>
</div>
</div>
</div>
</x-app-layout>
