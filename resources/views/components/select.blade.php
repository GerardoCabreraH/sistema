@props(['identifier', 'variable', 'value', 'title'])

<select class="form-control" type="text" id="{{$identifier}}" name="{{$variable}}" value="{{ $value }}">
    <option value="">{{$title}}</option>
    {{$slot}}
</select>
