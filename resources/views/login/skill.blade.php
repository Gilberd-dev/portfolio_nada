
@foreach($data as $row)
@extends('login.nav')
@endforeach

@section('admin')
<body>
<main id="main" class="main">
    <div class="container">
        <div class="row">
            <div class="pagetitle">
                <h1>Skill</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/login/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Skill</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Skill</h5>
                                <a href="/add_skill"><button type="button" class="btn btn-warning rounded-pill">Add Skill</button></a>



                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Rate</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Settings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($skills as $skill)
                                        <tr>
                                            <th scope="row">{{ $skill -> number }}</th>
                                            <td>{{ $skill -> name }}</td>
                                            <td>{{ $skill -> rate }}</td>
                                            <td>{{ $skill -> kategori }}</td>
                                            <td>
                                                <a href="/login/edit_skill/{{ $skill -> id }}"><button type="button" class="btn btn-info rounded-pill">Edit</button></a>
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