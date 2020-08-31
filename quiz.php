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
    <!-- ======= Breadcrumbs ======= -->
    <div clasS="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Quiz</h2>
      <h3>Download Aplikasi Kami dan Asah Kemampuanmu!</h3>
      </div>
    </div><!-- End Breadcrumbs -->


        <!-- ======= Hero Section ======= -->
		  <section class="d-flex justify-content-center align-items-center">
        <?php
          $no=0;
          $query = $mysqli->query("SELECT * FROM tb_download ORDER BY id"); 
          while ($data = $query->fetch_array ()){ 
          $no++
        ?>
		    <div align="center" class="container" data-aos="zoom-in" data-aos-delay="100">
          <?php echo $data['nama_file']; ?>
		      <a href="download-quiz.php?filename=<?=$data['nama_file']?>"class="get-started-btn">Download</a>
		    </div>
        <?php 
        } 
        ?>
		  </section>
 	    <!-- End Hero -->