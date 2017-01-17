<div class="box">
<div class="box-body">


<table class="table table-hover table-bordered">
	<tr>
	<th width="5%">No</th>
	<th width="20%">Id Pengguna</th>
	<th width="10%">Id Komentar</th>
	<th width="35%">Isi Komentar</th>
	<th width="15%">Tanggal Komentar</th>
	<th width="20%" style="text-align:center">Aksi</th>
	</tr>
	<?php $no=0;
		foreach ($query->result() as $row) { 
			$no=$no+1; ?>
			<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row->id_pengguna; ?></td>
			<td><?php echo $row->id_komentar; ?></td>
			<td><?php echo $row->isi_komentar; ?></td>
			<td><?php echo $row->waktu; ?></td>
			<td style="text-align:center">
				
				<a href="<?php echo base_url(); ?>index.php/komentar/del/<?php echo $row->id_komentar;?>" class="btn bg-navy">Hapus</a>

			</td>
			</tr>
		<?php }
	?>
</table>

</div></div>