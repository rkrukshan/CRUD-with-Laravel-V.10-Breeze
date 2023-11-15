<x-app-layout>
<br>
<table class="hover:table-fixed">
    <tr>
        <th c>ID</th>
        <th c>Name</th>
        <th c>Email</th>
        <th c>Phone</th>
        <th c>Action</th>
    </tr>
    <tbody>
           @foreach($records as $record)
           <tr>
           <td c>{{ $record->id }}</td>
            <td c>{{ $record->name }}</td>
            <td c>{{ $record->email }}</td>
            <td c>{{ $record->phone }}</td>
            <td c><button class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Edit</button></td>
            <td c><button class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Delete</button></td>
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
