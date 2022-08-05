@props(['identifier', 'variable', 'value', 'content'])

<div class="icheck-primary">
    <input type="checkbox" id="{{$identifier}}" name="{{$variable}}" {{$value}}>
    <label for="{{$identifier}}">
        {{$content}}
    </label>
</div>
