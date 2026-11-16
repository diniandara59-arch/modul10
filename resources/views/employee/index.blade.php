<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('employees.index') }}" class="nav-link active">Employee List</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-10">
                <h4>{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-2">
                <ul class="list-inline mb-0 float-end">
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-outline-primary btn-sm me-2"><i class="bi bi-download me-1"></i> Download Excel</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-plus-circle me-1"></i> Create Employee</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Paijo</td>
                        <td>Kurniawan</td>
                        <td>paijo.kurniawan@gmail.com</td>
                        <td>20</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="#" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                                <form action="#" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-dark btn-sm"><i class="bi-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Budi</td>
                        <td>Santoso</td>
                        <td>budi.santoso@gmail.com</td>
                        <td>22</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="#" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                                <form action="#" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-dark btn-sm"><i class="bi-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
