<x-app-layout>
<br>
<table class="hover:table-fixed">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    <tbody>
           @foreach($records as $record)
           <tr>
           <td>{{ $record->id }}</td>
            <td>{{ $record->name }}</td>
            <td>{{ $record->email }}</td>
            <td>{{ $record->phone }}</td>
            <td><button class="btn btn-info">Edit</button></td>
            <td><button class="btn btn-danger">Delete</button></td>
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
