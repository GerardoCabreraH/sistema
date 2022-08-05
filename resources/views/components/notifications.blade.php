<!-- Notifications Dropdown Menu -->
<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">{{Auth::user()->unreadNotifications()->count()}}</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">{{Auth::user()->unreadNotifications()->count()}} Notifications</span>
        <div class="dropdown-divider"></div>
        @forelse(Auth::user()->unreadNotifications as $notification)
            <a href="{{route('read-notification', $notification->id)}}" onclick="event.preventDefault(); document.getElementById('read-notification-form').submit();" class="dropdown-item text-center">
                <p><i class="fas fa-file"></i> {{$notification->data['header']}}</p>
                <span class="text-muted text-sm">{{$notification->created_at->diffForHumans()}}</span>
            </a>
            <form id="read-notification-form" action="{{ route('read-notification', $notification->id) }}" method="POST" class="d-none">
                @csrf
            </form>
            <div class="dropdown-divider"></div>
            @if($loop->last)
                <a class="dropdown-item dropdown-footer" href="{{route('read-all-notifications')}}">
                    Marcar todos como leidos
                </a>
            @endif
        @empty
            <p class="dropdown-item text-center">Sin notificaciones</p>
        @endforelse
    </div>
</li>
