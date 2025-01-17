<style>
a:link{
	text-decoration: none;
}</style>
<div id="content">
	<div class="container">
		<!-- Breadcrumbs line -->
		<div class="crumbs">
			<ul id="breadcrumbs" class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url() ?>">Dashboard</a>
				</li>
			</ul>

			<ul class="crumb-buttons">
				<li><a href="#" title=""><i class="icon-signal"></i><span>Statistik</span></a></li>
				<li>
					<a href="#">
						<i class="icon-calendar"></i>
						<?php
						foreach ($asc as $asc) {
							echo '<span>' . $asc->haritanggal . ' - ';
						}
						foreach ($desc as $desc) {
							echo $desc->haritanggal . '</span>';
						}
						?>
						<!-- </span> -->
					</a>
				</li>
			</ul>
		</div>
		<!-- /Breadcrumbs line -->

		<!--=== Page Header ===-->
		<div class="page-header">
			<div class="page-title">
				<h3>Dashboard</h3>
				<span>Selamat Datang , <?= $this->session->userdata('nama') ?> !</span>
			</div>

			<!-- Page Stats -->
			<ul class="page-stats">
				<li>
					<div class="summary">
						<span>Honor Saya</span>
						<h3><?php echo 'Rp. ' . nominal($honor); ?></h3>
					</div>
					<div id="sparkline-bar2" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
				</li>
			</ul>
			<!-- /Page Stats -->
		</div>
		<!-- /Page Header -->

		<!--=== Page Content ===-->
		<!--=== Statboxes ===-->
		<div class="row row-bg">
			<!-- .row-bg -->
			<div class="col-sm-6 col-md-3">
				<div class="statbox widget box box-shadow">
					<div class="widget-content">
						<div class="visual cyan">
							<div class="statbox-sparkline">30,20,15,30,22,25,26,30,27</div>
						</div>
						<div class="title">Jadwal Saya</div>
						<div class="value"><?= $jadwal_saya ?></div>
						<a class="more" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
					</div>
				</div> <!-- /.smallstat -->
			</div> <!-- /.col-md-3 -->

			<div class="col-sm-6 col-md-3">
				<div class="statbox widget box box-shadow">
					<div class="widget-content">
						<div class="visual green">
							<div class="statbox-sparkline">20,30,30,29,22,15,20,30,32</div>
						</div>
						<div class="title">Semua Jadwal</div>
						<div class="value"><?= $jadwal ?></div>
						<a class="more" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
					</div>
				</div> <!-- /.smallstat -->
			</div> <!-- /.col-md-3 -->

			<div class="col-sm-6 col-md-3 hidden-xs">
				<div class="statbox widget box box-shadow">
					<div class="widget-content">
						<div class="visual yellow">
							<i class="icon-dollar"></i>
						</div>
						<div class="title">Kelas</div>
						<div class="value"><?= $kelas ?></div>
						<a class="more" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
					</div>
				</div> <!-- /.smallstat -->
			</div> <!-- /.col-md-3 -->

			<div class="col-sm-6 col-md-3 hidden-xs">
				<div class="statbox widget box box-shadow">
					<div class="widget-content">
						<div class="visual red">
							<i class="icon-user"></i>
						</div>
						<div class="title">Mata Kuliah</div>
						<div class="value"><?= $mapel ?></div>
						<a class="more" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
					</div>
				</div> <!-- /.smallstat -->
			</div> <!-- /.col-md-3 -->
		</div> <!-- /.row -->
		<!-- /Statboxes -->


		<!-- <?php
				$i = 0;
				foreach ($notif as $alert) {
					if ($i == 1) {
						break;
					}
					?>		
					<a href="data_jurusan/matkul">
		<div class="alert alert-warning fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<s
									</a>trong>Segera Upload Soal Ujian ! </strong> Anda belum mengupload semua Soal Ujian !
					</div>
				<?php $i++;
				} ?> -->

		<?php if (isset($agenda)){
		$i = 0;
		foreach ($agenda as $get) {?>
		<div class="alert alert-info fade in">
			<strong>Agenda hari ini !</strong> <?= $get['kegiatan']; ?>
		</div>
		<?php }} ?>
		<?php if (isset($agenda2)){
		$i = 0;
		foreach ($agenda2 as $get2) {?>
		<div class="alert alert-info fade in">
			<strong>Agenda hari ini !</strong> <?= $get2['kegiatan']; ?>
		</div>
		<?php }} ?>

		<?php if($this->session->userdata('jabatan')=="Kajur"){ ?>
			<?php if (isset($import_pegawai)){
				echo "<a href='data_jurusan/pegawai'>
				<div class='alert alert-warning fade in'>
				$import_pegawai
				</div></a>";
			}?>
			<?php if (isset($import_kelas)){
				echo "<a href='data_jurusan/kelas'>
				<div class='alert alert-warning fade in'>
				$import_kelas
				</div></a>";
			}?>
			<?php if (isset($import_ruangKelas)){
				echo "<a href='data_jurusan/ruang_kelas'>
				<div class='alert alert-warning fade in'>
				$import_ruangKelas
				</div></a>";
			}?>
			<?php if (isset($import_prodi)){
				echo "<a href='data_jurusan/prodi'>
				<div class='alert alert-warning fade in'>
				$import_prodi
				</div></a>";
			}?>
			
			<?php if (isset($import_makul)) { ?>
			<a href="data_jurusan/matkul">
				<div class="alert alert-warning fade in">
					<?php echo $import_makul; ?></p>
				</div>
			</a>
			<?php } ?>
			<?php if (isset($import_pengampu)) { ?>
			<a href="data_jurusan/pengampu">
				<div class="alert alert-warning fade in">
					<?php echo $import_pengampu; ?></p>
				</div>
			</a>
			<?php } ?>
			<?php if (isset($import_pengawasCadangan)) { ?>
			<a href="data_jurusan/pengawas_cadangan">
				<div class="alert alert-warning fade in">
				<?php echo $import_pengawasCadangan; ?></p>
			</div>
			</a>
			<?php } ?>
			<?php if (isset($import_jadwal)) { ?>
			<a href="data_jurusan/jadwal_ujian">
				<div class="alert alert-warning fade in">
				<?php echo $import_jadwal; ?></p>
			</div>
			</a>
			<?php } ?>
			<?php if (isset($notif_agenda)) { ?>
			<a href="agenda">
				<div class="alert alert-warning fade in">
				<?php echo $notif_agenda; ?></p>
			</div>
			</a>
			<?php } ?>
			<?php if (isset($notif_panitia)) { ?>
			<a href="panitia_ujian">
				<div class="alert alert-warning fade in">
				<?php echo $notif_panitia; ?></p>
			</div>
			</a>
			<?php } ?>
			<?php }?>

		<?php foreach ($notif as $alert) {	?>

		<div class="alert alert-warning fade in">
			<strong>Segera Upload Soal ! </strong> <?= $alert->makul . ''; ?>
			<p class="pull-right">
				<?php foreach ($class as $kls) {
						if ($kls->makul == $alert->makul) {
							echo ' [ ' . $kls->kelas . ' ]  ';
						}
					}
					?></p>
		</div>
		<?php }  ?>

		