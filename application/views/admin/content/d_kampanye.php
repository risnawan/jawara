
<div class="box">
<div class="box-body">

<table class="table table-hover table-bordered">
	<tr>
	<th width="5%">No</th>
	<th width="5%%">Id Kampanye</th>
	<th width="10%">Jadwal Kampanye</th>
	<th width="20%">Lokasi Kampanye</th>
	<th width="15%">Id Kandidat</th>
	<th width="15%">Nama Kandidat</th>
	<th width="15%">Foto Kandidat</th>
	<th width="40%" style="text-align:center">Aksi</th>
	</tr>
	<?php $no=0;
		foreach ($query->result() as $row) { 
			$no=$no+1; ?>
			<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row->id_kampanye; ?></td>
			<td><?php echo $row->jadwal_kampanye; ?></td>
			<td><?php echo $row->lokasi_kampanye; ?></td>
			<td><?php echo $row->id_kandidat; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->foto; ?></td>
			<td style="text-align:center">
				<a href="<?php echo base_url(); ?>index.php/kampanye/edit/<?php echo $row->id_kampanye;?>" class="btn bg-orange">Edit</a>
				<a href="<?php echo base_url(); ?>index.php/kampanye/del/<?php echo $row->id_kampanye;?>" class="btn bg-navy">Hapus</a>

			</td>
			</tr>
		<?php }
	?>
</table>
</div></div>