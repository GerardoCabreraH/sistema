@props(['identifier', 'variable', 'placeholder', 'autocomplete'])

<input type="password" id="{{$identifier}}" name="{{$variable}}" class="form-control" placeholder="{{$placeholder}}" required autocomplete="{{$autocomplete}}" autofocus>
