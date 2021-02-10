@auth
<div class="dropdown-menu-left" id="userprofilemenu">
    <ul><h1 class="lined"></h1>
        <li><a href=""> My Profile</a></li>
        <li><a href="{{route('user_apartments')}}">My Apartments</a></li>
        <li><a href="{{route('logout')}}"> Logout</a></li>
        @php
            $userRoles = Auth::user()->roles->pluck('name');
        @endphp
        @if($userRoles->contains('admin'))
            <li><a href="{{route('admin_home')}}">Admin Panel</a></li>
        @endif
    </ul>
</div>
@endauth
