<html>
<head>

<?php 
	include "module/header.php";
	include "module/alerts.php";
	include "connect.php"; 

	$sql = mysqli_query($main,"SELECT nim, nama, telefon, alamat FROM hunian WHERE nim = '".$_GET['nim']."'");
	$data = mysqli_fetch_array($sql);
?>
<style>
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
<body>

<div class="container">
<?php 
	include "module/nav.php"; 
?>
<div class="row">
	<center>
    <div class="col-lg-12">
        <h1>Pengubahan Data</h1>
    </div>
</center>
</div>

<div class="row">
	<div class="form-signin">
		<form id="form_input" method="POST">	
			<?php  
				if(isset($_POST['update'])){
					mysqli_query($main,"UPDATE hunian SET nama = '".$_POST['nama']."', telefon = '".$_POST['telefon']."', alamat = '".$_POST['alamat']."' WHERE nim = '".$_GET['nim']."'");
					writeMsg('update.sukses');

					$sql = mysqli_query($main,"SELECT nim, nama, telefon, alamat FROM hunian WHERE nim = '".$_GET['nim']."'");
					$data = mysqli_fetch_array($sql);
				}
			?>
			<center>
			<div class="form-group">
		  		<label class="control-label" for="nama">Nama</label>
		  		<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data['nama']; ?>" required>
			</div>

			<div class="form-group">
		  		<label class="control-label" for="telefon">Nomor Telefon</label>
		  		<input type="text" class="form-control" name="telefon" id="telefon" value="<?php echo $data['telefon']; ?>">
			</div>

			<div class="form-group">
		  		<label class="control-label" for="alamat" rows="4" cols=50>Alamat Hunian</label>
		  		<input type="text" class="form-control" name="alamat" id="alamat" required="" value="<?php echo $data['alamat']; ?>">
			</div>

			<div class="form-group">
			<input type="submit" value="Ubah" name="update" class="button" style="background-color: #008CBA; padding: 15px 32px">
			<a href="data.php" class="button" style="background-color: #f44336; padding: 15px 32px">Batal</a>
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