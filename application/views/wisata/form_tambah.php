<!DOCTYPE html>
<html>
<head>
	<title>Halaman Menambahkan Tempat Wisata</title>

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
	<h1 style="text-align: center; font-family: sans-serif;">HALAMAN TAMBAH DATA WISATA</h1>
	<?php echo form_open_multipart('crud_wisata/aksi_simpan');?>
	<table cellpadding="8" style="border: 1px solid black; border-radius: 5px; width: 800px; position: center;">
		<tr>
			<td width="150"><b>Judul Tempat Wisata</b></td>
			<td><b>:</b></td>
			<td><input type="text" name="judul" size="60" style="font-family: sans-serif; font-size: 17px; width: 578px; height: 50px; border: 2px solid blue; border-radius: 5px;"></td>
		</tr>
		<tr>
			<td width="150"><b>Isi Tempat Wisata</b></td>
			<td><b>:</b></td>
			<td><textarea name="isi" rows="6" cols="60" style="font-family: sans-serif; font-size: 17px; height: 200px; width: 578px; border: 2px solid blue; border-radius: 5px;"></textarea></td>
			</tr>
		<tr>
		<tr>
			<td width="200"><b>Upload Gambar</b></td>
			<td><b>:</b></td>
			<td><input type="file" name="gambar">
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input class="reset" type="reset" value="reset" style="margin-left: 615px;">
				<input class="simpan" type="submit" name="simpan" value="simpan">
			</td>
		</tr>
	</table>
	<?php echo form_close();?>
	<!--end content 1-->
</body>
</html>


<?php echo form_open_multipart('crud_wisata/aksi_simpan');?>