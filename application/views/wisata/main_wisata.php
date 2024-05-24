<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HALAMAN TAMPIL WISATA</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body class="p-1 m-0 border-0 bd-example">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container-fluid">
	  	<a class="navbar-brand" href="<?php echo site_url('crud_admin'); ?>" style="padding-top: 5px;" ><b>EksplorID</b></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarText">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="<?php echo site_url('crud_admin'); ?>">Admin</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" href="<?php echo site_url('crud_wisata'); ?>">Wisata</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo site_url('login'); ?>">Logout</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<br>
	<h1 style="text-align: center; font-family: sans-serif;"><b>HALAMAN DATA WISATA</b></h1>
	<br>
	<p style="text-align: center;"><a href="<?php echo site_url('crud_wisata/tambah_wisata'); ?>"><button class="btn btn-success" style="margin-top: -10px; margin-bottom: 5px;">[+Tambah Data Wisata]</button></a></p>

	<table border="1" cellpadding="5" cellspacing="0" style="margin-left: 15px; width: 98%; position: center; text-align: center; ">
		<tr style="background: grey;">
			<th width='5'>No.</th>
			<th width='150'>Judul Wisata</th>
			<th width='420'>Isi Wisata</th>
			<th width='420'>Gambar</th>
			<th width="150">Kelola</th>
		</tr>
		<?php $no=1; foreach($wisata as $item) { 
		?>
		<tr>
			<td><b> <?php echo $no; ?>.<b></td>
			<td hidden> <?php echo $item['id']; ?></td>
			<td><b> <?php echo $item['judul']; ?></b></td>
			<td style="text-align: justify;"> <?php echo $item['isi']; ?></td>
			<td>
				<img src="<?php echo base_url();?>./uploads/<?php echo $item['gambar']; ?>" style=" position: center; width: 98%; border: 0px solid black; border-radius: 5px;">
			</td>
			<td> <a class="btn btn-primary" href="<?php echo site_url('crud_wisata/edit/'.$item['id']); ?>">Edit</a> ||
				<a class="btn btn-danger" href="<?php echo site_url('crud_wisata/hapus/'.$item['id']); ?>" onclick="return confirm('Yakin Akan Menghapus Data Ini?')">Hapus</a>
			</td>
		</tr>
		<?php
			$no++;
		}
		?>
	</table>

	<!--start footer-->
	<footer class="py-5" style="width: 100%; height: 120px; background: grey;margin-bottom: 10px; margin-top: 120px;">
		<div class="container">
			<p class="m-0 text-center text-white" style="padding: 0px">Copyright &copy; 2023 - EksplorID</p>
		</div>
	</footer>
	<!--end footer-->
</body>
</html>