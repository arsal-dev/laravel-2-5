<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>{{ $myData }}</h3>

    {{-- @php
        echo $myData;
    @endphp --}}

    {{-- @if (1 == 1)
        <p>{{ $myData }}</p>
    @elseif (2 == 1)
        <p>not true</p>
    @elseif (2 == 1)
        <p>not true</p>
    @else
        
    @endif --}}

    @dump($languages)

    {{-- @php
        print_r($languages);
    @endphp --}}

</body>

</html>
