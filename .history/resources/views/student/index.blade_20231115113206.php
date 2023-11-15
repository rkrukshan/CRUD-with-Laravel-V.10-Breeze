
<center>
    <table class="hover:table-fixed">
        <tr>
            <th class="border border-slate-700 ">ID</th>
            <th class="border border-slate-700 ">Name</th>
            <th class="border border-slate-700 ">Email</th>
            <th class="border border-slate-700 ">Phone</th>
            <th class="border border-slate-700 ">Action</th>
        </tr>
        <tbody>
              @forelse ($records as $record)
              <tr>
                <td class="border border-slate-700 ">{{ $record->id }}</td>
                 <td class="border border-slate-700 ">{{ $record->name }}</td>
                 <td class="border border-slate-700 ">{{ $record->email }}</td>
                 <td class="border border-slate-700 ">{{ $record->phone }}</td>
                 <td class=" ">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button></td>
                 <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Delete</button></td>
             </tr>
              @empty
             <th colspan="5" class="text-white">No data found</th>
              @endforelse

        </tbody>
    </table>
</center>
