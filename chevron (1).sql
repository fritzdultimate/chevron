-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2024 at 12:10 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chevron`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_funding_requests`
--

CREATE TABLE `account_funding_requests` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `receiver_id` bigint UNSIGNED NOT NULL,
  `amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `type` enum('deposit_balance','currently_invested','referral_bonus') COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` enum('credit','debit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `denied_at` timestamp NULL DEFAULT NULL,
  `approved_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_wallets`
--

CREATE TABLE `admin_wallets` (
  `id` bigint UNSIGNED NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_symbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `has_memo` tinyint(1) NOT NULL DEFAULT '0',
  `currency_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memo_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_traded` decimal(20,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `child_investment_plans`
--

CREATE TABLE `child_investment_plans` (
  `id` bigint UNSIGNED NOT NULL,
  `parent_investment_plan_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum_amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `maximum_amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `interest_rate` decimal(5,2) NOT NULL,
  `referral_bonus` decimal(5,2) NOT NULL DEFAULT '1.00',
  `duration` int NOT NULL DEFAULT '1',
  `total_deposited` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_accepted` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_denied` decimal(20,2) NOT NULL DEFAULT '0.00',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_investment_plans`
--

INSERT INTO `child_investment_plans` (`id`, `parent_investment_plan_id`, `name`, `minimum_amount`, `maximum_amount`, `interest_rate`, `referral_bonus`, `duration`, `total_deposited`, `total_accepted`, `total_denied`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'gas', '50.00', '500.00', '5.00', '15.00', 3, '1050.00', '0.00', '0.00', 1, '2024-09-13 16:20:13', '2024-09-22 15:52:20', NULL),
(2, 1, 'petroleum', '500.00', '1000.00', '5.00', '5.00', 5, '0.00', '0.00', '0.00', 1, '2024-09-13 16:24:22', '2024-09-13 16:24:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cron_jobs`
--

CREATE TABLE `cron_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `child_plan_id` bigint UNSIGNED DEFAULT NULL,
  `main_wallet_id` bigint UNSIGNED DEFAULT NULL,
  `transaction_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `plan_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_interest_rate` decimal(5,2) NOT NULL,
  `plan_referral_bonus` decimal(5,2) NOT NULL DEFAULT '1.00',
  `plan_duration` int NOT NULL DEFAULT '1',
  `remaining_duration` int NOT NULL,
  `reinvestment` tinyint(1) NOT NULL DEFAULT '0',
  `expires_at` timestamp NULL DEFAULT NULL,
  `is_expired` tinyint(1) NOT NULL DEFAULT '0',
  `status` enum('pending','accepted','denied') COLLATE utf8mb4_unicode_ci NOT NULL,
  `running` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `approved_at` timestamp NULL DEFAULT NULL,
  `denied_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_tokens`
--

CREATE TABLE `email_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `token` int DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_tokens`
--

INSERT INTO `email_tokens` (`id`, `token`, `email`, `created_at`, `updated_at`, `deleted_at`, `expired_at`) VALUES
(1, 120905, 'nobledsmarts@gmail.com', '2024-09-13 15:11:42', '2024-09-13 15:11:42', NULL, NULL),
(2, 230372, 'noble.dsmarts@gmail.com', '2024-09-15 19:59:25', '2024-09-15 19:59:25', NULL, NULL),
(3, 383800, 'nobledsma.rts@gmail.com', '2024-09-17 17:28:02', '2024-09-17 17:28:02', NULL, NULL),
(4, 721125, 'nobledsm.12a.rts@gmail.com', '2024-09-21 15:42:22', '2024-09-21 15:42:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_wallets`
--

CREATE TABLE `main_wallets` (
  `id` bigint UNSIGNED NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_symbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `has_memo` tinyint(1) NOT NULL DEFAULT '0',
  `currency_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memo_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_wallets`
--

INSERT INTO `main_wallets` (`id`, `currency`, `currency_symbol`, `active`, `has_memo`, `currency_address`, `memo_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ethereum', 'eth', 1, 0, 'bc1qgdjqv0av3q56jvd82tkdjpy7gdp9ut8tlqmgrpmv24sq90ecnvqqjwvw97', NULL, '2024-09-13 16:35:08', '2024-09-15 18:23:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_08_175644_create_parent_investment_plans_table', 1),
(5, '2021_07_08_175836_create_child_investment_plans_table', 1),
(6, '2021_07_08_180043_create_admin_wallets_table', 1),
(7, '2021_07_08_180043_create_main_wallets_table', 1),
(8, '2021_07_08_180120_create_user_wallets_table', 1),
(10, '2021_07_08_190124_create_email_tokens_table', 1),
(11, '2021_07_08_221751_create_transactions_table', 1),
(14, '2021_07_10_120641_create_withdraw_referral_bonuses_table', 1),
(15, '2021_07_10_121534_create_account_funding_requests_table', 1),
(16, '2021_07_10_172842_create_reviews_table', 1),
(17, '2021_07_10_173756_create_cron_jobs_table', 1),
(19, '2021_07_10_180301_create_faqs_table', 1),
(20, '2021_07_10_184041_create_files_table', 1),
(21, '2021_07_10_184810_create_site_settings_table', 1),
(22, '2023_09_16_013637_create_jobs_table', 1),
(23, '2024_09_13_172617_add_column_to_deposits_table', 2),
(27, '2021_07_09_213353_create_withdrawals_table', 4),
(29, '2021_07_09_095700_create_referrers_interest_relationships_table', 6),
(31, '2021_07_08_185113_create_deposits_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `parent_investment_plans`
--

CREATE TABLE `parent_investment_plans` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent_investment_plans`
--

INSERT INTO `parent_investment_plans` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'refinery', '2024-09-13 16:18:48', '2024-09-13 16:18:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profit_cron_jobs`
--

CREATE TABLE `profit_cron_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `deposit_id` bigint UNSIGNED NOT NULL,
  `main_wallet_id` bigint UNSIGNED NOT NULL,
  `transaction_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_received` decimal(20,2) NOT NULL,
  `deposit_balance` decimal(20,2) NOT NULL,
  `currently_invested_balance` decimal(20,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrers_interest_relationships`
--

CREATE TABLE `referrers_interest_relationships` (
  `id` bigint UNSIGNED NOT NULL,
  `interest_receiver_id` bigint UNSIGNED NOT NULL,
  `depositor_id` bigint UNSIGNED NOT NULL,
  `deposit_id` bigint UNSIGNED NOT NULL,
  `child_plan_id` bigint UNSIGNED NOT NULL,
  `amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'An empty review',
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `whatsapp_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_about_us` longtext COLLATE utf8mb4_unicode_ci,
  `terms_and_conditions` longtext COLLATE utf8mb4_unicode_ci,
  `privacy_and_policy` longtext COLLATE utf8mb4_unicode_ci,
  `how_it_works` longtext COLLATE utf8mb4_unicode_ci,
  `meet_our_traders` longtext COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_handles_active` tinyint(1) NOT NULL DEFAULT '0',
  `site_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visit_count` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `transaction_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `transaction_id` bigint UNSIGNED NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `transaction_hash`, `amount`, `currency`, `type`, `created_at`, `updated_at`, `deleted_at`, `transaction_id`) VALUES
(1, 1, '8c54740228b43ac946b1f5723293b57720fad3adb55d8c565d', '100.00', '1', 'deposit', '2024-09-13 16:52:17', '2024-09-13 16:52:17', NULL, 1),
(2, 1, '7cbd7f7bd3fe81c33248e834c7e1ddc4ec1aea27fac9d235d8', '100.00', '1', 'deposit', '2024-09-13 16:52:58', '2024-09-13 16:52:58', NULL, 2),
(3, 1, '10c97a8acec2863626464a94133e6ef93ed4735d3e378abc6f', '200.00', '1', 'deposit', '2024-09-13 16:59:13', '2024-09-13 16:59:13', NULL, 1),
(4, 1, '4340eb5af2e00a23bdfdc0da2a86704879d238fab2ce0ce8a3', '200.00', 'ethereum', 'withdrawal', '2024-09-20 16:49:36', '2024-09-20 16:49:36', NULL, 1),
(5, 1, 'f425e742a3c04318941241264e90adb7fa82b31769bd6d2789', '200.00', 'None', 'reinvestment', '2024-09-22 15:46:17', '2024-09-22 15:46:17', NULL, 1),
(6, 1, 'db4ba960864db8ac6fed31ca02392135e8c987d4f21c18639f', '300.00', 'None', 'reinvestment', '2024-09-22 15:49:40', '2024-09-22 15:49:40', NULL, 2),
(7, 1, '202900df9e86a102d189013552fe010edb7a7116c17bda7c30', '150.00', '1', 'deposit', '2024-09-22 15:52:20', '2024-09-22 15:52:20', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `permission` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `invested` tinyint(1) NOT NULL DEFAULT '0',
  `currently_invested` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_withdrawn` decimal(20,2) NOT NULL DEFAULT '0.00',
  `referrer_uid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_balance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `referral_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `deposit_interest` decimal(20,2) NOT NULL DEFAULT '0.00',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `total_balance` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `is_admin`, `email`, `email_verified_at`, `password`, `uid`, `firstname`, `phone`, `middlename`, `lastname`, `avatar`, `permission`, `suspended`, `invested`, `currently_invested`, `total_withdrawn`, `referrer_uid`, `deposit_balance`, `referral_bonus`, `deposit_interest`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `total_balance`) VALUES
(1, 'noblest', 1, 'nobledsmarts@gmail.com', '2024-09-13 15:46:06', '$2y$10$cwV.GTvhHkLkDTTvqrXMIeVDsb4f4LlHXkOHxJlbwjJgqfdeotENm', 'f9f5d4', 'Franklin', NULL, 'Chinedu', 'Richard', NULL, '2', 0, 1, '800.00', '200.00', NULL, '0.00', '20.00', '120.00', NULL, '2024-09-13 15:11:42', '2024-09-24 17:46:25', NULL, '9100.00'),
(2, 'xxxcc', 0, 'noble.dsmarts@gmail.com', '2024-09-15 21:31:09', '$2y$10$S.wzVllzTbqpVDAI.RPoouVn8oNy27lGsFTyVpOordMr9GDbB7eXS', '6ad509', 'Franklin', NULL, 'Chinedu', 'Richard', NULL, '1', 0, 0, '0.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '2024-09-15 19:59:25', '2024-09-15 21:31:09', NULL, '0.00'),
(3, 'xxxccr', 0, 'nobledsma.rts@gmail.com', NULL, '$2y$10$vlYtTqsHQy9GrwgACPrXoeYQWfNodQfs6NRWG5.q.19zaD1/82Smi', 'bb593e', 'Franklin', NULL, 'Chinedu', 'Richard', NULL, '1', 0, 0, '0.00', '0.00', NULL, '0.00', '0.00', '0.00', NULL, '2024-09-17 17:28:01', '2024-09-17 17:28:01', NULL, '0.00'),
(4, 'xxxccrr', 0, 'nobledsm.12a.rts@gmail.com', NULL, 'password', 'e84b89', 'richard', '122', 'Chinedu', 'Richard', NULL, '1', 0, 0, '0.00', '0.00', 'f9f5d4', '0.00', '0.00', '0.00', NULL, '2024-09-21 15:42:22', '2024-09-21 15:42:22', NULL, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `user_wallets`
--

CREATE TABLE `user_wallets` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `main_wallet_id` bigint UNSIGNED NOT NULL,
  `currency_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memo_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `has_memo` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `main_wallet_id` bigint UNSIGNED NOT NULL,
  `transaction_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(20,2) NOT NULL,
  `status` enum('pending','accepted','denied') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `wallet_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved_at` timestamp NULL DEFAULT NULL,
  `denied_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `main_wallet_id`, `transaction_hash`, `amount`, `status`, `created_at`, `updated_at`, `deleted_at`, `wallet_address`, `approved_at`, `denied_at`) VALUES
(1, 1, 1, '4340eb5af2e00a23bdfdc0da2a86704879d238fab2ce0ce8a3', '200.00', 'accepted', '2024-09-20 16:49:36', '2024-09-20 17:06:47', NULL, 'mmm', '2024-09-20 17:06:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_referral_bonuses`
--

CREATE TABLE `withdraw_referral_bonuses` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `transaction_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int NOT NULL,
  `status` enum('pending','accepted','denied') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `approved_at` timestamp NULL DEFAULT NULL,
  `denied_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_funding_requests`
--
ALTER TABLE `account_funding_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_funding_requests_user_id_foreign` (`user_id`),
  ADD KEY `account_funding_requests_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `admin_wallets`
--
ALTER TABLE `admin_wallets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_wallets_currency_unique` (`currency`),
  ADD UNIQUE KEY `admin_wallets_currency_symbol_unique` (`currency_symbol`);

--
-- Indexes for table `child_investment_plans`
--
ALTER TABLE `child_investment_plans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `child_investment_plans_name_unique` (`name`),
  ADD KEY `child_investment_plans_parent_investment_plan_id_foreign` (`parent_investment_plan_id`);

--
-- Indexes for table `cron_jobs`
--
ALTER TABLE `cron_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `deposits_transaction_hash_unique` (`transaction_hash`),
  ADD KEY `deposits_user_id_foreign` (`user_id`),
  ADD KEY `deposits_main_wallet_id_foreign` (`main_wallet_id`);

--
-- Indexes for table `email_tokens`
--
ALTER TABLE `email_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `main_wallets`
--
ALTER TABLE `main_wallets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `main_wallets_currency_unique` (`currency`),
  ADD UNIQUE KEY `main_wallets_currency_symbol_unique` (`currency_symbol`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_investment_plans`
--
ALTER TABLE `parent_investment_plans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parent_investment_plans_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profit_cron_jobs`
--
ALTER TABLE `profit_cron_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profit_cron_jobs_user_id_foreign` (`user_id`);

--
-- Indexes for table `referrers_interest_relationships`
--
ALTER TABLE `referrers_interest_relationships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referrers_interest_relationships_interest_receiver_id_foreign` (`interest_receiver_id`),
  ADD KEY `referrers_interest_relationships_depositor_id_foreign` (`depositor_id`),
  ADD KEY `referrers_interest_relationships_deposit_id_foreign` (`deposit_id`),
  ADD KEY `referrers_interest_relationships_child_plan_id_foreign` (`child_plan_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_uid_unique` (`uid`);

--
-- Indexes for table `user_wallets`
--
ALTER TABLE `user_wallets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_wallets_user_id_foreign` (`user_id`),
  ADD KEY `user_wallets_main_wallet_id_foreign` (`main_wallet_id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `withdrawals_user_id_foreign` (`user_id`),
  ADD KEY `withdrawals_main_wallet_id_foreign` (`main_wallet_id`);

--
-- Indexes for table `withdraw_referral_bonuses`
--
ALTER TABLE `withdraw_referral_bonuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `withdraw_referral_bonuses_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_funding_requests`
--
ALTER TABLE `account_funding_requests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_wallets`
--
ALTER TABLE `admin_wallets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `child_investment_plans`
--
ALTER TABLE `child_investment_plans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cron_jobs`
--
ALTER TABLE `cron_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_tokens`
--
ALTER TABLE `email_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_wallets`
--
ALTER TABLE `main_wallets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `parent_investment_plans`
--
ALTER TABLE `parent_investment_plans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profit_cron_jobs`
--
ALTER TABLE `profit_cron_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referrers_interest_relationships`
--
ALTER TABLE `referrers_interest_relationships`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_wallets`
--
ALTER TABLE `user_wallets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `withdraw_referral_bonuses`
--
ALTER TABLE `withdraw_referral_bonuses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_funding_requests`
--
ALTER TABLE `account_funding_requests`
  ADD CONSTRAINT `account_funding_requests_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `account_funding_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `child_investment_plans`
--
ALTER TABLE `child_investment_plans`
  ADD CONSTRAINT `child_investment_plans_parent_investment_plan_id_foreign` FOREIGN KEY (`parent_investment_plan_id`) REFERENCES `parent_investment_plans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `deposits`
--
ALTER TABLE `deposits`
  ADD CONSTRAINT `deposits_main_wallet_id_foreign` FOREIGN KEY (`main_wallet_id`) REFERENCES `main_wallets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `deposits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profit_cron_jobs`
--
ALTER TABLE `profit_cron_jobs`
  ADD CONSTRAINT `profit_cron_jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `referrers_interest_relationships`
--
ALTER TABLE `referrers_interest_relationships`
  ADD CONSTRAINT `referrers_interest_relationships_child_plan_id_foreign` FOREIGN KEY (`child_plan_id`) REFERENCES `child_investment_plans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `referrers_interest_relationships_deposit_id_foreign` FOREIGN KEY (`deposit_id`) REFERENCES `deposits` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `referrers_interest_relationships_depositor_id_foreign` FOREIGN KEY (`depositor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `referrers_interest_relationships_interest_receiver_id_foreign` FOREIGN KEY (`interest_receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `child_investment_plans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_wallets`
--
ALTER TABLE `user_wallets`
  ADD CONSTRAINT `user_wallets_main_wallet_id_foreign` FOREIGN KEY (`main_wallet_id`) REFERENCES `main_wallets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_wallets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD CONSTRAINT `withdrawals_main_wallet_id_foreign` FOREIGN KEY (`main_wallet_id`) REFERENCES `main_wallets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `withdrawals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `withdraw_referral_bonuses`
--
ALTER TABLE `withdraw_referral_bonuses`
  ADD CONSTRAINT `withdraw_referral_bonuses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
