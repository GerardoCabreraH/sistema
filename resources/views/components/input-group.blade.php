@props(['icon'])

<div class="input-group mb-3">
    {{$slot}}
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-{{$icon}}"></span>
        </div>
    </div>
</div>
