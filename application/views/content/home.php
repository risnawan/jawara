<!DOCTYPE html>
<html>
<head>
<title>JawaraNews.com</title>
<meta charset="utf-8">

<!-- css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/font.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/layout.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/login.css">

<!-- css -->

</head>
<body>

<!-- load -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
<!-- load -->

<!-- Scroll atas -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- Scroll atas -->

<!--Bagian atas-->
 
    <div class="row">
      
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="#" data-toggle="modal" data-target="#login-modal">About</a></li>
              <li><a href=<?php echo base_url()."assets/";?>"pages/contact.html">Contact</a></li>
              <?php if ($this->session->userdata('status')=='user_login'): ?>
                <li><a href="<?php echo base_url();?>home/logout">Logout</a></li>
              <?php endif ?>
              <?php if ($this->session->userdata('status')!='user_login'): ?>
                <li><a href="<?php echo base_url();?>login">Login</a></li>
              <?php endif ?>
            </ul>
          </div>
          <div class="header_top_right">
          <div></div>
              <?php if ($this->session->userdata('status')=='user_login'): ?>
                <h3>Welcome,<?php echo $this->session->userdata('nama');?></h3>
              <?php endif ?>
            
        </div>
        </div>
   
    <!-- logo pencarian dan login -->

    <!-- logo pencarian dan login -->


  <!-- Bagian baris berita utam image slider -->
  <section id="sliderSection">
    <div class="row">
        <div class="slick_slider">

          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="<?php echo base_url()."assets/";?>images/slider_img4.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>

          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="<?php echo base_url()."assets/";?>images/slider_img2.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>

          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="<?php echo base_url()."assets/";?>images/slider_img3.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>

          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="<?php echo base_url()."assets/";?>images/slider_img1.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- Bagian baris berita utam image slider -->
    
  
  <!-- Bagian konten halaman utama -->
  <section id="contentSection">
 
  <!-- bagian kiri -->
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            
            <h2><span></span></h2>
<div id="latestnews">
        <h2>Berita</h2>
        
        <ul>
        <?php foreach ($query_berita->result() as $berita) { ?>
          
        
          <li>
            <div class="imgholder"><img width="115px" height="115px" src="<?php echo base_url(); ?>gambar/berita/<?php echo $berita->img;?>" alt="" /></div>
            <div class="latestnews">
            <p><?php echo $berita->waktu; ?>, <?php echo $berita->username_admin; ?></p>
              <a href=""><h2><?php echo $berita->judul_berita; ?></h2></a>
              <p><?php echo $berita->isi_berita; ?></p>
              <p class="readmore"><a href="<?php echo base_url();?>halamanberita/berita/<?php echo $berita->id_berita;?>">Continue Reading &raquo;</a></p>
            </div>
            <br class="clear" />
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
              </div>
        </div>
          <!-- bagian kiri -->


    <!-- bagian kanan -->
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          
      
       
    
        
          <h3><span>Informasi Seputar Kampanye</span></h3>
         

          <div class="latest_post_container">

            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>

            <ul class="latest_postnav">
            <?php foreach ($query_kampanye->result() as $kampanye) { ?>
             
            
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url()."assets/";?>images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"><?php echo $kampanye->nama;?> akan melakukan kampanye pada <?php echo $kampanye->jadwal_kampanye; ?> di <?php echo $kampanye->lokasi_kampanye; ?></a> </div>
                </div>
              </li>
              <?php }?>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
<br/>
           
   
      
  
      
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  <li class="cat-item"><a href="#">Sports</a></li>
                  <li class="cat-item"><a href="#">Fashion</a></li>
                  <li class="cat-item"><a href="#">Business</a></li>
                  <li class="cat-item"><a href="#">Technology</a></li>
                  <li class="cat-item"><a href="#">Games</a></li>
                  <li class="cat-item"><a href="#">Life &amp; Style</a></li>
                  <li class="cat-item"><a href="#">Photography</a></li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
         
         
        </aside>
      </div>
      <!-- bagian kanan -->

    </div>
  </section>
<!-- Bagian konten halaman utama -->

<!-- bagian bawah-->
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; 2016 <a href="index.html">NewsFeed</a></p>
      <p class="developer">Dikembangkan oleh oke je Kelompok 7</p>
    </div>
  </footer>
  <!-- bagian bawah-->
<script src="<?php echo base_url()."assets/";?>js/jquery.min.js"></script> 
<script src="<?php echo base_url()."assets/";?>js/wow.min.js"></script> 
<script src="<?php echo base_url()."assets/";?>js/bootstrap.min.js"></script> 
<script src="<?php echo base_url()."assets/";?>js/slick.min.js"></script> 
<script src="<?php echo base_url()."assets/";?>js/jquery.li-scroller.1.0.js"></script> 
<script src="<?php echo base_url()."assets/";?>js/jquery.newsTicker.min.js"></script> 
<script src="<?php echo base_url()."assets/";?>js/jquery.fancybox.pack.js"></script> 
<script src="<?php echo base_url()."assets/";?>js/custom.js"></script>
<script src="<?php echo base_url()."assets/";?>js/login.js"></script>
<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" align="center">
          <img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
        </div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form">
                    <div class="modal-body">
                <div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Type your username and password.</span>
                            </div>
                <input id="login_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                  </div>
                <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
                  <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
                  <div class="modal-body">
                <div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">Type your e-mail.</span>
                            </div>
                <input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
                  </div>
                <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;">
                    <div class="modal-body">
                <div id="div-register-msg">
                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">Register an account.</span>
                            </div>
                <input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                  </div>
                <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            </div>
                </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
      </div>
    </div>
  </div>
    <!-- END # MODAL LOGIN -->
</body>
</html>