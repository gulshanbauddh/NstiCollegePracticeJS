``` sql
CREATE TABLE `inotedb`.`inote` ( `sNo` INT NOT NULL AUTO_INCREMENT, `title` VARCHAR(100) NOT NULL, `description` TEXT NOT NULL, `dateTime` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`sNo`) ) ENGINE = InnoDB;


INSERT INTO `inote` (`sNo`, `title`, `description`, `dateTime`) VALUES ('1', 'Make a iNote', 'Make a iNote mini Project', current_timestamp());



```