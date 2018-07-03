<html>
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container p-5 bg-light">
		<h3 class="bg-info p-2 text-center text-white">FORM REGISTRASI</h3>
		<?php if ($this->session->flashdata('pesan')) { ?>
        	<h4 class="bg-success p-2 text-center text-white"><?php echo $this->session->flashdata('pesan') ?></h4>
   		<?php } ?>
		
		<?php echo form_open_multipart('data/simpan'); ?>
		  <div class="form-group">
		    <label>Nama</label>
		    <input type="text" name="nama" class="form-control" placeholder="Enter Nama">
		  </div>
		  <div class="form-group">
		    <label>Email</label>
		    <input type="email" name="email" class="form-control" placeholder="Enter Email">
		  </div>
		  <div class="form-group">
			  <div class="form-check form-check-inline">
			  	<input class="form-check-input" type="radio" name="jenkel" value="Pria" checked="">
			  	<label class="form-check-label">Pria</label>
			  </div>
			  <div class="form-check form-check-inline">
			 	<input class="form-check-input" type="radio" name="jenkel" value="Wanita">
			 	<label class="form-check-label">Wanita</label>
			  </div>
		  </div>
		  <div class="form-group">
		  	<label>Alamat</label>
    		<textarea class="form-control" name="alamat" rows="3" placeholder="Enter Alamat"></textarea>
		  </div>
		  <div class="form-group">
		    <label>Lulusan</label>
		    <select class="form-control" name="lulusan">
		      <option value="SLTA">SLTA</option>
		      <option value="D3">D3</option>
		      <option value="S1">S1</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label>Foto Anda</label>
		    <input type="file" class="form-control-file" name="foto">
		  </div>
		  <button type="submit" class="btn btn-primary">Simpan</button>
		  <button type="reset" class="btn btn-danger">Batal</button>
		<?php echo form_close(); ?>
		<a href="<?php echo site_url('data') ?>" class="btn btn-warning btn-block font-weight-bold">LIHAT DATA REGISTRASI</a>
	</div>
</body>
</html>