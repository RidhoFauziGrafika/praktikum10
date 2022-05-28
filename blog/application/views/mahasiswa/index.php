<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <script>
        function hapusMahasiswa(pesan) {
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php

$username = $this->session->userdata('username');
if ($username) {
    echo "<h2> Selamat datang $username </h2>";
}

?>

<body>
    <div class="container col-md-12 w-75">
        <h3 class="text-center">Daftar Mahasiswa</h3>
        <table class="table table-striped text-center container-fluid">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>IPK</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($mahasiswa as $mhs) {
                ?>
                    <tr>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $mhs->nim  ?></td>
                        <td><?php echo $mhs->nama ?></td>
                        <td><?php echo $mhs->gender ?></td>
                        <td><?php echo $mhs->ipk ?></td>
                        <td>
                            <a href="<?php echo base_url("index.php/mahasiswa/detail/$mhs->id") ?>" class="btn btn-info">Detail</a>
                            <a href="<?php echo base_url("index.php/mahasiswa/edit/$mhs->id") ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url("index.php/mahasiswa/delete/$mhs->id") ?>" class="btn btn-danger" onclick="return hapusMahasiswa('Apakah Anda yakin ingin menghapus data <?= $mhs->nama ?>?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
        <a href="<?php echo base_url("index.php/mahasiswa/form/$mhs->id") ?>" style="text-decoration:none;" class="btn btn-primary">Tambah</a>
    </div>
</body>

</html>