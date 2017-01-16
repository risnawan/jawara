


<table class="table table-hover table-bordered">
	<tr>
	<th width="5%">No</th>
	<th width="20%">Judul</th>
	<th width="10%">Waktu Post</th>
	<th width="50%">Isi Berita</th>
	<th width="20%" style="text-align:center">Aksi</th>
	</tr>
	<?php $no=0;
		foreach ($query->result() as $row) { 
			$no=$no+1; ?>
			<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row->judul_berita; ?></td>
			<td><?php echo $row->waktu; ?></td>
			<td><?php echo $row->isi_berita; ?></td>
			<td style="text-align:center">
				<a href=" <?php echo base_url(); ?>index.php/berita/edit/<?php echo $row->id_berita;?>" class="btn bg-orange">Edit</a>
				<a href="<?php echo base_url(); ?>index.php/berita/del/<?php echo $row->id_berita;?>" class="btn bg-navy">Hapus</a>

			</td>
			</tr>
		<?php }
	?>
</table>