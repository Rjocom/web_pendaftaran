<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Lembar Formulir</title>
</head>
<body>
    <div class="container">
        <?php
        $file_name = null;

        if(isset($_POST["kirim"])) {
            $nama = $_POST["nama"];
            $alamat = $_POST["alamat"];
            $tempatLahir = $_POST["tempatLahir"];
            $tanggalLahir = $_POST["tanggalLahir"];
            $agama = $_POST["agama"];
            $jenisKelamin = $_POST["jenisKelamin"];
            $goldar = $_POST["goldar"];
            $asalSekolah = $_POST["asalSekolah"];
            $Jak = $_POST["Jak"];
            $tahunLulus = $_POST["tahunLulus"];
            $fakultas = $_POST["fakultas"];
            $jurusan = $_POST["jurusan"];
            $WhatsApp = $_POST["WhatsApp"];
            $email = $_POST["email"];

            if(isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {
                $file_name = $_FILES["foto"]["name"];
                $file_tmp = $_FILES["foto"]["tmp_name"];
                $file_type = $_FILES["foto"]["type"];
                $file_size = $_FILES["foto"]["size"];
                $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

                list($width, $height) = getimagesize($file_tmp);
                $new_width = 354;
                $new_height = 472;
                $tmp_img = imagecreatetruecolor($new_width, $new_height);
                $source_img = null;
                if ($file_ext == "jpg" || $file_ext == "jpeg") {
                    $source_img = imagecreatefromjpeg($file_tmp);
                } elseif ($file_ext == "png") {
                    $source_img = imagecreatefrompng($file_tmp);
                }
                if ($source_img) {
                    imagecopyresampled($tmp_img, $source_img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    imagedestroy($source_img);

                    $new_file_name = "uploads/" . $nama . "." . $file_ext;
                    if ($file_type == "image/jpeg" || $file_type == "image/png" || $file_type == "image/jpg") {
                        imagejpeg($tmp_img, $new_file_name);
                    }

                    move_uploaded_file($file_tmp, $new_file_name);
                } else {
                    $file_name = null;
                    $error_message = "Jenis file tidak didukung. Hanya JPG, JPEG, dan PNG yang diperbolehkan.";
                }
            }
        }
        ?>
        <header>
            <img src="img/logoUN.png" alt="Logo UN" class="logo">
            <h1>FORMULIR PENDAFTARAN MAHASISWA BARU<br>UNIVERSITAS NUSANTARA MANADO</h1>
        </header>

        <section>
        <table>
            <tr>
                <th colspan="2">Data Pribadi</th>
            </tr>
            <tr>
                <td>Nama Lengkap:</td>
                <td><?php echo htmlspecialchars($_POST["nama"] ?? ''); ?></td>
            </tr>
            <tr>
                <td>Alamat Asal:</td>
                <td><?php echo htmlspecialchars($_POST["alamat"] ?? ''); ?></td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir:</td>
                <td><?php echo htmlspecialchars($_POST["tempatLahir"] ?? '') . ', ' . htmlspecialchars($_POST["tanggalLahir"] ?? ''); ?></td>
            </tr>
            <tr>
                <td>Agama:</td>
                <td><?php echo htmlspecialchars($_POST["agama"] ?? ''); ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin:</td>
                <td><?php echo htmlspecialchars($_POST["jenisKelamin"] ?? ''); ?></td>
            </tr>
            <tr>
                <td>Golongan Darah:</td>
                <td><?php echo htmlspecialchars($_POST["goldar"] ?? ''); ?></td>
            </tr>
            <tr>
                <th colspan="2">Pendidikan Terakhir</th>
            </tr>
            <tr>
                <td>Asal Sekolah:</td>
                <td><?php echo htmlspecialchars($_POST["asalSekolah"] ?? ''); ?></td>
            </tr>
            <tr>
                <td>Jurusan SMA/SMK:</td>
                <td><?php echo htmlspecialchars($_POST["Jak"] ?? ''); ?></td>
            </tr>
            <tr>
                <td>Tahun Lulus:</td>
                <td><?php echo htmlspecialchars($_POST["tahunLulus"] ?? ''); ?></td>
            </tr>
            <tr>
                <th colspan="2">Pilihan Program Studi</th>
            </tr>
            <tr>
                <td>Fakultas Yang dipilih:</td>
                <td><?php echo htmlspecialchars($_POST["fakultas"] ?? ''); ?></td>
            </tr>
            <tr>
                <td>Jurusan Yang dipilih:</td>
                <td><?php echo htmlspecialchars($_POST["jurusan"] ?? ''); ?></td>
            </tr>
            <tr>
                <th colspan="2">Kontak</th>
            </tr>
            <tr>
                <td>Nomor Telepon HP/WA:</td>
                <td><?php echo htmlspecialchars($_POST["WhatsApp"] ?? ''); ?></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><?php echo htmlspecialchars($_POST["email"] ?? ''); ?></td>
            </tr>
        </table>
        </section>
        

        <?php
        if(isset($error_message)) {
            echo "<p class='error'>$error_message</p>";
        }

        if($file_name) {
            echo "<h2>Foto</h2>";
            echo "<img src='$new_file_name' alt='Foto Pendaftar'>";
        }
        ?>
    </div>
</body>
</html>
