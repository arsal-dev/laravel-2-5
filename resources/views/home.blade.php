<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>home</h3>
    {{-- @dump($data) --}}
    {{-- <p>{{ $data }}</p> --}}


    @php

    @endphp

    <ul>
        @foreach ($data as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>

</html>
