@props(['title', 'content'])

<div class="form-group">
    <label for="{{$title}}">{{$content}}</label>
    {{$slot}}
</div>
