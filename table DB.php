CREATE TABLE IF NOT EXISTS `users` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `trn_date` datetime NOT NULL,
   `name` varchar(50) NOT NULL,
   `username` varchar(50) NOT NULL,
   `email` varchar(50) NOT NULL,
   `password` varchar(50) NOT NULL,
   PRIMARY KEY (`id`)
);
