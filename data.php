<html>
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container p-5 bg-light">
		<h3 class="bg-danger p-2 text-center text-white">DATA REGISTRASI</h3>
		<?php if ($this->session->flashdata('pesan')) { ?>
        	<h4 class="bg-success p-2 text-center text-white"><?php echo $this->session->flashdata('pesan') ?></h4>
   		<?php } ?>

		<div class="table-responsive">
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Email</th>
			      <th scope="col">Jenis Kelamin</th>
			      <th scope="col">Alamat</th>
			      <th scope="col">Lulusan</th>
			      <th scope="col">Foto</th>
			      <th scope="col">Aksi</th>
			    </tr>
			  </thead>
			  <tbody>
			  <?php $no=1; foreach($tampil as $row){ ?>		
			    <tr>
			      <th scope="row"><?php echo $no ?></th>
			      <td><?php echo $row->nama ?></td>
			      <td><?php echo $row->email ?></td>
			      <td><?php echo $row->jenkel ?></td>
			      <td><?php echo $row->alamat ?></td>
			      <td><?php echo $row->lulusan ?></td>
			      <td><img src="<?php echo base_url('images/'.$row->foto) ?>"></td>
			      <td>
			      	<a class="btn btn-info" href="<?php echo site_url('data/tampilEdit/'.$row->id); ?>">Edit</a> |
			      	<a class="btn btn-danger" href="<?php echo site_url('data/delete/'.$row->id); ?>" onclick="return confirm('Apakah Anda Yakin ?');">Delete</a>
			      </td>
			    </tr>
			   <?php $no++; } ?>
			  </tbody>
			</table>
		</div>
		<a href="<?php echo site_url('welcome') ?>" class="btn btn-warning btn-block font-weight-bold">INPUT FORM REGISTRASI</a>
	</div>
</body>
</html>