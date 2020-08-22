<?php
            $mysqli = new
            mysqli("localhost","root","","db_download");

            //check connection         
            if ($mysqli -> connect_errno) {
              echo "Failed to connect to MySQL:
              ". $mysqli -> connect_error;
              exit();
            }
?>  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">


      <h1 class="logo mr-auto"><a href="index.php">EDUCATKJ</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php?halaman=quiz">Quiz</a></li>
          <li class="drop-down"><a href="index.php?halaman=courses">Courses</a>
            <ul>
              <li><a href="#">Grade</a></li>
                <li class="drop-down"><a href="#">X</a>
                <ul>
                  <li><a href="courses.php?halaman=ddg">Dasar Desain Grafis</a></li>
                  <li><a href="courses.php?halaman=kjd">Komputer dan Jaringan Dasar</a></li>
                  <li><a href="courses.php?halaman=pd">Pemrograman Dasar</a></li>
                  <li><a href="courses.php?halaman=skd">Simulasi Komunikasi dan Digital</a></li>                
                  <li><a href="courses.php?halaman=sk">Sistem Komputer</a></li>
                  <li><a href="courses.php?halaman=so">Sistem Operasi</a></li>
                  </ul>
                <li class="drop-down"><a href="#">XI</a>
                <ul>
                  <li><a href="courses.php?halaman=aij">Administrasi Infrastruktur Jaringan</a></li>
                  <li><a href="courses.php?halaman=asj">Administrasi Sistem Jaringan</a></li>
                  <li><a href="courses.php?halaman=tlj">Teknologi Layanan Jaringan</a></li>
                  <li><a href="courses.php?halaman=tw">Teknologi WAN</a></li>
                  </ul>
                <li class="drop-down"><a href="#">XII</a>
                <ul>
                  <li><a href="courses.php?halaman=aij_2">Administrasi Infrastruktur Jaringan</a></li>
                  <li><a href="courses.php?halaman=asj_2">Administrasi Sistem Jaringan</a></li>
                  <li><a href="courses.php?halaman=tlj_2">Teknologi Layanan Jaringan</a></li>
                  <li><a href="courses.php?halaman=pkk">Produk Kreatif dan Kewirausahaan</a></li>
                  </ul>
              </li>
            </ul>
          </li>
          <li><a href="index.php?halaman=help">Help</a></li>
          <li><a href="index.php?halaman=contact">Contact</a></li>


        </ul>
      </nav><!-- .nav-menu -->

      <a href="login.php" class="get-started-btn">Join Chat</a>

    </div>
  </header><!-- End Header -->


  <main id="main">

    

<!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
        
        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/ddg.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>X</h4>
                </div>

                <h3><a href="courses.php?halaman=ddg">Dasar Desain Grafis</a></h3>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                               
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;92
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;101
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/kjd.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>X</h4>
                </div>

                <h3><a href="courses.php?halaman=kjd">Komputer dan Jaringan Dasar</a></h3>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;115
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;185
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/pd.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>X</h4>
                </div>

                <h3><a href="courses.php?halaman=pd">Pemrograman Dasar</a></h3>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;104
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;123
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Courses Section -->



  