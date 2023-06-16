<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GrowthSpace</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    

        <!-- Styles -->
        <link href="logreg/style.css" rel="stylesheet">
       
        
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100">
        
            <div class="container">
                <a class="navbar-brand" href="{{url ('/home')}}">GrowthSpace</a>
                
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav mx-auto">   
                            <a class="nav-link active mx-2" aria-current="page" href="{{url ('/home')}}">Beranda</a>
                            <a class="nav-link mx-2" href="{{ route('magang.lihat') }}">Info Magang</a>
                            <a class="nav-link mx-2" href="{{ route('profile.edit') }}">Lihat Profil</a>
                        </div>
                        <div>
                        
                           
                            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form><button class="button-secondary">LogOut</button></a>
                            
                        
                        </div>
                        
                    </div>
                    
                </div>
        </nav>

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            
                
            <!--hero section-->
<section id="hero">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-md-6 hero-tagline my-auto">
        <h1>Selamat Datang di GrowthSpace!</h1>
        <p>Website yang memudahkan kamu untuk mencari tempat Magang di Indonesia</p>
        <a href="{{ route('magang.lihat') }}"><button class="button-lg-primary">Temukan Magang</button></a>
        <a href="{{ route('magang.lihat') }}"><img clas="arrow" src="logreg/images/Vector.png"></a>
      </div>
    </div>

    <img src="logreg/images/magang.png" alt="" class="position-absolute end-0 bottom-0 img-hero">
    
  </div>
</section>

<!--kategori-->
<section id="kategori">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2>Kategori Magang</h2>
      </div>

      <div class="row mt-5">
        <div class="col-4">
          <div class="card me-3 position-relative">
            <img src="logreg/images/1.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>Work From Home</h5>
                <button>Jelajahi</button>
              </div>
            </div>
          </div>


        </div>

        <div class="col-4">
          <div class="card me-3 position-relative">
            <img src="logreg/images/5.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>Work From Office</h5>
                <button>Jelajahi</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card me-3 position-relative">
            <img src="logreg/images/3.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>Hybrid</h5>
                <button>Jelajahi</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>    
        </div>
    </body>
</html>
