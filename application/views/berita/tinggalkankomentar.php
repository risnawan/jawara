
<?php /*if(data)
 
 jika sudah login maka tampilkan form  tinggalkan pesan nya 
 jika tidak maka tampilkan button login dengan modal seperti di header

 */?>

                    <form role="form" method="POST" action="<?php echo base_url();?>halamanberita/berita/tinggalpesan">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php echo "ini untuk tinggalkan komentar"?>