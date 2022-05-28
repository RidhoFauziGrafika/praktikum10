<div class="container">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Form Edit Dosen</h2>
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
                <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" class="form-control" required="required" value="<?= $obj_dosen->nama ?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Jenis Kelamin</label>
        <div class="col-8">
            <input id="gender" name="gender" placeholder="Masukkan Gender Anda" type="text" class="form-control" required="required" value="<?= $obj_dosen->gender ?>">
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
                <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" type="text" class="form-control" required="required" value="<?= $obj_dosen->tmp_lahir ?>">
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
                <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control" required="required" value="<?= $obj_dosen->tgl_lahir ?>">
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
                <input id="nidn" name="nidn" type="text" class="form-control" required="required" placeholder="Masukkan Nidn Anda" value="<?= $obj_dosen->nidn ?>">
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
                <input id="pendidikan" name="pendidikan" type="text" class="form-control" required="required" placeholder="Masukkan Pendidikan Anda" value="<?= $obj_dosen->pendidikan ?>">
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