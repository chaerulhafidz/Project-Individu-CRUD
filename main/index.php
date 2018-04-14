<html>

<head>

<?php 
	include "module/header.php";
	include "module/alerts.php";
	include "connect.php"; 
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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
  	.img-wrap {
  		width: 1801px;
  		height: 508px;
  		position: relative;
  		display: inline-block;
 		overflow: hidden;
  		margin: 0;
	}

	div > img {
	  	display: block;
	  	position: absolute;
	  	top: 50%;
	  	left: 33%;
	  	min-height: 100%;
	  	min-width: 100%;
	  	transform: translate(-50%, -50%);
	}
	.button { 
	    border: none;
	    color: white;
	    padding: 15px 32px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;
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
		<h1> Selamat Datang di Data Hunian Mahasiswa</h1>
		<font size="4">
			Website ini menyimpan data huni mahasiswa/i IPB<br>
			Silahkan memilih<br>
			<br>
		</font>
		<div class="form-group">
			<input type="button" value="Input Data" name="simpan" class="buttonBlue" style="background-color: #008CBA; padding: 15px 32px" onclick="window.location.href='input.php'">
			<input type="button" value="List Data" class="button" style="background-color: #e7e7e7; color: black; padding: 15px 32px" onclick="window.location.href='data.php'">
		</div>
		
	</center>
	<div class="img-wrap">
		<img src="icon.png" align="center">
	</div>
</div>

</div>
<?php 
	include "module/footer.php"; 
?>

</body>
</html>