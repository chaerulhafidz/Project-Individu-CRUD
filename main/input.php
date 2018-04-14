<html>

<head>

<?php 
	include "module/header.php";
	include "module/alerts.php";
	include "connect.php"; 
?>


<style>
	body {
  		padding-top: 20px;
  		padding-bottom: 20px;
  		background: url(backg.jpeg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	.navbar {
  		margin-bottom: 20px;
	}
	.form-signin {
      background-color: #FFFFFF;
      margin: 5;
      position: absolute;
      left: 50%;
      transform: translate(-50%);
    }
    input[type="text"]{
    	width: 500;
    	grid-auto-rows: 
    }
</style>

</head>

<body background="backg.jpeg">

<div class="container">

<?php 
	include "module/nav.php"; 
?>

<div class="row">
	<center>
    <div class="col-lg-12">
         <h1>Input Data</h1>
    </div>
</center>
</div>

<div class="row">
	<div class="form-signin">
		<form id="form_input" method="POST">	
			<?php
				if(isset($_POST['simpan'])){
					mysqli_query($main,"INSERT INTO hunian (nim, nama, telefon, alamat) VALUES ('".$_POST['nim']."','".$_POST['nama']."','".$_POST['telefon']."','".$_POST['alamat']."')");
					writeMsg('penyimpanan.sukses');
				}
			?>
			<center>
			<div class="form-group">
		  		<label class="control-label" for="nim">NIM</label>
		  		<input type="text" class="form-control" name="nim" id="nim" required maxlength="11">
			</div>

			<div class="form-group">
		  		<label class="control-label" for="nama">Nama</label>
		  		<input type="text" class="form-control" name="nama" id="nama" required>
			</div>

			<div class="form-group">
		  		<label class="control-label" for="telefon">Nomor Telefon</label>
		  		<input type="text" class="form-control" name="telefon" id="telefon">
			</div>

			<div class="form-group">
		  		<label class="control-label" for="alamat" rows="4" cols=50>Alamat Hunian</label>
		  		<input type="text" class="form-control" name="alamat" id="alamat" required="">
			</div>

			<div class="form-group">
				<input type="submit" value="Simpan" name="simpan" class="button" style="background-color: #008CBA; padding: 15px 32px">
				<input type="reset" value="Reset" class="button" style="background-color: #f44336; padding: 15px 32px">
			</div>
		</center>
		</form>
	</div>
</div>

</div>
<?php 
	include "module/footer.php"; 
?>

</body>
</html>