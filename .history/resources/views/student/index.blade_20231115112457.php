<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<center>
    <table class="hover:table-fixed">
        <tr>
            <th class="text-white">ID</th>
            <th class="text-white">Name</th>
            <th class="text-white">Email</th>
            <th class="text-white">Phone</th>
            <th class="text-white">Action</th>
        </tr>
        <tbody>
              @forelse ($records as $record)
              <tr>
                <td class="text-white">{{ $record->id }}</td>
                 <td class="text-white">{{ $record->name }}</td>
                 <td class="text-white">{{ $record->email }}</td>
                 <td class="text-white">{{ $record->phone }}</td>
                 <td class="text-white"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button></td>
                 <td class="text-white"><button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Delete</button></td>
             </tr>
              @empty
             <th colspan="5" class="text-white">No data found</th>
              @endforelse

        </tbody>
    </table>
</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

