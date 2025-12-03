SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `makanan` (
  `id_makanan` bigint(20) UNSIGNED NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `ketegori_makanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `ketegori_makanan`) VALUES
(1, 'Nasi', 'Karbohidrat'),
(2, 'Daging Ayam', 'Protein'),
(3, 'Jeruk', 'Buah'),
(4, 'Ikan', 'Protein');

ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`),
  ADD UNIQUE KEY `id_makanan` (`id_makanan`);

ALTER TABLE `makanan`
  MODIFY `id_makanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

