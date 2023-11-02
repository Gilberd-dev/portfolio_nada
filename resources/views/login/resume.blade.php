
@foreach($data as $row)
@extends('login.nav')
@endforeach

@section('admin')
@foreach ($edit as $edit_res)
<body>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Resume & Summary</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/login/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Resume & Summary</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Resume & Summary</h5>

                        <!-- General Form Elements -->
                        <form action="/updateres/{{ $edit_res -> id }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Resume Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" style="height: 100px" name="res_description">{{ $edit_res -> res_description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Summary</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" style="height: 100px" name="summary">{{ $edit_res -> summary }}</textarea>
                                    
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $edit_res -> res_city }}" name="res_city">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $edit_res -> res_no }}" name="res_no">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $edit_res -> res_email }}" name="res_email">
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
@endforeach
@endsection
</html>