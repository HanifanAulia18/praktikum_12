-- 1. Membuat Database
CREATE DATABASE IF NOT EXISTS `pratikum`;
USE `pratikum`;

-- 2. Membuat Tabel Users (untuk Login Admin & Pengguna)
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `nama_lengkap` VARCHAR(100),
  `role` ENUM('admin', 'pengguna') NOT NULL DEFAULT 'pengguna',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
