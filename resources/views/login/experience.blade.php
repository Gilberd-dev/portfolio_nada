
@foreach($data as $row)
@extends('login.nav')
@endforeach

@section('admin')
<body>
<main id="main" class="main">
    <div class="container">
        <div class="row">
            <div class="pagetitle">
                <h1>Experience & Certification</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/login/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Experience</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Experience</h5>
                                <a href="/add_exp"><button type="button" class="btn btn-warning rounded-pill">Add Experience</button></a>



                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Year</th>
                                            <th scope="col">Place</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Settings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($experience as $exp)
                                        <tr>
                                            <th scope="row">{{ $exp -> number }}</th>
                                            <td>{{ $exp -> exp_title }}</td>
                                            <td>{{ $exp -> exp_year }}</td>
                                            <td>{{ $exp -> exp_place }}</td>
                                            <td>{{ $exp -> exp_desc }}</td>
                                            <td>
                                                <a href="/login/edit_exp/{{ $exp -> id }}"><button type="button" class="btn btn-info rounded-pill">Edit</button></a>
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