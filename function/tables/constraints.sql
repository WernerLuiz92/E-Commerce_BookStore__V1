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