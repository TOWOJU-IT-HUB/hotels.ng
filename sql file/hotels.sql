-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 02:33 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotels`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE `apartments` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `permalink` varchar(500) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `short_desc` text NOT NULL,
  `is_featured` enum('true','false') NOT NULL DEFAULT 'false',
  `status` enum('published','draft','pending') NOT NULL DEFAULT 'draft',
  `rating` int(11) DEFAULT NULL,
  `property_type` varchar(500) DEFAULT NULL,
  `booking_type` enum('enquiry','instant','instant_and_enquiry') NOT NULL DEFAULT 'instant_and_enquiry',
  `address` varchar(500) DEFAULT NULL,
  `longitude` varchar(500) DEFAULT NULL,
  `latitude` varchar(500) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `external_booking` enum('true','false') NOT NULL DEFAULT 'false',
  `check_in` int(11) DEFAULT NULL,
  `check_out` int(11) DEFAULT NULL,
  `min_day` int(11) DEFAULT NULL,
  `min_stay` int(11) DEFAULT NULL,
  `video_url` int(11) NOT NULL,
  `enable_cancellation` enum('true','false') NOT NULL DEFAULT 'false',
  `cancellation_days` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `status` enum('published','draft') NOT NULL DEFAULT 'draft',
  `slug` varchar(500) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `body` longtext NOT NULL,
  `categories` text DEFAULT NULL,
  `image` varchar(500) DEFAULT 'placeholder.jpg',
  `short_desc` varchar(1000) DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `status`, `slug`, `title`, `body`, `categories`, `image`, `short_desc`, `tags`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'published', 'new-post-6164bd4de87', 'Test', 'We are creating a file named “google-sign-in.php” where we will do this verification.', '', '', '', '', '2021-10-11 22:40:36', '2021-10-11 22:40:36', NULL),
(3, 'draft', 'new-post-6164bd651cf28', 'Test 2', 'We are creating a file named “google-sign-in.php” where we will do this verification. You can learn about saving the data in the database from here.', '', '', '', '', '2021-10-11 22:41:49', '2021-10-11 22:41:49', NULL),
(4, 'published', 'new-post-6164bdc6b73ff', 'Post Title', 'GOOGLE ONE-TAP SIGN IN – PHP, JAVASCRIPTby&nbsp;adnanafzal565Posted onAugust 28, 2021Google one-tap sign-in allows your website users to quickly log in to your site without having to enter a lot of form fields.Video Tutorial:First, you need to go to&nbsp;Google Developer Console, from there you need to select or create a new project.After a project is selected, you need to create its credentials.Create credentialsIn the credentials screen, you need to create OAuth Client ID credentials.OAuth client ID create credentialsAfter that, you can specify:The type of application as “Web Application”.Set the name of the credential as per your desire.Add your website domain in “Authorized Javascript origins”.Goto OAuth Consent Screen.Create OAuth client idOAuth Consent Screen will show you a form where you can enter the text you want to show to the user in the login prompt.After everything is done, click “Save and Continue”. It will show you your Client ID and Client Secret.OAuth Client CreatedInstall Google OAuth LibraryYou need to copy both Google Client ID and Client Secret values as your PHP variables.12345678&lt;?php&nbsp;&nbsp;&nbsp;&nbsp;// use sessions, to show the login prompt only if the user is not logged-in&nbsp;&nbsp;&nbsp;&nbsp;session_start();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// paste google client ID and client secret keys&nbsp;&nbsp;&nbsp;&nbsp;$google_oauth_client_id = &#34;&#34;;&nbsp;&nbsp;&nbsp;&nbsp;$google_oauth_client_secret = &#34;&#34;;?&gt;We will be using PHP sessions because we will show this prompt only if the user is not logged in.Make sure you have Composer installed. You can download and install Composer&nbsp;from here.After that, you need to run the following command at your root folder:1composer require google/apiclientDisplay Google One-tap Sign In PromptPaste the following lines in the file where you want to show the one-tap sign-in prompt. If you want to show it to all the pages of your website, simply paste it into your header or footer file.12345678910111213&lt;!-- check if the user is not logged in --&gt;&lt;?php if (!isset($_SESSION[&#34;user&#34;])): ?&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!-- display the login prompt --&gt;&nbsp;&nbsp;&nbsp;&nbsp;&lt;script src=&#34;https://accounts.google.com/gsi/client&#34; async defer&gt;&lt;/script&gt;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div id=&#34;g_id_onload&#34;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-client_id=&#34;&lt;?php echo $google_oauth_client_id; ?&gt;&#34;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-context=&#34;signin&#34;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-callback=&#34;googleLoginEndpoint&#34;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-close_on_tap_outside=&#34;false&#34;&gt;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;?php endif; ?&gt;This will make sure to show the prompt to the user only if he is not logged in.&nbsp;data-callback&nbsp;will be our Javascript function that will be called when the user taps the login button.123456789101112131415161718192021222324252627282930313233343536&lt;script&gt;&nbsp;&nbsp;&nbsp;&nbsp;// callback function that will be called when the user is successfully logged-in with Google&nbsp;&nbsp;&nbsp;&nbsp;function googleLoginEndpoint(googleUser) {&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// get user information from Google&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console.log(googleUser);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// send an AJAX request to register the user in your website&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var ajax = new XMLHttpRequest();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// path of server file&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ajax.open(&#34;POST&#34;, &#34;google-sign-in.php&#34;, true);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// callback when the status of AJAX is changed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ajax.onreadystatechange = function () {&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// when the request is completed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (this.readyState == 4) {&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// when the response is okay&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (this.status == 200) {&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console.log(this.responseText);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// if there is any server error&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (this.status == 500) {&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console.log(this.responseText);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;};&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// send google credentials in the AJAX request&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var formData = new FormData();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;formData.append(&#34;id_token&#34;, googleUser.credential);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ajax.send(formData);&nbsp;&nbsp;&nbsp;&nbsp;}&lt;/script&gt;We are sending an AJAX request to our server so we can verify the user using his Google Credentials Token. Because anyone can exploit the client-side variables, so the verification must be done on the server-side.Verify Google Credentials Token – PHPWe are creating a file named “google-sign-in.php” where we will do this verification.12345678910111213141516171819202122232425262728293031323334353637383940&lt;?php&nbsp;&nbsp;&nbsp;&nbsp;// use sessions&nbsp;&nbsp;&nbsp;&nbsp;session_start();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// include google API client&nbsp;&nbsp;&nbsp;&nbsp;require_once &#34;vendor/autoload.php&#34;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// set google client ID&nbsp;&nbsp;&nbsp;&nbsp;$google_oauth_client_id = &#34;&#34;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// create google client object with client ID&nbsp;&nbsp;&nbsp;&nbsp;$client = new Google_Client([&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#39;client_id&#39; =&gt; $google_oauth_client_id&nbsp;&nbsp;&nbsp;&nbsp;]);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// verify the token sent from AJAX&nbsp;&nbsp;&nbsp;&nbsp;$id_token = $_POST[&#34;id_token&#34;];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$payload = $client-&gt;verifyIdToken($id_token);&nbsp;&nbsp;&nbsp;&nbsp;if ($payload &amp;&amp; $payload[&#39;aud&#39;] == $google_oauth_client_id)&nbsp;&nbsp;&nbsp;&nbsp;{&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// get user information from Google&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$user_google_id = $payload[&#39;sub&#39;];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$name = $payload[&#34;name&#34;];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$email = $payload[&#34;email&#34;];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$picture = $payload[&#34;picture&#34;];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// login the user&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$_SESSION[&#34;user&#34;] = $user_google_id;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// send the response back to client side&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &#34;Successfully logged in. &#34; . $user_google_id . &#34;, &#34; . $name . &#34;, &#34; . $email . &#34;, &#34; . $picture;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;&nbsp;&nbsp;&nbsp;{&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// token is not verified or expired&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &#34;Failed to login.&#34;;&nbsp;&nbsp;&nbsp;&nbsp;}?&gt;Here, you need to place your Google Client ID again. This will verify the Google Credentials Token. This will also start the user session so the next time user refreshes the page, it will not show the login prompt.You can learn about saving the data in the database&nbsp;from here.', '', '', 'You can learn about saving the data in the database from here.', '', '2021-10-11 22:42:49', '2021-10-11 22:42:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `status` enum('publised','draft') NOT NULL DEFAULT 'draft',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `earnings`
--

CREATE TABLE `earnings` (
  `id` int(11) NOT NULL,
  `partner_id` int(50) NOT NULL,
  `total_eanings` double NOT NULL DEFAULT 0,
  `balance` float NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `earnings`
--

INSERT INTO `earnings` (`id`, `partner_id`, `total_eanings`, `balance`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 0.9, '2021-10-09 02:34:58', '2021-10-09 02:41:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `message` longtext NOT NULL,
  `status` enum('read','unread') NOT NULL DEFAULT 'unread',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hotel_id` varchar(50) NOT NULL,
  `services` varchar(500) NOT NULL,
  `quantity` int(11) NOT NULL,
  `booking_from` timestamp NULL DEFAULT NULL,
  `booking_to` timestamp NULL DEFAULT NULL,
  `total` float NOT NULL DEFAULT 0,
  `status` varchar(500) NOT NULL,
  `date` date DEFAULT NULL,
  `no_infact` int(50) NOT NULL DEFAULT 0,
  `no_adult` int(50) NOT NULL DEFAULT 0,
  `no_children` int(50) NOT NULL DEFAULT 0,
  `payment_method` varchar(500) DEFAULT NULL,
  `payment_status` varchar(500) NOT NULL DEFAULT 'pending',
  `base_price` int(50) NOT NULL DEFAULT 0,
  `sub_total` int(50) NOT NULL DEFAULT 0,
  `tax` int(50) NOT NULL DEFAULT 0,
  `total_paid` int(50) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `hotel_id`, `services`, `quantity`, `booking_from`, `booking_to`, `total`, `status`, `date`, `no_infact`, `no_adult`, `no_children`, `payment_method`, `payment_status`, `base_price`, `sub_total`, `tax`, `total_paid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '1', 'rentals', 1, NULL, NULL, 1, '1', '2021-07-10', 0, 1, 0, 'Flutterwave', 'pending', 0, 0, 0, 0, '2021-10-07 20:59:11', '2021-10-07 22:27:18', NULL),
(2, 1, '1', 'apartments', 1, NULL, NULL, 1, '1', '2010-09-05', 0, 1, 0, 'Flutterwave', 'pending', 0, 0, 0, 0, '2021-10-07 21:00:35', '2021-10-07 22:27:25', NULL),
(3, 1, '1', 'hostel', 1, NULL, NULL, 1, '1', '2010-09-05', 0, 1, 0, 'Flutterwave', 'pending', 0, 0, 0, 0, '2021-10-07 21:00:35', '2021-10-07 22:27:31', NULL),
(4, 1, '1', 'hotel', 1, NULL, NULL, 1, '1', '2010-09-05', 0, 1, 0, 'Flutterwave', 'pending', 0, 0, 0, 0, '2021-10-07 21:00:35', '2021-10-07 22:27:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `slug` varchar(500) NOT NULL,
  `title` varchar(5000) NOT NULL,
  `body` longtext NOT NULL,
  `status` enum('published','draft') NOT NULL DEFAULT 'draft',
  `image` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `title`, `body`, `status`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'new-post-61648de68bdf1', 'Adipisicing nulla doi', 'Repellendus. Autem q. ', 'published', NULL, '2021-10-11 19:18:55', '2021-10-11 19:32:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `firstname`, `lastname`, `email`, `password`, `address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'John', 'Doe', 'john@doe.com', 'johndoe@doe.com', '18E N Silvester Rd, LA, USA', '2021-10-09 02:41:42', '2021-10-09 02:41:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_title` varchar(225) NOT NULL DEFAULT 'weotrip.com',
  `site_desc` text DEFAULT NULL,
  `site_email` varchar(225) DEFAULT NULL,
  `site_logo` varchar(225) DEFAULT NULL,
  `site_favico` varchar(225) DEFAULT NULL,
  `site_mini_logo` varchar(225) DEFAULT NULL,
  `site_currency` varchar(225) DEFAULT NULL,
  `multilingual` varchar(225) DEFAULT NULL,
  `social_login` text DEFAULT NULL,
  `google_client_id` varchar(500) DEFAULT NULL,
  `google_secret_id` varchar(500) DEFAULT NULL,
  `custom_css` longtext DEFAULT NULL,
  `slider_text` varchar(600) DEFAULT NULL,
  `blog_featured_image` varchar(600) DEFAULT NULL,
  `contact_us_longitude` varchar(50) DEFAULT NULL,
  `contact_us_latitude` varchar(50) DEFAULT NULL,
  `contact_us_email` varchar(100) DEFAULT NULL,
  `contact_us_phone` text DEFAULT NULL,
  `contact_us_address` varchar(600) DEFAULT NULL,
  `contact_us_desc` varchar(600) DEFAULT NULL,
  `contact_us_heading` varchar(600) DEFAULT NULL,
  `contact_us_featured_image` varchar(600) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `site_desc`, `site_email`, `site_logo`, `site_favico`, `site_mini_logo`, `site_currency`, `multilingual`, `social_login`, `google_client_id`, `google_secret_id`, `custom_css`, `slider_text`, `blog_featured_image`, `contact_us_longitude`, `contact_us_latitude`, `contact_us_email`, `contact_us_phone`, `contact_us_address`, `contact_us_desc`, `contact_us_heading`, `contact_us_featured_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'WEOTRIP', 'Book your dream vacation.', 'admin@admin.com', '', '', 'mini_logo.png', 'NGN', '1', '0', NULL, NULL, 'custom css goes here bruv', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 18:46:28', '2021-10-11 20:47:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `social_name` varchar(225) NOT NULL DEFAULT 'Facebook.com',
  `social_icon` varchar(225) NOT NULL DEFAULT 'fas fa-facebook',
  `social_url` varchar(225) NOT NULL DEFAULT 'https://facebook.com'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `social_name`, `social_icon`, `social_url`) VALUES
(1, 'Facebook', 'fas fa-facebook', 'https://facebook.com/adedayo201');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `fullname` varchar(225) DEFAULT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `address` text DEFAULT NULL,
  `role` varchar(45) DEFAULT 'customer',
  `phone` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `fullname`, `firstname`, `lastname`, `address`, `role`, `phone`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'piteqeze@mailinator.com', 'test', '$2y$10$sLSDMJn5YXmjvylGk6nFYue7UGYkYDXNIAJm31nltaPzSlnS2Dz0i', 'Francis Neil', 'Neil', 'Francis', '14 North ave, Oslo.', 'customer', '+5486639542', '2021-09-27 04:25:23', '2021-10-12 01:08:26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `earnings`
--
ALTER TABLE `earnings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `earnings`
--
ALTER TABLE `earnings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
