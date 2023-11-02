
@foreach($data as $row)
@extends('login.nav')
@endforeach

@section('admin')
<body>
<main id="main" class="main">
    <div class="container">
        <div class="row">
            <div class="pagetitle">
                <h1>What I do?</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/login/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">What I Do</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">What I Do?</h5>
                                <a href="/add_doing"><button type="button" class="btn btn-warning rounded-pill">Add</button></a>



                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Settings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($doings as $do)
                                        <tr>
                                            <th scope="row">{{ $do -> number }}</th>
                                            <td>{{ $do -> title }}</td>
                                            <td>{{ $do -> description }}</td>
                                            <td>
                                                <a href="/login/edit_doings/{{ $do -> id }}"><button type="button" class="btn btn-info rounded-pill">Edit</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            <!-- End Table with stripped rows -->
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
</body>
@endsection

</html>
