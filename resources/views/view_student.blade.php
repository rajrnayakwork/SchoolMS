<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

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
                        <a class="nav-link active" aria-current="page" href="">Student</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nav-Bar End -->

    <div class="main pt-5">
        <div class="d-flex justify-content-center">
            <a href="{{ route('add_student') }}"><button type="button" class="btn btn-outline-dark">Add
                    Student</button></a>
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <h4>Students</h4>
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <table class="table w-50">
                <thead class="table-info">
                    <tr>
                        <th scope="col">Sr.No</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Birth Place</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($students as $index => $student)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $student->firstname }}</td>
                            <td>{{ $student->lastname }}</td>
                            <td>{{ $student->age }}</td>
                            @switch($student->gender)
                                @case(1)
                                    <td>Male</td>
                                @break

                                @case(2)
                                    <td>Female</td>
                                @break

                                @case(3)
                                    <td>Other</td>
                                @break
                            @endswitch
                            <td>{{ $student->city }}</td>
                            <td>
                                <a href="{{ route('edit_student', [$student->id]) }}"><button type="button"
                                        class="btn btn-outline-success">Edit</button></a>
                                <a href="{{ route('delete_student', [$student->id]) }}"><button type="button"
                                        class="btn btn-outline-danger">Delete</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- JS Start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- JS End -->
</body>

</html>
