CREATE DATABASE `book_store` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;

CREATE USER 'bookstore_admin'@'localhost' IDENTIFIED VIA mysql_native_password USING 'bookstore2020_123';GRANT ALL PRIVILEGES ON *.* TO 'bookstore_admin'@'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

CREATE TABLE `book_store`.`genre` (
    `id_gen` int unsigned NOT NULL AUTO_INCREMENT,
    `nome_gen` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
    PRIMARY KEY (`id_gen`)
);

CREATE TABLE `book_store`.`author` (
    `id_aut` int unsigned NOT NULL AUTO_INCREMENT,
    `nome_aut` varchar(150) COLLATE utf8_swedish_ci NOT NULL,
    `desc_aut` text COLLATE utf8_swedish_ci NOT NULL,
    `foto_aut` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
    PRIMARY KEY (`id_aut`)
);

CREATE TABLE `book_store`.`book` (
    `id_bk` int unsigned NOT NULL AUTO_INCREMENT,
    `isbn_bk` varchar(15) COLLATE utf8_swedish_ci DEFAULT NULL,
    `ean_bk` varchar(15) COLLATE utf8_swedish_ci DEFAULT NULL,
    `datalanc_bk` date NOT NULL,
    `tit_bk` varchar(150) COLLATE utf8_swedish_ci NOT NULL,
    `tit_bk_alfa` varchar(150) COLLATE utf8_swedish_ci NOT NULL,
    `titorig_bk` varchar(150) COLLATE utf8_swedish_ci NOT NULL,
    `id_aut_bk` int unsigned NOT NULL,
    `form_bk` varchar(75) COLLATE utf8_swedish_ci DEFAULT NULL,
    `pag_bk` int NOT NULL,
    `aval_bk` float unsigned NOT NULL,
    `acab_bk` varchar(45) COLLATE utf8_swedish_ci NOT NULL DEFAULT 'Brochura',
    `preco_bk` decimal(10,2) unsigned NOT NULL,
    `capa_bk` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
    `coment1_bk` text COLLATE utf8_swedish_ci,
    `coment2_bk` text COLLATE utf8_swedish_ci,
    `coment3_bk` text COLLATE utf8_swedish_ci,
    `sinopse_bk` text COLLATE utf8_swedish_ci NOT NULL,
    PRIMARY KEY (`id_bk`)
);

CREATE TABLE `book_store`.`genre_book` (
    `id_gen` int unsigned NOT NULL,
    `id_bk` int unsigned NOT NULL,
    PRIMARY KEY (`id_gen`,`id_bk`)
);