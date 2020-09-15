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
        
    if(isset($_POST['submit-search'])) {
        $_SESSION['session_pencarian'] = $_POST['keyword'];
        $keyword = $_SESSION['session_pencarian'];
    }else {
        $keyword = ['session_pencarian'];
    }

    $sql = mysqli_query($koneksi, "SELECT * from courses WHERE kelas, jurusan, mapel AND nama_file LIKE '%$keyword%' ORDER BY id_materi ASC");
    $query = $dd->query($sql);
    while($d = $query->fetch_array()) {
?>

    include
    <!-- ======= Search ======= -->
    <div class="container">
            <ul class="list-group" id="myList">
                <li class="list-group-item">First item</li>
                <li class="list-group-item">Second item</li>
                <li class="list-group-item">Third item</li>
                <li class="list-group-item">Fourth item</li>
            </ul>
        <?php if(mysqli_num_rows($query)) {?>
            <?php while($row = mysqli_fetch_array($query)) {?>
                </br>
                <ul class="list-group" id="myList">
                    <li class="list-group-item"><?php echo htmlentities($dd['kelas']);?></li>
                    <li class="list-group-item"><?php echo htmlentities($dd['jurusan']);?></li>
                    <li class="list-group-item"><?php echo htmlentities($dd['mapel']);?></li>
                    <li class="list-group-item"><?php echo htmlentities($dd['nama_file']);?></li>
                    <li><button class="btn btn-info"><a href="download.php?filename=<?=$dd['nama_file']?>">Download</a></button></li>
                </ul>
            <?php } ?>
        <?php } ?>
    </div>
    <!-- ======= Search ======= -->
    
    <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>