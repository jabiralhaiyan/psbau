	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="
								<?php 
									if($fotoadmin == NULL){
										echo base_url().'assets2/images/profpic/default-foto.png'; 
									}
									else
									{
										echo base_url().'assets2/images/profpic/'.$fotoadmin;
									}
								?>
								" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo $namaadmin; ?></span>
									<div class="text-size-mini text-muted">
										admin
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->

					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">
								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="<?php if($this->uri->segment(2)=="dashboard"){echo "active";}?>" ><a href="<?php echo base_url(); ?>admin/dashboard"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li class="<?php if($this->uri->segment(2)=="datasiswa"){echo "active";}?>" >
									<a href="<?php echo base_url(); ?>admin/datasiswa"><i class="icon-stack2"></i> <span>Data Siswa</span></a>
								</li>
								<li class="<?php if($this->uri->segment(2)=="pencariansiswa"){echo "active";}?>">
									<a href="<?php echo base_url(); ?>admin/pencariansiswa"><i class="icon-search4"></i> <span>Pencarian Siswa</span>
									<!-- <span class="label label-warning">Coming Soon</span> -->
									</a>
								</li>
								<li>
									<a href="#"><i class="icon-list-unordered"></i> <span>Referensi</span>
									</a>
									<ul>
										<li class="<?php if($this->uri->segment(2)=="referensipsb" || $this->uri->segment(2)=="referensi_lembaga" || $this->uri->segment(2)=="referensi_tahun" || $this->uri->segment(2)=="referensi_prosespenerimaan" || $this->uri->segment(2)=="referensi_kelompok"){echo "active";}?>">
											<a href="<?php echo base_url(); ?>admin/referensipsb">Referensi PSB</a>
										</li>
										<li class="<?php if($this->uri->segment(2)=="referensiumum"){echo "active";}?>">
											<a href="<?php echo base_url(); ?>admin/referensiumum">Referensi Umum</a>
										</li>
									</ul>
								</li>

								<li>
									<a href="#"><i class="icon-pushpin"></i> <span>Papan Pengumuman</span>
										<span class="label label-warning">Coming</span>
									</a>
									<ul>
										<li class="<?php if($this->uri->segment(2)=="prosedurpendaftaran"){echo "active";}?>">
											<a href="<?php echo base_url(); ?>admin/prosedurpendaftaran">Prosedur Pendaftaran</a>
										</li>
										<li class="<?php if($this->uri->segment(2)=="agendakegiatan"){echo "active";}?>">
											<a href="<?php echo base_url(); ?>admin/agendakegiatan">Agenda Kegiatan</a>
										</li>
										<li class="<?php if($this->uri->segment(2)=="biayapendaftaran"){echo "active";}?>">
											<a href="<?php echo base_url(); ?>admin/biayapendaftaran">Biaya Pendaftaran</a>
										</li>
										<li class="<?php if($this->uri->segment(2)=="alurkegiatan"){echo "active";}?>">
											<a href="<?php echo base_url(); ?>admin/alurkegiatan">Alur Kegiatan</a>
										</li>
										<li class="<?php if($this->uri->segment(2)=="pengumuman"){echo "active";}?>">
											<a href="<?php echo base_url(); ?>admin/pengumuman">Pengumuman</a>
										</li>
									</ul>
								</li>

								<li class="<?php if($this->uri->segment(2)=="dataadmin"){echo "active";}?>">
									<a href="<?php echo base_url(); ?>admin/dataadmin"><i class="icon-user"></i> <span>Admin</span>
									</a>
									<ul>
										<li class="<?php if($this->uri->segment(2)=="dataadmin"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/dataadmin">Semua Admin</a></li>
										<li class="<?php if($this->uri->segment(2)=="tambahadmin"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/tambahadmin">Tambah Admin</a></li>
										<li class="<?php if($this->uri->segment(2)=="profil"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/profil">Profil</a></li>
									</ul>
								</li>
								<li class="<?php if($this->uri->segment(2)=="resetpassword"){echo "active";}?>">
									<a href="<?php echo base_url(); ?>admin/resetpassword"><i class="icon-key"></i> <span>Reset Password Siswa</span>
									</a>
								</li>

								<!-- /main -->
							</ul>
						</div>
					</div>
					<!-- /main navigation -->
				</div>
			</div>
			<!-- /main sidebar -->