@props(['type', 'content'])

@if ($type)
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p>{{$content}}</p>
    </div>
@endif
