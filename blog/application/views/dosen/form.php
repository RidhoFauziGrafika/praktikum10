<div class="container">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Form Input Dosen</h2>
    <?= form_open("dosen/save") ?>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-book"></i>
                    </div>
                </div>
                <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" class="form-control" required="required">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Jenis Kelamin</label>
        <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_0" type="radio" required="required" class="custom-control-input" value="Laki-Laki">
                <label for="gender_0" class="custom-control-label">L</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_1" type="radio" required="required" class="custom-control-input" value="Perempuan">
                <label for="gender_1" class="custom-control-label">P</label>
            </div>
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
                <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" type="text" class="form-control" required="required">
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
                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required="required">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="ipk" class="col-4 col-form-label">NIDN</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-paper-plane-o"></i>
                    </div>
                </div>
                <input id="nidn" name="nidn" type="text" class="form-control" required="required" placeholder="Masukkan Nidn Anda">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="ipk" class="col-4 col-form-label">Pendidikan</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-book"></i>
                    </div>
                </div>
                <input id="pendidikan" name="pendidikan" type="text" class="form-control" required="required" placeholder="Masukkan Pendidikan Anda">
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