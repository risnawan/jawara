<form class="form-horizontal" method="post" action="<?php echo base_url()?>index.php/kampanye/save">
              
             
                <div class="form-group" >
                  <label  class="col-sm-2 control-label">Id Kandidat</label>

                  <div class="col-sm-10" style="width:20%">
                    <input type="text" class="form-control" name="id_kandidat" placeholder="Tanggal Post" value="<?php echo $id_kandidat;?>">
                  </div>
                </div>

                <div class="form-group" >
                  <label  class="col-sm-2 control-label">Jadwal Kampanye</label>

                  <div class="col-sm-10" style="width:20%">
                    <input type="date" class="form-control" name="jadwal_kampanye" placeholder="Tanggal Post" value="<?php echo $jadwal_kampanye;?>">
                  </div>
                </div>

                <div class="form-group" >
                  <label  class="col-sm-2 control-label">Lokasi Kampanye</label>

                  <div class="col-sm-10"  >
                    <input type="text" class="form-control" name="lokasi_kampanye" placeholder="Lokasi Kampanye" value="<?php echo $lokasi_kampanye;?>">
                  </div>
                </div>


                <div class="form-group" >
                  <label  class="col-sm-2 control-label"></label>

                  <div class="col-sm-10" >
                     <input type="submit" name="Submit" value="Post Berita" class="btn bg-olive">
                  </div>
                </div>


         
         
          </div>
          </div>

  
            </form>