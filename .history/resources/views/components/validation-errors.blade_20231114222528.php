@props(['errors'])

@if ($errors->any)
<div {{  }}></div>
    <div class="front-medium text-red-600">
        {{ _('Something went wrong') }}
    <ul class="mt-3 list-disk list-inside text-sm text-red-600">
        @foreach ($errors->all() as $error)
        <li>{{ errror }}</li>
        @endforeach
    </ul>
</div>
@endif
