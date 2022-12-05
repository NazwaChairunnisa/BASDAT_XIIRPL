<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form Pendaftaran</title>
    
</head>
<body>
    <h3>Data Pendaftaran</h3>

<?php
        $files = $_FILES;
$folder_upload = "./assets/foto";

if (!is_dir($folder_upload)){
    mkdir($folder_upload, 0777, $rekursif = true);
}

$fileFoto = (object) @$_FILES['foto'];


$uploadFotoSukses = move_uploaded_file(
    $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
);

if($uploadFotoSukses){
    $link = "{$folder_upload}/{$fileFoto->name}";
    echo "Sukses upload foto: <a href = '{$link}'> {$fileFoto->name}</a>";
    echo "<br>";
}

if($fileFoto->size > 1000 * 2000){
    die("File tidak boleh lebih dari 2MB");
}
?>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>Nama</td>
                <td><?= @$_POST["name"]; ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><?= @$_POST["jurusan"]; ?></td>
            </tr>
            <tr>
                <td>Nama Ayah</td>
                <td><?= @$_POST["nama_ayah"]; ?></td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td><?= @$_POST["nama_ibu"]; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= @$_POST["alamat"]; ?></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><?= @$_POST["foto"]; ?></td>
            </tr>
            
        </table>
        

</body>
</html>