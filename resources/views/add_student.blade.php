<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<!-- Nav-Bar Start -->
<nav class="navbar navbar-expand-lg" style="background-color: #cff4fc;">
    <div class="container-fluid">
        <a class="navbar-brand" href="">Page Changer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('view_student') }}">Student</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Nav-Bar End -->

<body class="text-info-emphasis">
    <form class="pt-5" method="POST" action="{{ route('insert_student') }}">
        @csrf
        <div class="d-flex justify-content-center">
            <div class="card w-50 bg-info-subtle text-info-emphasis">
                <div class="card-header">
                    <h2>Add Student Form</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name"
                            value="{{ old('first_name') }}">
                    </div>
                    @error('first_name')
                        <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name"
                            value="{{ old('last_name') }}">
                    </div>
                    @error('last_name')
                        <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age"
                            value="{{ old('age') }}">
                    </div>
                    @error('age')
                        <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label><br>
                        <input type="radio" class="btn-check" name="gender" id="male" value="1"
                            autocomplete="off" @if (old('gender') == 1) checked @endif>
                        <label class="btn" for="male">Male</label>

                        <input type="radio" class="btn-check" name="gender" id="female" value="2"
                            autocomplete="off" @if (old('gender') == 2) checked @endif>
                        <label class="btn" for="female">Female</label>

                        <input type="radio" class="btn-check" name="gender" id="other" value="3"
                            autocomplete="off" @if (old('gender') == 3) checked @endif>
                        <label class="btn" for="other">Other</label>
                    </div>
                    @error('gender')
                        <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label><br>
                        @foreach ($subjects as $subject)
                            <div class="form-check">
                                <input class="form-check-input" name="subject[]" type="checkbox"
                                    value="{{ $subject->id }}" id="{{ $subject->name }}">
                                <label class="form-check-label"
                                    for="{{ $subject->name }}">{{ $subject->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    @error('subject')
                        <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Birth Place</label><br>
                        <select class="form-select" style="width: 20%" name="city">
                            <option selected disabled>Select Any City</option>
                            @foreach ($citys as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('city')
                        <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                            {{ $message }}
                        </div>
                    @enderror
                    <a href="{{ route('view_student') }}"><button type="button"
                            class="btn btn-outline-secondary">Cancel</button></a>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
