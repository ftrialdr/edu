<?php

            $mysqli = new
            mysqli("localhost","root","","db_download");
            $dd = new mysqli("localhost","root","","db_download");

            if ($dd -> connect_errno) {
              echo "Failed to connect to MySQL: ". $dd -> connect_error;
              exit();
            }
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
          <li><a href="index.php?halaman=courses">Courses</a>
          <li><a href="index.php?halaman=contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="login.php" class="get-started-btn">Join Chat</a>

    </div>
  </header><!-- End Header -->

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Courses</h2>
      <h3>Dapatkan Ratusan Materi Seputar TKJ!</h3>
      </div>
    </div>
    <!-- End Breadcrumbs -->

  <main id="main">


    <!-- ======= Search Engine ======= -->
    <div class="container">

      <!--Panel Form pencarian -->
      <div class="row">
        <div class="col-md-5">
          <div class="panel panel-default">
            <div class="panel-heading"><b>Pencarian</b></div>
            <div class="panel-body">
              <form class="form-inline" >
                <div class="form-group">
                  <select class="form-control" id="Kolom" name="Kolom" required="">
                    <?php
                      $kolom=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";
                    ?>
                    <option value="kelas" <?php if ($kolom=="kelas") echo "selected"; ?>>Kelas</option>
                    <option value="mapel" <?php if ($kolom=="mapel") echo "selected";?>>Materi</option>
                    <option value="nama_file" <?php if ($kolom=="nama_file") echo "selected";?>>Nama File</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="KataKunci" name="KataKunci" placeholder="Kata kunci.." required="" value="<?php if (isset($_GET['KataKunci']))  echo $_GET['KataKunci']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
                <a href="courses.php" class="btn btn-danger">Reset</a>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Tabel data Siswa -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="course-item">
                <img src="assets/img/" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Kelas</h4>
                    <h4>Jurusan</h4>
                  </div>
  
                  <h3>Mapel</h3>
                  <h4>Nama File</h4>
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
         
          $page = (isset($_GET['page']))? (int) $_GET['page'] : 1;
          
          $kolomCari=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";
         
          $kolomKataKunci=(isset($_GET['KataKunci']))? $_GET['KataKunci'] : "";

          // Jumlah data per halaman
          $limit = 5;

          $limitStart = ($page - 1) * $limit;
          
          //kondisi jika parameter pencarian kosong
          if($kolomCari=="" && $kolomKataKunci==""){
            $SqlQuery = mysqli_query($dd, "SELECT * FROM courses LIMIT ".$limitStart.",".$limit);
          }else{
            //kondisi jika parameter kolom pencarian diisi
            $SqlQuery = mysqli_query($dd, "SELECT * FROM courses WHERE $kolomCari LIKE '%$kolomKataKunci%' LIMIT ".$limitStart.",".$limit);
          }
          
          $no = $limitStart + 1;
          
          while($d = mysqli_fetch_array($SqlQuery)){ 
          ?>
            <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="course-item">
                <img src="assets/img/<?php echo $d['image']; ?>" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4><?php echo $d['kelas']; ?></h4>
                    <h4><?php echo $d['jurusan']; ?></h4>
                  </div>
  
                  <h3><?php echo $d['mapel']; ?></h3>
                  <h4><?php echo $d['nama_file']; ?></h4>
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
          }
          ?>
      <div align="right">
        <ul class="pagination">
          <?php
            // Jika page = 1, maka LinkPrev disable
            if($page == 1){ 
          ?>        
            <!-- link Previous Page disable --> 
            <li class="disabled"><a href="#">Previous</a></li>
          <?php
            }
            else{ 
              $LinkPrev = ($page > 1)? $page - 1 : 1;  

              if($kolomCari=="" && $kolomKataKunci==""){
              ?>
                <li><a href="courses.php?page=<?php echo $LinkPrev; ?>">Previous</a></li>
           <?php     
              }else{
            ?> 
              <li><a href="courses.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $LinkPrev;?>">Previous</a></li>
             <?php
               } 
            }
          ?>

          <?php
            //kondisi jika parameter pencarian kosong
            if($kolomCari=="" && $kolomKataKunci==""){
              $SqlQuery = mysqli_query($dd, "SELECT * FROM courses");
            }else{
              //kondisi jika parameter kolom pencarian diisi
              $SqlQuery = mysqli_query($dd, "SELECT * FROM courses WHERE $kolomCari LIKE '%$kolomKataKunci%'");
            }     
          
            //Hitung semua jumlah data yang berada pada tabel Sisawa
            $JumlahData = mysqli_num_rows($SqlQuery);
            
            // Hitung jumlah halaman yang tersedia
            $jumlahPage = ceil($JumlahData / $limit); 
            
            // Jumlah link number 
            $jumlahNumber = 1; 

            // Untuk awal link number
            $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
            
            // Untuk akhir link number
            $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
            
            for($i = $startNumber; $i <= $endNumber; $i++){
              $linkActive = ($page == $i)? ' class="active"' : '';

              if($kolomCari=="" && $kolomKataKunci==""){
          ?>
              <li<?php echo $linkActive; ?>><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

          <?php
            }else{
              ?>
              <li<?php echo $linkActive; ?>><a href="index.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
              <?php
            }
          }
          ?>
          
          <!-- link Next Page -->
          <?php       
           if($page == $jumlahPage){ 
          ?>
            <li class="disabled"><a href="#">Next</a></li>
          <?php
          }
          else{
            $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
           if($kolomCari=="" && $kolomKataKunci==""){
              ?>
                <li><a href="courses.php?page=<?php echo $linkNext; ?>">Next</a></li>
           <?php     
              }else{
            ?> 
               <li><a href="courses.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $linkNext; ?>">Next</a></li>
          <?php
            }
          }
          ?>
        </ul>
      </div>
    </div>
    <!-- ======= Search Engine ======= -->


