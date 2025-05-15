-- Buat database
CREATE DATABASE IF NOT EXISTS dbkegiatan_dosen;
USE dbkegiatan_dosen;

-- Tabel prodi
CREATE TABLE prodi (
    id INT(11) PRIMARY KEY,
    kode VARCHAR(10),
    nama VARCHAR(100),
    alamat VARCHAR(100),
    telpon VARCHAR(20),
    ketua VARCHAR(45)
);

-- Tabel dosen
CREATE TABLE dosen (
    id INT(11) PRIMARY KEY,
    nidn VARCHAR(20),
    nama VARCHAR(45),
    gelar_belakang VARCHAR(30),
    gelar_depan VARCHAR(20),
    jenis_kelamin CHAR(1),
    tempat_lahir VARCHAR(45),
    tanggal_lahir DATE,
    alamat VARCHAR(100),
    email VARCHAR(45),
    tahun_masuk INT(11),
    prodi_id INT(11),
    FOREIGN KEY (prodi_id) REFERENCES prodi(id)
);

-- Tabel bidang_ilmu
CREATE TABLE bidang_ilmu (
    id INT(11) PRIMARY KEY,
    nama VARCHAR(45),
    deskripsi TEXT
);

-- Tabel penelitian
CREATE TABLE penelitian (
    id INT(11) PRIMARY KEY,
    judul TEXT,
    mulai DATE,
    akhir DATE,
    tahun_ajaran VARCHAR(5),
    bidang_ilmu_id INT(11),
    FOREIGN KEY (bidang_ilmu_id) REFERENCES bidang_ilmu(id)
);

-- Tabel tim_penelitian
CREATE TABLE tim_penelitian (
    dosen_id INT(11),
    penelitian_id INT(11),
    peran VARCHAR(45),
    PRIMARY KEY (dosen_id, penelitian_id),
    FOREIGN KEY (dosen_id) REFERENCES dosen(id),
    FOREIGN KEY (penelitian_id) REFERENCES penelitian(id)
);

-- Tabel jenis_kegiatan
CREATE TABLE jenis_kegiatan (
    id INT(11) PRIMARY KEY,
    nama VARCHAR(45)
);

-- Tabel kegiatan
CREATE TABLE kegiatan (
    id INT(11) PRIMARY KEY,
    tanggal_mulai DATE,
    tanggal_selesai DATE,
    tempat VARCHAR(100),
    deskripsi TEXT,
    jenis_kegiatan_id INT(11),
    FOREIGN KEY (jenis_kegiatan_id) REFERENCES jenis_kegiatan(id)
);

-- Tabel dosen_kegiatan
CREATE TABLE dosen_kegiatan (
    dosen_id INT(11),
    kegiatan_id INT(11),
    PRIMARY KEY (dosen_id, kegiatan_id),
    FOREIGN KEY (dosen_id) REFERENCES dosen(id),
    FOREIGN KEY (kegiatan_id) REFERENCES kegiatan(id)
);
