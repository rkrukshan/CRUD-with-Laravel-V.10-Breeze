
<center>
    <table class="hover:table-fixed">
        <tr>
            <th class="border border-slate-700 text ">ID</th>
            <th class="border border-slate-700 text ">Name</th>
            <th class="border border-slate-700 text ">Email</th>
            <th class="border border-slate-700 text ">Phone</th>
            <th class="border border-slate-700 text ">Action</th>
        </tr>
        <tbody>
              @forelse ($records as $record)
              <tr>
                <td class="border border-slate-700 text ">{{ $record->id }}</td>
                 <td class="border border-slate-700 text ">{{ $record->name }}</td>
                 <td class="border border-slate-700 text ">{{ $record->email }}</td>
                 <td class="border border-slate-700 text ">{{ $record->phone }}</td>
                 <td class="border border-slate-700 text">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                 <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </td>
             </tr>
              @empty
             <th colspan="5" class="text-white">No data found</th>
              @endforelse

        </tbody>
    </table>
</center>
