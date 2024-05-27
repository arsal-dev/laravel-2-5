<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <h3 class="text-center mt-5">add new teacher</h3>

    <div class="container">
        <form action="{{ route('teacher.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                    class="form-control @error('name')
                        is-invalid
                    @enderror">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="email">email</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}"
                    class="form-control @error('email')
                is-invalid
            @enderror">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="phone">phone</label>
                <input type="number" name="phone" id="phone" value="{{ old('phone') }}"
                    class="form-control @error('phone')
                is-invalid
            @enderror">
                @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="address">address</label>
                <textarea name="address" id="address" cols="30" rows="10"
                    class="form-control @error('address')
                is-invalid
            @enderror">{{ old('address') }}</textarea>
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <input type="submit" class="btn btn-primary mt-3">
        </form>
    </div>
</body>

</html>
