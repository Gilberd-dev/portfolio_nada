
@foreach($data as $row)
@extends('login.nav')
@endforeach

@section('admin')
<body>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Experience & Certification</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/login/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Experience & Certification</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit</h5>

                        <!-- General Form Elements -->
                        <form action="/updateexp/{{ $edit -> id }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $edit -> exp_title }}" name="exp_title">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Year</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $edit -> exp_year }}" name="exp_year">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Place</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $edit -> exp_place }}" name="exp_place">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" style="height: 100px" name="exp_desc">{{ $edit -> exp_desc }}</textarea>
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