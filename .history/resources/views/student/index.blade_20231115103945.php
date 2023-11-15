<x-app-layout>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    <tbody>
        <tr>
           @foreach($records as $record)
           <td>{{ $record->id }}</td>
            <td>{{ $record->name }}</td>
            <td>{{ $record->email }}</td>
            <td>{{ $record->phone }}</td>
            <td><button class="btn btn-info">Edit</button></td>
            <td><button class="btn btn-danger">Delete</button></td>

           @endforeach

        </tr>
    </tbody>
</table>


<br>



</form>
</div>
</div>
</div>
</div>

</x-app-layout>
