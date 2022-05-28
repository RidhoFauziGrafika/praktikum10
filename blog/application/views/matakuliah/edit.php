<div class="container">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2 class="text-center mt-3">Form Edit Mata Kuliah</h2>
    <?= form_open("matakuliah/save") ?>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-book"></i>
                    </div>
                </div>
                <input id="nama" name="nama" placeholder="Masukkan Nama Mata Kuliah" type="text" class="form-control" required="required" value="<?= $obj_matkul->nama ?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="ipk" class="col-4 col-form-label">SKS</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-paper-plane-o"></i>
                    </div>
                </div>
                <input id="sks" name="sks" type="text" class="form-control" required="required" placeholder="Masukkan SKS Mata Kuliah" value="<?= $obj_matkul->sks ?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="ipk" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-book"></i>
                    </div>
                </div>
                <input id="kode" name="kode" type="text" class="form-control" required="required" placeholder="Masukkan Kode Mata Kuliah" value="<?= $obj_matkul->kode ?>">
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