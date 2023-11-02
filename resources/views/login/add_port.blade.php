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
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Portfolio Project</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->

                <section class="section">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Add Portfolio Project</h5>
                                    <!-- General Form Elements -->
                                    <form role="form" action="/tambah_port" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Images</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="file" id="formFile" name="port_images">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Detail</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="detail">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-3 col-form-label">Category</label>
                                            <div class="col-sm-9">
                                                <select name="kategori" class="form-control">
                                                    <option value="">Choose Category</option>
                                                    <option value="App">App</option>
                                                    <option value="Web">Web</option>
                                                    <option value="Project">Project</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit </button>
                                            </div>
                                        </div>

                                    </form><!-- End General Form Elements -->

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