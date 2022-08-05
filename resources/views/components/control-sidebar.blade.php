<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Adminlte</h5>
        @guest
            @if (Route::has('login'))
                <p><x-hyperlink :route="route('login')" style="text-center">Login</x-hyperlink></p>
            @endif

            @if (Route::has('register'))
                <p><x-hyperlink :route="route('register')" style="text-center">Register</x-hyperlink></p>
            @endif
        @else
            <p><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endguest
    </div>
</aside>
<!-- /.control-sidebar -->
