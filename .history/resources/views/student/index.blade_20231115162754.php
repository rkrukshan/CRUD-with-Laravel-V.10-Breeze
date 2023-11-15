<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Students') }}
        </h2>
    </x-slot>

    <div class="py-12">


        <center>
            <x-success-status class="mb-4" :status="session('message')" />

            <table class="hover:table-fixed">
                <tr>
                    <th width=10% class="border border-slate-700 text-white ">ID</th>
                    <th width=10% class="border border-slate-700 text-white ">Name</th>
                    <th width=10% class="border border-slate-700 text-white ">Email</th>
                    <th width=10% class="border border-slate-700 text-white ">Phone</th>
                    <th width=40% class="border border-slate-700 text-white ">Action</th>
                </tr>

                <tbody>
                    @forelse ($students as $student)
                    <tr>
                        <td class="border border-slate-700 text-white ">{{ $student->id }}</td>
                        <td class="border border-slate-700 text-white ">{{ $student->name }}</td>
                        <td class="border border-slate-700 text-white ">{{ $student->email }}</td>
                        <td class="border border-slate-700 text-white ">{{ $student->phone }}</td>
                        <td>
                            <form action="{{ url('delete-student/'.$student->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-danger-button class="ms-3">
                                    {{ __('Delete') }}
                                </x-danger-button>
                            </form>
                        </td>
                        
                            <td>

                        </td>
                    </tr>
                    @empty
                    <th colspan="5" class="text-white">No data found</th>
                    @endforelse

                </tbody>

            </table>
        </center>



    </div>
    </div>
    </div>
    </div>
</x-app-layout>
