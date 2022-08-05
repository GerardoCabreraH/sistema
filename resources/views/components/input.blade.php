@props(['type' => 'text', 'identifier', 'variable', 'placeholder', 'autocomplete', 'value'])

<input type="{{$type}}" id="{{$identifier}}" name="{{$variable}}" class="form-control @error($variable) is-invalid @enderror" placeholder="{{$placeholder}}" required autocomplete="{{$autocomplete}}" autofocus value="{{$value}}">
