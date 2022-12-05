<html>
    <head>
        <title> Menggunakan Metode POST</title>
    </head>
    <body>
        <h1> Menggunakan Metode POST</h1>
        <form method="$_POST">
            <!---Passing Data di dalam body request tanpa menampilkan secara url--->
            <div>
                <label>Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label>Passwoard</label>
                <input type="password" name="password">
            </div>
            <div>
                <button>Login</button>
            </div>
            <?php
                $email = @$_POST['email'];
                $password = @$_GET['password'];

            echo "Email= {$email} <br>";
            echo "password= {$password}";
            ?>
        </form>
    </body>
</html>