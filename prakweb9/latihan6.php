<!DOCTYPE html>
<html>
    <head>
        <title>LATIHAN 6 PEMROGRAMAN WEB</title>
    </head>
    <body>
        <form method ="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type ="text" name ="nama"/></td>
                </tr>

                <tr>
                    <td>Mata Kuliah</td>
                    <td>:</td>
                    <td>
                        <select name= "mk">
                            <option value= "">-----Pilih Mata Kuliah-----</option>
                            <option value= "Pemrograman Terstruktur">Pemrograman Terstruktur</option>
                            <option value= "Pemrograman Web">Pemrograman Web</option>
                            <option value= "Pemrograman Berorientasi Projek">Pemrograman Berorientasi Projek</option>
                            <option value= "Algortitma">Algoritma</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type ="radio" name ="jk" value ="Laki-Laki"/>Laki-Laki<br/>
                        <input type ="radio" name ="jk" value ="Perempuan"/>Perempuan<br/>
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type ="email" name ="email"/></td>
                </tr>

                <tr align ="center">
                    <td colspan ="3"><input type ="submit" name ="submit" value ="Simpan"/>&nbsp;
                    <input type ="reset" name ="Reset" value ="Reset"/></td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $nama = $_POST['nama'];
                $mk = $_POST['mk'];
                $jk = $_POST['jk'];
                $email = $_POST['email'];

                echo "INI SESUAI INPUTAN DARI FORM DIATAS <br/>";
                echo "Nama : ". $nama;
                echo "<br/>Mata Kuliah : ". $mk;
                echo "<br/>Jenis Kelamin : ". $jk;
                echo "<br/>Email : ". $email;
            }
        ?>
    </body>
</html>                            