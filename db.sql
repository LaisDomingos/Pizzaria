create database pizzaria_beira;
use pizzaria_beira;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
insert into users values 
(DEFAULT,'Usuário Teste','teste@gmail','teste'),
(DEFAULT,'Laís','lais@gmail','lais123'),
(DEFAULT,'Antônio','antonio@gmail','antonio123');

