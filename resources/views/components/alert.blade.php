@props(['type', 'content'])

@if ($type)
    <div class="alert alert-success" role="alert">
        {{$content}}
    </div>
@endif
