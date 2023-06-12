<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Data Asisten</title>
    
</head>
<body class="bg-info p-3">
    <b><h1>Pendaftaran Asisten Pratikum</h1></b>
    <table class="table table-bordered">
    <tr>

            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Praktikum</th>
            <th>IPK</th>
        </tr>
        <?php $no = 1; foreach($asisten as $row): ?>
        <tr>
            <td><?= $row['no'] ?></td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['praktikum'] ?></td>
            <td><?= $row['ipk'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="/asisten/simpan">Menambah data asisten</a></br>
    <a href="/asisten/update">Update data asisten</a></br>
    <a href="/asisten/hapus"> Delete data asisten</a></br>
</body>
</div>

</html>
