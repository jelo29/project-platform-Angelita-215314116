<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-info p-3">

    <h1>STATUS KELULUSAN MAHASISWA</h1>
    <p>Mahasiswa dengan nama <?= $nama; ?> NIM <?= $nim; ?> berhasil menyelesaikan studi S1 dengan predikat <?= $status; ?></p>

    <?= $this->renderSection('content'); ?>

    </div>
</body>


</html>