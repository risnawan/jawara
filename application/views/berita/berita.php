
<?php 
    $judul="";
    $waktu="";
    $penulis="";
    $foto="";
    $isi="";

foreach($sql->result() as $obj){
    $judul=$obj->judul_berita;
    $waktu=$obj->waktu;
    $penulis=$obj->nama_lengkap;
    $foto=$obj->foto;
    $isi=$obj->isi_berita;

    }

?>
   

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1><?php echo $judul; ?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#"><?php echo $penulis; ?></a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $waktu; ?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="<?php echo base_url()."assets/images/";?>photograph_img2.jpg" alt="" style="width:900px;height:300px;">
                <hr>

                <!-- Post Content -->
                <p class="lead"></p>
                <font face="verdana" color="black"><?php echo $isi;?></font>
                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->

                
                <div class="comments-container">
                <h1>Komentar</h1>
                <?php foreach ($komentar->result() as $kom) { ?>
                <ul id="comments-list" class="comments-list">
                <li>
                <div class="comment-main-level">
                    <!-- Avatar -->
                    <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
                    <!-- Contenedor del Comentario -->
                    <div class="comment-box">
                        <div class="comment-head">
                            <h6 class="comment-name by-author"><a href="#">><?php echo $kom->id_pengguna; ?></a></h6>
                            <span>><?php echo $kom->waktu; ?></span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="comment-content">
                            <?php echo $kom->isi_komentar; ?>
                        </div>
                    </div>
                </div>
                <!-- Respuestas de los comentarios -->
                
            </li>
        </ul>
        <?php } ?>
    </div>


                <!-- Comment -->
  
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <?php  $this->load->view($content);?>

            </div>

        </div>
        <!-- /.row -->



    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
