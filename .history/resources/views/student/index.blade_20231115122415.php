
<center>
    <table class="hover:table-fixed">
        <tr>
            <th width=10% class="border border-slate-700 text-white ">ID</th>
            <th width=10% class="border border-slate-700 text-white ">Name</th>
            <th width=10% class="border border-slate-700 text-white ">Email</th>
            <th width=10% class="border border-slate-700 text-white ">Phone</th>
            <th width=10% class="border border-slate-700 text-white ">Action</th>
        </tr>

            <tbody>
                @forelse ($records as $record)
                <tr>
                  <td class="border border-slate-700 text-white ">{{ $record->id }}</td>
                   <td class="border border-slate-700 text-white ">{{ $record->name }}</td>
                   <td class="border border-slate-700 text-white ">{{ $record->email }}</td>
                   <td class="border border-slate-700 text-white ">{{ $record->phone }}</td>
                   <td class="border border-slate-700 text-white">
                      <a href="{{ route('edit',$re) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                   <a href="" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Delete</a>
                  </td>
               </tr>
                @empty
               <th colspan="5" class="text-white">No data found</th>
                @endforelse

          </tbody>

    </table>
</center>
