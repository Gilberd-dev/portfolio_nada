
@foreach($data as $row)
@extends('login.nav')
@endforeach

@section('admin')
<body>
<main id="main" class="main">
    <div class="container">
        <div class="row">
            <div class="pagetitle">
                <h1>Portfolio Project</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/login/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Portfolio Project</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Portfolio Project</h5>
                                <a href="/add_port"><button type="button" class="btn btn-warning rounded-pill">Add Portfolio</button></a>



                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Images</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Settings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($port_proj as $port)
                                        <tr>

                                            <th scope="row">{{ $port -> number }}</th>
                                            <td><img style="width: 50px;" src="/img/{{ $port -> port_images }}"></td>
                                            <td>{{ $port -> detail }}</td>
                                            <td>{{ $port -> kategori }}</td>
                                            <td>
                                                <a href="/login/edit_port/{{ $port -> id }}"><button type="button" class="btn btn-info rounded-pill">Edit</button></a>
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