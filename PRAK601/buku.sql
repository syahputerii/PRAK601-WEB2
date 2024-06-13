SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `buku` (
  `id` INT(5) UNSIGNED NOT NULL,
  `judul` VARCHAR(100) NOT NULL,
  `penulis` VARCHAR(100) NOT NULL,
  `penerbit` VARCHAR(100) NOT NULL,
  `tahun_terbit` YEAR(4) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


CREATE TABLE `crud` (
  `id` INT(5) UNSIGNED NOT NULL,
  `nama` VARCHAR(50) NOT NULL,
  `nim` VARCHAR(13) NOT NULL,
  `alamat` TEXT NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `crud` (`id`, `nama`, `nim`, `alamat`) VALUES
(1, 'syahna', '2210817120007', 'Banjarmasin'),
(4, 'puteri', '2210817120007', 'Rantau');

CREATE TABLE `migrations` (
  `id` BIGINT(20) UNSIGNED NOT NULL,
  `version` VARCHAR(255) NOT NULL,
  `class` VARCHAR(255) NOT NULL,
  `group` VARCHAR(255) NOT NULL,
  `namespace` VARCHAR(255) NOT NULL,
  `time` INT(11) NOT NULL,
  `batch` INT(11) UNSIGNED NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-06-11-080538', 'App\\Database\\Migrations\\Crud', 'default', 'App', 1684830849, 1),
(2, '2024-06-11-090624', 'App\\Database\\Migrations\\User', 'default', 'App', 1685438559, 2),
(3, '2024-06-11-015133', 'App\\Database\\Migrations\\Buku', 'default', 'App', 1686193775, 3),
(4, '2024-06-11-114209', 'App\\Database\\Migrations\\User', 'default', 'App', 1686193775, 3);


CREATE TABLE `user` (
  `id` INT(5) UNSIGNED NOT NULL,
  `username` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` TEXT NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'user', 'user@gmail.com', '$2y$10$uikYKAFYu5peatxETHuGq.t6wItNJidIoEy0P5pkBQyyMJDqRV39O'),
(2, 'admin', 'admin@mail.com', '$2y$10$owPcuOliltHxCooZMtYEhOkEnURD39DSJ1/OQcdTKnvaBYJbwT1D2');

ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `buku`
  MODIFY `id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `crud`
  MODIFY `id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `migrations`
  MODIFY `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `user`
  MODIFY `id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;