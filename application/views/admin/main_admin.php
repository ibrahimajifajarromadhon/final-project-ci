<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HALAMAN TAMPIL ADMIN</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		table {
			border: solid 1px black;
			opacity: 0.9;
			border-collapse: collapse;
			border-spacing: 0;
			width: 45%;
			margin: 10px auto 10px auto;
		    }
	</style>

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
	          <a class="nav-link active" aria-current="page" href="<?php echo site_url('crud_admin'); ?>">Admin</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo site_url('crud_wisata'); ?>">Wisata</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo site_url('login'); ?>">Logout</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	
	<br>
	<h1 style="text-align: center; font-family: sans-serif;"><b>HALAMAN DATA ADMIN</b></h1>
	<br>
	<p style="text-align: center;"><a href="<?php echo site_url('crud_admin/tambah_admin'); ?>"><button class="btn btn-success" style="margin-top: -10px; margin-bottom: 5px;">[+Tambah Data Admin]</button></a></p>

	<table border="1" cellpadding="5" cellspacing="0" style="width: 55%; position: center; text-align: center;">
		<tr style="background: grey;">
			<th width="1">No.</th>
			<th width='80'>Username</th>
			<th width='80'>Password</th>
			<th width="70">Kelola</th>
		</tr>
		<?php $no=1; foreach($admin as $item) { 
		?>
		<tr>
			<td><b><?php echo $no; ?>.</b></td>
			<td hidden> <?php echo $item['id_admin']; ?></td>
			<td> <?php echo $item['username']; ?></td>
			<td> <?php echo $item['password']; ?></td>
			<td> <a class="btn btn-primary" href="<?php echo site_url('crud_admin/edit/'.$item['id_admin']); ?>">Edit</a> ||
				<a class="btn btn-danger" href="<?php echo site_url('crud_admin/hapus/'.$item['id_admin']); ?>" onclick="return confirm('Yakin Akan Menghapus Data Ini?')">Hapus</a>
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