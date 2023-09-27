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
            @foreach($results as $key => $result)
            @if ($loop->last)
            <img src="{{ url($result) }}" style="height: 300px;width:300px;">
            @endif
            <div class="p-1">
                <a>
                    {{ $key }} = {{ $result }}
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
