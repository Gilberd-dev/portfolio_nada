
@foreach($data as $row)
@extends('login.nav')
@endforeach

@section('admin')
<body>
<main id="main" class="main">
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
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit</h5>

                        <!-- General Form Elements -->
                        <form action="/updateedu/{{ $edit -> id }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">School Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $edit -> school_name }}" name="school_name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Year</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $edit -> year }}" name="year">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">School Place</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $edit -> school_place }}" name="school_place">
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