@props(['errors'])

@if ($errors->any)
    <div class="front-medium text-red-600">
        {{ _('Something went wrong') }}
    </div>
    <ul class="mt-3 list-disk list-inside text-sm text-red-600">
        @foreach ($errors->all() as )

        @endforeach
    </ul>
@endif