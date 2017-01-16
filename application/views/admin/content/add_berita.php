<form class="form-horizontal" method="post" action="<?php echo base_url()?>index.php/berita/save">
              <input type="hidden" name="id_berita" value="<?php echo $id_berita?>">
              <input type="hidden" name="username_admin" value="<?php echo $this->session->userdata('username');?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" clo>Judul Berita</label>

                  <div class="col-sm-10" style="width:40%">
                    <input type="text" class="form-control" name="judul_berita" placeholder="Judul Berita" value="<?php echo $judul_berita;?>">
                  </div>
                </div>
                <div class="form-group" >
                  <label  class="col-sm-2 control-label">Tanggal Post</label>

                  <div class="col-sm-10" style="width:20%">
                    <input type="date" class="form-control" name="tanggal_berita" placeholder="Tanggal Post" value="<?php echo $tanggal_berita;?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Isi Berita</label>

                  <div class="col-sm-10 " >
                  		
                  	<div class="box">
            			<div class="box-header">
              
              				<!-- tools box -->
              				<div class="pull-right box-tools">
                				<button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  				<i class="fa fa-minus"></i></button>
              				</div>
             
            			</div>
            <!-- /.box-header -->
            			<div class="box-body pad">
              
                			<textarea  class="textarea" name="isi_berita" placeholder="Ketik isi berita di sini." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $isi_berita;?></textarea>
              
            			</div>
          </div>
          <input type="submit" name="Submit" value="Post Berita" class="btn bg-olive">
          </div>
          </div>

                  
                
              
            </form>