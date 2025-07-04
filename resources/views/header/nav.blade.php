<nav class="navbar">
    <div class="nav-left">
        <a href="{{ route('index') }}" class="nav-logo" class="{{ request()->routeIs('movies') ? 'active' : '' }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
        <a href="{{ route('movies') }}" class="{{ request()->routeIs('movies') ? 'active' : '' }}">Movies</a>
        <a href="{{ route('events') }}" class="{{ request()->routeIs('events') ? 'active' : '' }}">Events</a>
        <a href="{{ route('plays') }}" class="{{ request()->routeIs('plays') ? 'active' : '' }}">Plays</a>
        <a href="{{ route('sports') }}" class="{{ request()->routeIs('sports') ? 'active' : '' }}">Sports</a>
    </div>

    <div class="nav-search">
        <input type="text" placeholder="Search...">
    </div>

    <div class="nav-right">
        <a href="{{ route('notifications') }}" class="{{ request()->routeIs('notifications') ? 'active' : '' }}">🔔</a>
        <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'active' : '' }}">👤</a>
    </div>
</nav>
