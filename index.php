<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/gaya.css">
    <title>Formulir Pendaftaran Mahasiswa</title>
</head>
<body>
    <header>
        <h1>FORMULIR PENDAFTARAN MAHASISWA BARU<br>UNIVERSITAS NUSANTARA MANADO</h1>
        <div class="logo-contain"><img src="img/logoUN.png" alt="logo UN" class="logo"></div>
    </header>

    <section id="form-section">
       <h2>Isi Form</h2>
       <form action="index-action.php" method="POST" enctype="multipart/form-data">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Masukan Nama" required>

                <label for="alamat">Alamat Asal</label>
                <textarea name="alamat" id="alamat" placeholder="Masukan Alamat" maxlength="150" required></textarea>

                <label for="tempatLahir">Tempat Lahir</label>
                <input type="text" name="tempatLahir" id="tempatLahir" placeholder="Masukan Tempat Lahir" required>

                <label for="tanggalLahir">Tanggal Lahir</label>
                <input type="date" name="tanggalLahir" id="tanggalLahir" placeholder="Masukan Tanggal Lahir" required><br>

                <label for="agama">Agama</label>
                <select name="agama" id="agama" required>
                    <option value="" disabled selected>-- Pilih Agama --</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Kristen Katolik">Kristen Katolik</option>
                    <option value="Islam">Islam</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                </select>

                <label for="jenisKelamin">Jenis Kelamin</label>
                <select name="jenisKelamin" id="jenisKelamin" required>
                    <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>

                <label for="goldar">Golongan Darah</label>
                <select name="goldar" id="goldar" required>
                    <option value="" disabled selected>-- Pilih Golongan Darah --</option>
                    <option value="O">O</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                </select>

                <label for="asalSekolah">Asal Sekolah</label>
                <input type="text" name="asalSekolah" id="asalSekolah" placeholder="Masukan Asal Sekolah" required>

                <label for="Jak">Jurusan SMA/SMK</label>
                <input type="text" name="Jak" id="Jak" placeholder="Masukan Jurusan SMA/SMK" required>

                <label for="tahunLulus">Tahun Lulus</label>
                <select name="tahunLulus" id="tahunLulus" required>
                    <option value="" disabled selected>-- Pilih Tahun Lulus --</option>
                </select>

                <label for="fakultas">Fakultas yang dipilih</label>
                <select id="fakultas" name="fakultas" required>
                    <option value="" disabled selected>-- Pilih Fakultas --</option>
                    <option value="Ilmu Komputer">Ilmu Komputer</option>
                    <option value="Teknik">Teknik</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="Sastra">Sastra</option>
                    <option value="Pertanian">Pertanian</option>
                </select>

                <label for="jurusan">Jurusan yang dipilih</label>
                <select id="jurusan" name="jurusan" required>
                    <option value="" disabled selected>-- Pilih Jurusan --</option>
                </select>

                <label for="WhatsApp">Nomor Telepon HP/WA</label>
                <input type="tel" id="WhatsApp" name="WhatsApp" placeholder="08xxxxxxxxxx" pattern="[0-9]{8,12}" required>
                
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="contoh@gmail.com" required>

                <label for="foto">Upload foto Diri 4x6</label>
                <input type="file" name="foto" id="foto" required>

                

                <div class="button-group">
                    <input type="submit" name="kirim" value="Kirim">
                <input type="reset" value="Reset">
            </div>
                
        </form>
    </section>

    <script src="script.js"></script>
</body>
</html>

