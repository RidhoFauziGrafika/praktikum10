<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script>
        function hapusDosen(pesan) {
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<?php

$username = $this->session->userdata('username');
if ($username) {
    echo "<h2> Selamat datang $username </h2>";
}

?>

<body>
    <div class="container col-md-12 w-75">
        <h3 class="container-fluid text-center">Daftar Dosen</h3>
        <table class="table table-striped container-fluid text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>nama</th>
                    <th>nidn</th>
                    <th>pendidikan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($dosen as $dsn) {
                ?>
                    <tr>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $dsn->nama  ?></td>
                        <td><?php echo $dsn->nidn  ?></td>
                        <td><?php echo $dsn->pendidikan ?></td>
                        <td>
                            <a href="<?php echo base_url("index.php/dosen/detail/$dsn->id") ?>" class="btn btn-info">Detail</a>
                            <a href="<?php echo base_url("index.php/dosen/edit/$dsn->id") ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url("index.php/dosen/delete/$dsn->id") ?>" class="btn btn-danger" onclick="return hapusDosen('Apakah Anda yakin ingin menghapus data <?= $dsn->nama ?>?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
        <a href="<?php echo base_url("index.php/dosen/form/$dsn->id") ?>" class="btn btn-primary">Tambah</a>
    </div>
</body>

</html>