-- Buat database
CREATE DATABASE IF NOT EXISTS crud_mvc;

-- Gunakan database
USE crud_mvc;

-- Buat tabel mahasiswa
CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL
);

-- Data dummy opsional
INSERT INTO mahasiswa (nama, nim) VALUES
('Andi Prasetyo', '202301001'),
('Budi Santoso', '202301002'),
('Citra Lestari', '202301003');
