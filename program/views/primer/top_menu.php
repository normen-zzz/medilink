<!-- Collect the nav links, forms, and other content for toggling -->
<?php $mtindakan=array('daftar-data-tindakan'); ?>
<?php if(in_array($this->uri->segment('1'),$mtindakan)){ ?>
	<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
	  <ul class="nav navbar-nav">
		<!--li class="active"><a href="#"> <span class="sr-only">(current)</span></a></li-->
		<li><a href="daftar-data-tindakan.html">Master Data Tindakan</a></li>
		<li><a href="#">Biaya Tindakan Perkelas</a></li>
		<li><a href="#">Master Data Tindakan</a></li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
		  <ul class="dropdown-menu" role="menu">
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
			<li class="divider"></li>
			<li><a href="#">One more separated link</a></li>
		  </ul>
		</li>
	  </ul>         
	</div>
<?php } ?>