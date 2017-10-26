<style type="text/css">
p {
   font-size: 16px;
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
            <li class="<?php if($this->uri->segment(1)=="home" || $this->uri->segment(1)==""){echo "active";}?>"><a href="<?php echo base_url(); ?>home" style="font-size:16px">Pendaftaran</a></li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="<?php if($this->uri->segment(1)=="manual"){echo "active";}?>"><a href="<?php echo base_url(); ?>manual" style="font-size:16px">Panduan Pendaftaran</a></li>
          </ul>    
  </div>
</div>
</div>
</nav>