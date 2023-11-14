@props(['errors'])

@if ($errors->any)
    <div class="front-medium text-red-600">
        {{ _('Something went wrong') }}
    </div>
    ul
@endif
