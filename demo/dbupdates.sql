-- new updates 6-1-21 by jinal
UPDATE `currency` SET `usdvalue` = '592.2' WHERE `currency`.`id` = 12;

ALTER TABLE `adminsetting`  ADD `priceAddress` VARCHAR(255) NOT NULL  AFTER `marketAddress`;

ALTER TABLE `adminsetting`  ADD `priceABI` VARCHAR(255) NOT NULL  AFTER `marketABI`;


-- new updates 21-1-21 by jinal

ALTER TABLE `adminsetting`  ADD `usdvalue` INT(255) NOT NULL ;

UPDATE `adminsetting` SET `usdvalue` = '592.2' WHERE `adminsetting`.`id` = 1;

-- new updates 22-1-21 by jinal
ALTER TABLE `currency`  ADD `full_name` VARCHAR(255) NOT NULL  AFTER `name`;