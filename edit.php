<html>
<head>
	<meta charset="UTF-8">
	<title>EDIT CRUD</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container p-5 bg-light">
		<h3 class="bg-info p-2 text-center text-white">EDIT REGISTRASI</h3>
		<?php if ($this->session->flashdata('pesan')) { ?>
        	<h4 class="bg-success p-2 text-center text-white"><?php echo $this->session->flashdata('pesan') ?></h4>
   		<?php } ?>
		<?php $row = $tampilEdit; ?>
		<?php echo form_open_multipart('data/simpanEdit/'.$row->id); ?>
		  <div class="form-group">
		    <label>Nama</label>
		    <input type="text" name="nama" class="form-control" value="<?php echo $row->nama ?>">
		  </div>
		  <div class="form-group">
		    <label>Email</label>
		    <input type="email" name="email" class="form-control" value="<?php echo $row->email ?>">
		  </div>
		  <div class="form-group">
			  <div class="form-check form-check-inline">
			  	<input class="form-check-input" type="radio" name="jenkel" value="Pria" <?php if($row->jenkel == "Pria"){echo "checked";} ?>>
			  	<label class="form-check-label">Pria</label>
			  </div>
			  <div class="form-check form-check-inline">
			 	<input class="form-check-input" type="radio" name="jenkel" value="Wanita" <?php if($row->jenkel == "Wanita"){echo "checked";} ?>>
			 	<label class="form-check-label">Wanita</label>
			  </div>
		  </div>
		  <div class="form-group">
		  	<label>Alamat</label>
    		<textarea class="form-control" name="alamat" rows="3"><?php echo $row->alamat ?></textarea>
		  </div>
		  <div class="form-group">
		    <label>Lulusan</label>
		    <select class="form-control" name="lulusan">
		      <option value="SLTA" <?php if($row->lulusan == "SLTA"){echo "selected";} ?>>SLTA</option>
		      <option value="D3" <?php if($row->lulusan == "D3"){echo "selected";} ?>>D3</option>
		      <option value="S1" <?php if($row->lulusan == "S1"){echo "selected";} ?>>S1</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label>Foto Anda</label>
		    <input type="file" class="form-control-file" name="foto">
		    <hr>
		    <img src="<?php echo base_url('images/'.$row->foto); ?>">
		  </div>
		  <input type="hidden" name="id" value="<?php echo $row->id ?>">
		  <button type="submit" class="btn btn-primary">Simpan</button>
		  <button type="reset" class="btn btn-danger">Batal</button>
		<?php echo form_close(); ?>
		<a href="<?php echo site_url('data') ?>" class="btn btn-warning btn-block font-weight-bold">LIHAT DATA REGISTRASI</a>
	</div>
</body>
</html>