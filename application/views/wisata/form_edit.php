<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Tempat Wisata</title>

	<!--start css-->
	<style type="text/css">
		.simpan{
			font-family: sans-serif;
			font-size: 13px;
			background: #22a4cf;
			color: white;
			border: white 3px solid;
			border-radius: 8px;
			padding: 12px 20px;
			margin-top: 5px;
		}
		.simpan:hover{
			opacity:0.9;
		}
		.reset{
			font-family: sans-serif;
			font-size: 13px;
			background: red;
			color: white;
			border: white 3px solid;
			border-radius: 8px;
			padding: 12px 20px;
			margin-top: 5px;
		}
		.reset:hover{
			opacity:0.9;
		}
		table {
		    border: solid 1px black;
		    opacity: 0.9;
		    border-collapse: collapse;
		    border-spacing: 0;
		    width: 90%;
		    margin: 10px auto 10px auto;
	    }
	</style>
	<!--end css-->

</head>
<body>
	<!--start content 1-->
	<h1 style="text-align: center; font-family: sans-serif;">HALAMAN EDIT DATA WISATA</h1>
	<form action="<?php echo site_url('crud_wisata/aksi_edit'); ?>" method="POST" enctype="multipart/form-data">
		<table cellpadding="8" style="border: 1px solid black; border-radius: 5px; width: 800px; position: center;">
			<tr>
				<td width="150"><b>Judul Tempat Wisata</b></td>
				<td><b>:</b></td>
				<td>
					<input type="hidden" name="id" value="<?php echo $wisata['id']; ?>"> 
					<input type="text" name="judul" size="50" value="<?php echo $wisata['judul']; ?>" style="font-family: sans-serif; font-size: 17px; width: 578px; height: 50px; border: 2px solid blue; border-radius: 5px;"></td>
			</tr>
			<tr>
				<td width="150"><b>Isi Tempat Wisata</b></td>
				<td><b>:</b></td>
				<td><textarea name="isi" rows="6" cols="45" style="font-family: sans-serif; font-size: 17px; height: 200px; width: 578px; border: 2px solid blue; border-radius: 5px;"><?php echo $wisata['isi']; ?></textarea>
				</td>
			</tr>
			<tr>
				<td width="200"><b>Upload Gambar</b></td>
				<td><b>:</b></td>
				<td><input type="file" value="<?php echo $wisata['gambar']; ?>" name="gambar">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<input class="reset" type="reset" value="reset" style="margin-left: 615px;">
					<input class="simpan" type="submit" name="simpan" value="simpan">
				</td>
			</tr>
	</table>
	</form>
	<!--end content 1-->
</body>
</html>
