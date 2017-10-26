<?php 
require_once('layout/head.php'); 
require_once('layout/navbarmenu.php');
require_once('layout/sidebar.php');
?>

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><span class="text-semibold">Home</span>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?php echo base_url(); ?>admin/dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->

				<!-- Content area -->
				<div class="content">
					<!-- Quick stats boxes -->
							<div class="row">
								<div class="col-lg-4">
									<!-- Members online -->
									<div class="panel bg-teal-400">
										<div class="panel-body">
											<center>
											<p style="font-size: 18px"><strong>Jumlah PSB Tahun <?php echo $tahunmasukaktif; ?></strong></p>
											<h3 class="no-margin"><?php echo $jumlahpsb; ?></h3>
											</center>
										</div>
									</div>
									<!-- /members online -->
								</div>
								<div class="col-lg-4">
									<!-- Members online -->
									<div class="panel bg-teal-400">
										<div class="panel-body">
											<center>
											<p style="font-size: 18px"><strong>Jumlah Laki-Laki</strong></p>
											<h3 class="no-margin"><?php echo $jumlahlakilaki; ?></h3>
											</center>
										</div>
									</div>
									<!-- /members online -->
								</div>
								<div class="col-lg-4">
									<!-- Members online -->
									<div class="panel bg-teal-400">
										<div class="panel-body">
										<center>
											<p style="font-size: 18px"><strong>Jumlah Perempuan</strong></p>
											<h3 class="no-margin"><?php echo $jumlahperempuan; ?></h3>
											</center>
										</div>
									</div>
									<!-- /members online -->
								</div>
							</div>
							<!-- /quick stats boxes -->

					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<center><h4 class="panel-title"><strong>Grafik PSB Tiap Lembaga Tahun <?php echo $tahunmasukaktif; ?></strong></h4></center>
									</center>
			                	</div>
			                	<div class="panel-body">
									<div class="chart-container text-center">
										<div class="display-inline-block" id="jumlahpsb"></div>
									</div>
								</div>
			                </div>
						</div>
					</div>
					<!--Grafik jumlah kelompok dari tiap lembaga-->
					<div class="row">
						<div class="col-lg-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<center><h4 class="panel-title"><strong>MA Unggulan Amanatul Ummah</strong></h4></center>
			                	</div>
			                	<div class="panel-body">

									<div class="chart-container text-center">
										<div class="display-inline-block" id="jumlahperkelompok-mau"></div>
									</div>
								</div>
			                </div>
						</div>
						<div class="col-lg-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<center><h4 class="panel-title"><strong>MBI Amanatul Ummah</strong></h4></center>
			                	</div>
			                	<div class="panel-body">
									<div class="chart-container text-center">
										<div class="display-inline-block" id="jumlahperkelompok-mbi"></div>
									</div>
								</div>
			                </div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<center><h4 class="panel-title"><strong>Pengunjung Login Tiap Hari</strong></h4></center>
			                	</div>
			                	<div class="panel-body">
									<div class="chart-container text-center">
											<h4>Total Login pada sistem PSB : <?php echo $jumlahlogin; ?></h4>
											<div class="chart" id="pengunjunglogin"></div>
									</div>
								</div>
			                </div>
						</div>
					</div>


<!--Jumlah PSB-->
<script type="text/javascript">
	google.load("visualization", "1", {packages:["corechart"]});
	google.setOnLoadCallback(drawPie);

function drawPie() {	
	// Data
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Jumlah PSB per Lembaga'],
        ['MA Unggulan Amanatul Ummah', <?php echo $psbmau; ?>],
        ['MBI Amanatul Ummah', <?php echo $psbmbi; ?>]
    ]);

    // Options
    var options_pie = {
        fontName: 'Roboto',
        height: 300,
        width: 500,
        chartArea: {
            left: 50,
            width: '90%',
            height: '90%'
        }
    };

    // Instantiate and draw our chart, passing in some options.
    var pie = new google.visualization.PieChart($('#jumlahpsb')[0]);
    pie.draw(data, options_pie);
}
</script>

<!--MAU Amanatul Ummah-->
<script type="text/javascript">
	google.load("visualization", "1", {packages:["corechart"]});
	google.setOnLoadCallback(drawPie);

function drawPie() {	
	// Data
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Jumlah per Kelompok tiap Lembaga'],
        ['Gelombang 1', <?php echo $kelompok1mau; ?>],
        ['Gelombang 2', <?php echo $kelompok2mau; ?>]
    ]);

    // Options
    var options_pie = {
        fontName: 'Roboto',
        height: 300,
        width: 500,
        chartArea: {
            left: 50,
            width: '90%',
            height: '90%'
        }
    };

    // Instantiate and draw our chart, passing in some options.
    var pie = new google.visualization.PieChart($('#jumlahperkelompok-mau')[0]);
    pie.draw(data, options_pie);
}
</script>

<!--MBI Amanatul Ummah-->
<script type="text/javascript">
	google.load("visualization", "1", {packages:["corechart"]});
	google.setOnLoadCallback(drawPie);

function drawPie() {	
	// Data
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Jumlah per Kelompok tiap Lembaga'],
        ['Gelombang 1', <?php echo $kelompok1mbi; ?>],
        ['Gelombang 2', <?php echo $kelompok2mbi; ?>]
    ]);

    // Options
    var options_pie = {
        fontName: 'Roboto',
        height: 300,
        width: 500,
        chartArea: {
            left: 50,
            width: '90%',
            height: '90%'
        }
    };

    // Instantiate and draw our chart, passing in some options.
    var pie = new google.visualization.PieChart($('#jumlahperkelompok-mbi')[0]);
    pie.draw(data, options_pie);
}
</script>

<script type="text/javascript">

// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawColumn);

// Chart settings
function drawColumn() {
    // Data
    var data = google.visualization.arrayToDataTable([
        ['Tanggal', 'Pengunjung Login'],
        <?php
        foreach($pengunjunglogin->result() as $row ){
        $tgl_grafik = $row->tanggal;
    	$jumlah_grafik = $row->pengunjunglogin;
        ?>
	     ['<?php echo $tgl_grafik; ?>',
	      <?php echo $jumlah_grafik; ?>],
        <?php } ?>
    ]);

    // Options
    var options_column = {
        fontName: 'Roboto',
        height: 400,
        fontSize: 12,
        chartArea: {
            left: '5%',
            width: '90%',
            height: 250
        },
        tooltip: {
            textStyle: {
                fontName: 'Roboto',
                fontSize: 13
            }
        },
        vAxis: {
            title: 'Pengunjung login tiap hari',
            titleTextStyle: {
                fontSize: 13,
                italic: false
            },
            gridlines:{
                color: '#e5e5e5',
                count: 10
            },
            minValue: 0
        },
        legend: {
            position: 'top',
            alignment: 'center',
            textStyle: {
                fontSize: 12
            }
        }
    };

    // Draw chart
    var column = new google.visualization.ColumnChart($('#pengunjunglogin')[0]);
    column.draw(data, options_column);
}


// Resize chart
// ------------------------------

$(function () {

    // Resize chart on sidebar width change and window resize
    $(window).on('resize', resize);
    $(".sidebar-control").on('click', resize);

    // Resize function
    function resize() {
        drawColumn();
    }
});
</script>

<!-- Footer -->
<?php require_once('layout/footer.php'); ?>
<!-- /footer -->