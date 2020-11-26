-- MariaDB dump 10.17  Distrib 10.4.6-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: proyectolaravel_db
-- ------------------------------------------------------
-- Server version	10.4.6-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `main_image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_user_id_foreign` (`user_id`),
  CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts`
--

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
INSERT INTO `carts` VALUES (1,'2019-12-03 04:32:39','2019-12-03 04:32:43','Blanditiis ab.','1',6.81,1,2,'9eecc02887032132b91d8f00b2c6ad06.jpg',1);
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images_products`
--

DROP TABLE IF EXISTS `images_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `images_products_product_id_foreign` (`product_id`),
  CONSTRAINT `images_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images_products`
--

LOCK TABLES `images_products` WRITE;
/*!40000 ALTER TABLE `images_products` DISABLE KEYS */;
INSERT INTO `images_products` VALUES (1,1,'ce6c91cf8c1c19592c96efa14c77ec46.jpg'),(2,1,'b9ccce8c843260b16b8c25ac38644b1c.jpg'),(3,1,'83a9a661811dcbeda80da23a80a0e525.jpg'),(4,2,'056a37ae40b53aac51f0159f412b710f.jpg'),(5,2,'7a790719a3847b3a9a188a322dfeb997.jpg'),(6,2,'2f0c14d6ae31f6ff2f88972e93443c5f.jpg'),(7,3,'f76dc374cf9d92ecfb17e10de9d9399c.jpg'),(8,3,'e027acd33e82f736efaa85c1219c9d88.jpg'),(9,3,'4bb0f761deff18246908effbf914a2c7.jpg'),(10,4,'91f5cb726385d14106976660c68f0727.jpg'),(11,4,'97c38dc2faaa28faecb39d0d03f25ce4.jpg'),(12,4,'2b5daa0f1a0018272e994148e3a634fd.jpg'),(13,5,'ac804863e83ce79326106b0500100d7a.jpg'),(14,5,'a14ba47f1f40036fa545b327074312c8.jpg'),(15,5,'e1edf641c1d0d70ff44c14b5c02f50e4.jpg'),(16,6,'e5079bb6e6370fa7d93930a7841a55b4.jpg'),(17,6,'49f14e19ab3b58ee863be69d9c3cc185.jpg'),(18,6,'c073e84657cd7ac0a44ef224b2583a9d.jpg'),(19,7,'b3e7a578fda8449f1a5f7bb6026bad36.jpg'),(20,7,'1dbbb469ed8a9c6d0dfe70063277c2d7.jpg'),(21,7,'a4deb98720380d2915fb8b22669ed198.jpg'),(22,8,'51ee4bbf341128864bc0e8af11e61585.jpg'),(23,8,'e2306bd4d5adba81952df171f139a519.jpg'),(24,8,'49b90cdbdc6c4a2d7407c640d82fa6d9.jpg'),(25,9,'gvtF8DoJTmWE0SsLaPwml071DfxkuoGqrNAAnLL4.jpeg'),(26,9,'v5FsfR6w6voTJHOWDwBPkEQTzLwXCs0SSeJgSyQj.jpeg'),(27,9,'FpRy3QfDjGQEvVD1GngsHjmKZ4uH0JSevctfWwem.jpeg');
/*!40000 ALTER TABLE `images_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_11_05_141548_add_surname_to_users',1),(4,'2019_11_12_115931_create_products_table',1),(5,'2019_11_12_120610_create_carts_table',1),(6,'2019_11_12_141805_create_images_products_table',1),(7,'2019_11_28_152327_add_rol_to_users_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `brand` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_user_id_foreign` (`user_id`),
  CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,1,'2019-12-02 06:04:33','2019-12-02 06:04:33','juventus','Eos molestiae provident itaque dignissimos neque. Cupiditate harum nostrum enim reprehenderit temporibus. Dolores consequatur quibusdam quo necessitatibus. Numquam nesciunt officia voluptates laborum incidunt natus voluptate. Labore officia veritatis repudiandae hic sint eos. Sequi nihil ut consectetur. Doloremque suscipit minus distinctio incidunt maxime voluptate. Repellat itaque explicabo consequatur explicabo. Iure et excepturi magni sed molestias explicabo repellat. Quasi ipsam impedit nam. Consequatur veritatis quis et expedita quos eaque. In velit quo quia nihil explicabo et eum. Quidem cupiditate deserunt facere non. Et est eaque aut modi consequatur perferendis voluptas aut. Deleniti expedita eaque est possimus. Error id repellat qui et distinctio. Iure ducimus eius nihil ea sit. Velit quas libero provident perferendis eaque at. Est incidunt quae ut sunt ipsam ut. Temporibus id tempore rerum fuga. Fugiat quia vel est exercitationem et enim placeat et. Et aperiam sit occaecati qui. Distinctio necessitatibus molestiae suscipit dignissimos. Est itaque maiores recusandae sit enim. Veniam aliquid ea quisquam saepe rerum. Sequi asperiores est magni molestias perspiciatis. Alias qui odit molestiae ut aut. Itaque repellendus laboriosam et eos. Aut adipisci consectetur tenetur sed est consequatur voluptatem. Distinctio illo quia quos. Aut rem est optio earum. Quibusdam ut accusantium aut dicta occaecati est qui. Et a in corporis eius dolorum qui iusto. Nisi aperiam ut sed perferendis incidunt. Accusantium error accusamus expedita doloribus. Dolor est repellat quia. Tempora delectus aut sed repellendus molestiae dolores. Quas ab non dolore. Esse aspernatur aut accusamus placeat cupiditate iusto vitae. Sed officiis magnam rerum consequatur nulla facere omnis. Reprehenderit ipsum et quo. Architecto dicta enim corporis facere velit dolores. Animi alias voluptas necessitatibus consequatur. Rerum voluptas qui saepe sed velit pariatur. Suscipit dolores suscipit qui eum distinctio repellendus. Optio a modi quia sint rem fugiat dignissimos nisi. Aperiam neque magnam dolorem repudiandae sunt. Atque dolor est minima tempore. Saepe et est id eius qui nobis quia eligendi. Veniam ut iste aut praesentium fuga nulla magni provident. Culpa dolore ducimus et ab. Molestiae beatae veritatis velit et facilis esse. Aperiam non perferendis consequatur sed accusantium beatae. Reiciendis et suscipit voluptates. Sed esse cum quisquam est. Voluptatem molestiae et officiis sapiente distinctio et et.','43',7.64,41,'nike','botines','b83049f09662dfe7574c59a616a71603.jpg',NULL),(2,1,'2019-12-02 06:04:33','2019-12-02 06:04:33','real madrid','aj','45',6.31,13,'adidas','botines','9bc3cb7425f920a41c59c9328365292b.jpg',NULL),(3,1,'2019-12-02 06:04:33','2019-12-02 06:04:33','barcelona','Voluptatem explicabo nam pariatur placeat velit. Aperiam tempora iusto voluptatem laborum quia. Tempora reprehenderit vero voluptatem voluptatem. Quia dolor ut aut ipsa repudiandae quasi totam nostrum. Ut ut quam aut deleniti quaerat corporis sapiente. Voluptatem maiores optio voluptatem est suscipit. Minima architecto consequatur beatae enim aut impedit voluptas. Non iste deserunt rerum quia molestiae occaecati nemo. Voluptas iste dolorem porro ut voluptate. Qui saepe quia aut delectus. Fugiat sequi fugiat nam deleniti earum. Cumque expedita vero at amet molestias temporibus odio. Aut dolorum repudiandae excepturi dolorem. Minus eos quisquam et voluptatem facilis. Eum sint et laborum amet ullam sed nam voluptatum. Recusandae pariatur recusandae sit doloribus ab iste. Assumenda accusamus voluptas illo aut accusantium voluptas. Et qui nostrum qui assumenda. Dolor aut rerum asperiores repudiandae deleniti omnis reprehenderit. Omnis illo sed aut sed eaque provident fugiat. Minima iure et perferendis assumenda vero cupiditate. Provident assumenda voluptatibus enim et quas illum nihil. Aperiam adipisci molestias quis inventore eos ab. Voluptates consequuntur qui quod reprehenderit dignissimos reprehenderit ducimus autem. Nisi labore autem sit doloremque est ipsa ex suscipit. Eligendi quia aut ad tenetur sit aut. Voluptas ratione porro dolor enim laborum in. Qui vero consequuntur quod quibusdam porro est. Numquam aliquam sunt cupiditate molestiae. Numquam voluptatem aliquam modi aut aliquid consequuntur. Quia delectus corrupti dolor blanditiis ea sit maxime. Id aut ut provident magnam. Consequuntur aut et quasi nulla aut. Quis ducimus est odio sint alias quaerat. Accusamus vitae ut officia. Esse aliquid et quia aliquid ratione doloremque maiores ut. Vitae nisi voluptas impedit dolores. Autem molestiae sit doloremque quis accusantium et reiciendis. Autem nihil dolorum quia commodi vel. Nihil vero ut laudantium ratione saepe quia totam. Et sint ut nemo. Quam quis provident nihil qui minus. Sunt officia magni autem soluta officiis illo veritatis. Velit deserunt id quia quae assumenda. Illo officia dolorem repellat occaecati. Ea enim sint aut est enim. Officiis fugiat tenetur iste eos cupiditate harum qui ipsa. Sequi dolorem ipsam qui qui doloribus est. Et voluptas pariatur magni illum ut ut in in. Eum ut eius aliquam. Distinctio occaecati et ratione odio est distinctio unde officia. Ea recusandae eligendi illo et et. Autem non aut sint ipsum dolor aut. Totam sunt quia libero veritatis quia. Qui laudantium repudiandae ducimus dolor. Fugiat odit quos repellat minima aspernatur et nulla consequatur. Ex quia a nihil sed sunt quo dignissimos saepe. Dolorem autem est repudiandae dolor quod tempore alias impedit. Dignissimos dolorem ipsam odio doloribus vero voluptas sit. Itaque minus ipsam est. Distinctio ut aut dolore unde aliquid. Minus nostrum harum id quia. Dolorum occaecati facilis ipsum sint tempora eligendi repellendus repellat. Totam optio excepturi eius repudiandae. Consequatur vitae in iusto magnam. Non eum aut voluptatem qui aut. Est delectus aliquid et quia quia velit voluptates. Voluptates laudantium blanditiis aut dolorem tempore ullam. Sit quam velit est excepturi explicabo dicta voluptas. Laborum ex iste dolores eaque.','40',4.13,13,'puma','botines','47741d22bf3813969b61b5eb1f42950b.jpg',NULL),(4,1,'2019-12-02 06:04:33','2019-12-02 06:04:33','napoli','Illo sit est voluptatem voluptas nam et autem aliquam. Qui nihil sit ratione unde laborum voluptas ipsum. Ab nihil nulla perspiciatis et. Quo minus quia rem sunt distinctio voluptatem est. Aliquid ea dolore commodi. Neque dignissimos non asperiores sit. Ipsum optio ea reprehenderit rerum veniam ipsa. Nam debitis qui aliquam fuga. Sit enim libero similique deleniti sed. Facilis minima omnis dolore reprehenderit rem et distinctio. Aperiam aut minus occaecati adipisci aliquam. Eius voluptas accusantium laboriosam totam magnam. Sed laborum delectus accusantium et maiores. Mollitia quos qui et in aliquam tenetur nobis. Vero temporibus dicta vel autem error praesentium velit. Libero sint asperiores ex repellat dolorem voluptate. Praesentium cumque est amet fuga quisquam dicta est. Esse ipsum occaecati aut consectetur. Voluptates nulla odit omnis quidem. Ad nihil animi quia ut. Voluptatem placeat nihil rerum in necessitatibus. Quisquam dolorum ut nulla eos. Eos saepe eveniet quod quod. Nam error quia similique fuga reprehenderit aspernatur. Qui et dignissimos dolores est ipsam ex odit eius. Omnis itaque perferendis repellendus nostrum sit saepe. Accusamus laborum ut et cumque fuga. Accusamus corrupti dolores quasi nobis veniam dolores recusandae. Sit possimus quis quia nulla eos odio sunt. Tenetur ducimus voluptas ea asperiores porro. Quo est rerum quasi iure sed architecto. Ab ipsa provident ullam ipsam et placeat earum non. Velit et et et. Velit itaque hic nesciunt accusantium. Rerum delectus repudiandae sit corporis et ea. Mollitia consequuntur deserunt omnis distinctio. Adipisci magnam qui earum sit fugiat debitis. Eum blanditiis delectus omnis deserunt qui tempore. Quis corporis sint numquam. Sit tenetur sed error ullam exercitationem officiis libero. Unde illo qui sint sed excepturi eligendi accusamus. Dolorem aut amet molestias et dolor deserunt. Ipsa fugiat numquam omnis repudiandae esse aspernatur odio. Est aut quis autem tempora. Laudantium odio ut accusantium ad modi. Neque ratione voluptas vel veniam commodi. Ut velit sit id impedit tempora reiciendis consequatur. Aut quia odit ut porro. Est quod sapiente fugiat asperiores debitis suscipit doloribus. Et quam odio facilis et quia in eum.','41',4.29,9,'remeras','vestimenta','94e6de3bab438fd68d890c44b2beefac.jpg',NULL),(5,1,'2019-12-02 06:04:33','2019-12-02 06:04:33','asdf','Molestiae aut quidem id quo magni. Facere eveniet officia quaerat et dolores sequi soluta. Ea sit quae ipsam qui est autem repudiandae. Temporibus laboriosam excepturi accusamus excepturi. Sit animi sed sed quae temporibus facilis. Et aut numquam soluta ducimus veniam et. Pariatur et magnam velit itaque deleniti vitae. Laudantium voluptatem rerum sunt autem molestiae. Pariatur aut sunt molestias non enim eos. Alias quae voluptatem quis. Atque tempora totam quaerat. Officiis libero error architecto nisi accusamus. Dignissimos est quidem quia ab. Sit sit id cupiditate maiores qui. Libero doloribus esse nihil expedita autem rerum dolor illo. Ad quos molestiae nam adipisci fugit perferendis velit. Quam quae aspernatur eum ab. Rerum atque voluptates quasi voluptatem. Aut a fugiat rerum labore voluptatum. Magnam ex impedit culpa molestias. Explicabo iure dolorem id nesciunt. Est quibusdam consequatur sit et sunt molestias. Voluptatem consequatur repudiandae veniam sed et. Consectetur et autem minima id et est possimus. Rerum ut placeat accusamus sit exercitationem repudiandae error. Sed excepturi nisi dolor rerum ducimus maiores numquam. Quia ut vero natus qui. Rerum quidem sit veritatis repellat rerum. Saepe omnis eos et ut quaerat. Et incidunt hic eius quaerat et. Quidem itaque voluptate tenetur modi unde. Itaque inventore minus sit quod. Aliquam officia sunt molestias omnis. Quasi quo debitis quia laudantium. Ea dolorem sed ex aperiam. Occaecati et doloremque deserunt esse. Rerum dolore similique aut et sit velit quam. Voluptatibus eos voluptatem et voluptas. Blanditiis hic reiciendis dignissimos eos qui ipsa dolor. Non dolores dolorem facere laboriosam. Qui exercitationem quasi eaque voluptatem aut modi. Magnam ullam qui hic cumque provident omnis. Ipsam rerum nobis molestiae tempore doloremque quaerat. Maxime fugit laboriosam delectus. Sed quae sed nihil eum occaecati omnis. Consectetur aliquid tempore perspiciatis veritatis. Ex modi dolorem ex enim necessitatibus doloribus pariatur. Nihil odio qui sunt qui et est vero. Occaecati voluptas recusandae doloremque soluta est quis. Blanditiis aliquid sed autem sequi culpa consequatur corporis. Neque voluptatem dolores itaque nam. Voluptatem laboriosam consequuntur ut nisi natus quo enim. Debitis nemo officia voluptatem consequatur. Ut sit fuga non deserunt et dolores quaerat. Aliquid eaque corrupti atque aliquam inventore aut perferendis provident. Iste explicabo adipisci porro ea. Sed assumenda qui corrupti enim odio laudantium.','40',5.74,23,'medias','vestimenta','aa36586d46ecfc09544e6bb16cd217ba.jpg',NULL),(6,1,'2019-12-02 06:04:33','2019-12-02 06:04:33','asdf','Est mollitia iusto amet ea repudiandae. Deleniti et delectus sit ipsum. Eos sit quis molestiae libero eveniet. Neque nihil et sit itaque. Minus architecto rerum animi dolor quasi. Id iure nihil dolore voluptatem. Accusamus labore incidunt asperiores neque consequatur ut. Ea quidem ullam et nobis molestiae laboriosam magnam. Eligendi sit et porro sed sed et quasi. Fugiat autem eaque numquam quia. Illum sed aperiam voluptas nemo optio. Illum animi rerum voluptates quasi. Natus natus sequi et laboriosam molestiae. Animi voluptates totam alias minus. Minima sint aliquam aut autem itaque fugit temporibus. Et cum facilis ab ut animi ut. Est non voluptas voluptatem ut repellendus et. Similique tempora culpa et ut qui totam. Itaque libero non ipsum doloremque quia corrupti. Architecto ab tempora perferendis quidem nihil qui et. Tempore quia adipisci velit unde corporis. Aut nobis dolores asperiores. Ex repellat veritatis nostrum animi eaque. Et qui iusto illum numquam sunt placeat explicabo. Neque optio odio quia placeat laudantium totam consequatur nam. Minus culpa qui sed. Facilis facilis corrupti ut quis quos ut impedit. Aliquam fuga assumenda qui. Eum ab eos tempore. Dolor et sit ea hic ut cupiditate ut. Et ut et alias id praesentium. Soluta aut nihil ipsa veritatis et est dolor corrupti. Odio consequuntur eum qui ducimus et. Quam quis esse temporibus. Ad fugit magnam dolores deleniti. Consequatur officiis illum repellat dolorem nihil sit laudantium omnis. Iste molestias voluptatum sunt sit cupiditate. Quia quia a tempora numquam consectetur est. Blanditiis non perspiciatis mollitia in. Nihil iure officiis et aliquam. Aspernatur similique a soluta commodi. Rem nostrum molestiae quia ullam. Enim quod velit quas quibusdam aut provident. Dignissimos ipsa consectetur provident quis. Tenetur ducimus corporis rerum repudiandae ducimus. Quos ut accusamus consequatur facilis. Nam earum facere incidunt et. Perspiciatis et sunt amet iure. Ullam consequatur labore qui eum quis perferendis. Libero ut expedita nulla. Dolorum ut est magni laboriosam.','42',2.04,13,'camperas','vestimenta','35d606f2f45e90ef3858840502f9f5c9.jpg',NULL),(7,1,'2019-12-02 06:04:33','2019-12-02 06:04:33','asdf','Omnis pariatur qui illo reiciendis magnam ut. Nulla quaerat minima nesciunt voluptate. Rerum nulla at quam tenetur veritatis minus facere. Assumenda ut vitae consequuntur autem. Eaque voluptas animi soluta. Minima enim et dolor quidem sunt. Velit perspiciatis ducimus cumque eveniet nobis. Iste quos ipsam suscipit error qui. Optio tenetur est aut ut. Quam id at quas vero cum. Laudantium praesentium fuga facilis velit modi doloremque. Eaque nobis aliquam voluptatem qui repellendus totam. Ut minima nulla voluptatum magnam voluptatem. Asperiores deleniti mollitia vero unde. Id perspiciatis excepturi quibusdam nostrum quaerat consequuntur ut. Explicabo iste iure quia ut. Culpa architecto quo temporibus neque omnis ullam dolor. Quas quibusdam minima veritatis corporis et quia. Et quae nesciunt occaecati est qui. Error est corrupti quos temporibus esse sed. Autem dolor non et repellendus dolores perspiciatis quia. Similique quis ut expedita quaerat unde magni. Voluptas iusto voluptatem magni dolores id non asperiores deleniti. Adipisci debitis eveniet quis incidunt. Sit nihil consectetur accusantium dolorem. Rerum voluptas saepe consequatur non nulla. Consequuntur aut voluptates quidem sapiente. Autem consequuntur facilis ut sint dolores ratione doloribus. Repellat qui assumenda commodi est soluta voluptas. Suscipit sint pariatur placeat nihil quae. Ea et eligendi voluptatem. Quaerat incidunt est doloribus tenetur sequi. Et ut laudantium quam. Nobis quae quia aliquam eos. Nobis culpa sapiente reprehenderit. Corporis ex voluptatem eos enim eligendi et amet quaerat. Commodi minus modi consectetur rem amet. Optio a eius ut tenetur saepe in. Sed neque enim reprehenderit eos. Suscipit fugiat voluptas in doloremque unde. Et excepturi tenetur non. Voluptatem excepturi molestiae magnam non dolores aperiam omnis voluptatem. Aut dignissimos sint debitis deserunt. Nam enim et quaerat sint excepturi qui perspiciatis. Minus esse non voluptate quidem aut. Possimus est quas voluptatum aut odit nihil. Esse doloribus aliquid tempore nihil voluptatem quaerat omnis. Dolorem nisi earum et qui. Hic dolore voluptatem minima explicabo totam officia. Provident voluptatem beatae ut facilis facilis est veritatis. Praesentium qui itaque rerum ut veniam aut eum. Autem est illo quasi aut aut ipsam. Quam autem ut repellendus illum porro vel eum. Assumenda voluptas voluptas aliquam et vero. Totam quam recusandae exercitationem. Odit dignissimos perferendis commodi aut est asperiores. Ad porro molestiae non consequatur. Ipsam qui est tenetur nesciunt cum. Quia ad praesentium quo tempore modi corrupti corrupti debitis. Dolor non repudiandae reiciendis qui inventore ipsum. Sint saepe ipsa et. Quam consectetur deleniti quia dignissimos. Ea voluptas et pariatur omnis distinctio. Rerum illum maxime aut ratione. Quia numquam quas dolorem eaque. Aspernatur et omnis vitae ducimus vero sed et.','45',6.11,20,'pelotas','accesorios','0fbe58c91c9b650a074149b821b32c16.jpg',NULL),(8,1,'2019-12-02 06:04:33','2019-12-02 06:04:33','asdf','Sit id et perspiciatis aut reiciendis fuga voluptas quam. Ad maiores est atque eos. Ab nesciunt est dolorem enim recusandae laboriosam. Voluptate cum ad veritatis quo et deleniti. Sed quo eum quidem voluptatibus. Laboriosam error quod laborum voluptatem tempore voluptates aperiam. Quas quam numquam natus accusantium placeat. Perspiciatis enim quia quis aut corrupti dignissimos. Voluptatem atque vitae voluptatem voluptatem sint. Exercitationem voluptate et nostrum sunt veniam libero. Rem nihil minima odit ad. Dolorem et illum eos maiores. Nihil dolore eligendi nihil ad provident ab. Voluptatibus quo repudiandae impedit voluptatem temporibus. Et sint et animi provident iusto qui explicabo. Cumque voluptate quo eius eum voluptatem reiciendis est. Repellat ratione nemo laudantium. Aut eveniet aut et soluta reiciendis impedit. Ducimus deserunt pariatur voluptates. Ullam a vel aut quia facere possimus harum. Porro harum non ullam fugit occaecati magni. Asperiores occaecati id quis qui. Et voluptas vero quaerat quidem ipsum. Est deleniti facilis officiis explicabo cumque occaecati. Porro architecto laudantium similique eos. Sed aut veniam facilis aliquid voluptatem eos. Rerum enim blanditiis ut. Cum eaque sed consequatur quam qui debitis quibusdam. Quaerat corrupti beatae sapiente ea nihil pariatur. Reprehenderit ex ut ullam minima delectus esse corrupti. Ullam minus suscipit rem iure ut ipsum quasi. Qui sunt unde ducimus laboriosam voluptas. Eum rerum sit soluta. In cupiditate quas adipisci in odio suscipit. Incidunt error dolores corporis pariatur. Doloremque vitae deleniti sint quia. Quaerat totam nihil et quis enim dolores voluptatem. Et ullam voluptas exercitationem. Nesciunt soluta velit ut aliquid quae. Alias quidem qui ut est impedit repudiandae. Vel laboriosam quod consectetur officiis soluta est. Ut reiciendis recusandae modi voluptas nemo perspiciatis deserunt. Quisquam tenetur ipsam consequuntur eum excepturi voluptatem exercitationem. Non aut dolor voluptatem veritatis repudiandae voluptatem. Eligendi nihil animi et molestiae qui esse.','42',6.81,23,'otros','accesorios','9eecc02887032132b91d8f00b2c6ad06.jpg',NULL),(9,2,'2019-12-03 02:27:09','2019-12-03 02:27:09','asdf','PROBANDO','38',1000.00,12,'otros','vestimenta','9gNVXbEqSQXBDeX5nySu7remNg7CNI16FZpp02SY.jpeg',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rol` smallint(6) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Elbert','Fay','gerda.hudson@example.org','2019-12-02 06:04:22','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','qOk02Trg7uGEJspPm38TRTQR19bNJ7AhZozXIa6VnGvn70nOgTqhKsF7APR0','2019-12-02 06:04:22','2019-12-02 06:04:22',0),(2,'Marcos','Letemendia','marcos.letemendia@gmail.com',NULL,'$2y$10$.WVUh.MWmMe3htO5SdHnm.GXWEwAAjmGNa/kNHeVzPrmkmrjwpICa',NULL,'2019-12-02 06:12:08','2019-12-02 06:12:08',100);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-25 23:50:16
