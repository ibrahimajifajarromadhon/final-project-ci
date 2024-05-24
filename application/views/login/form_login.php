<!DOCTYPE html>
<html lang="en">
<head>
    <title>HALAMAN LOGIN</title>

    <!--memanggil bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!--memanggil bootstrap-->

    <!--start css-->
    <style>
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1{
            font-size: 30px;
            margin-bottom: 20px;
            font-family: sans-serif;
        }
        form{
            border: solid 1px blue;
            padding: 20px;
            width: 500px;
            border-radius: 10px;
        }
    </style>
    <!--end css-->

</head>
    <?php
        if($this->session->flashdata('error'))
        {
            echo $this->session->flashdata('error');
        }?>
	<!--start content 1-->
    <div class="container">
        <form name="formDaftar" action="<?php echo site_url('login/aksi_login'); ?>" method="post" onsubmit="return loginValidasi()">
            <h1><b>LOGIN ADMIN</b></h1>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username" class="form-control" >
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control" >
            </div>
            <button type="submit" name="Login" class="btn btn-primary">Login</button>
        </form>
    </div>
    <!--end content 1-->

    <!--memanggil bootsrap dan jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" 
    integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<!--memanggil bootsrap dan jquery-->

	<!--melakukan validasi username dan password-->
    <script>
        function loginValidasi() {
            if (document.forms["formDaftar"]["username"].value == "") {
                alert("Username Tidak Boleh Kosong!");
                document.forms["formDaftar"]["username"].focus();
                return false;
            }
            if (document.forms["formDaftar"]["password"].value == "") {
                alert("Password Tidak Boleh Kosong");
                document.forms["formDaftar"]["password"].focus();
                return false;
            }
        }
    </script>
    <!--melakukan validasi username dan password-->
    
</body>
</html>