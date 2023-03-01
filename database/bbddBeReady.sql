/*ADDRESSES*/
INSERT INTO `addresses` (`id`, `way_type`, `way_name`, `town`, `province`, `zipcode`, `created_at`, `updated_at`) VALUES
(1, 'street', 'Calle del Administrador, 1', 'Sevilla', 'Sevilla', '41020', '2023-02-15 10:07:02', '2023-02-15 10:07:02');

-- --------------------------------------------------------
/*CATEGORIES*/
INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Móviles', 'Descubre los últimos smartphones del mercado', '2023-02-15 06:56:55', '2023-02-15 06:56:55'),
(2, 'Componentes', 'Componentes para construir un pc a tu medida (RAM, CPU, GPU y mucho más)', '2023-02-15 06:58:34', '2023-02-15 06:58:34'),
(3, 'Tablets', 'Las mejores tablets baratas', '2023-02-15 07:00:14', '2023-02-15 07:00:14');

-- --------------------------------------------------------
/*PRODUCTS*/
INSERT INTO `products` (`id`, `name`, `price`, `stock`, `description`, `image`, `IVA`, `total`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Xiaomi Redmi Note 11S 6/128GB Gris Libre', 245.00, 14, 'Redmi Note 11S se renueva para darte lo mejor. Gracias a su cámara principal de 108MP, crea efectos de foto y de vídeos impresionantes de manera sencilla y listos para compartir.', 'image-1.webp', 21.00, 296.45, 1, '2023-02-15 07:07:03', '2023-02-15 07:07:03'),
(2, 'Apple iPhone 13 128GB Medianoche Libre', 800.99, 17, 'El chip que hace morder el polvo a la competencia. Un subidón de autonomía que vaya si notarás. Ceramic Shield, más duro que cualquier vidrio de smartphone. Pantalla Super Retina XDR de 6,1 pulgadas. Diseño robusto con bordes planos y resistente al agua.', 'image-2.webp', 21.00, 969.20, 1, '2023-02-15 07:09:20', '2023-02-15 07:09:20'),
(3, 'MSI GeForce RTX 3060 VENTUS 2X OC LHR 12GB GDDR6', 320.00, 8, 'Disposición de doble ventilador en un diseño industrial rígido permite que esta tarjeta gráfica de aspecto elegante se adapte a cualquier construcción.', 'image-3.webp', 21.00, 387.20, 2, '2023-02-15 07:13:24', '2023-02-15 07:13:24'),
(4, 'Samsung Galaxy S23 Ultra 256GB Algodón Libre + Cargador 25W', 1150.00, 12, 'Galaxy S23 Ultra fue diseñado para aquellos que viven una vida llena de momentos increíbles y necesitan un dispositivo que cumpla con sus exigencias.', 'image-4.webp', 21.00, 1391.50, 1, '2023-02-15 07:14:58', '2023-02-15 07:14:58'),
(5, 'Kioxia Exceria G2 Unidad SSD 1TB NVMe M.2 2280', 42.00, 20, 'Lleva el rendimiento al siguiente nivel con hasta 2100 MB/s de velocidad de lectura secuencial, permitiendo un arranque, una transferencia de archivos y una capacidad de respuesta del sistema más rápidos.', 'image-5.webp', 21.00, 50.82, 2, '2023-02-15 07:16:00', '2023-02-15 07:16:00'),
(6, 'Samsung Galaxy Tab S8+ 5G 8/256GB Graphite', 1099.50, 7, 'Diseñada para cambiar la forma en la que juegas y trabajas para siempre.', 'image-6.webp', 21.00, 1330.39, 3, '2023-02-15 07:20:12', '2023-02-15 07:20:12'),
(7, 'Apple iPad Pro 2022 12.9\" WiFi 256GB Plata', 1340.00, 14, 'Rendimiento de escándalo. Pantallas al límite de la técnica. Conexiones inalámbricas de vértigo. Nuevas posibilidades con el Apple Pencil. Di hola a la experiencia iPad definitiva.', 'image-7.webp', 21.00, 1621.40, 3, '2023-02-15 07:22:15', '2023-02-15 07:22:15'),
(8, 'Gigabyte GeForce RTX 3070 GAMING OC LHR V2 8GB GDDR6', 399.00, 16, 'GeForce RTX ™ 3070 GAMING OC', 'image-8.webp', 21.00, 482.79, 2, '2023-02-15 07:24:51', '2023-02-15 07:24:51'),
(9, 'ASUS TUF Gaming GeForce RTX 3070 V2 OC Edition LHR 8GB GDDR6', 420.00, 10, 'Disfruta de los mayores éxitos de ventas de hoy como nunca antes con la fidelidad visual del trazado de rayos en tiempo real y el rendimiento definitivo de DLSS con tecnología de IA.', 'image-9.webp', 21.00, 508.20, 2, '2023-02-15 07:28:17', '2023-02-15 07:28:17'),
(10, 'Apple iPhone 14 Pro Max 256GB Plata Libre', 1199.00, 29, 'Llega a tus manos una forma mágica de utilizar el iPhone, combinada con prestaciones de seguridad pensadas para salvar vidas.', 'image-10.webp', 21.00, 1450.79, 1, '2023-02-15 07:35:30', '2023-02-15 07:35:30'),
(11, 'OPPO Reno8 Pro 5G 8/256GB Verde Libre + Cable USB 3.1 Type-C', 530.00, 23, 'El OPPO Reno8 Pro está dotado con MariSilicon X, un chip de procesado de imagen desarrollado en los laboratorios de OPPO.', 'image-11.webp', 21.00, 641.30, 1, '2023-02-15 07:48:32', '2023-02-15 07:48:32'),
(12, 'Asus TUF GAMING B660-PLUS WIFI D4', 189.90, 32, 'Placa base Intel® B660 (LGA 1700) ATX con ranura PCIe 5.0, tres ranuras M.2 PCIe 4.0, 10+1 DrMOS, Intel® 2.5Gb Ethernet, DisplayPort, HDMI, USB 3.2 Gen. 2 de tipo C® frontal, Aura Sync', 'image-12.webp', 21.00, 229.78, 2, '2023-02-15 09:09:04', '2023-02-15 09:09:04'),
(13, 'AMD Ryzen 7 5800X3D 3.4GHz Box sin Ventilador', 310.80, 34, 'Los procesadores para computadoras de escritorio AMD Ryzen™ serie 5000 elevan el nivel de expectativa para jugadores y artistas por igual.', 'image-13.webp', 21.00, 376.07, 2, '2023-02-15 09:11:14', '2023-02-15 09:11:14'),
(14, 'Kingston NV2 1TB SSD PCIe 4.0 NVMe Gen 4x4', 50.00, 23, 'El disco SSD NVMe PCIe 4.0 NV2 es una solución de almacenamiento de nueva generación mejorada basada en un controlador NVME Gen 4x4.', 'image-14.webp', 21.00, 60.50, 2, '2023-02-15 10:33:59', '2023-02-15 10:33:59');

-- --------------------------------------------------------
/*USERS*/
INSERT INTO `users` (`id`, `name`, `surname`, `email`, `phone`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `address_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.com', 666666666, 'admin', NULL, '$2y$10$3AKFhvr12SJhcTF2NKs.iujpEgOpxAt6VBvIGDn4dlJSThHDjburi', NULL, NULL, NULL, 1, NULL, '2023-02-15 10:07:02', '2023-02-15 10:07:02');
