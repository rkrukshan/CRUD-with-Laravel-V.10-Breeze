<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <form action="">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
            <label for="email">Name</label>
            <input type="text" class="form-control" name="name">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">

        </form>
    </div>
</x-app-layout>
