<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penilaian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-left mb-4">Form Nilai Mahasiswa</h2>
        <form action="nilai-mahasiswa.php" method="POST" class="border p-4 rounded">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="*Putri Ratnaningtyas">
            </div>
            <div class="mb-3">
                <label for="matkul" class="form-label">Mata Kuliah:</label>
                <select class="form-select" id="matkul" name="matkul">
                    <option value="DDP">Dasar Dasar Pemrograman</option>
                    <option value="DB1">Basis Data</option>
                    <option value="WEB1">Pemrograman Web</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nilai_uts" class="form-label">Nilai UTS:</label>
                <input type="number" class="form-control" id="nilai_uts" name="nilai_uts">
            </div>
            <div class="mb-3">
                <label for="nilai_uas" class="form-label">Nilai UAS:</label>
                <input type="number" class="form-control" id="nilai_uas" name="nilai_uas">
            </div>
            <div class="mb-3">
                <label for="nilai_tugas" class="form-label">Nilai Tugas/Praktikum:</label>
                <input type="number" class="form-control" id="nilai_tugas" name="nilai_tugas">
            </div>
            <button type="submit" class="btn btn-primary" value="Simpan" name="proses">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>