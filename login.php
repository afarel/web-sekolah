

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">

</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
            <span class="logo">
                <img src="/styles/logo otm.jpeg" class="logo-img" alt="Logo">
            </span>
            <div class="nav-links">
                <a href="/index.php">Beranda</a>
                <a href="/guru&staff.php">Guru & Staff</a>
                <a href="login.php">Pendaftaran</a>
                <a href="about.html">About</a>
            </div>
            </div>
        </div>
    </nav>
    <section class="box-formulir">
		
		<h2>Formulir Pendaftaran Siswa Baru SMK</h2>

		<!-- bagian form -->
		<form action="" method="post">
			
			<div class="box">
				<table border="0" class="table-form">
					<tr>
						<td>Tahun Ajaran</td>
						<td>:</td>
						<td>
							<input type="text" name="th_ajaran" class="input-control" value="2024/2025" readonly>
						</td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td>:</td>
						<td>
							<select class="input-control" name="jurusan">
								<option value="">--Pilih--</option>
								<option value="Teknik Listrik">rekayasa perangkat lunak</option>
                                <option value="Desain komunikasi visual">Desain komunikasi visual</option>
								<option value="Teknik Las">Teknik komputer jaringan</option>
								<option value="Teknik Otomotif">Teknik Otomotif</option>
                                <option value="Teknik kendaraan ringan">Teknik kendaraan ringan</option>
							</select>
						</td>
					</tr>
				
			

			<h3>Data Diri Calon Siswa</h3>
			
				
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td>
							<input type="text" name="nm" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td>
							<input type="text" name="tmp_lahir" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td>
							<input type="date" name="tgl_lahir" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
                            <label class="input-radio">
                                <input type="radio" name="jk" class="input-control" value="Laki-laki"> Laki-laki
                            </label>
							<label class="input-radio">
                                <input type="radio" name="jk" class="input-control" value="Perempuan"> Perempuan
                            </label>
						</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>:</td>
						<td>
							<select class="input-control" name="agama">
								<option value="">--Pilih--</option>
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Hindu">Hindu</option>
								<option value="Buddha">Buddha</option>
								<option value="Katolik">Katolik</option>
								<option value="Khonghucu">Khonghucu</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Alamat Lengkap</td>
						<td>:</td>
						<td>
							<textarea class="input-control" name="alamat"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
						</td>
					</tr>
				</table>
			</div>

		</form>

	</section>

</body>
</html>