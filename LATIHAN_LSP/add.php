<html>
    <head>
        <title>add data</title>
    </head>
    <body>
        <div class="container">
            <h1>Tambah Data Buku</h1>

            <form action="proses-tambah.php" method="post">
            <label>ID_Buku</label>
            <input type="number" name="buku">
            <br>
           <label>ID_Katalog</label>
            <input type="number" name="id_katalog">
            <br>
           <label>Judul_Buku</label>
            <input type="text" name="judul_buku">
            <br>
           <label>Nama Pengarang</label>
            <input type="text" name="pengarang">
            <br>
           <label>Tahun_Terbit</label>
            <input type="date" name="tahun_terbit">
            <br>
           <label>Nama Penerbit</label>
            <input type="text" name="penerbit">
            <br>
            <input type="submit" value="submit">
            <br>
            <input type="reset" value="cancel">
            <br>
            </form>
        </div>
    </body>
</html>