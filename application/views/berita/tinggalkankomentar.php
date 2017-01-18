
<?php /*if(data)
 
 jika sudah login maka tampilkan form  tinggalkan pesan nya 
 jika tidak maka tampilkan button login dengan modal seperti di header

 */?>
<form class="form-horizontal" method="post" action="<?php echo base_url()?>halamanberita/tinggalpesan/">
              <input type="hidden" name="id_berita" value="">
              <input type="hidden" name="username_admin" value="">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" clo>Judul Berita</label>

