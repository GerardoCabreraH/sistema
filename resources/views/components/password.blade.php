@props(['identifier', 'variable', 'placeholder', 'autocomplete'])

<input type="password" id="{{$identifier}}" name="{{$variable}}" class="form-control @error('password') is-invalid @enderror" placeholder="{{$placeholder}}" required autocomplete="{{$autocomplete}}" autofocus>
