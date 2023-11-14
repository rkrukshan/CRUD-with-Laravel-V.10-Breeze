<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control" name="phone">

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
