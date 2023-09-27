<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-dark bg-gradient fs-5">
<div class="container">
    <div class="position-absolute top-50 start-50 translate-middle bg-info bg-gradient rounded">
        <form method="POST" action="{{route('form')}}" class="p-3" enctype="multipart/form-data">
            @csrf
            <div class="text-center">
                This is a normal form
            </div>
            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                @error('email')
                <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                @error('password')
                <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                @error('name')
                <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="float">2.50 < x < 99.99</label>
                <input type="text" class="form-control" id="float" placeholder="50.00" name="float">
                @error('float')
                <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @error('image')
                <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                @enderror
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</div>
</body>

</html>
