<html>
    <head>
        <title>d</title>
    </head>
    <body>
        <div class="table">
            <h2>Selamat Datang di BUKU STORE</h2>
            <h1>Data Buku</h1>
            <button><a href="add.php">tambah buku</a></button>
            <br>
            <br>
        <table border="1">
            <tr>
                <th>ID Buku</th>
                <th>ID Katalog</th>
                <th>Judul Buku</th>
                <th>Nama Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Nama Penerbit</th>
                <th>AKSI</th>
            </tr>

<?php
include 'koneksi.php';
$buku = mysqli_query($koneksi, "select * from buku");
foreach($buku as $row){
    echo "<tr>";
    echo "<td>".$id_buku = $row['id_buku']."</td>";
    echo "<td>".$katalog = $row['id_katalog']."</td>";
    echo "<td>".$judul = $row['judul_buku']."</td>";
    echo "<td>".$pengarang = $row['pengarang']."</td>";
    echo "<td>".$penerbit = $row['penerbit']."</td>";
    ?>
    
    <td>
         <a href="proses.php?id_buku<?php echo $row['id_buku'];?>">HAPUS</a>
    </td>

    <?php
    echo "</tr>";
}
?>
        </table>
        </div>
    </body>
</html>