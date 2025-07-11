<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.header.head')
</head>
<body>
    @include('admin.dashboard.sidebar')
    @include('admin.header.navbar')

    <div class="content">
        @yield('content') 
    </div>

    @include('admin.footer.footer')
</body>
</html>
