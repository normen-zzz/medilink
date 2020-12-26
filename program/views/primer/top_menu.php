<!-- Collect the nav links, forms, and other content for toggling -->
<?php $mtindakan=array('master-medis','biaya-tindakan-perkelas', 'diagnosa', 'diagnosa-asuransi', 'tindakandiagnosa','tarif-asuransi'); ?>
<?php $mrawatinap=array('rawat-inap','kelas','kamar','bed','master-penunjang','kategori'); ?>
<?php $mradiologi=array('radiologi','biayaradiologi'); ?>
<?php $mvisitkonsul=array('visite'); ?>
<?php $mgizi=array('bahan', 'gizi', 'type', 'gizi-kelas','gizi-detail'); ?>

<?php $mlab=array('sample', 'metode-laboratorium', 'kategori-laboratorium', 'data-laboratorium','group-pemeriksaan','harga-biaya'); ?>


<?php $moperasi=array('jenis-operasi', 'item-operasi', 'tarif-operasi', 'tarif-operasi-perkelas'); ?>
<?php $rawatinap=array('visite-dokter', 'dpjp', 'tindakan', 'penunjang','lain-lain','gizipasien','diagnosapasien','administrasi'); ?>



<?php if(in_array($this->uri->segment('1'),$mtindakan)){ ?>
	<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
	  <ul class="nav navbar-nav">
		<!--li class="active"><a href="#"> <span class="sr-only">(current)</span></a></li-->
		<li><a href="master-medis">Master Data Tindakan</a></li>
		<li><a href="biaya-tindakan-perkelas">Biaya Tindakan Perkelas</a></li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Diagnosa<span class="caret"></span></a>
		  <ul class="dropdown-menu" role="menu">
			<li><a href="diagnosa">Diagnosa</a></li>
			<li><a href="diagnosa-asuransi">Diagnosa (asuransi)</a></li>
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
		<li><a href="rawat-inap">Nurse Station</a></li>
		<li><a href="kelas">Kelas</a></li>
		<li><a href="kamar">Kamar</a></li>
		<li><a href="bed">Bed</a></li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Penunjang<span class="caret"></span></a>
		  <ul class="dropdown-menu" role="menu">
			<li><a href="penunjang">Penunjang</a></li>
			<li><a href="kategori">Kategori Penunjang</a></li>
		  </ul>
		</li>
	  </ul>         
	</div>
<?php } ?>


<?php if(in_array($this->uri->segment('1'),$mradiologi)){ ?>
	<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
	  <ul class="nav navbar-nav">
		<!--li class="active"><a href="#"> <span class="sr-only">(current)</span></a></li-->
		<li><a href="radiologi">Radiologi</a></li>
		<li><a href="biayaradiologi">Biaya Radiologi Per - Kelas</a></li>
		  </ul>
		</li>
	  </ul>         
	</div>
<?php } ?>





<?php if(in_array($this->uri->segment('1'),$mvisitkonsul)){ ?>
	<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
	  <ul class="nav navbar-nav">
		<!--li class="active"><a href="#"> <span class="sr-only">(current)</span></a></li-->
		<li><a href="visite">Tarif Visite dan Konsul</a></li>
	  </ul>         
	</div>
<?php } ?>

<?php if(in_array($this->uri->segment('1'),$mgizi)){ ?>
	<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
	  <ul class="nav navbar-nav">
		<!--li class="active"><a href="#"> <span class="sr-only">(current)</span></a></li-->
		<li><a href="bahan">Bahan</a></li>
		<li><a href="type">Gizi Type</a></li>
		<li><a href="gizi">Gizi</a></li>
		<li><a href="gizi-kelas">Gizi (Kelas)</a></li>
		<li><a href="gizi-detail">Gizi Detail</a></li>
	  </ul>         
	</div>
<?php } ?>


<?php if(in_array($this->uri->segment('1'),$mlab)){ ?>
	<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
	  <ul class="nav navbar-nav">
		<!--li class="active"><a href="#"> <span class="sr-only">(current)</span></a></li-->
		<li><a href="sample">Sample</a></li>
		<li><a href="metode-laboratorium">Metode</a></li>
		<li><a href="kategori-laboratorium">Kategori</a></li>
		<li><a href="data-laboratorium">Master Data Laboraturium</a></li>
		<li><a href="group-pemeriksaan">Grup Pemeriksaan</a></li>
		<li><a href="harga-biaya">Biaya Pemeriksaan Perkelas</a></li>
	</ul>
</div>
<?php } ?>

 

<?php if(in_array($this->uri->segment('1'),$moperasi)){ ?>
	<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
	  <ul class="nav navbar-nav">
		<!--li class="active"><a href="#"> <span class="sr-only">(current)</span></a></li-->
		<li><a href="jenis-operasi">Jenis Operasi</a></li>
		<li><a href="item-operasi">Master Item Operasi</a></li>
		<li><a href="tarif-operasi">Tarif Operasi</a></li>
		<li><a href="tarif-operasi-perkelas">Tarif Operasi Per-Kelas</a></li>

	  </ul>         
	</div>
<?php } ?>


<?php if(in_array($this->uri->segment('1'),$rawatinap)){ ?>
	<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
	  <ul class="nav navbar-nav">
		<!--li class="active"><a href="#"> <span class="sr-only">(current)</span></a></li-->
		<li><a href="visite-dokter">Visite-Dokter</a></li>
		<li><a href="dpjp">DPJP</a></li>
		<li><a href="tindakan">Tindakan</a></li>
		<li><a href="penunjang">Penunjang</a></li>
		<li><a href="lain-lain">Lain-Lain</a></li>
		<li><a href="gizipasien">Gizi Pasien</a></li>
		<li><a href="diagnosapasien">Diagnosa Pasien</a></li>
		<li><a href="administrasi">Administrasi</a></li>
	  </ul>         
	</div>
<?php } ?>