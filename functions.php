      <?
        function cari ($keyword) {
            $query = "SELECT * FROM courses
            WHERE 
            kelas LIKE '$keyword'% OR
            mapel LIKE '$keyword'% OR
            nama_file LIKE '$keyword'% 
            ";
            return query($query);
        }
      ?>
