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

<div>
    <x-input-label for="phone" :value="__('Phone')" />
    <x-text-input id="phone" class="block mt-1 w-full" type="phone" name="phone"
        :value="old('phone')" autofocus autocomplete="username" />
    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
</div>
<br>

<div>
    <center>
        <x-primary-button class="ms-3">
            {{ __('Add') }}
        </x-primary-button>
    </center>
</div>

</form>
</div>
</div>
</div>
</div>

</x-app-layout>
