<div class="container">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Form Edit Mahasiswa</h2>
    <?= form_open("mahasiswa/save") ?>
    <div class="form-group row">
        <label for="nim" class="col-4 col-form-label">NIM</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-500px"></i>
                    </div>
                </div>
                <input id="nim" name="nim" placeholder="Masukkan Nim Anda" type="text" required="required" class="form-control" value="<?= $obj_mahasiswa->nim ?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-book"></i>
                    </div>
                </div>
                <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" class="form-control" value="<?= $obj_mahasiswa->nama ?>" required="required">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Jenis Kelamin</label>
        <div class="col-8">
            <input id="gender" name="gender" placeholder="Masukkan Gender Anda" type="text" class="form-control" value="<?= $obj_mahasiswa->gender ?>" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                </div>
                <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" type="text" class="form-control" value="<?= $obj_mahasiswa->tmp_lahir ?>" required="required">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control" value="<?= $obj_mahasiswa->tgl_lahir ?>" required="required">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="ipk" class="col-4 col-form-label">IPK</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-paper-plane-o"></i>
                    </div>
                </div>
                <input id="ipk" name="ipk" type="text" class="form-control" value="<?= $obj_mahasiswa->ipk ?>" required="required">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    <?= form_close() ?>
</div>