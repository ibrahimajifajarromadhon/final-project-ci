<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HALAMAN PENGUNJUNG</title>

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
	          <a class="nav-link active" aria-current="page" href="<?php echo site_url('welcome_user'); ?>">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo site_url('welcome_aboutus'); ?>">AboutUs</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<br>
	<div style="margin-bottom: 390px; margin-top: 0px;">
		<div class="carousel-item active">
      <img src="<?php echo base_url('assets/images/gambar.jpg'); ?>" alt="Error" style="width: 100%; height: 405px; margin-bottom: 10px; margin-top: 0px;">
      <div class="carousel-caption" style="padding-top: 50px; padding-bottom: 100px; padding-left: 50px; padding-right: 50px;">
        <h1 style="font-family: Lucida Handwriting; ">EKSPLORASI WISATA DI INDONESIA</h1>
        <p style="padding-top:10px">Sebuah Website Berisi Rekomendasi Tempat Wisata Di Indonesia Terkini.</p>
      </div>
    </div>
	</div>
	<br>

	<hr>
	<b><h1 style=" margin-top: 5px; text-align: center; font-family: Segoe Script;">DAFTAR TEMPAT WISATA DI INDONESIA</b></h1>
	<br>
	<div class="container" style="margin-top:10px">
		<div class="row">
			<div class="col-sm-8">
			<?php foreach($wisata as $item) { 
			?>
			<h2><b><?php echo $item['judul']; ?></b></h2>
				<div>
					<a class="navbar-brand" href="index.php"><img style="width: 733px; height: 400px; border: 0px solid black; border-radius: 5px;" src="<?php echo base_url();?>./uploads/<?php echo $item['gambar']; ?>" style=" position: center; width: 98%; border: 0px solid black; border-radius: 5px;"></a>
				</div>
				<br>
				<p style="text-align: justify;"><?php echo $item['isi']; ?></p>
				<br>
			<?php
			}
			?>
			</div>

			<div class="col-sm-4" style="padding-left: 50px;">
					<h4 style="font-family: monospace sans-serif; padding-top: 12px;">Tempat Wisata Terbaru</h4>
					<div  style="font-family: sans-serif; color: deepskyblue; opacity: 100;">
						<a href="#" class="list-group-item list-group-itemaction" style="padding-top:13px;"><b> > Gunung Sumbing</b></a>
						<hr class="border border-1 opacity-100">
						<a href="#" class="list-group-item list-group-itemaction"><b> > Raja Ampat</b></a>
						<hr class="border border-1 opacity-100">
						<a href="#" class="list-group-item list-group-itemaction"><b> > Danau Toba</b></a>
						<hr class="border border-1 opacity-100">
						<a href="#" class="list-group-item list-group-itemaction"><b> > Candi Borobudur</b></a>
						<hr class="border border-1 opacity-100">
						<a href="#" class="list-group-item list-group-itemaction"><b> > Pantai Parangtritis</b></a>
						<hr class="border border-1 opacity-100">
				</div>
			</div>
			<!--end content 2-->
    	</div>
    </div>

    <!--start footer-->
	<footer class="py-5" style="width: 100%; height: 120px; background: grey;margin-bottom: 10px;">
		<div class="container">
			<p class="m-0 text-center text-white" style="padding: 0px">Copyright &copy; 2023 - EksplorID</p>
		</div>
	</footer>
	<!--end footer-->
</body>
</html>