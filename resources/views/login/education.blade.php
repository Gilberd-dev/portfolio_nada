
@foreach($data as $row)
@extends('login.nav')
@endforeach

@section('admin')
<body>
<main id="main" class="main">
    <div class="container">
        <div class="row">
            <div class="pagetitle">
                <h1>Education</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/login/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Education</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Education</h5>
                                <a href="/add_edu"><button type="button" class="btn btn-warning rounded-pill">Add Education</button></a>



                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">School Name</th>
                                            <th scope="col">Year</th>
                                            <th scope="col">School Place</th>
                                            <th scope="col">Settings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($educate as $edu)
                                        <tr>
                                            <th scope="row">{{ $edu -> number }}</th>
                                            <td>{{ $edu -> school_name }}</td>
                                            <td>{{ $edu -> year }}</td>
                                            <td>{{ $edu -> school_place }}</td>
                                            <td>
                                                <a href="/login/edit_educate/{{ $edu -> id }}"><button type="button" class="btn btn-info rounded-pill">Edit</button></a>
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