<div class="box">
<div class="box-body">


<table class="table table-hover table-bordered">
	<tr>
	<th width="5%">No</th>
	<th width="10%">Username</th>
	<th width="20%">Nama Lengkap</th>
	<th width="35%">E-mail</th>
	<th width="15%">Foto</th>
	<th width="15%">Password</th>
	<th width="20%" style="text-align:center">Aksi</th>
	</tr>
	<?php $no=0;
		foreach ($query->result() as $row) { 
			$no=$no+1; ?>
			<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row->username; ?></td>
			<td><?php echo $row->nama_lengkap; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->foto; ?></td>
			<td><?php echo $row->password; ?></td>
			<td style="text-align:center">
				
				<a href="<?php echo base_url(); ?>index.php/pengguna/del/<?php echo $row->id_pengguna;?>" class="btn bg-navy">Hapus</a>

			</td>
			</tr>
		<?php }
	?>
</table>
</div></div>