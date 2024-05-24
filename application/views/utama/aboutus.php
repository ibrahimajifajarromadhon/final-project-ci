<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HALAMAN ABOUT US</title>
	  <!--start css-->
  <style type="text/css">
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
    }

    html {
      box-sizing: border-box;
    }
    *, *:before, *:after {
      box-sizing: inherit;
    }

    .column {
      float: center;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }

    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #474e5d;
      color: white;
    }

    .container {
      padding: 0 16px;
    }

    .container::after, .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: grey;
    }

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 10px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
		  margin-top: 20px;
		  position: relative;
		  top: 50%;
		  left: 50%;
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
      width: 1100px;
      border-radius: 5px;
    }

    .button:hover {
      background-color: #555;
    }
  </style>
  <!--end css-->

		<!--start pemanggilan bootstrap-->
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  	<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  	<!--end pemanggilan bootstrap-->

</head>
<body class="p-1 m-0 border-0 bd-example">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: -24px; ">
	  <div class="container-fluid">
	  	<a class="navbar-brand" href="<?php echo site_url('welcome_user'); ?>" style="padding-top: 5px;" ><b>EksplorID</b></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarText">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="<?php echo site_url('welcome_user'); ?>">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" href="<?php echo site_url('welcome_aboutus'); ?>">AboutUs</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<br>

	<!--start judul aboutus-->
<div class="about-section" style="width: 100%; padding-top: 30px; padding-bottom: 30px;">
  <h1>About Us Page</h1>
  <br>
  <p>Kami adalah mahasiswa prodi Sistem Informasi dari Universitas Amikom Yogyakarta. Kami membuat website yaitu yang bertujuan memberikan informasi tentang berbagai tempat wisata yang terkenal dan terbaru, khususnya di negara Indonesia.</p>
</div>
<!--end judul aboutus-->

<!--start isi aboutus-->
<div class="row" style="width: 100%;">
      <img src="<?php echo base_url('assets/images/aboutus.jpg'); ?>" alt="Error" style="padding-top: 30px; padding-bottom: 10px; width: 1000px; height: 700px; display: block; margin-left: auto; margin-right: auto;">
      <div class="container">
      	<h3 style="text-align: center; display: block; margin-left: auto; margin-right: auto;">Luh Ajeng Roro Mangli				| 21.12.2193</h3>
        <h3 style="text-align: center;">Ibrahim Aji Fajar Romadhon	| 21.12.2201</h3>
        <h3 style="text-align: center;">Rio Valdi Pratama						| 21.12.2205</h3>
        <h3 style="text-align: center;">Muhammad Yulianto Nugroho		| 21.12.2250</h3>
        <p class="title" style="text-align: center;">Mahasiswa</p>
        <p style="text-align: center;">Website yang kami buat ini adalah sebuah website yang memberikan informasi tentang berbagai tempat wisata, khususnya di Indonesia.</p>
        <p><a href="#"><button class="button" style="margin-right: 100px;">Contact Us</button></a></p>
      </div>
    </div>
<!--end isi aboutus-->

    <!--start footer-->
	<footer class="py-5" style="width: 100%; height: 120px; background: grey;margin-bottom: 10px;">
		<div class="container">
			<p class="m-0 text-center text-white" style="padding: 0px">Copyright &copy; 2023 - EksplorID</p>
		</div>
	</footer>
	<!--end footer-->
</body>
</html>