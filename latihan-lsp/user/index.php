<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>
<h1>Selamat Datang Di Index</h1>
        <h3>Halaman User</h3>

        <!-- Cek halaman apakah sudah login atau belum -->
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:../login.php?pesan=belum_login');
        }
        ?>
        <!-- end -->
        
        <h4>Welcome <?php echo $_SESSION['user']?> anda telah login</h4>
    <div class="table">
        <h1>Data Buku</h1>
    <table border="1">
        <tr>
            <th>ID Buku</th>
            <th>ID Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>

            <?php
            include 'koneksi.php';
            $buku = mysqli_query($koneksi, "select * from buku");
            foreach($buku as $row){
                echo "<tr>";
                echo "<td>".$row['id_buku']."</td>";
                echo "<td>".$row['id_katalog']."</td>";
                echo "<td>".$row['judul_buku']."</td>";
                echo "<td>".$row['pengarang']."</td>";
                echo "<td>".$row['thn_terbit']."</td>";
                echo "<td>".$row['penerbit']."</td>";
               
            }
            ?>
        </tr>
    </table>
    <a href="../logout.php">LOGOUT</a>
    </div>
</body>
</html>