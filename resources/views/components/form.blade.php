@props(['route'])

<form action="{{$route}}" method="post">
    @csrf
    {{$slot}}
</form>
