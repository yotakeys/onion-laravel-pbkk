{{-- parent --}}
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | {{ $page }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@include('components.dashboard.navbar')
<div class="container-fluid mt-5 p-3">
    <div class="row">
        <div class="col-md-3 col-sidebar">
            @include('components.dashboard.sidebar')
        </div>
        <!-- Konten Utama -->
        <div class="col-md-9 col-content">
           @if(Session::get('status') != null)
                <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('status') }}</div>
            @endisset
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
            @yield('content')
        </div>
        <!-- Akhir Konten Utama -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
