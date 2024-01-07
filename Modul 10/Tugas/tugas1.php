<!DOCTYPE html>
<html>
    <head>
        <title>Tugas String dan Tanggal</title>
    </head>
    <body>
        <form method="post" action="">
            <table border="2">
                <tr>
                    <td>
                        <table border="0">
                            <tr>
                                <td colspan="4"><b>Masukkan Nama, Email dan Password<br>
                                Default Nama: belajar, Email: test@gmail.com dan Password: madiun <br>
                                <u>Isisan Data:</u></b>
                                </td>
                            </tr>

                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td colspan="2"><input type="text" name="nama" /></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td colspan="2"><input type="text" name="email" /></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td colspan="2"><input type="password" name="password" /></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td colspan="2"><input type="submit" value="CEK" /></td>
                            </tr>   
                        </table>
                    </td>
                </tr>
            </table>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_POST["email"];
                $password = $_POST["password"];

                if (empty($email)) {
                    print("Harap mengisi email <br>\n");
                } else {
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        print("Alamat email $email valid<br>\n");
                    } else {
                        print("Alamat email $email tidak valid<br>\n");
                    }
                }

                if (isset($password)) {
                    $nama = "belajar";
                    $pass_valid = crypt("madiun", $nama);
                    $enkripsi = crypt($password, $nama);
                    
                    if ($pass_valid == $enkripsi) {
                        print("Password valid");
                    } else {
                        print("Password salah");
                    }
                }
            }
        ?>
    </body>
</html>