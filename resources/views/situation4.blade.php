<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->

  <link href="/css/bootstrap.css" rel="stylesheet">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title></title>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="">
            <span>
              Losowe sytuacje w sims 4
            </span>
          </a>

        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>



  <!-- about section -->

  <section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="design-box">

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Wylosuj zabawną sytuację do wykonania w grze:
              </h2>
            </div>
            <div class="nextLos">
                <a href="situation4">
                  Wylosuj następną!
                </a>
              </div>
              <h1>{{$situation['name']}}</h1>
            <p>
              {{-- @if ({{}})
                  
              @else
                  
              @endif --}}
                {{$situation['description']}}
                {{-- {{$entriesSit}} --}}
            </p>
            
          </div>
          <span><h2>Bonus</h2>
            <p>{{$situation['bonus']}}</p></span>
        </div>
        <div class="col-md-6">
          <div class="img-box">

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>