<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <h3 class="container-fluid text-center">Detail Dosen</h3>
    <table class="table table-striped w-75 container-fluid text-center">
        <thead>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Gender</th>
                <th>nidn</th>
                <th>pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $guru->id ?></td>
                <td><?php echo $guru->nama ?></td>
                <td><?php echo $guru->tmp_lahir ?></td>
                <td><?php echo $guru->tgl_lahir ?></td>
                <td><?php echo $guru->gender ?></td>
                <td><?php echo $guru->nidn  ?></td>
                <td><?php echo $guru->pendidikan ?></td>
            </tr>
        </tbody>
    </table>

</body>

</html>