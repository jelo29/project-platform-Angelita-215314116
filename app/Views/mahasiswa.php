<!DOCTYPE html>

<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Data Mahasiswa</title>
</head>
<body  class="bg-info p-3">

<form action="./proses" method="get">
      <b> NIM: <input type="text" name="nim" required></b><br>
      <b> Nama: <input type="text" name="nama" required></b><br>
      <b> Status Kelulusan:</b>
    <select name="status" id="status" required>
        <option value="MEMUASKAN">Memuaskan</option>
        <option value="KURANG MEMUASKAN">Kurang Memuaskan</option>
        <option value="BAIK">Baik</option>
    </select> <br>
    <input type="submit" name="tambah" value="Submit Data">
</form>
</body>

</html>