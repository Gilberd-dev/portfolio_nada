@foreach($data as $row)
@extends('login.nav')
@endforeach

@section('admin')

<body>
    <main id="main" class="main">
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
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Skill</h5>

                            <!-- General Form Elements -->
                            <form action="/updateskill/{{ $edit -> id }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $edit -> name }}" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Rate</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $edit -> rate }}" name="rate">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-9">
                                        <select name="kategori" class="form-control">
                                            <option value="{{ $edit->kategori }}">{{ $edit->kategori }}</option>
                                            <option value="Programming">Programming</option>
                                            <option value="Soft">Soft Skill</option>
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