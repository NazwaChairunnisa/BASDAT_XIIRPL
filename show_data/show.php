<html>
    <head>
        <title>Show Data</title>
    </head>
    <body>
        <h1>Menampilkan Data Anggota</h1>
        <table border="1">
        <tr>
            <th>ID_Anggota</th>
            <th>Nama</th>
            <th>No Telpon</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>
        <!-- Menampilkan Data Table -->
        <?php
        include 'koneksi.php';
        $anggota = mysqli_query($koneksi, "select * from anggota")
        foreach ($anggota as $row){
            echo "<tr>"
            echo "<td>".$id = $row['id_anggota']."</td>";
            echo "<td>".$nama = $row['nama']."</td>";
            echo "<td>".$no = $row['no_telp']."</td>";
            echo "<td>".$alamat = $row['alamat']."</td>";
            echo "<td>".$email = $row['email']."</td>";
            echo "</tr>"
        }
        ?>
        </table>
        
        <h1>Menampilkan Data Buku</h1>
        <table border="1">
        <tr>
            <th>ID_Buku</th>
            <th>Katalog</th>
            <th>Judul_Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
        </tr>
            <!-- Menampilkan Data Buku -->
        <?php
        include 'koneksi.php';
        $buku = mysql_query($koneksi, "select * from buku")
        foreach ($buku as $row){
            echo "<tr>"
            echo "<td>".$id = $row['id_buku']."</td>";
            echo "<td>".$katalog = $row['katalog']."</td>";
            echo "<td>".$judul_buku = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            echo "</tr>"
        }
        ?>
        </table>

        <h1>coba gabungin</h1>
        <?php $buku = mysql_query($koneksi, "select * from buku");?>
    </body>
</html>