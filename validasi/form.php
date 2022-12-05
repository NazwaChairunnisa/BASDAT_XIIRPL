<?php
    $time = (object) @$_GET['time'];
    $errors = (object) @$_GET['errors'];
?>
<html>
    <head>
        <title>Validasi Form</title>
    </head>
    <body>
        <form action="proses.php">
            <div>
                <label>Nama(Harus Input Nama)</label><br>
                <input type="text" value="<?php echo @$time->nama?>"name="nama">
                <?php
                if (@$errors->nama):?>
                <div style="color: red"><?php echo $errors->nama[0]?></div>
                <?php
                endif;?>
            </div>
            <div style= "margin-top:10px;">
                <label>Email(Harus Input @)</label><br>
                <input type="text" value="<?php echo @$time->email?> "email="email">
                <?php
                if (@$errors->email):?>
                <div style="color: red"><?php echo $errors->email[0]?></div>
                <?php
                endif;?>
            </div>
            <div style= "margin-top:10px;">
                <label>Username(Tidak Boleh Regex)</label><br>
                <input type="text" value="<?php echo @$time->username?>"username="username">
                <?php
                if (@$errors->username):?>
                <div style="color: red"><?php echo $errors->username[0]?></div>
                <?php
                endif;?>
            </div>
            <div style= "margin-top:10px;">
                <label>Usia(Harus Angka)</label><br>
                <input type="text" value="<?php echo @$time->usia?>"usia="usia">
                <?php
                if (@$errors->usia):?>
                <div style="color: red"><?php echo $errors->usia[0]?></div>     
                <?php
                endif;?>
            </div>
            <div style= "margin-top:10px;">
                <button>Submit</button>
            </div>
        </form>
    </body>
</html>