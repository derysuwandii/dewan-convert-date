<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Convert Date Indonesia - www.dewankomputer.com</title>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-primary">
	  <a class="navbar-brand text-white" href="index.php">
	    Dewan Komputer
	  </a>
	</nav>
	<?php include 'lib.php'; ?>
	<div class="container">
		<h2 align="center" style="margin: 30px;">Convert Date Database ke Tanggal Indonesia</h2>

        <div class="row mb-5">
        	<div class="col-sm-6">
        		<div class="card">
        			<div class="card-header bg-success">
        				<span class="text-white">Convert Date PHP</span>
        			</div>
        			<div class="card-body">
        				<p>
        					<b>Tanggal PHP (2019-01-30)</b><br>
	        				<?php echo convertDateDBtoIndo('2019-01-30'); ?>
	        			</p>

	        			<p>
        					<b>Tanggal PHP (17 Agustus 2019)</b><br>
	        				<?php echo convertDateIndotoDB('17 Agustus 2019'); ?>
	        			</p>

        				<p>
	        				<b>Tanggal &amp; Waktu PHP (2019-01-30 10:30:36)</b><br>
	        				<?php echo convertDateTimeDBtoIndo('2019-01-30 10:30:36'); ?>
	        			</p>

	        			<p>
	        				<b>Tanggal &amp; Waktu PHP (17 Agustus 2019 10:30:36)</b><br>
	        				<?php echo convertDateTimeIndotoDB('17 Agustus 2019 10:30:36'); ?>
	        			</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-sm-6">
        		<div class="card">
        			<div class="card-header bg-success">
        				<span class="text-white">Convert Date Javascript</span>
        			</div>
        			<div class="card-body">
        				<p>
        					<b>Tanggal Javascript (2019-03-30)</b><br>
	        				<span id="tanggal"></span>
	        			</p>

	        			<p>
        					<b>Tanggal Javascript (17 Agustus 2019)</b><br>
	        				<span id="tanggalIndotoDB"></span>
	        			</p>

        				<p>
	        				<b>Tanggal &amp; Waktu Javascript (2019-03-30 12:30:03)</b><br>
	        				<span id="tanggalWaktu"></span>
	        			</p>

	        			<p>
	        				<b>Tanggal &amp; Waktu Javascript (17 Agustus 2019 12:13:14)</b><br>
	        				<span id="tanggalWaktuIndotoDB"></span>
	        			</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-sm-6">
        		<div class="card">
        			<div class="card-header bg-success">
        				<span class="text-white">Convert Date Input Text PHP</span>
        			</div>
        			<div class="card-body">
        				<p>
        					<b>Tanggal PHP (2019-01-30)</b><br>
        					<input type="text" class="form-control" value="<?php echo convertDateDBtoIndo('2019-01-30'); ?>" readonly>
	        			</p>

	        			<p>
        					<b>Tanggal PHP (17 Agustus 2019)</b><br>
        					<input type="text" class="form-control" value="<?php echo convertDateIndotoDB('17 Agustus 2019'); ?>" readonly>
	        			</p>

        				<p>
	        				<b>Tanggal &amp; Waktu PHP (2019-01-30 10:30:36)</b><br>
	        				<input type="text" class="form-control" value="<?php echo convertDateTimeDBtoIndo('2019-01-30 10:30:36'); ?>" readonly>
	        			</p>

	        			<p>
	        				<b>Tanggal &amp; Waktu PHP (17 Agustus 2019 10:20:20)</b><br>
	        				<input type="text" class="form-control" value="<?php echo convertDateTimeIndotoDB('17 Agustus 2019 10:20:20'); ?>" readonly>
	        			</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-sm-6">
        		<div class="card">
        			<div class="card-header bg-success">
        				<span class="text-white">Convert Date Input Text Javascript</span>
        			</div>
        			<div class="card-body">
        				<p>
        					<b>Tanggal Javascript (2019-03-30)</b><br>
	        				<input type="text" class="form-control" id="tanggalInput" readonly>
	        			</p>
	        			<p>
        					<b>Tanggal Javascript (17 Agustus 2019)</b><br>
	        				<input type="text" class="form-control" id="tanggalIndoInput" readonly>
	        			</p>

        				<p>
	        				<b>Tanggal &amp; Waktu Javascript (2019-03-30 12:30:03)</b><br>
	        				<input type="text" class="form-control" id="tanggalWaktuInput" readonly>
	        			</p>
	        			<p>
	        				<b>Tanggal &amp; Waktu Javascript (17 Agustus 2019 12:13:14)</b><br>
	        				<input type="text" class="form-control" id="tanggalWaktuIndoInput" readonly>	
	        			</p>
        			</div>
        		</div>
        	</div>
        </div>
		
    </div>

    <div class="p-2 text-white bg-secondary text-center fixed-bottom">© <?php echo date('Y'); ?> Copyright:
	    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
	</div>
	
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    	$(document).ready( function () {
	    	function convertDateDBtoIndo(string) {
	    		bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September' , 'Oktober', 'November', 'Desember'];

		        tanggal = string.split("-")[2];
		        bulan = string.split("-")[1];
		        tahun = string.split("-")[0];

		        return tanggal + " " + bulanIndo[Math.abs(bulan)] + " " + tahun;
	    	}
	    	function convertDateIndotoDB(string) {
	    		bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September' , 'Oktober', 'November', 'Desember'];

		        tanggal = string.split(" ")[0];
		        bulan = bulanIndo.indexOf(string.split(" ")[1]);
		        if(parseInt(bulan) < 10){
			        bulan = "0" + bulan;
			    }
		        tahun = string.split(" ")[2];

		        return tahun + "-" + bulan + "-" + tanggal;
	    	}

	    	function convertDateTimeDBtoIndo(string) {
	    		bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September' , 'Oktober', 'November', 'Desember'];

	    		date = string.split(" ")[0];
				time = string.split(" ")[1];

		        tanggal = date.split("-")[2];
		        bulan = date.split("-")[1];
		        tahun = date.split("-")[0];

		        return tanggal + " " + bulanIndo[Math.abs(bulan)] + " " + tahun + " " + time;
	    	}
	    	function convertDateTimeIndotoDB(string) {
	    		// contoh : 17 Agustus 2019 12:13:14
	    		bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September' , 'Oktober', 'November', 'Desember'];

		        tanggal = string.split(" ")[0];
		        bulan = bulanIndo.indexOf(string.split(" ")[1]);
		        if(parseInt(bulan) < 10){
			        bulan = "0" + bulan;
			    }
		        tahun = string.split(" ")[2];
		        jam = string.split(" ")[3];

		        return tahun + "-" + bulan + "-" + tanggal + " " + jam;
	    	}


	    	document.getElementById("tanggal").innerHTML = convertDateDBtoIndo("2019-03-30");
	    	document.getElementById("tanggalIndotoDB").innerHTML = convertDateIndotoDB("17 Agustus 2019");
	    	document.getElementById("tanggalWaktu").innerHTML = convertDateTimeDBtoIndo("2019-03-30 12:30:03");
	    	document.getElementById("tanggalWaktuIndotoDB").innerHTML = convertDateTimeIndotoDB("17 Agustus 2019 12:13:14");

	    	document.getElementById("tanggalInput").value = convertDateDBtoIndo("2019-03-30");
	    	document.getElementById("tanggalWaktuInput").value = convertDateTimeDBtoIndo("2019-03-30 12:30:03");
	    	document.getElementById("tanggalIndoInput").value = convertDateIndotoDB("17 Agustus 2019");
	    	document.getElementById("tanggalWaktuIndoInput").value = convertDateTimeIndotoDB("17 Agustus 2019 12:13:14");
	    });
    </script>
</body>
</html>