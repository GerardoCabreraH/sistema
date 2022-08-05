@props(['large' => 0])

<p {{ $attributes->merge(['class' => "mb-$large"]) }}>
    {{$slot}}
</p>
