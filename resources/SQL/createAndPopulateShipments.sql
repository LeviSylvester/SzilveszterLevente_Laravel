SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS shipments;
USE shipments;

DROP TABLE IF EXISTS `shipments`;
CREATE TABLE IF NOT EXISTS `shipments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `from_client` bigint UNSIGNED NOT NULL,
  `to_client` bigint UNSIGNED NOT NULL,
  `size` int NOT NULL,
  `weight` int NOT NULL,
  `category` enum('dental','documents','food','special','flowers','electronics','shopping') COLLATE utf8mb4_unicode_ci NOT NULL,
  `urgency` enum('extraUrgent','sameDay','notUrgent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `status` enum('waitingPickup','waitingDelivery','delivered') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shipments_from_client_foreign` (`from_client`),
  KEY `shipments_to_client_foreign` (`to_client`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `shipments` (`id`, `from_client`, `to_client`, `size`, `weight`, `category`, `urgency`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 3, 10, 'documents', 'sameDay', 12.99, 'waitingPickup', '2023-02-21 23:55:24', '2023-02-21 23:55:24'),
(2, 2, 1, 2, 5, 'food', 'notUrgent', 8.99, 'waitingDelivery', '2023-02-21 23:55:24', '2023-02-21 23:55:24'),
(3, 1, 2, 4, 15, 'special', 'extraUrgent', 21.99, 'delivered', '2023-02-21 23:55:24', '2023-02-21 23:55:24');

DROP TABLE IF EXISTS `utilizatori`;
CREATE TABLE IF NOT EXISTS `utilizatori` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('admin','courier','client') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `utilizatori_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `utilizatori` (`id`, `email`, `fullname`, `password`, `phonenumber`, `address`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@example.com', 'Admin User', '$2y$10$J3qkGKvZ1AV0XcNz7sFEH.LNwv7VW/8P/t0QVlvJHtFZri83JUsKW', '1234567890', '123 Main St', 'admin', NULL, '2023-02-21 23:55:24', '2023-02-21 23:55:24'),
(2, 'client1@example.com', 'Client One', '$2y$10$J3qkGKvZ1AV0XcNz7sFEH.LNwv7VW/8P/t0QVlvJHtFZri83JUsKW', '1234567890', '456 Elm St', 'client', NULL, '2023-02-21 23:55:24', '2023-02-21 23:55:24'),
(3, 'courier1@example.com', 'Courier One', '$2y$10$J3qkGKvZ1AV0XcNz7sFEH.LNwv7VW/8P/t0QVlvJHtFZri83JUsKW', '1234567890', '789 Oak St', 'courier', NULL, '2023-02-21 23:55:24', '2023-02-21 23:55:24');
COMMIT;
