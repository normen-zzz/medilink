<!-- Collect the nav links, forms, and other content for toggling -->
<?php $mtindakan=array('daftar-data-tindakan','biaya-tindakan-perkelas', 'diagnosa', 'tindakandiagnosa','tarif-asuransi'); ?>
<?php $mrawatinap=array('nurse-station','kelas'); ?>


<?php if(in_array($this->uri->segment('1'),$mtindakan)){ ?>
	<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
	  <ul class="nav navbar-nav">
		<!--li class="active"><a href="#"> <span class="sr-only">(current)</span></a></li-->
		<li><a href="daftar-data-tindakan">Master Data Tindakan</a></li>
		<li><a href="biaya-tindakan-perkelas">Biaya Tindakan Perkelas</a></li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Diagnosa<span class="caret"></span></a>
		  <ul class="dropdown-menu" role="menu">
			<li><a href="diagnosa">Diagnosa</a></li>
			<li><a href="#">Diagnosa (asuransi)</a></li>
			<li><a href="tindakandiagnosa">Tindakan Diagnosa (asuransi)</a></li>
		  </ul>
		</li>
		<li><a href="tarif-asuransi">Tarif Per-level Asuransi</a></li>
	  </ul>         
	</div>
<?php } ?>

<?php if(in_array($this->uri->segment('1'),$mrawatinap)){ ?>
	<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
	  <ul class="nav navbar-nav">
		<!--li class="active"><a href="#"> <span class="sr-only">(current)</span></a></li-->
		<li><a href="nurse-station">Nurse Station</a></li>
		<li><a href="kelas">Kelas</a></li>
		<li><a href="kamar">Kamar</a></li>
		<li><a href="bed">Bed</a></li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Penunjang<span class="caret"></span></a>
		  <ul class="dropdown-menu" role="menu">
			<li><a href="#">Penunjang</a></li>
			<li><a href="#">Kategori Penunjang</a></li>
		  </ul>
		</li>
	  </ul>         
	</div>
<?php } ?>

