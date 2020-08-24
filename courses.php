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
          <li><a href="index.php?halaman=discuss">Discuss</a></li>
          <li><a href="index.php?halaman=quiz">Quiz</a></li>
          <li><a href="index.php?halaman=courses">Courses</a>
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
<?php 
      $sql = "SELECT * from courses ORDER BY id_materi" ;
      $query = $dd->query($sql);
      $i=1;
      while($d = $query->fetch_array()) {
?> 
            <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="course-item">
                <img src="assets/img/<?php echo htmlentities($d['image']);?>" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4><?php echo htmlentities($d['kelas']);?></h4>
                    <h4><?php echo htmlentities($d['jurusan']);?></h4>
                  </div>
  
                  <h3>Materi : <?php echo htmlentities($d['mapel']);?></h3>
                  <h4><?php echo htmlentities($d['nama_file']);?></h4>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                                 
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <a href="download.php?filename=<?=$d['nama_file']?>"class="get-started-btn">Download</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>

<?php 
        $i++; 
      } 
?>
            </div> <!-- End Course Item-->
          </div>
        
    </section><!-- End Courses Section -->



  