@props(['type' => 'button', 'style' => 'primary', 'content'])

<button type="submit" {{ $attributes->merge(['class' => 'btn btn-'.$style.' btn-block']) }}>{{$content}}</button>
