@foreach($data as $row)
@extends('login.nav')
@endforeach

@section('admin')

<body>
    <main id="main" class="main">
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
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Portfolio Project</h5>

                            <!-- General Form Elements -->
                            <form action="/updateport/{{ $edit -> id }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Images</label>
                                    <img style="width: 150px;" src="/img/{{ $edit -> port_images }}" alt="Profile">
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="formFile" name="port_images">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Detail</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $edit -> detail }}" name="detail">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-9">
                                        <select name="kategori" class="form-control">
                                            <option value="{{ $edit->kategori }}">{{ $edit->kategori }}</option>
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

    </main><!-- End #main -->
</body>
@endsection

</html>