<!DOCTYPE html>
<html>
<head>
    <title>BookMeroShow </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav class="navbar">
    <div class="nav-left">
        <a href="{{ route('index') }}" class="nav-logo">
          <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
        <a href="{{ route('movies') }}">Movies</a>
        <a href="{{ route('events') }}">Events</a>
        <a href="{{ route('plays') }}">Plays</a>
        <a href="{{ route('sports') }}">Sports</a>
    </div>

    <div class="nav-search">
        <input type="text" placeholder="Search...">
    </div>

    <div class="nav-right">
        <a href="{{ route('notifications') }}">🔔</a>
        <a href="{{ route('profile') }}">👤</a>
    </div>
</nav>
<h1>Welcome to BookMeroShow </h1>
<p>Browse featured movies and events!</p>

<footer>
    <p>&copy; <?php echo date('Y'); ?> BookMeroShow </p>
</footer>
</body>
</html>
