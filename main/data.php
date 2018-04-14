<html>
<head>

<?php 
	include "module/header.php";
	include "module/alerts.php";
	include "connect.php"; 

	$sql = mysqli_query($main,"SELECT nim, nama, telefon, alamat FROM hunian ORDER BY nama DESC");
?>

<style>
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

<script type="text/javascript">
	window.apex_search = {};	
	apex_search.init = function (){
		this.rows = document.getElementById('data').getElementsByTagName('TR');
		this.rows_length = apex_search.rows.length;
		this.rows_text =  [];
		for (var i=0;i<apex_search.rows_length;i++){
	        this.rows_text[i] = (apex_search.rows[i].innerText)?apex_search.rows[i].innerText.toUpperCase():apex_search.rows[i].textContent.toUpperCase();
		}
		this.time = false;
	}
	apex_search.lsearch = function(){
		this.term = document.getElementById('S').value.toUpperCase();
		for(var i=0,row;row = this.rows[i],row_text = this.rows_text[i];i++){
			row.style.display = ((row_text.indexOf(this.term) != -1) || this.term  === '')?'':'none';
		}
		this.time = false;
	}
	apex_search.search = function(e){
	    var keycode;
	    if(window.event){keycode = window.event.keyCode;}
	    else if (e){keycode = e.which;}
	    else {return false;}
	    if(keycode == 13) { apex_search.lsearch(); } else { return false; }
	}
</script>
</head>

<body onload="apex_search.init();">
<div class="container">
<?php include "module/nav.php"; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Data Hunian</h1>
        </div>
    </div>
</div>

<p>
<div class="row">
<div class="col-lg-4">
    <div class="input-group">
	<input type="text" size="30" class="form-control" maxlength="1000" value="" id="S" onkeyup="apex_search.search(event);" />
	<span class="input-group-btn">
	<input type="button" class="btn btn-default" value="Search" onclick="apex_search.lsearch();"/>
	</span>
	</div>
</div>
</div>

<br>

<div class="row">
	<div class="col-md-12">
	<p>
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					
					<th>NIM</th>
					<th>NAMA</th>
					<th>TELEFON</th>
					<th>ALAMAT</th>
					<th width="15%"><center>INSTRUKSI</center></th>
				</tr>
			</thead>
			<tbody id="data">
			<?php 
				$no=1; while ($row = mysqli_fetch_array($sql)) { 
			?>
				<tr>
					<td><?php echo $row['nim']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['telefon']; ?></td>
					<td><?php echo $row['alamat']; ?></td>
					<td align="center">
					<a href="ubah.php?nim=<?php echo $row['nim']; ?>">Ubah</a> 
					| 
					<a href="hapos.php?nim=<?php echo $row['nim']; ?>" onclick ="if (!confirm('Apakah Anda yakin akan menghapus data hunian ini?')) return false;">Hapus</a>
					</td>
				</tr>
			<?php 
				$no++; } 
			?>	
			</tbody>
		</table>
	</p>	
	<input type="button" value="Input Data" name="simpan" class="buttonBlue" style="background-color: #008CBA; padding: 15px 32px" onclick="window.location.href='input.php'">
	</div>
</div>	

</div>
<?php 
	include "module/footer.php"; 
?>
</body>
</html>
