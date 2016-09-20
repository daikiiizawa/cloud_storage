CREATE DATABASE `cakephp_cloud`;

use cakephp_cloud

-- usersテーブル作成
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB;
ALTER TABLE `users` ADD PRIMARY KEY (`id`);
ALTER TABLE `users` ADD UNIQUE (`email`);
ALTER TABLE `users` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `users` MODIFY `email` varchar(255) DEFAULT '' NOT NULL;
ALTER TABLE `users` MODIFY `password` varchar(255) DEFAULT '' NOT NULL;