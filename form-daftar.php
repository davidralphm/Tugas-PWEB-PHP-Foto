<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Sekolah Koding</title>

    <meta charset="UTF-8">
    <meta name="author" content="David R">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container row m-auto justify-content-center">
        <div class="col-xs">
        <header>
            <h3 class="text-center mt-3 mb-4">Formulir Pendaftaran Siswa Baru Sekolah Koding</h3>
        </header>
 
        <form action="proses-pendaftaran.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama Lengkap: </label>
                <input type="text" class="form-control" name="nama" placeholder="Nama lengkap..."/>
            </div>
            
            <div class="form-group">
                <label for="alamat">Alamat: </label>
                <textarea class="form-control" name="alamat" placeholder="Alamat tempat tinggal..."></textarea>
            </div>
            
            <fieldset class="form-group">
                <legend class="col-form-label">Jenis Kelamin</legend>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="laki" name="jenis_kelamin" value="laki-laki">
                    <label class="form-check-label" for="laki">
                        Laki laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="perempuan"> 
                    <label class="form-check-label" for="perempuan">
                        Perempuan
                    </label>
                </div>
            </fieldset>
            
            <div class="form-group">
                <label for="agama">Agama: </label>
                <select class="form-control" name="agama">
                    <option>Islam</option>
                    <option>Kristen Protestan</option>
                    <option>Katolik</option>
                    <option>Hindu</option>
                    <option>Buddha</option>
                    <option>Khonghucu</option>
                    <option>Atheis</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="sekolah_asal">Nama Sekolah Asal: </label>
                <input type="text" class="form-control" name="sekolah_asal" placeholder="Nama sekolah asal..." />
            </div>

            <div class="form-group">
                <label for="foto">Foto: </label>
                <input type="file" name="foto">
            </div>

            <div class="form-group">
                <input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Daftar" name="daftar" />
            </div>
        </form>
        </div>
    </div>
</body>
</html>