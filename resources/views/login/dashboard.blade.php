

@foreach($data as $row)
@extends('login.nav')
@section('admin')


<body>
    <main id="main" class="main">
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="/img/{{ $row -> foto_profil }}" alt="Profile" class="rounded-circle">
              <h2> Nada Bakara </h2>
              
              <h3>Owner</h3>
              <div class="social-links mt-2">
                <a href="https://www.facebook.com/nada.bakara.7" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/nada_bakara/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/nada-bakara-941465294/" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Tentang</h5>
                  <p class="small fst-italic">Takut akan Tuhan adalah kunci kesuksesan</p>

                  <h5 class="card-title">Profile Admin</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                    <div class="col-lg-9 col-md-8">Nada Bakara</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">No. Telp</div>
                    <div class="col-lg-9 col-md-8">{{ $row -> no_hp }}</div>
                  </div>
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form  role="form" action="/edit_profile/{{ $row->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto Profil</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="/img/{{ $row -> foto_profil }}" alt="Profile">
                        <div class="pt-2">
                          <input class="form-control" type="file" id="formFile" name="foto_profil">
                          <!-- </div> -->
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">No. Telp</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="no_hp" type="text" class="form-control" id="Phone" value="{{ $row -> no_hp }}">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->
 
                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>


    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

</html>

@endforeach
@endsection