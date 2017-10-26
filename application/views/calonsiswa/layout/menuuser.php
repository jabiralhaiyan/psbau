<style type="text/css">  


.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}

</style>

</head>

<body>

  <!--NAVBAR-->
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo base_url(); ?>"> <img  src="<?php echo base_url(); ?>assets/img/psb-au.png"> </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
           <ul class="nav navbar-nav">
            <li class="<?php if($this->uri->segment(1)=="pendaftaran" && $this->uri->segment(2)==""){echo "active";}?>"><a href="<?php echo base_url();?>pendaftaran" style="font-size:16px"><i class="fa fa-home"></i></a></li>
          </ul>
          <ul class="nav navbar-nav">
            
           
            <li class="<?php if($this->uri->segment(2)=="finalisasi" || $this->uri->segment(2)=="unggahfoto"){echo "active";}?>" >
                <a 
                <?php
                  if ($statusfinalisasi=='y' || $statusfinalisasi=='1')
                    echo 'href="'.base_url().'pendaftaran/finalisasi"';
                  else
                    echo 'href="'.base_url().'pendaftaran/unggahfoto"';
                ?>
                style="font-size:16px">
                Pendaftaran
                </a>
            </li>
            

            <li class="<?php if($this->uri->segment(2)=="gantipassword"){echo "active";}?>"><a href="<?php echo base_url(); ?>pendaftaran/gantipassword" style="font-size:16px">Password</a></li>
          </ul>
      
      <form class="navbar-form navbar-right" action="<?php echo base_url();?>home/logout" role="search">
        <a style="font-size:14px;color:white"><?php echo $nama; ?></a>
          <button type="submit" class="btn btn-warning"><i class="fa fa-power-off"></i> Logout</button>
      </form>

  </div>
</div>
</div>
</nav>