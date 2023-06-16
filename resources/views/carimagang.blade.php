<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GrowthSpace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!--style-->
    <link href="logreg/style.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100">
        @if (Route::has('login'))
            <div class="container">
                <a class="navbar-brand" href="{{url ('/home')}}">GrowthSpace</a>
                @auth
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                @else
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav mx-auto">   
                            <a class="nav-link active mx-2" aria-current="page" href="{{url ('/home')}}">Beranda</a>
                            <a class="nav-link mx-2" href="#">Info Magang</a>
                            <a class="nav-link mx-2" href="#">Lihat Profil</a>
                        </div>
                        <div>
                        
                            <a href="{{route('login')}}"><button class="button-primary">Masuk</button></a>
                            @if (Route::has('register'))
                            <a href="{{route('register')}}"><button class="button-secondary">Daftar</button></a>
                            @endif
                        @endauth
                        </div>
                        @endif
                    </div>
                    
                </div>
            </nav>


<!--search bar-->
<section id="search" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2>Temukan tempat magangmu</h2>
        <p>Nothing to find hehet</p>
      </div>
      <div class="col-10 mx-auto mt-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Magang</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Kota</button>
        </li>
    </ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="input-group input-cari mb-3">
        <input type="text" class="form-control" placeholder="Cari lowongan magang" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="button-primary" type="button" id="button-addon2">Cari</button>
    </div>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="input-group input-cari mb-3">
        <input type="text" class="form-control" placeholder="Cari Kota Magang" aria-label="Cari lowongan, jenis magang" aria-describedby="button-addon2">
        <button class="button-primary" type="button" id="button-addon2">Cari</button>
    </div>
  </div>
</div>
</div>
    </div>
  </div>
</section>

<section id="terbaru" class="mt-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2>Lowongan Magang</h2>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-start">
                        <div class="card-body me-3 text-center">
                          <div class="position-relative top-50 start-50 translate-middle">
                          <h4>Magang United Tractor</h4>
                            <p>Staf Administrasi
                                Perum Lembaga Penyelenggara Pelayanan Navigasi 
                                Penerbangan Indonesia • Kota Tangerang</p>
                            <button class="button-magang">Selengkapnya</button>
                          </div>
                        </div>

                        <div class="card-body me-3">
                          <div class="position-relative top-50 start-50 translate-middle">
                          <h4>Magang United Tractor</h4>
                            <p>Staf Administrasi
                                Perum Lembaga Penyelenggara Pelayanan Navigasi 
                                Penerbangan Indonesia • Kota Tangerang</p>
                            <button  class="button-magang">Selengkapnya</button>
                          </div>
                        </div>

                        <div class="card-body me-3">
                          <div class="position-relative top-50 start-50 translate-middle">
                          <h4>Magang United Tractor</h4>
                            <p>Staf Administrasi
                                Perum Lembaga Penyelenggara Pelayanan Navigasi 
                                Penerbangan Indonesia • Kota Tangerang</p>
                            <button class="button-magang">Selengkapnya</button>
                          </div>
                        </div>

                        
                    </div>
                </div>
</div>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>