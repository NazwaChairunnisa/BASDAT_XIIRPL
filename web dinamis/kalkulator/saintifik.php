<html>
    <head>
        <title>Kalkulator Saintifik</title>
    </head>
    <body>
        <h1>Kalkulator Saintifik Sederhana</h1>
        <form>
            <input type="text" name="ekspresi">
            <div style="margin-top: 10px">
            <button type="button" onclick="location.href = '?'">Clear</button>
            <button type="Submit">Hitung</button>
            </div>
            <!-- start count--->
            <?php
            if ($_GET):
                $ekspresi = $_GET['ekspresi'];
                $hasil = eval ("return {$ekspresi};"); ?>
                <div style = "margin-top:10px">
                    Hasil <strong><?php echo $hasil?></strong>
                </div>
            <?php
            endif
            ?>
            <!---end count--->
        </form>
    </body>
</html>