CREATE DATABASE `book_store` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;

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
    `acab_bk` varchar(45) COLLATE utf8_swedish_ci NOT NULL DEFAULT 'Brochura',
    `preco_bk` float unsigned NOT NULL,
    `capa_bk` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
    `coment1_bk` text COLLATE utf8_swedish_ci,
    `coment2_bk` text COLLATE utf8_swedish_ci,
    `coment3_bk` text COLLATE utf8_swedish_ci,
    `sinopse_bk` text COLLATE utf8_swedish_ci NOT NULL,
    PRIMARY KEY (`id_bk`),
    UNIQUE KEY `isbn_bk_UNIQUE` (`isbn_bk`),
    UNIQUE KEY `ean_bk_UNIQUE` (`ean_bk`)
);

CREATE TABLE `book_store`.`genre_book` (
    `id_gen` int unsigned NOT NULL,
    `id_bk` int unsigned NOT NULL,
    PRIMARY KEY (`id_gen`,`id_bk`)
);

ALTER TABLE `book_store`.`genre_book` 
    ADD CONSTRAINT `genre_book_genre`
        FOREIGN KEY (`id_gen`)
        REFERENCES `book_store`.`genre` (`id_gen`)
            ON DELETE RESTRICT
            ON UPDATE CASCADE;

ALTER TABLE `book_store`.`genre_book` 
    ADD INDEX `genre_book_book_idx` (`id_bk` ASC) VISIBLE;

ALTER TABLE `book_store`.`genre_book` 
    ADD CONSTRAINT `genre_book_book`
        FOREIGN KEY (`id_bk`)
        REFERENCES `book_store`.`book` (`id_bk`)
            ON DELETE RESTRICT
            ON UPDATE CASCADE;

ALTER TABLE `book_store`.`book` 
    ADD INDEX `book_author_idx` (`id_aut_bk` ASC) VISIBLE;

ALTER TABLE `book_store`.`book` 
    ADD CONSTRAINT `book_author`
        FOREIGN KEY (`id_aut_bk`)
        REFERENCES `book_store`.`author` (`id_aut`)
            ON DELETE RESTRICT
            ON UPDATE CASCADE;
