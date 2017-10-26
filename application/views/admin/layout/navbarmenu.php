<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>assets2/images/psb-au.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li>
					<a class="sidebar-control sidebar-main-toggle hidden-xs">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="
						<?php 
							if($fotoadmin == NULL){
								echo base_url().'assets2/images/profpic/default-foto.png'; 
							}
							else
							{
								echo base_url().'assets2/images/profpic/'.$fotoadmin;
							}
						?>
						" alt="">
						<span><?php echo $namaadmin; ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li class="<?php if($this->uri->segment(2)=="profil"){echo "active";}?>" ><a href="<?php echo base_url() ;?>admin/profil"><i class="icon-user-plus"></i> My profile</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo base_url() ;?>admin/logout"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->