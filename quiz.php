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

  <?php 
        $sql = "SELECT * from courses ORDER BY id_materi" ;
        $query = $dd->query($sql);
        $i=1;
        while($d = $query->fetch_array()) {
  ?> 
        <!-- ======= Hero Section ======= -->
		  <section class="d-flex justify-content-center align-items-center">
		    <div align="center" class="container" data-aos="zoom-in" data-aos-delay="100">
		      <a href="download.php?filename=<?=$d['nama_file']?>"class="get-started-btn">Download</a>
		    </div>
		  </section>
 	    <!-- End Hero -->