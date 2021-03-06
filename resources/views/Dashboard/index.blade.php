<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
	<title>Roomies</title>

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="{{asset('rooms/css/bootstrap.min.css')}}">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="{{asset('rooms/css/animate.min.css')}}">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="{{asset('rooms/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('rooms/css/ionicons.min.css')}}">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="{{asset('rooms/css/style.css')}}">

	<!-- Google web font 
   ================================================== -->	
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('rooms/images/image.png')}}">
</head>
<body>


<!-- Preloader section
================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section
================================================== -->

              {{--  --}}
    
<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <a href="">Roomies</a>
              </div>

               <div class="brands">
                  {{-- <form class="form-inline my-2 my-lg-0">
                     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                   </form> --}}
                  <a href="/">Profile</a> 
               </div>

              <center>
               <div class="brandmenu">
                 <ul class="filter-wrappersz clearfix">
                   <li><a href="/find" class="selected opc-main-bg">Find Yours</a></li>
                   <li><a href="/blog" class="opc-main-bg">Blog</a></li>
                   <li><a href="/promotion" class="opc-main-bg">Promotion</a></li>
              </div>
              </center>

            </div>
         </div>
      </div>

   </nav>
</div>

<!-- Header section
================================================== -->
<section id="header" class="header-one">
	<div class="container">
      {{-- pencarian --}}
      <form method="POST" action="">
         <div class="row mb-3">
            {{-- <img src="{{url('rooms/images/dra.jpg')}}" class="img-responsive" alt="Portfolio"> --}}
           <div class="col-sm-8">
               <div class="form-group">
                   <input type="text" placeholder="Lokasi" name="lokasi" id="lokasi" class="form-control">
               </div>
           </div>
           <div class="col-sm-3">
            <div class="form-group">
                <select name="kategori" id="kategori" class="form-control">
                    <option value="">Kategori Ruangan</option>
                    <option value="Ruang Meeting">Ruang Meeting</option>
                    <option value="Ruang Pertemuan">Ruang Pertemuan</option>
                    <option value="Ruang Perjamuan">Ruang Perjamuan</option>
                </select>
            </div>
        </div>
           <div class="col-sm-0">
               <button id="search" name="search" class="btn btn-warning">Temukan</button>
           </div>
       </div>
    </form>
    <br>
    {{-- end --}}
		<div class="row">
			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeIn" data-wow-delay="1.6s">Our Rooms</h1>
              <h3 class="wow fadeInUp" data-wow-delay="1.9s">Request Service You Needed</h3>
          </div>
			</div>

		</div>
	</div>		
</section>


<!-- Portfolio section
================================================== -->
<section id="portfolio">
   <div class="container">
      <div class="row">

         <div class="col-md-12 col-sm-12">
            
               <!-- iso section -->
               <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">

                  <ul class="filter-wrapper clearfix">
                           <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                           <li><a href="#" class="opc-main-bg" data-filter=".graphic">Graphic</a></li>
                           <li><a href="#" class="opc-main-bg" data-filter=".template">Web template</a></li>
                           <li><a href="#" class="opc-main-bg" data-filter=".photoshop">Photoshop</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".branding">Branding</a></li>
                        </ul>

                        <!-- iso box section -->
                        <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
                           <div class="iso-box-wrapper col4-iso-box">

                              <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="{{url('rooms/images/portfolio-img1.jpg')}}" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                <h2>Project One</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box graphic template col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="{{url('rooms/images/portfolio-img2.jpg')}}" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                <h2>Project Two</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box template graphic col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="{{url('rooms/images/portfolio-img3.jpg')}}" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                <h2>Project Three</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box graphic template col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="{{url('rooms/images/portfolio-img4.jpg')}}" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                <h2>Project Four</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="{{url('rooms/images/portfolio-img5.jpg')}}" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                <h2>Project Five</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box graphic branding col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="{{url('rooms/images/portfolio-img6.jpg')}}" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                <h2>Project Six</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                            </div>
                        </div>

               </div>

         </div>

      </div>
   </div>
</section>

<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2016 Your Company Name - Designed by Tooplate</p>
				<ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
					<li><a href="#" class="fa fa-behance"></a></li>
					<li><a href="#" class="fa fa-google-plus"></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>


<!-- Javascript 
================================================== -->
<script src="{{asset('rooms/js/jquery.js')}}"></script>
<script src="{{asset('rooms/js/bootstrap.min.js')}}"></script>
<script src="{{asset('rooms/js/isotope.js')}}"></script>
<script src="{{asset('rooms/js/imagesloaded.min.js')}}"></script>
<script src="{{asset('rooms/js/wow.min.js')}}"></script>
<script src="{{asset('rooms/js/custom.js')}}"></script>

</body>
</html>