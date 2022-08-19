<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2022-08-17 03:48:25 --> Controller Class Initialized
INFO - 2022-08-17 03:48:25 --> Model Class Initialized
DEBUG - 2022-08-17 03:48:26 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 03:48:26 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 03:48:26 --> Final output sent to browser
DEBUG - 2022-08-17 03:48:26 --> Total execution time: 5.4253
INFO - 2022-08-17 03:51:56 --> Controller Class Initialized
DEBUG - 2022-08-17 03:51:56 --> Auth MX_Controller Initialized
INFO - 2022-08-17 03:51:56 --> Model Class Initialized
DEBUG - 2022-08-17 03:51:56 --> File loaded: C:\xampp\htdocs\sop\application\modules/dashboard/models/Auth_model.php
INFO - 2022-08-17 03:51:56 --> Model Class Initialized
INFO - 2022-08-17 03:51:56 --> Helper loaded: captcha_helper
DEBUG - 2022-08-17 03:51:56 --> File loaded: C:\xampp\htdocs\sop\application\controllers/../modules/template/controllers/Template.php
DEBUG - 2022-08-17 03:51:56 --> Template MX_Controller Initialized
DEBUG - 2022-08-17 03:51:56 --> File loaded: C:\xampp\htdocs\sop\application\modules/template/models/Template_model.php
INFO - 2022-08-17 03:51:56 --> Model Class Initialized
DEBUG - 2022-08-17 03:51:57 --> File loaded: C:\xampp\htdocs\sop\application\modules/template/views/login.php
INFO - 2022-08-17 03:51:57 --> Final output sent to browser
DEBUG - 2022-08-17 03:51:57 --> Total execution time: 1.0730
INFO - 2022-08-17 03:53:43 --> Controller Class Initialized
DEBUG - 2022-08-17 03:53:43 --> Auth MX_Controller Initialized
INFO - 2022-08-17 03:53:43 --> Model Class Initialized
DEBUG - 2022-08-17 03:53:43 --> File loaded: C:\xampp\htdocs\sop\application\modules/dashboard/models/Auth_model.php
INFO - 2022-08-17 03:53:43 --> Model Class Initialized
INFO - 2022-08-17 03:53:43 --> Helper loaded: captcha_helper
INFO - 2022-08-17 03:53:44 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2022-08-17 03:53:44 --> File loaded: C:\xampp\htdocs\sop\application\controllers/../modules/template/controllers/Template.php
DEBUG - 2022-08-17 03:53:44 --> Template MX_Controller Initialized
DEBUG - 2022-08-17 03:53:44 --> File loaded: C:\xampp\htdocs\sop\application\modules/template/models/Template_model.php
INFO - 2022-08-17 03:53:44 --> Model Class Initialized
DEBUG - 2022-08-17 03:53:44 --> File loaded: C:\xampp\htdocs\sop\application\modules/template/views/login.php
INFO - 2022-08-17 03:53:44 --> Final output sent to browser
DEBUG - 2022-08-17 03:53:44 --> Total execution time: 0.6189
INFO - 2022-08-17 03:54:48 --> Controller Class Initialized
DEBUG - 2022-08-17 03:54:48 --> Auth MX_Controller Initialized
INFO - 2022-08-17 03:54:48 --> Model Class Initialized
DEBUG - 2022-08-17 03:54:48 --> File loaded: C:\xampp\htdocs\sop\application\modules/dashboard/models/Auth_model.php
INFO - 2022-08-17 03:54:48 --> Model Class Initialized
INFO - 2022-08-17 03:54:48 --> Helper loaded: captcha_helper
INFO - 2022-08-17 03:54:48 --> Language file loaded: language/english/form_validation_lang.php
ERROR - 2022-08-17 03:54:48 --> Query error: Table 'cendolka_bhojon.user' doesn't exist - Invalid query: SELECT `user`.`id`, CONCAT_WS(' ', `user`.`firstname`, user.lastname) AS fullname, `user`.`email`, `user`.`image`, `user`.`last_login`, `user`.`last_logout`, `user`.`ip_address`, `user`.`counter`, `user`.`status`, `user`.`is_admin`, IF (user.is_admin=1, 'Admin', 'User') as user_level
FROM `user`
WHERE `email` = 'admin@ckhqr.com'
AND `password` = 'b54a75e3fd5a2946a3838ae06583efa4'
ERROR - 2022-08-17 03:54:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\sop\application\modules\dashboard\controllers\Auth.php 50
INFO - 2022-08-17 03:55:42 --> Controller Class Initialized
INFO - 2022-08-17 03:55:42 --> Model Class Initialized
DEBUG - 2022-08-17 03:55:43 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 03:55:43 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 03:55:43 --> Final output sent to browser
DEBUG - 2022-08-17 03:55:43 --> Total execution time: 0.5379
INFO - 2022-08-17 03:56:10 --> Controller Class Initialized
INFO - 2022-08-17 03:56:10 --> Model Class Initialized
ERROR - 2022-08-17 03:56:10 --> Query error: Table 'cendolka_bhojon.user' doesn't exist - Invalid query: SELECT `user`.`id`, CONCAT_WS(' ', `user`.`firstname`, user.lastname) AS fullname, `user`.`email`, `user`.`image`, `user`.`last_login`, `user`.`last_logout`, `user`.`ip_address`, `user`.`counter`, `user`.`status`, `user`.`is_admin`, IF (user.is_admin=1, 'Admin', 'User') as user_level
FROM `user`
WHERE `email` = 'super-admin@ckhqr.com'
AND `password` = 'e10adc3949ba59abbe56e057f20f883e'
INFO - 2022-08-17 03:56:10 --> Language file loaded: language/english/form_validation_lang.php
ERROR - 2022-08-17 03:56:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\sop\application\controllers\admin\Login.php 34
INFO - 2022-08-17 03:59:23 --> Controller Class Initialized
INFO - 2022-08-17 03:59:23 --> Model Class Initialized
DEBUG - 2022-08-17 03:59:23 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 03:59:23 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 03:59:23 --> Final output sent to browser
DEBUG - 2022-08-17 03:59:23 --> Total execution time: 0.6539
INFO - 2022-08-17 04:03:17 --> Controller Class Initialized
INFO - 2022-08-17 04:03:17 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:18 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/login.php
DEBUG - 2022-08-17 04:03:18 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/index.php
INFO - 2022-08-17 04:03:18 --> Final output sent to browser
DEBUG - 2022-08-17 04:03:18 --> Total execution time: 1.8515
INFO - 2022-08-17 04:03:19 --> Controller Class Initialized
DEBUG - 2022-08-17 04:03:19 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:03:19 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:19 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:03:19 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:19 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:03:19 --> Model Class Initialized
INFO - 2022-08-17 04:03:20 --> Controller Class Initialized
DEBUG - 2022-08-17 04:03:20 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:03:20 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:20 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:03:20 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:20 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:03:20 --> Model Class Initialized
INFO - 2022-08-17 04:03:24 --> Controller Class Initialized
INFO - 2022-08-17 04:03:24 --> Model Class Initialized
ERROR - 2022-08-17 04:03:25 --> Query error: Table 'cendolka_bhojon.variant' doesn't exist - Invalid query: SELECT `item_foods`.*, `variant`.`variantid`, `variant`.`variantName`, `variant`.`price`
FROM `item_foods`
LEFT JOIN `variant` ON `item_foods`.`ProductsID`=`variant`.`menuid`
WHERE `item_foods`.`ProductsIsActive` = 1
AND `item_foods`.`special` = 1
 LIMIT 10
ERROR - 2022-08-17 04:03:25 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp\htdocs\sop\application\models\Hungry_model.php 341
INFO - 2022-08-17 04:03:29 --> Controller Class Initialized
INFO - 2022-08-17 04:03:29 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:29 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/login.php
DEBUG - 2022-08-17 04:03:29 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/index.php
INFO - 2022-08-17 04:03:29 --> Final output sent to browser
DEBUG - 2022-08-17 04:03:29 --> Total execution time: 0.5245
INFO - 2022-08-17 04:03:30 --> Controller Class Initialized
DEBUG - 2022-08-17 04:03:30 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:03:30 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:30 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:03:30 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:30 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:03:30 --> Model Class Initialized
INFO - 2022-08-17 04:03:30 --> Controller Class Initialized
DEBUG - 2022-08-17 04:03:30 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:03:30 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:30 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:03:30 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:30 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:03:30 --> Model Class Initialized
INFO - 2022-08-17 04:03:33 --> Controller Class Initialized
INFO - 2022-08-17 04:03:33 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:34 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/about.php
DEBUG - 2022-08-17 04:03:34 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/index.php
INFO - 2022-08-17 04:03:34 --> Final output sent to browser
DEBUG - 2022-08-17 04:03:34 --> Total execution time: 1.0338
INFO - 2022-08-17 04:03:35 --> Controller Class Initialized
DEBUG - 2022-08-17 04:03:35 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:03:35 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:35 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:03:35 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:35 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:03:35 --> Model Class Initialized
INFO - 2022-08-17 04:03:35 --> Controller Class Initialized
DEBUG - 2022-08-17 04:03:35 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:03:35 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:35 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:03:35 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:35 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:03:35 --> Model Class Initialized
INFO - 2022-08-17 04:03:38 --> Controller Class Initialized
INFO - 2022-08-17 04:03:38 --> Model Class Initialized
ERROR - 2022-08-17 04:03:38 --> Query error: Table 'cendolka_bhojon.variant' doesn't exist - Invalid query: SELECT `variant`.*, count(menuid) as totalvarient
FROM `variant`
WHERE `menuid` = '1'
ERROR - 2022-08-17 04:03:38 --> Severity: error --> Exception: Call to a member function row() on bool C:\xampp\htdocs\sop\application\models\Hungry_model.php 365
INFO - 2022-08-17 04:03:41 --> Controller Class Initialized
INFO - 2022-08-17 04:03:41 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:41 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/about.php
DEBUG - 2022-08-17 04:03:41 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/index.php
INFO - 2022-08-17 04:03:41 --> Final output sent to browser
DEBUG - 2022-08-17 04:03:41 --> Total execution time: 0.6112
INFO - 2022-08-17 04:03:42 --> Controller Class Initialized
DEBUG - 2022-08-17 04:03:42 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:03:42 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:42 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:03:42 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:42 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:03:42 --> Model Class Initialized
INFO - 2022-08-17 04:03:42 --> Controller Class Initialized
DEBUG - 2022-08-17 04:03:42 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:03:42 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:42 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:03:42 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:42 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:03:42 --> Model Class Initialized
INFO - 2022-08-17 04:03:46 --> Controller Class Initialized
INFO - 2022-08-17 04:03:46 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:46 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/login.php
DEBUG - 2022-08-17 04:03:46 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/index.php
INFO - 2022-08-17 04:03:46 --> Final output sent to browser
DEBUG - 2022-08-17 04:03:46 --> Total execution time: 0.7570
INFO - 2022-08-17 04:03:47 --> Controller Class Initialized
DEBUG - 2022-08-17 04:03:47 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:03:47 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:47 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:03:47 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:47 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:03:47 --> Model Class Initialized
INFO - 2022-08-17 04:03:47 --> Controller Class Initialized
DEBUG - 2022-08-17 04:03:47 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:03:47 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:47 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:03:47 --> Model Class Initialized
DEBUG - 2022-08-17 04:03:47 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:03:47 --> Model Class Initialized
INFO - 2022-08-17 04:13:37 --> Controller Class Initialized
INFO - 2022-08-17 04:13:37 --> Model Class Initialized
ERROR - 2022-08-17 04:13:37 --> Query error: Table 'cendolka_bhojon.variant' doesn't exist - Invalid query: SELECT `item_foods`.*, `variant`.`variantid`, `variant`.`variantName`, `variant`.`price`
FROM `item_foods`
LEFT JOIN `variant` ON `item_foods`.`ProductsID`=`variant`.`menuid`
WHERE `item_foods`.`ProductsIsActive` = 1
AND `item_foods`.`special` = 1
 LIMIT 10
ERROR - 2022-08-17 04:13:37 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp\htdocs\sop\application\models\Hungry_model.php 341
INFO - 2022-08-17 04:17:40 --> Controller Class Initialized
INFO - 2022-08-17 04:17:40 --> Model Class Initialized
ERROR - 2022-08-17 04:17:40 --> Query error: Table 'cendolka_bhojon.variant' doesn't exist - Invalid query: SELECT `item_foods`.*, `variant`.`variantid`, `variant`.`variantName`, `variant`.`price`
FROM `item_foods`
LEFT JOIN `variant` ON `item_foods`.`ProductsID`=`variant`.`menuid`
WHERE `item_foods`.`ProductsIsActive` = 1
AND `item_foods`.`special` = 1
 LIMIT 10
ERROR - 2022-08-17 04:17:40 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp\htdocs\sop\application\models\Hungry_model.php 341
INFO - 2022-08-17 04:25:27 --> Controller Class Initialized
INFO - 2022-08-17 04:25:28 --> Model Class Initialized
DEBUG - 2022-08-17 04:25:28 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 04:25:28 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 04:25:28 --> Final output sent to browser
DEBUG - 2022-08-17 04:25:28 --> Total execution time: 1.5470
INFO - 2022-08-17 04:28:54 --> Controller Class Initialized
INFO - 2022-08-17 04:28:54 --> Model Class Initialized
ERROR - 2022-08-17 04:28:54 --> Query error: Table 'cendolka_bhojon.variant' doesn't exist - Invalid query: SELECT `item_foods`.*, `variant`.`variantid`, `variant`.`variantName`, `variant`.`price`
FROM `item_foods`
LEFT JOIN `variant` ON `item_foods`.`ProductsID`=`variant`.`menuid`
WHERE `item_foods`.`ProductsIsActive` = 1
AND `item_foods`.`special` = 1
 LIMIT 10
ERROR - 2022-08-17 04:28:54 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp\htdocs\sop\application\models\Hungry_model.php 341
INFO - 2022-08-17 04:31:18 --> Controller Class Initialized
INFO - 2022-08-17 04:31:18 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:18 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/login.php
DEBUG - 2022-08-17 04:31:19 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/index.php
INFO - 2022-08-17 04:31:19 --> Final output sent to browser
DEBUG - 2022-08-17 04:31:19 --> Total execution time: 1.0139
INFO - 2022-08-17 04:31:19 --> Controller Class Initialized
DEBUG - 2022-08-17 04:31:19 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:31:19 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:19 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:31:19 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:19 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:31:19 --> Model Class Initialized
INFO - 2022-08-17 04:31:19 --> Controller Class Initialized
DEBUG - 2022-08-17 04:31:19 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:31:19 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:19 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:31:19 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:19 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:31:19 --> Model Class Initialized
INFO - 2022-08-17 04:31:24 --> Controller Class Initialized
INFO - 2022-08-17 04:31:24 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:24 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/reservation.php
DEBUG - 2022-08-17 04:31:24 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/index.php
INFO - 2022-08-17 04:31:24 --> Final output sent to browser
DEBUG - 2022-08-17 04:31:24 --> Total execution time: 0.7532
INFO - 2022-08-17 04:31:25 --> Controller Class Initialized
DEBUG - 2022-08-17 04:31:25 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:31:25 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:25 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:31:25 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:25 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:31:25 --> Model Class Initialized
INFO - 2022-08-17 04:31:25 --> Controller Class Initialized
DEBUG - 2022-08-17 04:31:25 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:31:25 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:25 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:31:25 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:25 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:31:25 --> Model Class Initialized
INFO - 2022-08-17 04:31:37 --> Controller Class Initialized
INFO - 2022-08-17 04:31:37 --> Model Class Initialized
ERROR - 2022-08-17 04:31:37 --> Query error: Table 'cendolka_bhojon.variant' doesn't exist - Invalid query: SELECT `variant`.*, count(menuid) as totalvarient
FROM `variant`
WHERE `menuid` = '1'
ERROR - 2022-08-17 04:31:37 --> Severity: error --> Exception: Call to a member function row() on bool C:\xampp\htdocs\sop\application\models\Hungry_model.php 365
INFO - 2022-08-17 04:31:40 --> Controller Class Initialized
INFO - 2022-08-17 04:31:40 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:40 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/reservation.php
DEBUG - 2022-08-17 04:31:40 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/index.php
INFO - 2022-08-17 04:31:40 --> Final output sent to browser
DEBUG - 2022-08-17 04:31:40 --> Total execution time: 0.3489
INFO - 2022-08-17 04:31:41 --> Controller Class Initialized
DEBUG - 2022-08-17 04:31:41 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:31:41 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:41 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:31:41 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:41 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:31:41 --> Model Class Initialized
INFO - 2022-08-17 04:31:41 --> Controller Class Initialized
DEBUG - 2022-08-17 04:31:41 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:31:41 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:41 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:31:41 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:41 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:31:41 --> Model Class Initialized
INFO - 2022-08-17 04:31:47 --> Controller Class Initialized
INFO - 2022-08-17 04:31:47 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:48 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/about.php
DEBUG - 2022-08-17 04:31:48 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/index.php
INFO - 2022-08-17 04:31:48 --> Final output sent to browser
DEBUG - 2022-08-17 04:31:48 --> Total execution time: 0.4858
INFO - 2022-08-17 04:31:49 --> Controller Class Initialized
DEBUG - 2022-08-17 04:31:49 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:31:49 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:49 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:31:49 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:49 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:31:49 --> Model Class Initialized
INFO - 2022-08-17 04:31:49 --> Controller Class Initialized
DEBUG - 2022-08-17 04:31:49 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:31:49 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:49 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:31:49 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:49 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:31:49 --> Model Class Initialized
INFO - 2022-08-17 04:31:57 --> Controller Class Initialized
INFO - 2022-08-17 04:31:57 --> Model Class Initialized
DEBUG - 2022-08-17 04:31:59 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/contact.php
DEBUG - 2022-08-17 04:31:59 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/index.php
INFO - 2022-08-17 04:31:59 --> Final output sent to browser
DEBUG - 2022-08-17 04:31:59 --> Total execution time: 2.3287
INFO - 2022-08-17 04:32:00 --> Controller Class Initialized
DEBUG - 2022-08-17 04:32:00 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:32:00 --> Model Class Initialized
DEBUG - 2022-08-17 04:32:00 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:32:00 --> Model Class Initialized
DEBUG - 2022-08-17 04:32:00 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:32:00 --> Model Class Initialized
INFO - 2022-08-17 04:32:00 --> Controller Class Initialized
DEBUG - 2022-08-17 04:32:00 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:32:00 --> Model Class Initialized
DEBUG - 2022-08-17 04:32:01 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:32:01 --> Model Class Initialized
DEBUG - 2022-08-17 04:32:01 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:32:01 --> Model Class Initialized
INFO - 2022-08-17 04:32:13 --> Controller Class Initialized
INFO - 2022-08-17 04:32:13 --> Model Class Initialized
INFO - 2022-08-17 04:32:14 --> Controller Class Initialized
INFO - 2022-08-17 04:32:14 --> Model Class Initialized
ERROR - 2022-08-17 04:32:14 --> Query error: Table 'cendolka_bhojon.variant' doesn't exist - Invalid query: SELECT `variant`.*, count(menuid) as totalvarient
FROM `variant`
WHERE `menuid` = '1'
ERROR - 2022-08-17 04:32:14 --> Severity: error --> Exception: Call to a member function row() on bool C:\xampp\htdocs\sop\application\models\Hungry_model.php 365
INFO - 2022-08-17 04:32:19 --> Controller Class Initialized
INFO - 2022-08-17 04:32:19 --> Model Class Initialized
DEBUG - 2022-08-17 04:32:19 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/contact.php
DEBUG - 2022-08-17 04:32:19 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/classic/index.php
INFO - 2022-08-17 04:32:19 --> Final output sent to browser
DEBUG - 2022-08-17 04:32:19 --> Total execution time: 0.6141
INFO - 2022-08-17 04:32:20 --> Controller Class Initialized
DEBUG - 2022-08-17 04:32:20 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:32:20 --> Model Class Initialized
DEBUG - 2022-08-17 04:32:20 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:32:20 --> Model Class Initialized
DEBUG - 2022-08-17 04:32:20 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:32:20 --> Model Class Initialized
INFO - 2022-08-17 04:32:20 --> Controller Class Initialized
DEBUG - 2022-08-17 04:32:20 --> Order MX_Controller Initialized
INFO - 2022-08-17 04:32:20 --> Model Class Initialized
DEBUG - 2022-08-17 04:32:20 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Order_model.php
INFO - 2022-08-17 04:32:20 --> Model Class Initialized
DEBUG - 2022-08-17 04:32:20 --> File loaded: C:\xampp\htdocs\sop\application\modules/ordermanage/models/Logs_model.php
INFO - 2022-08-17 04:32:20 --> Model Class Initialized
INFO - 2022-08-17 04:59:02 --> Controller Class Initialized
INFO - 2022-08-17 04:59:02 --> Model Class Initialized
DEBUG - 2022-08-17 04:59:02 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 04:59:02 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 04:59:02 --> Final output sent to browser
DEBUG - 2022-08-17 04:59:02 --> Total execution time: 0.5140
INFO - 2022-08-17 04:59:02 --> Controller Class Initialized
INFO - 2022-08-17 04:59:02 --> Model Class Initialized
DEBUG - 2022-08-17 04:59:02 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 04:59:02 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 04:59:02 --> Final output sent to browser
DEBUG - 2022-08-17 04:59:02 --> Total execution time: 0.2061
INFO - 2022-08-17 05:00:39 --> Controller Class Initialized
INFO - 2022-08-17 05:00:39 --> Model Class Initialized
DEBUG - 2022-08-17 05:00:39 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 05:00:39 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 05:00:39 --> Final output sent to browser
DEBUG - 2022-08-17 05:00:39 --> Total execution time: 0.5435
INFO - 2022-08-17 05:00:47 --> Controller Class Initialized
INFO - 2022-08-17 05:00:47 --> Model Class Initialized
ERROR - 2022-08-17 05:00:47 --> Query error: Table 'cendolka_bhojon.user' doesn't exist - Invalid query: SELECT `user`.`id`, CONCAT_WS(' ', `user`.`firstname`, user.lastname) AS fullname, `user`.`email`, `user`.`image`, `user`.`last_login`, `user`.`last_logout`, `user`.`ip_address`, `user`.`counter`, `user`.`status`, `user`.`is_admin`, IF (user.is_admin=1, 'Admin', 'User') as user_level
FROM `user`
WHERE `email` = 'admin@ckhqr.com'
AND `password` = 'e10adc3949ba59abbe56e057f20f883e'
INFO - 2022-08-17 05:00:47 --> Language file loaded: language/english/form_validation_lang.php
ERROR - 2022-08-17 05:00:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\sop\application\controllers\admin\Login.php 34
INFO - 2022-08-17 05:01:30 --> Controller Class Initialized
INFO - 2022-08-17 05:01:30 --> Model Class Initialized
ERROR - 2022-08-17 05:01:31 --> Query error: Table 'cendolka_bhojon.user' doesn't exist - Invalid query: SELECT `user`.`id`, CONCAT_WS(' ', `user`.`firstname`, user.lastname) AS fullname, `user`.`email`, `user`.`image`, `user`.`last_login`, `user`.`last_logout`, `user`.`ip_address`, `user`.`counter`, `user`.`status`, `user`.`is_admin`, IF (user.is_admin=1, 'Admin', 'User') as user_level
FROM `user`
WHERE `email` = 'admin@ckhqr.com'
AND `password` = 'e10adc3949ba59abbe56e057f20f883e'
INFO - 2022-08-17 05:01:31 --> Language file loaded: language/english/form_validation_lang.php
ERROR - 2022-08-17 05:01:31 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\sop\application\controllers\admin\Login.php 34
INFO - 2022-08-17 05:01:53 --> Controller Class Initialized
INFO - 2022-08-17 05:01:53 --> Model Class Initialized
ERROR - 2022-08-17 05:01:53 --> Query error: Table 'cendolka_bhojon.user' doesn't exist - Invalid query: SELECT `user`.`id`, CONCAT_WS(' ', `user`.`firstname`, user.lastname) AS fullname, `user`.`email`, `user`.`image`, `user`.`last_login`, `user`.`last_logout`, `user`.`ip_address`, `user`.`counter`, `user`.`status`, `user`.`is_admin`, IF (user.is_admin=1, 'Admin', 'User') as user_level
FROM `user`
WHERE `email` = 'admin@ckhqr.com'
AND `password` = 'e10adc3949ba59abbe56e057f20f883e'
INFO - 2022-08-17 05:01:53 --> Language file loaded: language/english/form_validation_lang.php
ERROR - 2022-08-17 05:01:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\sop\application\controllers\admin\Login.php 34
INFO - 2022-08-17 05:02:13 --> Controller Class Initialized
INFO - 2022-08-17 05:02:13 --> Model Class Initialized
INFO - 2022-08-17 05:08:30 --> Controller Class Initialized
INFO - 2022-08-17 05:08:30 --> Model Class Initialized
INFO - 2022-08-17 05:09:28 --> Controller Class Initialized
INFO - 2022-08-17 05:09:28 --> Model Class Initialized
INFO - 2022-08-17 05:09:44 --> Controller Class Initialized
INFO - 2022-08-17 05:09:44 --> Model Class Initialized
INFO - 2022-08-17 05:11:11 --> Controller Class Initialized
INFO - 2022-08-17 05:11:11 --> Model Class Initialized
INFO - 2022-08-17 05:11:26 --> Controller Class Initialized
INFO - 2022-08-17 05:11:26 --> Model Class Initialized
ERROR - 2022-08-17 05:11:26 --> Query error: Table 'cendolka_bhojon.user' doesn't exist - Invalid query: SELECT `user`.`id`, CONCAT_WS(' ', `user`.`firstname`, user.lastname) AS fullname, `user`.`email`, `user`.`image`, `user`.`last_login`, `user`.`last_logout`, `user`.`ip_address`, `user`.`counter`, `user`.`status`, `user`.`is_admin`, IF (user.is_admin=1, 'Admin', 'User') as user_level
FROM `user`
WHERE `email` = 'admin@ckhqr.com'
AND `password` = 'e10adc3949ba59abbe56e057f20f883e'
INFO - 2022-08-17 05:11:50 --> Controller Class Initialized
INFO - 2022-08-17 05:11:50 --> Model Class Initialized
ERROR - 2022-08-17 05:11:50 --> Query error: Table 'cendolka_bhojon.user' doesn't exist - Invalid query: SELECT `user`.`id`, CONCAT_WS(' ', `user`.`firstname`, user.lastname) AS fullname, `user`.`email`, `user`.`image`, `user`.`last_login`, `user`.`last_logout`, `user`.`ip_address`, `user`.`counter`, `user`.`status`, `user`.`is_admin`, IF (user.is_admin=1, 'Admin', 'User') as user_level
FROM `user`
WHERE `email` = 'admin@ckhqr.com'
AND `password` = 'e10adc3949ba59abbe56e057f20f883e'
INFO - 2022-08-17 05:11:50 --> Language file loaded: language/english/form_validation_lang.php
ERROR - 2022-08-17 05:11:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\sop\application\controllers\admin\Login.php 36
INFO - 2022-08-17 05:12:30 --> Controller Class Initialized
INFO - 2022-08-17 05:12:30 --> Model Class Initialized
ERROR - 2022-08-17 05:12:30 --> Query error: Table 'cendolka_bhojon.user' doesn't exist - Invalid query: SELECT `user`.`id`, CONCAT_WS(' ', `user`.`firstname`, user.lastname) AS fullname, `user`.`email`, `user`.`image`, `user`.`last_login`, `user`.`last_logout`, `user`.`ip_address`, `user`.`counter`, `user`.`status`, `user`.`is_admin`, IF (user.is_admin=1, 'Admin', 'User') as user_level
FROM `user`
WHERE `email` = 'admin@ckhqr.com'
AND `password` = 'e10adc3949ba59abbe56e057f20f883e'
INFO - 2022-08-17 05:16:22 --> Controller Class Initialized
INFO - 2022-08-17 05:16:22 --> Model Class Initialized
ERROR - 2022-08-17 05:16:22 --> Query error: Table 'cendolka_bhojon.user' doesn't exist - Invalid query: SELECT `user`.`id`, CONCAT_WS(' ', `user`.`firstname`, user.lastname) AS fullname, `user`.`email`, `user`.`image`, `user`.`last_login`, `user`.`last_logout`, `user`.`ip_address`, `user`.`counter`, `user`.`status`, `user`.`is_admin`, IF (user.is_admin=1, 'Admin', 'User') as user_level
FROM `user`
WHERE `email` = 'admin@ckhqr.com'
AND `password` = 'e10adc3949ba59abbe56e057f20f883e'
INFO - 2022-08-17 05:16:24 --> Controller Class Initialized
INFO - 2022-08-17 05:16:24 --> Model Class Initialized
DEBUG - 2022-08-17 05:16:24 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 05:16:24 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 05:16:24 --> Final output sent to browser
DEBUG - 2022-08-17 05:16:24 --> Total execution time: 0.2870
INFO - 2022-08-17 05:16:27 --> Controller Class Initialized
INFO - 2022-08-17 05:16:27 --> Model Class Initialized
DEBUG - 2022-08-17 05:16:27 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 05:16:27 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 05:16:27 --> Final output sent to browser
DEBUG - 2022-08-17 05:16:27 --> Total execution time: 0.2247
INFO - 2022-08-17 05:16:35 --> Controller Class Initialized
INFO - 2022-08-17 05:16:35 --> Model Class Initialized
ERROR - 2022-08-17 05:16:35 --> Query error: Table 'cendolka_bhojon.user' doesn't exist - Invalid query: SELECT `user`.`id`, CONCAT_WS(' ', `user`.`firstname`, user.lastname) AS fullname, `user`.`email`, `user`.`image`, `user`.`last_login`, `user`.`last_logout`, `user`.`ip_address`, `user`.`counter`, `user`.`status`, `user`.`is_admin`, IF (user.is_admin=1, 'Admin', 'User') as user_level
FROM `user`
WHERE `email` = 'hamza8402017@gmail.com'
AND `password` = '93279e3308bdbbeed946fc965017f67a'
INFO - 2022-08-17 05:17:32 --> Controller Class Initialized
INFO - 2022-08-17 05:17:32 --> Model Class Initialized
ERROR - 2022-08-17 05:17:33 --> Query error: Table 'cendolka_bhojon.user' doesn't exist - Invalid query: SELECT `user`.`id`, CONCAT_WS(' ', `user`.`firstname`, user.lastname) AS fullname, `user`.`email`, `user`.`image`, `user`.`last_login`, `user`.`last_logout`, `user`.`ip_address`, `user`.`counter`, `user`.`status`, `user`.`is_admin`, IF (user.is_admin=1, 'Admin', 'User') as user_level
FROM `user`
WHERE `email` = 'hamza8402017@gmail.com'
AND `password` = '93279e3308bdbbeed946fc965017f67a'
INFO - 2022-08-17 05:17:33 --> Controller Class Initialized
INFO - 2022-08-17 05:17:33 --> Model Class Initialized
DEBUG - 2022-08-17 05:17:33 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 05:17:33 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 05:17:33 --> Final output sent to browser
DEBUG - 2022-08-17 05:17:33 --> Total execution time: 0.3289
INFO - 2022-08-17 05:17:39 --> Controller Class Initialized
INFO - 2022-08-17 05:17:39 --> Model Class Initialized
ERROR - 2022-08-17 05:17:39 --> Query error: Table 'cendolka_bhojon.user' doesn't exist - Invalid query: SELECT `user`.`id`, CONCAT_WS(' ', `user`.`firstname`, user.lastname) AS fullname, `user`.`email`, `user`.`image`, `user`.`last_login`, `user`.`last_logout`, `user`.`ip_address`, `user`.`counter`, `user`.`status`, `user`.`is_admin`, IF (user.is_admin=1, 'Admin', 'User') as user_level
FROM `user`
WHERE `email` = 'hamza8402017@gmail.com'
AND `password` = '46310eb402e184bb757862862f12606a'
INFO - 2022-08-17 05:17:39 --> Controller Class Initialized
INFO - 2022-08-17 05:17:39 --> Model Class Initialized
DEBUG - 2022-08-17 05:17:39 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 05:17:39 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 05:17:39 --> Final output sent to browser
DEBUG - 2022-08-17 05:17:39 --> Total execution time: 0.2422
INFO - 2022-08-17 05:25:27 --> Controller Class Initialized
INFO - 2022-08-17 05:25:27 --> Model Class Initialized
ERROR - 2022-08-17 05:25:27 --> Query error: Table 'cendolka_bhojon.user' doesn't exist - Invalid query: SELECT `user`.`id`, CONCAT_WS(' ', `user`.`firstname`, user.lastname) AS fullname, `user`.`email`, `user`.`image`, `user`.`last_login`, `user`.`last_logout`, `user`.`ip_address`, `user`.`counter`, `user`.`status`, `user`.`is_admin`, IF (user.is_admin=1, 'Admin', 'User') as user_level
FROM `user`
WHERE `email` = 'super-admin@ckhqr.com'
AND `password` = 'e10adc3949ba59abbe56e057f20f883e'
INFO - 2022-08-17 05:25:28 --> Controller Class Initialized
INFO - 2022-08-17 05:25:28 --> Model Class Initialized
DEBUG - 2022-08-17 05:25:28 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 05:25:28 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 05:25:28 --> Final output sent to browser
DEBUG - 2022-08-17 05:25:28 --> Total execution time: 0.4321
INFO - 2022-08-17 05:41:00 --> Controller Class Initialized
INFO - 2022-08-17 05:41:00 --> Model Class Initialized
INFO - 2022-08-17 05:41:00 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2022-08-17 05:41:01 --> Controller Class Initialized
INFO - 2022-08-17 05:41:01 --> Model Class Initialized
DEBUG - 2022-08-17 05:41:01 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 05:41:01 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 05:41:01 --> Final output sent to browser
DEBUG - 2022-08-17 05:41:01 --> Total execution time: 0.1835
INFO - 2022-08-17 05:41:48 --> Controller Class Initialized
INFO - 2022-08-17 05:41:49 --> Model Class Initialized
INFO - 2022-08-17 05:41:49 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2022-08-17 05:41:49 --> Controller Class Initialized
INFO - 2022-08-17 05:41:49 --> Model Class Initialized
DEBUG - 2022-08-17 05:41:49 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 05:41:49 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 05:41:49 --> Final output sent to browser
DEBUG - 2022-08-17 05:41:49 --> Total execution time: 0.1701
INFO - 2022-08-17 05:42:28 --> Controller Class Initialized
INFO - 2022-08-17 05:42:28 --> Model Class Initialized
INFO - 2022-08-17 05:43:22 --> Controller Class Initialized
INFO - 2022-08-17 05:43:22 --> Model Class Initialized
INFO - 2022-08-17 05:43:22 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2022-08-17 05:43:22 --> Controller Class Initialized
INFO - 2022-08-17 05:43:22 --> Model Class Initialized
DEBUG - 2022-08-17 05:43:22 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 05:43:22 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 05:43:22 --> Final output sent to browser
DEBUG - 2022-08-17 05:43:22 --> Total execution time: 0.1852
INFO - 2022-08-17 05:43:32 --> Controller Class Initialized
INFO - 2022-08-17 05:43:32 --> Model Class Initialized
INFO - 2022-08-17 05:43:32 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2022-08-17 05:43:32 --> Controller Class Initialized
INFO - 2022-08-17 05:43:32 --> Model Class Initialized
DEBUG - 2022-08-17 05:43:32 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 05:43:32 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 05:43:32 --> Final output sent to browser
DEBUG - 2022-08-17 05:43:32 --> Total execution time: 0.2264
INFO - 2022-08-17 05:44:12 --> Controller Class Initialized
INFO - 2022-08-17 05:44:12 --> Model Class Initialized
INFO - 2022-08-17 05:44:12 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2022-08-17 05:44:12 --> Controller Class Initialized
INFO - 2022-08-17 05:44:12 --> Model Class Initialized
DEBUG - 2022-08-17 05:44:12 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/header.php
DEBUG - 2022-08-17 05:44:12 --> File loaded: C:\xampp\htdocs\sop\application\views\themes/super-admin/login.php
INFO - 2022-08-17 05:44:12 --> Final output sent to browser
DEBUG - 2022-08-17 05:44:12 --> Total execution time: 0.2910
INFO - 2022-08-17 05:45:09 --> Controller Class Initialized
INFO - 2022-08-17 05:45:09 --> Model Class Initialized
INFO - 2022-08-17 05:45:35 --> Controller Class Initialized
INFO - 2022-08-17 05:45:35 --> Model Class Initialized
INFO - 2022-08-17 05:45:35 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2022-08-17 05:45:59 --> Controller Class Initialized
INFO - 2022-08-17 05:45:59 --> Model Class Initialized
INFO - 2022-08-17 05:46:42 --> Controller Class Initialized
INFO - 2022-08-17 05:46:42 --> Model Class Initialized
ERROR - 2022-08-17 05:46:42 --> Severity: Notice --> Trying to get property 'is_admin' of non-object C:\xampp\htdocs\sop\application\controllers\admin\Login.php 37
INFO - 2022-08-17 05:47:01 --> Controller Class Initialized
INFO - 2022-08-17 05:47:01 --> Model Class Initialized
INFO - 2022-08-17 05:47:44 --> Controller Class Initialized
INFO - 2022-08-17 05:47:44 --> Model Class Initialized
ERROR - 2022-08-17 05:47:44 --> Severity: Notice --> Trying to get property 'is_admin' of non-object C:\xampp\htdocs\sop\application\controllers\admin\Login.php 37
INFO - 2022-08-17 05:48:02 --> Controller Class Initialized
INFO - 2022-08-17 05:48:02 --> Model Class Initialized
ERROR - 2022-08-17 05:48:02 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$is_admin C:\xampp\htdocs\sop\application\controllers\admin\Login.php 37
INFO - 2022-08-17 05:48:17 --> Controller Class Initialized
INFO - 2022-08-17 05:48:17 --> Model Class Initialized
INFO - 2022-08-17 05:49:17 --> Controller Class Initialized
INFO - 2022-08-17 05:49:17 --> Model Class Initialized
INFO - 2022-08-17 05:49:17 --> Language file loaded: language/english/form_validation_lang.php
ERROR - 2022-08-17 05:49:17 --> Severity: Notice --> Trying to get property 'is_admin' of non-object C:\xampp\htdocs\sop\application\controllers\admin\Login.php 43
ERROR - 2022-08-17 05:49:17 --> Severity: Notice --> Trying to get property 'is_admin' of non-object C:\xampp\htdocs\sop\application\controllers\admin\Login.php 44
ERROR - 2022-08-17 05:49:17 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\sop\application\controllers\admin\Login.php 45
ERROR - 2022-08-17 05:49:17 --> Severity: Notice --> Trying to get property 'fullname' of non-object C:\xampp\htdocs\sop\application\controllers\admin\Login.php 47
ERROR - 2022-08-17 05:49:17 --> Severity: Notice --> Trying to get property 'user_level' of non-object C:\xampp\htdocs\sop\application\controllers\admin\Login.php 48
ERROR - 2022-08-17 05:49:17 --> Severity: Notice --> Trying to get property 'email' of non-object C:\xampp\htdocs\sop\application\controllers\admin\Login.php 49
ERROR - 2022-08-17 05:49:17 --> Severity: Notice --> Trying to get property 'image' of non-object C:\xampp\htdocs\sop\application\controllers\admin\Login.php 50
ERROR - 2022-08-17 05:49:17 --> Severity: Notice --> Trying to get property 'last_login' of non-object C:\xampp\htdocs\sop\application\controllers\admin\Login.php 51
ERROR - 2022-08-17 05:49:17 --> Severity: Notice --> Trying to get property 'last_logout' of non-object C:\xampp\htdocs\sop\application\controllers\admin\Login.php 52
ERROR - 2022-08-17 05:49:17 --> Severity: Notice --> Trying to get property 'ip_address' of non-object C:\xampp\htdocs\sop\application\controllers\admin\Login.php 53
INFO - 2022-08-17 20:51:58 --> Config Class Initialized
INFO - 2022-08-17 20:51:58 --> Hooks Class Initialized
DEBUG - 2022-08-17 20:51:58 --> UTF-8 Support Enabled
INFO - 2022-08-17 20:51:58 --> Utf8 Class Initialized
INFO - 2022-08-17 20:51:58 --> URI Class Initialized
INFO - 2022-08-17 20:51:59 --> Router Class Initialized
INFO - 2022-08-17 20:51:59 --> Output Class Initialized
INFO - 2022-08-17 20:51:59 --> Security Class Initialized
DEBUG - 2022-08-17 20:51:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 20:51:59 --> CSRF cookie sent
INFO - 2022-08-17 20:51:59 --> Input Class Initialized
INFO - 2022-08-17 20:51:59 --> Language Class Initialized
INFO - 2022-08-17 20:51:59 --> Language Class Initialized
INFO - 2022-08-17 20:51:59 --> Config Class Initialized
INFO - 2022-08-17 20:51:59 --> Loader Class Initialized
INFO - 2022-08-17 20:51:59 --> Helper loaded: url_helper
INFO - 2022-08-17 20:51:59 --> Helper loaded: security_helper
INFO - 2022-08-17 20:51:59 --> Helper loaded: file_helper
INFO - 2022-08-17 20:51:59 --> Helper loaded: html_helper
INFO - 2022-08-17 20:51:59 --> Helper loaded: form_helper
INFO - 2022-08-17 20:51:59 --> Helper loaded: text_helper
INFO - 2022-08-17 20:51:59 --> Helper loaded: lang_helper
INFO - 2022-08-17 20:51:59 --> Helper loaded: directory_helper
INFO - 2022-08-17 20:51:59 --> Helper loaded: common_helper
INFO - 2022-08-17 20:51:59 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 20:51:59 --> Database Driver Class Initialized
INFO - 2022-08-17 20:52:00 --> Helper loaded: sslc_helper
INFO - 2022-08-17 20:52:01 --> Email Class Initialized
INFO - 2022-08-17 20:52:01 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 20:52:01 --> Cart Class Initialized
INFO - 2022-08-17 20:52:01 --> Form Validation Class Initialized
DEBUG - 2022-08-17 20:52:01 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 20:52:01 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 20:52:01 --> Pagination Class Initialized
INFO - 2022-08-17 20:52:02 --> Config Class Initialized
INFO - 2022-08-17 20:52:02 --> Hooks Class Initialized
DEBUG - 2022-08-17 20:52:02 --> UTF-8 Support Enabled
INFO - 2022-08-17 20:52:02 --> Utf8 Class Initialized
INFO - 2022-08-17 20:52:02 --> URI Class Initialized
INFO - 2022-08-17 20:52:02 --> Router Class Initialized
INFO - 2022-08-17 20:52:02 --> Output Class Initialized
INFO - 2022-08-17 20:52:02 --> Security Class Initialized
DEBUG - 2022-08-17 20:52:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 20:52:02 --> CSRF cookie sent
INFO - 2022-08-17 20:52:02 --> Input Class Initialized
INFO - 2022-08-17 20:52:02 --> Language Class Initialized
ERROR - 2022-08-17 20:52:02 --> 404 Page Not Found: /index
INFO - 2022-08-17 20:53:19 --> Config Class Initialized
INFO - 2022-08-17 20:53:19 --> Hooks Class Initialized
DEBUG - 2022-08-17 20:53:19 --> UTF-8 Support Enabled
INFO - 2022-08-17 20:53:19 --> Utf8 Class Initialized
INFO - 2022-08-17 20:53:19 --> URI Class Initialized
INFO - 2022-08-17 20:53:19 --> Router Class Initialized
INFO - 2022-08-17 20:53:19 --> Output Class Initialized
INFO - 2022-08-17 20:53:19 --> Security Class Initialized
DEBUG - 2022-08-17 20:53:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 20:53:19 --> CSRF cookie sent
INFO - 2022-08-17 20:53:19 --> CSRF token verified
INFO - 2022-08-17 20:53:19 --> Input Class Initialized
INFO - 2022-08-17 20:53:19 --> Language Class Initialized
INFO - 2022-08-17 20:53:19 --> Language Class Initialized
INFO - 2022-08-17 20:53:19 --> Config Class Initialized
INFO - 2022-08-17 20:53:19 --> Loader Class Initialized
INFO - 2022-08-17 20:53:19 --> Helper loaded: url_helper
INFO - 2022-08-17 20:53:19 --> Helper loaded: security_helper
INFO - 2022-08-17 20:53:19 --> Helper loaded: file_helper
INFO - 2022-08-17 20:53:19 --> Helper loaded: html_helper
INFO - 2022-08-17 20:53:19 --> Helper loaded: form_helper
INFO - 2022-08-17 20:53:19 --> Helper loaded: text_helper
INFO - 2022-08-17 20:53:19 --> Helper loaded: lang_helper
INFO - 2022-08-17 20:53:19 --> Helper loaded: directory_helper
INFO - 2022-08-17 20:53:19 --> Helper loaded: common_helper
INFO - 2022-08-17 20:53:19 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 20:53:19 --> Database Driver Class Initialized
INFO - 2022-08-17 20:53:19 --> Helper loaded: sslc_helper
INFO - 2022-08-17 20:53:19 --> Email Class Initialized
INFO - 2022-08-17 20:53:19 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 20:53:19 --> Cart Class Initialized
INFO - 2022-08-17 20:53:19 --> Form Validation Class Initialized
DEBUG - 2022-08-17 20:53:19 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 20:53:19 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 20:53:19 --> Pagination Class Initialized
INFO - 2022-08-17 20:53:45 --> Config Class Initialized
INFO - 2022-08-17 20:53:45 --> Hooks Class Initialized
DEBUG - 2022-08-17 20:53:45 --> UTF-8 Support Enabled
INFO - 2022-08-17 20:53:45 --> Utf8 Class Initialized
INFO - 2022-08-17 20:53:45 --> URI Class Initialized
INFO - 2022-08-17 20:53:45 --> Router Class Initialized
INFO - 2022-08-17 20:53:45 --> Output Class Initialized
INFO - 2022-08-17 20:53:45 --> Security Class Initialized
DEBUG - 2022-08-17 20:53:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 20:53:45 --> CSRF cookie sent
INFO - 2022-08-17 20:53:45 --> CSRF token verified
INFO - 2022-08-17 20:53:45 --> Input Class Initialized
INFO - 2022-08-17 20:53:45 --> Language Class Initialized
INFO - 2022-08-17 20:53:45 --> Language Class Initialized
INFO - 2022-08-17 20:53:45 --> Config Class Initialized
INFO - 2022-08-17 20:53:45 --> Loader Class Initialized
INFO - 2022-08-17 20:53:45 --> Helper loaded: url_helper
INFO - 2022-08-17 20:53:45 --> Helper loaded: security_helper
INFO - 2022-08-17 20:53:45 --> Helper loaded: file_helper
INFO - 2022-08-17 20:53:45 --> Helper loaded: html_helper
INFO - 2022-08-17 20:53:45 --> Helper loaded: form_helper
INFO - 2022-08-17 20:53:45 --> Helper loaded: text_helper
INFO - 2022-08-17 20:53:45 --> Helper loaded: lang_helper
INFO - 2022-08-17 20:53:45 --> Helper loaded: directory_helper
INFO - 2022-08-17 20:53:45 --> Helper loaded: common_helper
INFO - 2022-08-17 20:53:45 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 20:53:45 --> Database Driver Class Initialized
INFO - 2022-08-17 20:53:45 --> Helper loaded: sslc_helper
INFO - 2022-08-17 20:53:45 --> Email Class Initialized
INFO - 2022-08-17 20:53:45 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 20:53:45 --> Cart Class Initialized
INFO - 2022-08-17 20:53:45 --> Form Validation Class Initialized
DEBUG - 2022-08-17 20:53:45 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 20:53:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 20:53:45 --> Pagination Class Initialized
INFO - 2022-08-17 20:54:50 --> Config Class Initialized
INFO - 2022-08-17 20:54:50 --> Hooks Class Initialized
DEBUG - 2022-08-17 20:54:50 --> UTF-8 Support Enabled
INFO - 2022-08-17 20:54:50 --> Utf8 Class Initialized
INFO - 2022-08-17 20:54:50 --> URI Class Initialized
INFO - 2022-08-17 20:54:50 --> Router Class Initialized
INFO - 2022-08-17 20:54:50 --> Output Class Initialized
INFO - 2022-08-17 20:54:50 --> Security Class Initialized
DEBUG - 2022-08-17 20:54:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 20:54:50 --> CSRF cookie sent
INFO - 2022-08-17 20:54:50 --> CSRF token verified
INFO - 2022-08-17 20:54:50 --> Input Class Initialized
INFO - 2022-08-17 20:54:50 --> Language Class Initialized
INFO - 2022-08-17 20:54:50 --> Language Class Initialized
INFO - 2022-08-17 20:54:50 --> Config Class Initialized
INFO - 2022-08-17 20:54:50 --> Loader Class Initialized
INFO - 2022-08-17 20:54:50 --> Helper loaded: url_helper
INFO - 2022-08-17 20:54:50 --> Helper loaded: security_helper
INFO - 2022-08-17 20:54:50 --> Helper loaded: file_helper
INFO - 2022-08-17 20:54:50 --> Helper loaded: html_helper
INFO - 2022-08-17 20:54:50 --> Helper loaded: form_helper
INFO - 2022-08-17 20:54:50 --> Helper loaded: text_helper
INFO - 2022-08-17 20:54:50 --> Helper loaded: lang_helper
INFO - 2022-08-17 20:54:50 --> Helper loaded: directory_helper
INFO - 2022-08-17 20:54:50 --> Helper loaded: common_helper
INFO - 2022-08-17 20:54:50 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 20:54:50 --> Database Driver Class Initialized
INFO - 2022-08-17 20:54:50 --> Helper loaded: sslc_helper
INFO - 2022-08-17 20:54:50 --> Email Class Initialized
INFO - 2022-08-17 20:54:50 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 20:54:50 --> Cart Class Initialized
INFO - 2022-08-17 20:54:50 --> Form Validation Class Initialized
DEBUG - 2022-08-17 20:54:50 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 20:54:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 20:54:50 --> Pagination Class Initialized
INFO - 2022-08-17 20:55:31 --> Config Class Initialized
INFO - 2022-08-17 20:55:31 --> Hooks Class Initialized
DEBUG - 2022-08-17 20:55:31 --> UTF-8 Support Enabled
INFO - 2022-08-17 20:55:31 --> Utf8 Class Initialized
INFO - 2022-08-17 20:55:31 --> URI Class Initialized
INFO - 2022-08-17 20:55:32 --> Router Class Initialized
INFO - 2022-08-17 20:55:32 --> Output Class Initialized
INFO - 2022-08-17 20:55:32 --> Security Class Initialized
DEBUG - 2022-08-17 20:55:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 20:55:32 --> CSRF cookie sent
INFO - 2022-08-17 20:55:32 --> CSRF token verified
INFO - 2022-08-17 20:55:32 --> Input Class Initialized
INFO - 2022-08-17 20:55:32 --> Language Class Initialized
INFO - 2022-08-17 20:55:32 --> Language Class Initialized
INFO - 2022-08-17 20:55:32 --> Config Class Initialized
INFO - 2022-08-17 20:55:32 --> Loader Class Initialized
INFO - 2022-08-17 20:55:32 --> Helper loaded: url_helper
INFO - 2022-08-17 20:55:32 --> Helper loaded: security_helper
INFO - 2022-08-17 20:55:32 --> Helper loaded: file_helper
INFO - 2022-08-17 20:55:32 --> Helper loaded: html_helper
INFO - 2022-08-17 20:55:32 --> Helper loaded: form_helper
INFO - 2022-08-17 20:55:32 --> Helper loaded: text_helper
INFO - 2022-08-17 20:55:32 --> Helper loaded: lang_helper
INFO - 2022-08-17 20:55:32 --> Helper loaded: directory_helper
INFO - 2022-08-17 20:55:32 --> Helper loaded: common_helper
INFO - 2022-08-17 20:55:32 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 20:55:32 --> Database Driver Class Initialized
INFO - 2022-08-17 20:55:32 --> Helper loaded: sslc_helper
INFO - 2022-08-17 20:55:32 --> Email Class Initialized
INFO - 2022-08-17 20:55:32 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 20:55:32 --> Cart Class Initialized
INFO - 2022-08-17 20:55:32 --> Form Validation Class Initialized
DEBUG - 2022-08-17 20:55:32 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 20:55:32 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 20:55:32 --> Pagination Class Initialized
INFO - 2022-08-17 20:58:26 --> Config Class Initialized
INFO - 2022-08-17 20:58:26 --> Hooks Class Initialized
DEBUG - 2022-08-17 20:58:26 --> UTF-8 Support Enabled
INFO - 2022-08-17 20:58:26 --> Utf8 Class Initialized
INFO - 2022-08-17 20:58:26 --> URI Class Initialized
INFO - 2022-08-17 20:58:26 --> Router Class Initialized
INFO - 2022-08-17 20:58:26 --> Output Class Initialized
INFO - 2022-08-17 20:58:26 --> Security Class Initialized
DEBUG - 2022-08-17 20:58:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 20:58:26 --> CSRF cookie sent
INFO - 2022-08-17 20:58:26 --> CSRF token verified
INFO - 2022-08-17 20:58:26 --> Input Class Initialized
INFO - 2022-08-17 20:58:26 --> Language Class Initialized
INFO - 2022-08-17 20:58:26 --> Language Class Initialized
INFO - 2022-08-17 20:58:26 --> Config Class Initialized
INFO - 2022-08-17 20:58:26 --> Loader Class Initialized
INFO - 2022-08-17 20:58:26 --> Helper loaded: url_helper
INFO - 2022-08-17 20:58:26 --> Helper loaded: security_helper
INFO - 2022-08-17 20:58:26 --> Helper loaded: file_helper
INFO - 2022-08-17 20:58:26 --> Helper loaded: html_helper
INFO - 2022-08-17 20:58:26 --> Helper loaded: form_helper
INFO - 2022-08-17 20:58:26 --> Helper loaded: text_helper
INFO - 2022-08-17 20:58:26 --> Helper loaded: lang_helper
INFO - 2022-08-17 20:58:26 --> Helper loaded: directory_helper
INFO - 2022-08-17 20:58:26 --> Helper loaded: common_helper
INFO - 2022-08-17 20:58:26 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 20:58:26 --> Database Driver Class Initialized
INFO - 2022-08-17 20:58:26 --> Helper loaded: sslc_helper
INFO - 2022-08-17 20:58:26 --> Email Class Initialized
INFO - 2022-08-17 20:58:26 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 20:58:26 --> Cart Class Initialized
INFO - 2022-08-17 20:58:26 --> Form Validation Class Initialized
DEBUG - 2022-08-17 20:58:26 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 20:58:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 20:58:26 --> Pagination Class Initialized
INFO - 2022-08-17 21:00:55 --> Config Class Initialized
INFO - 2022-08-17 21:00:55 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:00:55 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:00:55 --> Utf8 Class Initialized
INFO - 2022-08-17 21:00:55 --> URI Class Initialized
INFO - 2022-08-17 21:00:55 --> Router Class Initialized
INFO - 2022-08-17 21:00:55 --> Output Class Initialized
INFO - 2022-08-17 21:00:55 --> Security Class Initialized
DEBUG - 2022-08-17 21:00:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:00:55 --> CSRF cookie sent
INFO - 2022-08-17 21:00:55 --> CSRF token verified
INFO - 2022-08-17 21:00:55 --> Input Class Initialized
INFO - 2022-08-17 21:00:55 --> Language Class Initialized
INFO - 2022-08-17 21:00:55 --> Language Class Initialized
INFO - 2022-08-17 21:00:55 --> Config Class Initialized
INFO - 2022-08-17 21:00:55 --> Loader Class Initialized
INFO - 2022-08-17 21:00:55 --> Helper loaded: url_helper
INFO - 2022-08-17 21:00:55 --> Helper loaded: security_helper
INFO - 2022-08-17 21:00:55 --> Helper loaded: file_helper
INFO - 2022-08-17 21:00:55 --> Helper loaded: html_helper
INFO - 2022-08-17 21:00:55 --> Helper loaded: form_helper
INFO - 2022-08-17 21:00:55 --> Helper loaded: text_helper
INFO - 2022-08-17 21:00:55 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:00:55 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:00:55 --> Helper loaded: common_helper
INFO - 2022-08-17 21:00:55 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:00:55 --> Database Driver Class Initialized
INFO - 2022-08-17 21:00:55 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:00:55 --> Email Class Initialized
INFO - 2022-08-17 21:00:55 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:00:55 --> Cart Class Initialized
INFO - 2022-08-17 21:00:55 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:00:55 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:00:55 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:00:55 --> Pagination Class Initialized
INFO - 2022-08-17 21:01:19 --> Config Class Initialized
INFO - 2022-08-17 21:01:19 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:01:19 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:01:19 --> Utf8 Class Initialized
INFO - 2022-08-17 21:01:19 --> URI Class Initialized
INFO - 2022-08-17 21:01:19 --> Router Class Initialized
INFO - 2022-08-17 21:01:19 --> Output Class Initialized
INFO - 2022-08-17 21:01:19 --> Security Class Initialized
DEBUG - 2022-08-17 21:01:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:01:19 --> CSRF cookie sent
INFO - 2022-08-17 21:01:19 --> CSRF token verified
INFO - 2022-08-17 21:01:19 --> Input Class Initialized
INFO - 2022-08-17 21:01:19 --> Language Class Initialized
INFO - 2022-08-17 21:01:19 --> Language Class Initialized
INFO - 2022-08-17 21:01:19 --> Config Class Initialized
INFO - 2022-08-17 21:01:19 --> Loader Class Initialized
INFO - 2022-08-17 21:01:19 --> Helper loaded: url_helper
INFO - 2022-08-17 21:01:19 --> Helper loaded: security_helper
INFO - 2022-08-17 21:01:19 --> Helper loaded: file_helper
INFO - 2022-08-17 21:01:19 --> Helper loaded: html_helper
INFO - 2022-08-17 21:01:19 --> Helper loaded: form_helper
INFO - 2022-08-17 21:01:19 --> Helper loaded: text_helper
INFO - 2022-08-17 21:01:19 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:01:19 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:01:19 --> Helper loaded: common_helper
INFO - 2022-08-17 21:01:19 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:01:19 --> Database Driver Class Initialized
INFO - 2022-08-17 21:01:19 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:01:19 --> Email Class Initialized
INFO - 2022-08-17 21:01:19 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:01:19 --> Cart Class Initialized
INFO - 2022-08-17 21:01:19 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:01:20 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:01:20 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:01:20 --> Pagination Class Initialized
INFO - 2022-08-17 21:02:17 --> Config Class Initialized
INFO - 2022-08-17 21:02:17 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:02:17 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:02:17 --> Utf8 Class Initialized
INFO - 2022-08-17 21:02:17 --> URI Class Initialized
INFO - 2022-08-17 21:02:17 --> Router Class Initialized
INFO - 2022-08-17 21:02:17 --> Output Class Initialized
INFO - 2022-08-17 21:02:17 --> Security Class Initialized
DEBUG - 2022-08-17 21:02:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:02:17 --> CSRF cookie sent
INFO - 2022-08-17 21:02:17 --> CSRF token verified
INFO - 2022-08-17 21:02:17 --> Input Class Initialized
INFO - 2022-08-17 21:02:17 --> Language Class Initialized
INFO - 2022-08-17 21:02:17 --> Language Class Initialized
INFO - 2022-08-17 21:02:17 --> Config Class Initialized
INFO - 2022-08-17 21:02:17 --> Loader Class Initialized
INFO - 2022-08-17 21:02:17 --> Helper loaded: url_helper
INFO - 2022-08-17 21:02:17 --> Helper loaded: security_helper
INFO - 2022-08-17 21:02:17 --> Helper loaded: file_helper
INFO - 2022-08-17 21:02:17 --> Helper loaded: html_helper
INFO - 2022-08-17 21:02:17 --> Helper loaded: form_helper
INFO - 2022-08-17 21:02:17 --> Helper loaded: text_helper
INFO - 2022-08-17 21:02:17 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:02:17 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:02:17 --> Helper loaded: common_helper
INFO - 2022-08-17 21:02:17 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:02:17 --> Database Driver Class Initialized
INFO - 2022-08-17 21:02:17 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:02:17 --> Email Class Initialized
INFO - 2022-08-17 21:02:17 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:02:17 --> Cart Class Initialized
INFO - 2022-08-17 21:02:17 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:02:17 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:02:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:02:17 --> Pagination Class Initialized
INFO - 2022-08-17 21:02:23 --> Config Class Initialized
INFO - 2022-08-17 21:02:23 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:02:23 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:02:23 --> Utf8 Class Initialized
INFO - 2022-08-17 21:02:23 --> URI Class Initialized
INFO - 2022-08-17 21:02:23 --> Router Class Initialized
INFO - 2022-08-17 21:02:23 --> Output Class Initialized
INFO - 2022-08-17 21:02:23 --> Security Class Initialized
DEBUG - 2022-08-17 21:02:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:02:23 --> CSRF cookie sent
INFO - 2022-08-17 21:02:23 --> CSRF token verified
INFO - 2022-08-17 21:02:23 --> Input Class Initialized
INFO - 2022-08-17 21:02:23 --> Language Class Initialized
INFO - 2022-08-17 21:02:23 --> Language Class Initialized
INFO - 2022-08-17 21:02:23 --> Config Class Initialized
INFO - 2022-08-17 21:02:23 --> Loader Class Initialized
INFO - 2022-08-17 21:02:23 --> Helper loaded: url_helper
INFO - 2022-08-17 21:02:23 --> Helper loaded: security_helper
INFO - 2022-08-17 21:02:23 --> Helper loaded: file_helper
INFO - 2022-08-17 21:02:23 --> Helper loaded: html_helper
INFO - 2022-08-17 21:02:23 --> Helper loaded: form_helper
INFO - 2022-08-17 21:02:23 --> Helper loaded: text_helper
INFO - 2022-08-17 21:02:23 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:02:23 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:02:23 --> Helper loaded: common_helper
INFO - 2022-08-17 21:02:23 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:02:23 --> Database Driver Class Initialized
INFO - 2022-08-17 21:02:23 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:02:23 --> Email Class Initialized
INFO - 2022-08-17 21:02:23 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:02:23 --> Cart Class Initialized
INFO - 2022-08-17 21:02:23 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:02:23 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:02:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:02:23 --> Pagination Class Initialized
INFO - 2022-08-17 21:02:36 --> Config Class Initialized
INFO - 2022-08-17 21:02:36 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:02:36 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:02:36 --> Utf8 Class Initialized
INFO - 2022-08-17 21:02:36 --> URI Class Initialized
INFO - 2022-08-17 21:02:36 --> Router Class Initialized
INFO - 2022-08-17 21:02:36 --> Output Class Initialized
INFO - 2022-08-17 21:02:36 --> Security Class Initialized
DEBUG - 2022-08-17 21:02:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:02:36 --> CSRF cookie sent
INFO - 2022-08-17 21:02:36 --> CSRF token verified
INFO - 2022-08-17 21:02:36 --> Input Class Initialized
INFO - 2022-08-17 21:02:36 --> Language Class Initialized
INFO - 2022-08-17 21:02:36 --> Language Class Initialized
INFO - 2022-08-17 21:02:36 --> Config Class Initialized
INFO - 2022-08-17 21:02:36 --> Loader Class Initialized
INFO - 2022-08-17 21:02:36 --> Helper loaded: url_helper
INFO - 2022-08-17 21:02:36 --> Helper loaded: security_helper
INFO - 2022-08-17 21:02:36 --> Helper loaded: file_helper
INFO - 2022-08-17 21:02:36 --> Helper loaded: html_helper
INFO - 2022-08-17 21:02:36 --> Helper loaded: form_helper
INFO - 2022-08-17 21:02:36 --> Helper loaded: text_helper
INFO - 2022-08-17 21:02:36 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:02:36 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:02:36 --> Helper loaded: common_helper
INFO - 2022-08-17 21:02:36 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:02:36 --> Database Driver Class Initialized
INFO - 2022-08-17 21:02:36 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:02:36 --> Email Class Initialized
INFO - 2022-08-17 21:02:36 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:02:36 --> Cart Class Initialized
INFO - 2022-08-17 21:02:36 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:02:36 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:02:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:02:36 --> Pagination Class Initialized
INFO - 2022-08-17 21:02:44 --> Config Class Initialized
INFO - 2022-08-17 21:02:44 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:02:44 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:02:44 --> Utf8 Class Initialized
INFO - 2022-08-17 21:02:44 --> URI Class Initialized
INFO - 2022-08-17 21:02:44 --> Router Class Initialized
INFO - 2022-08-17 21:02:44 --> Output Class Initialized
INFO - 2022-08-17 21:02:44 --> Security Class Initialized
DEBUG - 2022-08-17 21:02:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:02:44 --> CSRF cookie sent
INFO - 2022-08-17 21:02:44 --> CSRF token verified
INFO - 2022-08-17 21:02:44 --> Input Class Initialized
INFO - 2022-08-17 21:02:44 --> Language Class Initialized
INFO - 2022-08-17 21:02:44 --> Language Class Initialized
INFO - 2022-08-17 21:02:44 --> Config Class Initialized
INFO - 2022-08-17 21:02:44 --> Loader Class Initialized
INFO - 2022-08-17 21:02:44 --> Helper loaded: url_helper
INFO - 2022-08-17 21:02:44 --> Helper loaded: security_helper
INFO - 2022-08-17 21:02:44 --> Helper loaded: file_helper
INFO - 2022-08-17 21:02:44 --> Helper loaded: html_helper
INFO - 2022-08-17 21:02:44 --> Helper loaded: form_helper
INFO - 2022-08-17 21:02:44 --> Helper loaded: text_helper
INFO - 2022-08-17 21:02:44 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:02:44 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:02:44 --> Helper loaded: common_helper
INFO - 2022-08-17 21:02:44 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:02:44 --> Database Driver Class Initialized
INFO - 2022-08-17 21:02:44 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:02:44 --> Email Class Initialized
INFO - 2022-08-17 21:02:44 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:02:44 --> Cart Class Initialized
INFO - 2022-08-17 21:02:44 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:02:44 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:02:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:02:44 --> Pagination Class Initialized
INFO - 2022-08-17 21:03:54 --> Config Class Initialized
INFO - 2022-08-17 21:03:54 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:03:54 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:03:54 --> Utf8 Class Initialized
INFO - 2022-08-17 21:03:54 --> URI Class Initialized
INFO - 2022-08-17 21:03:54 --> Router Class Initialized
INFO - 2022-08-17 21:03:54 --> Output Class Initialized
INFO - 2022-08-17 21:03:54 --> Security Class Initialized
DEBUG - 2022-08-17 21:03:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:03:54 --> CSRF cookie sent
INFO - 2022-08-17 21:03:54 --> CSRF token verified
INFO - 2022-08-17 21:03:54 --> Input Class Initialized
INFO - 2022-08-17 21:03:54 --> Language Class Initialized
INFO - 2022-08-17 21:03:54 --> Language Class Initialized
INFO - 2022-08-17 21:03:54 --> Config Class Initialized
INFO - 2022-08-17 21:03:54 --> Loader Class Initialized
INFO - 2022-08-17 21:03:54 --> Helper loaded: url_helper
INFO - 2022-08-17 21:03:54 --> Helper loaded: security_helper
INFO - 2022-08-17 21:03:54 --> Helper loaded: file_helper
INFO - 2022-08-17 21:03:54 --> Helper loaded: html_helper
INFO - 2022-08-17 21:03:54 --> Helper loaded: form_helper
INFO - 2022-08-17 21:03:54 --> Helper loaded: text_helper
INFO - 2022-08-17 21:03:54 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:03:54 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:03:54 --> Helper loaded: common_helper
INFO - 2022-08-17 21:03:54 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:03:54 --> Database Driver Class Initialized
INFO - 2022-08-17 21:03:54 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:03:54 --> Email Class Initialized
INFO - 2022-08-17 21:03:54 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:03:54 --> Cart Class Initialized
INFO - 2022-08-17 21:03:54 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:03:54 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:03:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:03:54 --> Pagination Class Initialized
INFO - 2022-08-17 21:04:30 --> Config Class Initialized
INFO - 2022-08-17 21:04:30 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:04:30 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:04:30 --> Utf8 Class Initialized
INFO - 2022-08-17 21:04:30 --> URI Class Initialized
INFO - 2022-08-17 21:04:30 --> Router Class Initialized
INFO - 2022-08-17 21:04:30 --> Output Class Initialized
INFO - 2022-08-17 21:04:30 --> Security Class Initialized
DEBUG - 2022-08-17 21:04:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:04:30 --> CSRF cookie sent
INFO - 2022-08-17 21:04:30 --> CSRF token verified
INFO - 2022-08-17 21:04:30 --> Input Class Initialized
INFO - 2022-08-17 21:04:30 --> Language Class Initialized
INFO - 2022-08-17 21:04:30 --> Language Class Initialized
INFO - 2022-08-17 21:04:30 --> Config Class Initialized
INFO - 2022-08-17 21:04:30 --> Loader Class Initialized
INFO - 2022-08-17 21:04:30 --> Helper loaded: url_helper
INFO - 2022-08-17 21:04:30 --> Helper loaded: security_helper
INFO - 2022-08-17 21:04:30 --> Helper loaded: file_helper
INFO - 2022-08-17 21:04:30 --> Helper loaded: html_helper
INFO - 2022-08-17 21:04:30 --> Helper loaded: form_helper
INFO - 2022-08-17 21:04:30 --> Helper loaded: text_helper
INFO - 2022-08-17 21:04:30 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:04:30 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:04:30 --> Helper loaded: common_helper
INFO - 2022-08-17 21:04:30 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:04:30 --> Database Driver Class Initialized
INFO - 2022-08-17 21:04:30 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:04:30 --> Email Class Initialized
INFO - 2022-08-17 21:04:30 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:04:30 --> Cart Class Initialized
INFO - 2022-08-17 21:04:30 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:04:30 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:04:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:04:30 --> Pagination Class Initialized
INFO - 2022-08-17 21:05:13 --> Config Class Initialized
INFO - 2022-08-17 21:05:13 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:05:13 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:05:13 --> Utf8 Class Initialized
INFO - 2022-08-17 21:05:13 --> URI Class Initialized
INFO - 2022-08-17 21:05:13 --> Router Class Initialized
INFO - 2022-08-17 21:05:14 --> Output Class Initialized
INFO - 2022-08-17 21:05:14 --> Security Class Initialized
DEBUG - 2022-08-17 21:05:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:05:14 --> CSRF cookie sent
INFO - 2022-08-17 21:05:14 --> CSRF token verified
INFO - 2022-08-17 21:05:14 --> Input Class Initialized
INFO - 2022-08-17 21:05:14 --> Language Class Initialized
INFO - 2022-08-17 21:05:14 --> Language Class Initialized
INFO - 2022-08-17 21:05:14 --> Config Class Initialized
INFO - 2022-08-17 21:05:14 --> Loader Class Initialized
INFO - 2022-08-17 21:05:14 --> Helper loaded: url_helper
INFO - 2022-08-17 21:05:14 --> Helper loaded: security_helper
INFO - 2022-08-17 21:05:14 --> Helper loaded: file_helper
INFO - 2022-08-17 21:05:14 --> Helper loaded: html_helper
INFO - 2022-08-17 21:05:14 --> Helper loaded: form_helper
INFO - 2022-08-17 21:05:14 --> Helper loaded: text_helper
INFO - 2022-08-17 21:05:14 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:05:14 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:05:14 --> Helper loaded: common_helper
INFO - 2022-08-17 21:05:14 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:05:14 --> Database Driver Class Initialized
INFO - 2022-08-17 21:05:14 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:05:14 --> Email Class Initialized
INFO - 2022-08-17 21:05:14 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:05:14 --> Cart Class Initialized
INFO - 2022-08-17 21:05:14 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:05:14 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:05:14 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:05:14 --> Pagination Class Initialized
INFO - 2022-08-17 21:10:33 --> Config Class Initialized
INFO - 2022-08-17 21:10:33 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:10:33 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:10:33 --> Utf8 Class Initialized
INFO - 2022-08-17 21:10:33 --> URI Class Initialized
INFO - 2022-08-17 21:10:33 --> Router Class Initialized
INFO - 2022-08-17 21:10:33 --> Output Class Initialized
INFO - 2022-08-17 21:10:33 --> Security Class Initialized
DEBUG - 2022-08-17 21:10:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:10:33 --> CSRF cookie sent
INFO - 2022-08-17 21:10:33 --> Input Class Initialized
INFO - 2022-08-17 21:10:33 --> Language Class Initialized
INFO - 2022-08-17 21:10:33 --> Language Class Initialized
INFO - 2022-08-17 21:10:33 --> Config Class Initialized
INFO - 2022-08-17 21:10:33 --> Loader Class Initialized
INFO - 2022-08-17 21:10:33 --> Helper loaded: url_helper
INFO - 2022-08-17 21:10:33 --> Helper loaded: security_helper
INFO - 2022-08-17 21:10:33 --> Helper loaded: file_helper
INFO - 2022-08-17 21:10:33 --> Helper loaded: html_helper
INFO - 2022-08-17 21:10:33 --> Helper loaded: form_helper
INFO - 2022-08-17 21:10:33 --> Helper loaded: text_helper
INFO - 2022-08-17 21:10:33 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:10:33 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:10:33 --> Helper loaded: common_helper
INFO - 2022-08-17 21:10:33 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:10:33 --> Database Driver Class Initialized
INFO - 2022-08-17 21:10:33 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:10:33 --> Email Class Initialized
INFO - 2022-08-17 21:10:33 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:10:33 --> Cart Class Initialized
INFO - 2022-08-17 21:10:33 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:10:33 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:10:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:10:33 --> Pagination Class Initialized
INFO - 2022-08-17 21:10:34 --> Config Class Initialized
INFO - 2022-08-17 21:10:34 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:10:34 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:10:34 --> Utf8 Class Initialized
INFO - 2022-08-17 21:10:34 --> URI Class Initialized
INFO - 2022-08-17 21:10:34 --> Router Class Initialized
INFO - 2022-08-17 21:10:34 --> Output Class Initialized
INFO - 2022-08-17 21:10:34 --> Security Class Initialized
DEBUG - 2022-08-17 21:10:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:10:34 --> CSRF cookie sent
INFO - 2022-08-17 21:10:34 --> Input Class Initialized
INFO - 2022-08-17 21:10:34 --> Config Class Initialized
INFO - 2022-08-17 21:10:34 --> Language Class Initialized
INFO - 2022-08-17 21:10:34 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:10:34 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:10:34 --> Utf8 Class Initialized
INFO - 2022-08-17 21:10:34 --> URI Class Initialized
INFO - 2022-08-17 21:10:34 --> Router Class Initialized
INFO - 2022-08-17 21:10:34 --> Output Class Initialized
INFO - 2022-08-17 21:10:34 --> Security Class Initialized
DEBUG - 2022-08-17 21:10:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:10:34 --> CSRF cookie sent
INFO - 2022-08-17 21:10:34 --> Input Class Initialized
INFO - 2022-08-17 21:10:34 --> Language Class Initialized
INFO - 2022-08-17 21:10:34 --> Language Class Initialized
INFO - 2022-08-17 21:10:34 --> Language Class Initialized
INFO - 2022-08-17 21:10:34 --> Config Class Initialized
INFO - 2022-08-17 21:10:34 --> Config Class Initialized
INFO - 2022-08-17 21:10:34 --> Loader Class Initialized
INFO - 2022-08-17 21:10:34 --> Loader Class Initialized
INFO - 2022-08-17 21:10:34 --> Helper loaded: url_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: url_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: security_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: security_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: file_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: file_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: html_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: html_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: form_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: form_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: text_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: text_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: common_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: common_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:10:34 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:10:34 --> Database Driver Class Initialized
INFO - 2022-08-17 21:10:34 --> Database Driver Class Initialized
INFO - 2022-08-17 21:10:34 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:10:34 --> Email Class Initialized
INFO - 2022-08-17 21:10:34 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:10:34 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:10:34 --> Cart Class Initialized
INFO - 2022-08-17 21:10:35 --> Email Class Initialized
INFO - 2022-08-17 21:10:35 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:10:35 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:10:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:10:35 --> Pagination Class Initialized
INFO - 2022-08-17 21:10:35 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:10:35 --> Cart Class Initialized
INFO - 2022-08-17 21:10:35 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:10:35 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:10:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:10:35 --> Pagination Class Initialized
INFO - 2022-08-17 21:10:35 --> Config Class Initialized
INFO - 2022-08-17 21:10:35 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:10:35 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:10:35 --> Utf8 Class Initialized
INFO - 2022-08-17 21:10:35 --> URI Class Initialized
INFO - 2022-08-17 21:10:35 --> Router Class Initialized
INFO - 2022-08-17 21:10:35 --> Output Class Initialized
INFO - 2022-08-17 21:10:35 --> Security Class Initialized
DEBUG - 2022-08-17 21:10:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:10:35 --> CSRF cookie sent
INFO - 2022-08-17 21:10:35 --> Input Class Initialized
INFO - 2022-08-17 21:10:35 --> Config Class Initialized
INFO - 2022-08-17 21:10:35 --> Hooks Class Initialized
INFO - 2022-08-17 21:10:35 --> Language Class Initialized
DEBUG - 2022-08-17 21:10:35 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:10:35 --> Utf8 Class Initialized
INFO - 2022-08-17 21:10:35 --> URI Class Initialized
INFO - 2022-08-17 21:10:35 --> Router Class Initialized
INFO - 2022-08-17 21:10:35 --> Output Class Initialized
INFO - 2022-08-17 21:10:35 --> Security Class Initialized
INFO - 2022-08-17 21:10:35 --> Language Class Initialized
DEBUG - 2022-08-17 21:10:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:10:35 --> Config Class Initialized
INFO - 2022-08-17 21:10:35 --> CSRF cookie sent
INFO - 2022-08-17 21:10:35 --> Input Class Initialized
INFO - 2022-08-17 21:10:35 --> Language Class Initialized
INFO - 2022-08-17 21:10:35 --> Loader Class Initialized
INFO - 2022-08-17 21:10:35 --> Helper loaded: url_helper
INFO - 2022-08-17 21:10:35 --> Helper loaded: security_helper
INFO - 2022-08-17 21:10:35 --> Helper loaded: file_helper
INFO - 2022-08-17 21:10:35 --> Helper loaded: html_helper
INFO - 2022-08-17 21:10:35 --> Language Class Initialized
INFO - 2022-08-17 21:10:35 --> Config Class Initialized
INFO - 2022-08-17 21:10:35 --> Helper loaded: form_helper
INFO - 2022-08-17 21:10:35 --> Loader Class Initialized
INFO - 2022-08-17 21:10:35 --> Helper loaded: text_helper
INFO - 2022-08-17 21:10:35 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:10:35 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:10:35 --> Helper loaded: common_helper
INFO - 2022-08-17 21:10:35 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:10:35 --> Helper loaded: url_helper
INFO - 2022-08-17 21:10:35 --> Database Driver Class Initialized
INFO - 2022-08-17 21:10:35 --> Helper loaded: security_helper
INFO - 2022-08-17 21:10:35 --> Helper loaded: file_helper
INFO - 2022-08-17 21:10:35 --> Helper loaded: html_helper
INFO - 2022-08-17 21:10:35 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:10:35 --> Helper loaded: form_helper
INFO - 2022-08-17 21:10:35 --> Helper loaded: text_helper
INFO - 2022-08-17 21:10:35 --> Email Class Initialized
INFO - 2022-08-17 21:10:35 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:10:35 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:10:35 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:10:35 --> Cart Class Initialized
INFO - 2022-08-17 21:10:35 --> Helper loaded: common_helper
INFO - 2022-08-17 21:10:35 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:10:35 --> Form Validation Class Initialized
INFO - 2022-08-17 21:10:35 --> Database Driver Class Initialized
INFO - 2022-08-17 21:10:35 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:10:35 --> Email Class Initialized
DEBUG - 2022-08-17 21:10:35 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:10:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:10:35 --> Pagination Class Initialized
INFO - 2022-08-17 21:10:35 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:10:35 --> Cart Class Initialized
INFO - 2022-08-17 21:10:35 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:10:35 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:10:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:10:35 --> Pagination Class Initialized
INFO - 2022-08-17 21:11:09 --> Config Class Initialized
INFO - 2022-08-17 21:11:09 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:11:09 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:11:09 --> Utf8 Class Initialized
INFO - 2022-08-17 21:11:09 --> URI Class Initialized
INFO - 2022-08-17 21:11:09 --> Router Class Initialized
INFO - 2022-08-17 21:11:09 --> Output Class Initialized
INFO - 2022-08-17 21:11:09 --> Security Class Initialized
DEBUG - 2022-08-17 21:11:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:11:09 --> Input Class Initialized
INFO - 2022-08-17 21:11:09 --> Language Class Initialized
INFO - 2022-08-17 21:11:09 --> Language Class Initialized
INFO - 2022-08-17 21:11:09 --> Config Class Initialized
INFO - 2022-08-17 21:11:09 --> Loader Class Initialized
INFO - 2022-08-17 21:11:09 --> Helper loaded: url_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: security_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: file_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: html_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: form_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: text_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: common_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:11:09 --> Database Driver Class Initialized
INFO - 2022-08-17 21:11:09 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:11:09 --> Email Class Initialized
INFO - 2022-08-17 21:11:09 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:11:09 --> Cart Class Initialized
INFO - 2022-08-17 21:11:09 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:11:09 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:11:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:11:09 --> Pagination Class Initialized
INFO - 2022-08-17 21:11:09 --> Config Class Initialized
INFO - 2022-08-17 21:11:09 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:11:09 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:11:09 --> Utf8 Class Initialized
INFO - 2022-08-17 21:11:09 --> URI Class Initialized
INFO - 2022-08-17 21:11:09 --> Router Class Initialized
INFO - 2022-08-17 21:11:09 --> Output Class Initialized
INFO - 2022-08-17 21:11:09 --> Security Class Initialized
DEBUG - 2022-08-17 21:11:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:11:09 --> Config Class Initialized
INFO - 2022-08-17 21:11:09 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:11:09 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:11:09 --> Utf8 Class Initialized
INFO - 2022-08-17 21:11:09 --> URI Class Initialized
INFO - 2022-08-17 21:11:09 --> CSRF cookie sent
INFO - 2022-08-17 21:11:09 --> Input Class Initialized
INFO - 2022-08-17 21:11:09 --> Language Class Initialized
INFO - 2022-08-17 21:11:09 --> Router Class Initialized
INFO - 2022-08-17 21:11:09 --> Output Class Initialized
INFO - 2022-08-17 21:11:09 --> Security Class Initialized
INFO - 2022-08-17 21:11:09 --> Language Class Initialized
INFO - 2022-08-17 21:11:09 --> Config Class Initialized
INFO - 2022-08-17 21:11:09 --> Loader Class Initialized
DEBUG - 2022-08-17 21:11:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:11:09 --> CSRF cookie sent
INFO - 2022-08-17 21:11:09 --> Helper loaded: url_helper
INFO - 2022-08-17 21:11:09 --> Input Class Initialized
INFO - 2022-08-17 21:11:09 --> Helper loaded: security_helper
INFO - 2022-08-17 21:11:09 --> Language Class Initialized
INFO - 2022-08-17 21:11:09 --> Helper loaded: file_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: html_helper
INFO - 2022-08-17 21:11:09 --> Language Class Initialized
INFO - 2022-08-17 21:11:09 --> Config Class Initialized
INFO - 2022-08-17 21:11:09 --> Helper loaded: form_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: text_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: common_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:11:09 --> Loader Class Initialized
INFO - 2022-08-17 21:11:09 --> Helper loaded: url_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: security_helper
INFO - 2022-08-17 21:11:09 --> Database Driver Class Initialized
INFO - 2022-08-17 21:11:09 --> Helper loaded: file_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: html_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:11:09 --> Email Class Initialized
INFO - 2022-08-17 21:11:09 --> Helper loaded: form_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: text_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:11:09 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:11:09 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:11:09 --> Cart Class Initialized
INFO - 2022-08-17 21:11:09 --> Helper loaded: common_helper
INFO - 2022-08-17 21:11:09 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:11:09 --> Form Validation Class Initialized
INFO - 2022-08-17 21:11:09 --> Database Driver Class Initialized
DEBUG - 2022-08-17 21:11:09 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:11:09 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:11:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:11:09 --> Pagination Class Initialized
INFO - 2022-08-17 21:11:09 --> Email Class Initialized
INFO - 2022-08-17 21:11:09 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:11:09 --> Cart Class Initialized
INFO - 2022-08-17 21:11:09 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:11:09 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:11:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:11:09 --> Pagination Class Initialized
INFO - 2022-08-17 21:11:09 --> Config Class Initialized
INFO - 2022-08-17 21:11:09 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:11:09 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:11:09 --> Utf8 Class Initialized
INFO - 2022-08-17 21:11:09 --> URI Class Initialized
INFO - 2022-08-17 21:11:09 --> Router Class Initialized
INFO - 2022-08-17 21:11:09 --> Output Class Initialized
INFO - 2022-08-17 21:11:09 --> Security Class Initialized
DEBUG - 2022-08-17 21:11:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:11:09 --> Input Class Initialized
INFO - 2022-08-17 21:11:09 --> Language Class Initialized
ERROR - 2022-08-17 21:11:09 --> 404 Page Not Found: /index
INFO - 2022-08-17 21:11:35 --> Config Class Initialized
INFO - 2022-08-17 21:11:35 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:11:35 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:11:35 --> Utf8 Class Initialized
INFO - 2022-08-17 21:11:35 --> URI Class Initialized
INFO - 2022-08-17 21:11:35 --> Router Class Initialized
INFO - 2022-08-17 21:11:35 --> Output Class Initialized
INFO - 2022-08-17 21:11:35 --> Security Class Initialized
DEBUG - 2022-08-17 21:11:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:11:35 --> Input Class Initialized
INFO - 2022-08-17 21:11:35 --> Language Class Initialized
INFO - 2022-08-17 21:11:35 --> Language Class Initialized
INFO - 2022-08-17 21:11:35 --> Config Class Initialized
INFO - 2022-08-17 21:11:35 --> Loader Class Initialized
INFO - 2022-08-17 21:11:35 --> Helper loaded: url_helper
INFO - 2022-08-17 21:11:35 --> Helper loaded: security_helper
INFO - 2022-08-17 21:11:35 --> Helper loaded: file_helper
INFO - 2022-08-17 21:11:35 --> Helper loaded: html_helper
INFO - 2022-08-17 21:11:35 --> Helper loaded: form_helper
INFO - 2022-08-17 21:11:35 --> Helper loaded: text_helper
INFO - 2022-08-17 21:11:35 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:11:35 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:11:35 --> Helper loaded: common_helper
INFO - 2022-08-17 21:11:35 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:11:35 --> Database Driver Class Initialized
INFO - 2022-08-17 21:11:35 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:11:35 --> Email Class Initialized
INFO - 2022-08-17 21:11:35 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:11:35 --> Cart Class Initialized
INFO - 2022-08-17 21:11:35 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:11:35 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:11:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:11:35 --> Pagination Class Initialized
INFO - 2022-08-17 21:11:36 --> Config Class Initialized
INFO - 2022-08-17 21:11:36 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:11:36 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:11:36 --> Utf8 Class Initialized
INFO - 2022-08-17 21:11:36 --> URI Class Initialized
INFO - 2022-08-17 21:11:36 --> Router Class Initialized
INFO - 2022-08-17 21:11:36 --> Output Class Initialized
INFO - 2022-08-17 21:11:36 --> Security Class Initialized
DEBUG - 2022-08-17 21:11:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:11:36 --> CSRF cookie sent
INFO - 2022-08-17 21:11:36 --> Input Class Initialized
INFO - 2022-08-17 21:11:36 --> Language Class Initialized
INFO - 2022-08-17 21:11:36 --> Language Class Initialized
INFO - 2022-08-17 21:11:36 --> Config Class Initialized
INFO - 2022-08-17 21:11:36 --> Loader Class Initialized
INFO - 2022-08-17 21:11:36 --> Helper loaded: url_helper
INFO - 2022-08-17 21:11:36 --> Helper loaded: security_helper
INFO - 2022-08-17 21:11:36 --> Helper loaded: file_helper
INFO - 2022-08-17 21:11:36 --> Helper loaded: html_helper
INFO - 2022-08-17 21:11:36 --> Helper loaded: form_helper
INFO - 2022-08-17 21:11:36 --> Helper loaded: text_helper
INFO - 2022-08-17 21:11:36 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:11:36 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:11:36 --> Helper loaded: common_helper
INFO - 2022-08-17 21:11:36 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:11:36 --> Database Driver Class Initialized
INFO - 2022-08-17 21:11:36 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:11:36 --> Email Class Initialized
INFO - 2022-08-17 21:11:36 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:11:36 --> Cart Class Initialized
INFO - 2022-08-17 21:11:36 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:11:36 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:11:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:11:36 --> Pagination Class Initialized
INFO - 2022-08-17 21:11:37 --> Config Class Initialized
INFO - 2022-08-17 21:11:37 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:11:37 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:11:37 --> Utf8 Class Initialized
INFO - 2022-08-17 21:11:37 --> URI Class Initialized
INFO - 2022-08-17 21:11:37 --> Router Class Initialized
INFO - 2022-08-17 21:11:37 --> Output Class Initialized
INFO - 2022-08-17 21:11:37 --> Security Class Initialized
DEBUG - 2022-08-17 21:11:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:11:37 --> CSRF cookie sent
INFO - 2022-08-17 21:11:37 --> Input Class Initialized
INFO - 2022-08-17 21:11:37 --> Language Class Initialized
INFO - 2022-08-17 21:11:37 --> Config Class Initialized
INFO - 2022-08-17 21:11:37 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:11:37 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:11:37 --> Utf8 Class Initialized
INFO - 2022-08-17 21:11:37 --> URI Class Initialized
INFO - 2022-08-17 21:11:37 --> Router Class Initialized
INFO - 2022-08-17 21:11:37 --> Language Class Initialized
INFO - 2022-08-17 21:11:37 --> Config Class Initialized
INFO - 2022-08-17 21:11:37 --> Output Class Initialized
INFO - 2022-08-17 21:11:37 --> Loader Class Initialized
INFO - 2022-08-17 21:11:37 --> Security Class Initialized
DEBUG - 2022-08-17 21:11:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:11:37 --> Helper loaded: url_helper
INFO - 2022-08-17 21:11:37 --> CSRF cookie sent
INFO - 2022-08-17 21:11:37 --> Input Class Initialized
INFO - 2022-08-17 21:11:37 --> Language Class Initialized
INFO - 2022-08-17 21:11:37 --> Helper loaded: security_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: file_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: html_helper
INFO - 2022-08-17 21:11:37 --> Language Class Initialized
INFO - 2022-08-17 21:11:37 --> Config Class Initialized
INFO - 2022-08-17 21:11:37 --> Helper loaded: form_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: text_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:11:37 --> Loader Class Initialized
INFO - 2022-08-17 21:11:37 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: common_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: url_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: security_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: file_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: html_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: form_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: text_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: common_helper
INFO - 2022-08-17 21:11:37 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:11:37 --> Database Driver Class Initialized
INFO - 2022-08-17 21:11:37 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:11:37 --> Database Driver Class Initialized
INFO - 2022-08-17 21:11:37 --> Email Class Initialized
INFO - 2022-08-17 21:11:37 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:11:37 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:11:37 --> Email Class Initialized
INFO - 2022-08-17 21:11:37 --> Cart Class Initialized
INFO - 2022-08-17 21:11:37 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:11:37 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:11:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:11:37 --> Pagination Class Initialized
INFO - 2022-08-17 21:11:37 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:11:37 --> Cart Class Initialized
INFO - 2022-08-17 21:11:37 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:11:37 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:11:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:11:37 --> Pagination Class Initialized
INFO - 2022-08-17 21:11:37 --> Config Class Initialized
INFO - 2022-08-17 21:11:37 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:11:37 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:11:37 --> Utf8 Class Initialized
INFO - 2022-08-17 21:11:37 --> URI Class Initialized
INFO - 2022-08-17 21:11:37 --> Router Class Initialized
INFO - 2022-08-17 21:11:37 --> Output Class Initialized
INFO - 2022-08-17 21:11:37 --> Security Class Initialized
DEBUG - 2022-08-17 21:11:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:11:37 --> Input Class Initialized
INFO - 2022-08-17 21:11:37 --> Language Class Initialized
ERROR - 2022-08-17 21:11:37 --> 404 Page Not Found: /index
INFO - 2022-08-17 21:12:07 --> Config Class Initialized
INFO - 2022-08-17 21:12:07 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:12:07 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:12:07 --> Utf8 Class Initialized
INFO - 2022-08-17 21:12:07 --> URI Class Initialized
INFO - 2022-08-17 21:12:07 --> Router Class Initialized
INFO - 2022-08-17 21:12:07 --> Output Class Initialized
INFO - 2022-08-17 21:12:07 --> Security Class Initialized
DEBUG - 2022-08-17 21:12:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:12:07 --> Input Class Initialized
INFO - 2022-08-17 21:12:07 --> Language Class Initialized
INFO - 2022-08-17 21:12:07 --> Language Class Initialized
INFO - 2022-08-17 21:12:07 --> Config Class Initialized
INFO - 2022-08-17 21:12:07 --> Loader Class Initialized
INFO - 2022-08-17 21:12:07 --> Helper loaded: url_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: security_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: file_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: html_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: form_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: text_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: common_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:12:07 --> Database Driver Class Initialized
INFO - 2022-08-17 21:12:07 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:12:07 --> Email Class Initialized
INFO - 2022-08-17 21:12:07 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:12:07 --> Cart Class Initialized
INFO - 2022-08-17 21:12:07 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:12:07 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:12:07 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:12:07 --> Pagination Class Initialized
INFO - 2022-08-17 21:12:07 --> Config Class Initialized
INFO - 2022-08-17 21:12:07 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:12:07 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:12:07 --> Utf8 Class Initialized
INFO - 2022-08-17 21:12:07 --> URI Class Initialized
INFO - 2022-08-17 21:12:07 --> Router Class Initialized
INFO - 2022-08-17 21:12:07 --> Output Class Initialized
INFO - 2022-08-17 21:12:07 --> Security Class Initialized
DEBUG - 2022-08-17 21:12:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:12:07 --> CSRF cookie sent
INFO - 2022-08-17 21:12:07 --> Input Class Initialized
INFO - 2022-08-17 21:12:07 --> Language Class Initialized
INFO - 2022-08-17 21:12:07 --> Language Class Initialized
INFO - 2022-08-17 21:12:07 --> Config Class Initialized
INFO - 2022-08-17 21:12:07 --> Loader Class Initialized
INFO - 2022-08-17 21:12:07 --> Helper loaded: url_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: security_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: file_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: html_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: form_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: text_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: common_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:12:07 --> Database Driver Class Initialized
INFO - 2022-08-17 21:12:07 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:12:07 --> Email Class Initialized
INFO - 2022-08-17 21:12:07 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:12:07 --> Cart Class Initialized
INFO - 2022-08-17 21:12:07 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:12:07 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:12:07 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:12:07 --> Pagination Class Initialized
INFO - 2022-08-17 21:12:07 --> Config Class Initialized
INFO - 2022-08-17 21:12:07 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:12:07 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:12:07 --> Utf8 Class Initialized
INFO - 2022-08-17 21:12:07 --> URI Class Initialized
INFO - 2022-08-17 21:12:07 --> Config Class Initialized
INFO - 2022-08-17 21:12:07 --> Hooks Class Initialized
INFO - 2022-08-17 21:12:07 --> Router Class Initialized
DEBUG - 2022-08-17 21:12:07 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:12:07 --> Utf8 Class Initialized
INFO - 2022-08-17 21:12:07 --> Output Class Initialized
INFO - 2022-08-17 21:12:07 --> URI Class Initialized
INFO - 2022-08-17 21:12:07 --> Security Class Initialized
DEBUG - 2022-08-17 21:12:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:12:07 --> CSRF cookie sent
INFO - 2022-08-17 21:12:07 --> Input Class Initialized
INFO - 2022-08-17 21:12:07 --> Language Class Initialized
INFO - 2022-08-17 21:12:07 --> Router Class Initialized
INFO - 2022-08-17 21:12:07 --> Output Class Initialized
INFO - 2022-08-17 21:12:07 --> Security Class Initialized
DEBUG - 2022-08-17 21:12:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:12:07 --> CSRF cookie sent
INFO - 2022-08-17 21:12:07 --> Input Class Initialized
INFO - 2022-08-17 21:12:07 --> Language Class Initialized
INFO - 2022-08-17 21:12:07 --> Language Class Initialized
INFO - 2022-08-17 21:12:07 --> Config Class Initialized
INFO - 2022-08-17 21:12:07 --> Loader Class Initialized
INFO - 2022-08-17 21:12:07 --> Helper loaded: url_helper
INFO - 2022-08-17 21:12:07 --> Language Class Initialized
INFO - 2022-08-17 21:12:07 --> Config Class Initialized
INFO - 2022-08-17 21:12:07 --> Helper loaded: security_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: file_helper
INFO - 2022-08-17 21:12:07 --> Loader Class Initialized
INFO - 2022-08-17 21:12:07 --> Helper loaded: html_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: url_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: security_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: form_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: file_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: html_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: form_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: text_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: text_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: common_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: common_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:12:07 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:12:07 --> Database Driver Class Initialized
INFO - 2022-08-17 21:12:07 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:12:07 --> Email Class Initialized
INFO - 2022-08-17 21:12:07 --> Database Driver Class Initialized
INFO - 2022-08-17 21:12:07 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:12:07 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:12:07 --> Email Class Initialized
INFO - 2022-08-17 21:12:07 --> Cart Class Initialized
INFO - 2022-08-17 21:12:07 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:12:07 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:12:07 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:12:07 --> Pagination Class Initialized
INFO - 2022-08-17 21:12:07 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:12:07 --> Cart Class Initialized
INFO - 2022-08-17 21:12:07 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:12:07 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:12:07 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:12:07 --> Pagination Class Initialized
INFO - 2022-08-17 21:12:07 --> Config Class Initialized
INFO - 2022-08-17 21:12:07 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:12:07 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:12:07 --> Utf8 Class Initialized
INFO - 2022-08-17 21:12:07 --> URI Class Initialized
INFO - 2022-08-17 21:12:07 --> Router Class Initialized
INFO - 2022-08-17 21:12:07 --> Output Class Initialized
INFO - 2022-08-17 21:12:07 --> Security Class Initialized
DEBUG - 2022-08-17 21:12:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:12:07 --> Input Class Initialized
INFO - 2022-08-17 21:12:07 --> Language Class Initialized
ERROR - 2022-08-17 21:12:07 --> 404 Page Not Found: /index
INFO - 2022-08-17 21:14:22 --> Config Class Initialized
INFO - 2022-08-17 21:14:22 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:14:22 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:14:22 --> Utf8 Class Initialized
INFO - 2022-08-17 21:14:22 --> URI Class Initialized
INFO - 2022-08-17 21:14:22 --> Router Class Initialized
INFO - 2022-08-17 21:14:22 --> Output Class Initialized
INFO - 2022-08-17 21:14:22 --> Security Class Initialized
DEBUG - 2022-08-17 21:14:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:14:22 --> CSRF cookie sent
INFO - 2022-08-17 21:14:22 --> Input Class Initialized
INFO - 2022-08-17 21:14:22 --> Language Class Initialized
INFO - 2022-08-17 21:14:22 --> Language Class Initialized
INFO - 2022-08-17 21:14:22 --> Config Class Initialized
INFO - 2022-08-17 21:14:22 --> Loader Class Initialized
INFO - 2022-08-17 21:14:22 --> Helper loaded: url_helper
INFO - 2022-08-17 21:14:22 --> Helper loaded: security_helper
INFO - 2022-08-17 21:14:22 --> Helper loaded: file_helper
INFO - 2022-08-17 21:14:22 --> Helper loaded: html_helper
INFO - 2022-08-17 21:14:22 --> Helper loaded: form_helper
INFO - 2022-08-17 21:14:22 --> Helper loaded: text_helper
INFO - 2022-08-17 21:14:22 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:14:22 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:14:22 --> Helper loaded: common_helper
INFO - 2022-08-17 21:14:22 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:14:22 --> Database Driver Class Initialized
INFO - 2022-08-17 21:14:22 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:14:22 --> Email Class Initialized
INFO - 2022-08-17 21:14:22 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:14:22 --> Cart Class Initialized
INFO - 2022-08-17 21:14:22 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:14:22 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:14:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:14:22 --> Pagination Class Initialized
INFO - 2022-08-17 21:14:23 --> Config Class Initialized
INFO - 2022-08-17 21:14:23 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:14:23 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:14:23 --> Utf8 Class Initialized
INFO - 2022-08-17 21:14:23 --> URI Class Initialized
INFO - 2022-08-17 21:14:23 --> Router Class Initialized
INFO - 2022-08-17 21:14:23 --> Output Class Initialized
INFO - 2022-08-17 21:14:23 --> Security Class Initialized
DEBUG - 2022-08-17 21:14:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:14:23 --> CSRF cookie sent
INFO - 2022-08-17 21:14:23 --> Input Class Initialized
INFO - 2022-08-17 21:14:23 --> Language Class Initialized
ERROR - 2022-08-17 21:14:23 --> 404 Page Not Found: /index
INFO - 2022-08-17 21:14:35 --> Config Class Initialized
INFO - 2022-08-17 21:14:35 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:14:35 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:14:35 --> Utf8 Class Initialized
INFO - 2022-08-17 21:14:35 --> URI Class Initialized
INFO - 2022-08-17 21:14:35 --> Router Class Initialized
INFO - 2022-08-17 21:14:35 --> Output Class Initialized
INFO - 2022-08-17 21:14:35 --> Security Class Initialized
DEBUG - 2022-08-17 21:14:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:14:35 --> CSRF cookie sent
INFO - 2022-08-17 21:14:35 --> CSRF token verified
INFO - 2022-08-17 21:14:35 --> Input Class Initialized
INFO - 2022-08-17 21:14:35 --> Language Class Initialized
INFO - 2022-08-17 21:14:35 --> Language Class Initialized
INFO - 2022-08-17 21:14:35 --> Config Class Initialized
INFO - 2022-08-17 21:14:35 --> Loader Class Initialized
INFO - 2022-08-17 21:14:35 --> Helper loaded: url_helper
INFO - 2022-08-17 21:14:35 --> Helper loaded: security_helper
INFO - 2022-08-17 21:14:35 --> Helper loaded: file_helper
INFO - 2022-08-17 21:14:35 --> Helper loaded: html_helper
INFO - 2022-08-17 21:14:35 --> Helper loaded: form_helper
INFO - 2022-08-17 21:14:35 --> Helper loaded: text_helper
INFO - 2022-08-17 21:14:35 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:14:35 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:14:35 --> Helper loaded: common_helper
INFO - 2022-08-17 21:14:35 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:14:35 --> Database Driver Class Initialized
INFO - 2022-08-17 21:14:35 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:14:35 --> Email Class Initialized
INFO - 2022-08-17 21:14:35 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:14:35 --> Cart Class Initialized
INFO - 2022-08-17 21:14:35 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:14:35 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:14:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:14:35 --> Pagination Class Initialized
INFO - 2022-08-17 21:16:35 --> Config Class Initialized
INFO - 2022-08-17 21:16:35 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:16:35 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:16:35 --> Utf8 Class Initialized
INFO - 2022-08-17 21:16:35 --> URI Class Initialized
INFO - 2022-08-17 21:16:35 --> Router Class Initialized
INFO - 2022-08-17 21:16:35 --> Output Class Initialized
INFO - 2022-08-17 21:16:35 --> Security Class Initialized
DEBUG - 2022-08-17 21:16:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:16:35 --> CSRF cookie sent
INFO - 2022-08-17 21:16:35 --> Input Class Initialized
INFO - 2022-08-17 21:16:35 --> Language Class Initialized
INFO - 2022-08-17 21:16:35 --> Language Class Initialized
INFO - 2022-08-17 21:16:35 --> Config Class Initialized
INFO - 2022-08-17 21:16:35 --> Loader Class Initialized
INFO - 2022-08-17 21:16:35 --> Helper loaded: url_helper
INFO - 2022-08-17 21:16:35 --> Helper loaded: security_helper
INFO - 2022-08-17 21:16:35 --> Helper loaded: file_helper
INFO - 2022-08-17 21:16:35 --> Helper loaded: html_helper
INFO - 2022-08-17 21:16:35 --> Helper loaded: form_helper
INFO - 2022-08-17 21:16:35 --> Helper loaded: text_helper
INFO - 2022-08-17 21:16:35 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:16:35 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:16:35 --> Helper loaded: common_helper
INFO - 2022-08-17 21:16:35 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:16:35 --> Database Driver Class Initialized
INFO - 2022-08-17 21:16:35 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:16:35 --> Email Class Initialized
INFO - 2022-08-17 21:16:35 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:16:35 --> Cart Class Initialized
INFO - 2022-08-17 21:16:35 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:16:35 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:16:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:16:35 --> Pagination Class Initialized
INFO - 2022-08-17 21:16:44 --> Config Class Initialized
INFO - 2022-08-17 21:16:44 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:16:44 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:16:44 --> Utf8 Class Initialized
INFO - 2022-08-17 21:16:44 --> URI Class Initialized
INFO - 2022-08-17 21:16:44 --> Router Class Initialized
INFO - 2022-08-17 21:16:44 --> Output Class Initialized
INFO - 2022-08-17 21:16:44 --> Security Class Initialized
DEBUG - 2022-08-17 21:16:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:16:44 --> CSRF cookie sent
INFO - 2022-08-17 21:16:44 --> CSRF token verified
INFO - 2022-08-17 21:16:44 --> Input Class Initialized
INFO - 2022-08-17 21:16:44 --> Language Class Initialized
INFO - 2022-08-17 21:16:44 --> Language Class Initialized
INFO - 2022-08-17 21:16:44 --> Config Class Initialized
INFO - 2022-08-17 21:16:44 --> Loader Class Initialized
INFO - 2022-08-17 21:16:44 --> Helper loaded: url_helper
INFO - 2022-08-17 21:16:44 --> Helper loaded: security_helper
INFO - 2022-08-17 21:16:44 --> Helper loaded: file_helper
INFO - 2022-08-17 21:16:44 --> Helper loaded: html_helper
INFO - 2022-08-17 21:16:44 --> Helper loaded: form_helper
INFO - 2022-08-17 21:16:44 --> Helper loaded: text_helper
INFO - 2022-08-17 21:16:44 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:16:44 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:16:44 --> Helper loaded: common_helper
INFO - 2022-08-17 21:16:44 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:16:44 --> Database Driver Class Initialized
INFO - 2022-08-17 21:16:44 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:16:45 --> Email Class Initialized
INFO - 2022-08-17 21:16:45 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:16:45 --> Cart Class Initialized
INFO - 2022-08-17 21:16:45 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:16:45 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:16:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:16:45 --> Pagination Class Initialized
INFO - 2022-08-17 21:17:09 --> Config Class Initialized
INFO - 2022-08-17 21:17:09 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:17:09 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:17:09 --> Utf8 Class Initialized
INFO - 2022-08-17 21:17:09 --> URI Class Initialized
INFO - 2022-08-17 21:17:09 --> Router Class Initialized
INFO - 2022-08-17 21:17:09 --> Output Class Initialized
INFO - 2022-08-17 21:17:09 --> Security Class Initialized
DEBUG - 2022-08-17 21:17:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:17:09 --> CSRF cookie sent
INFO - 2022-08-17 21:17:09 --> Input Class Initialized
INFO - 2022-08-17 21:17:09 --> Language Class Initialized
INFO - 2022-08-17 21:17:09 --> Language Class Initialized
INFO - 2022-08-17 21:17:09 --> Config Class Initialized
INFO - 2022-08-17 21:17:09 --> Loader Class Initialized
INFO - 2022-08-17 21:17:09 --> Helper loaded: url_helper
INFO - 2022-08-17 21:17:09 --> Helper loaded: security_helper
INFO - 2022-08-17 21:17:09 --> Helper loaded: file_helper
INFO - 2022-08-17 21:17:09 --> Helper loaded: html_helper
INFO - 2022-08-17 21:17:09 --> Helper loaded: form_helper
INFO - 2022-08-17 21:17:09 --> Helper loaded: text_helper
INFO - 2022-08-17 21:17:09 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:17:09 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:17:09 --> Helper loaded: common_helper
INFO - 2022-08-17 21:17:09 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:17:09 --> Database Driver Class Initialized
INFO - 2022-08-17 21:17:09 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:17:10 --> Email Class Initialized
INFO - 2022-08-17 21:17:10 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:17:10 --> Cart Class Initialized
INFO - 2022-08-17 21:17:10 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:17:10 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:17:10 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:17:10 --> Pagination Class Initialized
INFO - 2022-08-17 21:17:18 --> Config Class Initialized
INFO - 2022-08-17 21:17:18 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:17:18 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:17:18 --> Utf8 Class Initialized
INFO - 2022-08-17 21:17:18 --> URI Class Initialized
INFO - 2022-08-17 21:17:18 --> Router Class Initialized
INFO - 2022-08-17 21:17:19 --> Output Class Initialized
INFO - 2022-08-17 21:17:19 --> Security Class Initialized
DEBUG - 2022-08-17 21:17:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:17:19 --> CSRF cookie sent
INFO - 2022-08-17 21:17:19 --> CSRF token verified
INFO - 2022-08-17 21:17:19 --> Input Class Initialized
INFO - 2022-08-17 21:17:19 --> Language Class Initialized
INFO - 2022-08-17 21:17:19 --> Language Class Initialized
INFO - 2022-08-17 21:17:19 --> Config Class Initialized
INFO - 2022-08-17 21:17:19 --> Loader Class Initialized
INFO - 2022-08-17 21:17:19 --> Helper loaded: url_helper
INFO - 2022-08-17 21:17:19 --> Helper loaded: security_helper
INFO - 2022-08-17 21:17:19 --> Helper loaded: file_helper
INFO - 2022-08-17 21:17:19 --> Helper loaded: html_helper
INFO - 2022-08-17 21:17:19 --> Helper loaded: form_helper
INFO - 2022-08-17 21:17:19 --> Helper loaded: text_helper
INFO - 2022-08-17 21:17:19 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:17:19 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:17:19 --> Helper loaded: common_helper
INFO - 2022-08-17 21:17:19 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:17:19 --> Database Driver Class Initialized
INFO - 2022-08-17 21:17:19 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:17:19 --> Email Class Initialized
INFO - 2022-08-17 21:17:19 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:17:19 --> Cart Class Initialized
INFO - 2022-08-17 21:17:19 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:17:19 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:17:19 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:17:19 --> Pagination Class Initialized
INFO - 2022-08-17 21:17:52 --> Config Class Initialized
INFO - 2022-08-17 21:17:52 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:17:52 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:17:52 --> Utf8 Class Initialized
INFO - 2022-08-17 21:17:52 --> URI Class Initialized
INFO - 2022-08-17 21:17:52 --> Router Class Initialized
INFO - 2022-08-17 21:17:52 --> Output Class Initialized
INFO - 2022-08-17 21:17:52 --> Security Class Initialized
DEBUG - 2022-08-17 21:17:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:17:52 --> CSRF cookie sent
INFO - 2022-08-17 21:17:52 --> CSRF token verified
INFO - 2022-08-17 21:17:52 --> Input Class Initialized
INFO - 2022-08-17 21:17:52 --> Language Class Initialized
INFO - 2022-08-17 21:17:52 --> Language Class Initialized
INFO - 2022-08-17 21:17:52 --> Config Class Initialized
INFO - 2022-08-17 21:17:52 --> Loader Class Initialized
INFO - 2022-08-17 21:17:52 --> Helper loaded: url_helper
INFO - 2022-08-17 21:17:52 --> Helper loaded: security_helper
INFO - 2022-08-17 21:17:52 --> Helper loaded: file_helper
INFO - 2022-08-17 21:17:52 --> Helper loaded: html_helper
INFO - 2022-08-17 21:17:52 --> Helper loaded: form_helper
INFO - 2022-08-17 21:17:52 --> Helper loaded: text_helper
INFO - 2022-08-17 21:17:52 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:17:52 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:17:52 --> Helper loaded: common_helper
INFO - 2022-08-17 21:17:52 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:17:52 --> Database Driver Class Initialized
INFO - 2022-08-17 21:17:52 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:17:52 --> Email Class Initialized
INFO - 2022-08-17 21:17:52 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:17:52 --> Cart Class Initialized
INFO - 2022-08-17 21:17:52 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:17:52 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:17:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:17:52 --> Pagination Class Initialized
INFO - 2022-08-17 21:21:05 --> Config Class Initialized
INFO - 2022-08-17 21:21:05 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:21:05 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:21:05 --> Utf8 Class Initialized
INFO - 2022-08-17 21:21:05 --> URI Class Initialized
INFO - 2022-08-17 21:21:05 --> Router Class Initialized
INFO - 2022-08-17 21:21:05 --> Output Class Initialized
INFO - 2022-08-17 21:21:05 --> Security Class Initialized
DEBUG - 2022-08-17 21:21:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:21:05 --> CSRF cookie sent
INFO - 2022-08-17 21:21:05 --> CSRF token verified
INFO - 2022-08-17 21:21:05 --> Input Class Initialized
INFO - 2022-08-17 21:21:05 --> Language Class Initialized
INFO - 2022-08-17 21:21:05 --> Language Class Initialized
INFO - 2022-08-17 21:21:05 --> Config Class Initialized
INFO - 2022-08-17 21:21:05 --> Loader Class Initialized
INFO - 2022-08-17 21:21:05 --> Helper loaded: url_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: security_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: file_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: html_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: form_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: text_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: common_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:21:05 --> Database Driver Class Initialized
INFO - 2022-08-17 21:21:05 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:21:05 --> Email Class Initialized
INFO - 2022-08-17 21:21:05 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:21:05 --> Cart Class Initialized
INFO - 2022-08-17 21:21:05 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:21:05 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:21:05 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:21:05 --> Pagination Class Initialized
INFO - 2022-08-17 21:21:05 --> Config Class Initialized
INFO - 2022-08-17 21:21:05 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:21:05 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:21:05 --> Utf8 Class Initialized
INFO - 2022-08-17 21:21:05 --> URI Class Initialized
INFO - 2022-08-17 21:21:05 --> Router Class Initialized
INFO - 2022-08-17 21:21:05 --> Output Class Initialized
INFO - 2022-08-17 21:21:05 --> Security Class Initialized
DEBUG - 2022-08-17 21:21:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:21:05 --> CSRF cookie sent
INFO - 2022-08-17 21:21:05 --> Input Class Initialized
INFO - 2022-08-17 21:21:05 --> Language Class Initialized
INFO - 2022-08-17 21:21:05 --> Language Class Initialized
INFO - 2022-08-17 21:21:05 --> Config Class Initialized
INFO - 2022-08-17 21:21:05 --> Loader Class Initialized
INFO - 2022-08-17 21:21:05 --> Helper loaded: url_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: security_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: file_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: html_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: form_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: text_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: common_helper
INFO - 2022-08-17 21:21:05 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:21:05 --> Database Driver Class Initialized
INFO - 2022-08-17 21:21:05 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:21:05 --> Email Class Initialized
INFO - 2022-08-17 21:21:05 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:21:05 --> Cart Class Initialized
INFO - 2022-08-17 21:21:05 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:21:05 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:21:05 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:21:05 --> Pagination Class Initialized
INFO - 2022-08-17 21:21:05 --> Config Class Initialized
INFO - 2022-08-17 21:21:05 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:21:05 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:21:05 --> Utf8 Class Initialized
INFO - 2022-08-17 21:21:05 --> URI Class Initialized
INFO - 2022-08-17 21:21:05 --> Router Class Initialized
INFO - 2022-08-17 21:21:05 --> Output Class Initialized
INFO - 2022-08-17 21:21:05 --> Security Class Initialized
DEBUG - 2022-08-17 21:21:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:21:05 --> CSRF cookie sent
INFO - 2022-08-17 21:21:05 --> Input Class Initialized
INFO - 2022-08-17 21:21:05 --> Language Class Initialized
ERROR - 2022-08-17 21:21:05 --> 404 Page Not Found: /index
INFO - 2022-08-17 21:21:16 --> Config Class Initialized
INFO - 2022-08-17 21:21:16 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:21:16 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:21:16 --> Utf8 Class Initialized
INFO - 2022-08-17 21:21:16 --> URI Class Initialized
INFO - 2022-08-17 21:21:16 --> Router Class Initialized
INFO - 2022-08-17 21:21:16 --> Output Class Initialized
INFO - 2022-08-17 21:21:16 --> Security Class Initialized
DEBUG - 2022-08-17 21:21:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:21:16 --> CSRF cookie sent
INFO - 2022-08-17 21:21:16 --> CSRF token verified
INFO - 2022-08-17 21:21:16 --> Input Class Initialized
INFO - 2022-08-17 21:21:16 --> Language Class Initialized
INFO - 2022-08-17 21:21:16 --> Language Class Initialized
INFO - 2022-08-17 21:21:16 --> Config Class Initialized
INFO - 2022-08-17 21:21:16 --> Loader Class Initialized
INFO - 2022-08-17 21:21:16 --> Helper loaded: url_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: security_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: file_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: html_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: form_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: text_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: common_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:21:17 --> Database Driver Class Initialized
INFO - 2022-08-17 21:21:17 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:21:17 --> Email Class Initialized
INFO - 2022-08-17 21:21:17 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:21:17 --> Cart Class Initialized
INFO - 2022-08-17 21:21:17 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:21:17 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:21:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:21:17 --> Pagination Class Initialized
INFO - 2022-08-17 21:21:17 --> Config Class Initialized
INFO - 2022-08-17 21:21:17 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:21:17 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:21:17 --> Utf8 Class Initialized
INFO - 2022-08-17 21:21:17 --> URI Class Initialized
INFO - 2022-08-17 21:21:17 --> Router Class Initialized
INFO - 2022-08-17 21:21:17 --> Output Class Initialized
INFO - 2022-08-17 21:21:17 --> Security Class Initialized
DEBUG - 2022-08-17 21:21:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:21:17 --> CSRF cookie sent
INFO - 2022-08-17 21:21:17 --> Input Class Initialized
INFO - 2022-08-17 21:21:17 --> Language Class Initialized
INFO - 2022-08-17 21:21:17 --> Language Class Initialized
INFO - 2022-08-17 21:21:17 --> Config Class Initialized
INFO - 2022-08-17 21:21:17 --> Loader Class Initialized
INFO - 2022-08-17 21:21:17 --> Helper loaded: url_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: security_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: file_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: html_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: form_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: text_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: common_helper
INFO - 2022-08-17 21:21:17 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:21:17 --> Database Driver Class Initialized
INFO - 2022-08-17 21:21:17 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:21:17 --> Email Class Initialized
INFO - 2022-08-17 21:21:17 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:21:17 --> Cart Class Initialized
INFO - 2022-08-17 21:21:17 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:21:17 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:21:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:21:17 --> Pagination Class Initialized
INFO - 2022-08-17 21:21:17 --> Config Class Initialized
INFO - 2022-08-17 21:21:17 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:21:17 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:21:17 --> Utf8 Class Initialized
INFO - 2022-08-17 21:21:17 --> URI Class Initialized
INFO - 2022-08-17 21:21:17 --> Router Class Initialized
INFO - 2022-08-17 21:21:17 --> Output Class Initialized
INFO - 2022-08-17 21:21:17 --> Security Class Initialized
DEBUG - 2022-08-17 21:21:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:21:17 --> CSRF cookie sent
INFO - 2022-08-17 21:21:17 --> Input Class Initialized
INFO - 2022-08-17 21:21:17 --> Language Class Initialized
ERROR - 2022-08-17 21:21:17 --> 404 Page Not Found: /index
INFO - 2022-08-17 21:21:41 --> Config Class Initialized
INFO - 2022-08-17 21:21:41 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:21:41 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:21:41 --> Utf8 Class Initialized
INFO - 2022-08-17 21:21:41 --> URI Class Initialized
INFO - 2022-08-17 21:21:41 --> Router Class Initialized
INFO - 2022-08-17 21:21:41 --> Output Class Initialized
INFO - 2022-08-17 21:21:41 --> Security Class Initialized
DEBUG - 2022-08-17 21:21:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:21:41 --> CSRF cookie sent
INFO - 2022-08-17 21:21:41 --> CSRF token verified
INFO - 2022-08-17 21:21:41 --> Input Class Initialized
INFO - 2022-08-17 21:21:41 --> Language Class Initialized
INFO - 2022-08-17 21:21:41 --> Language Class Initialized
INFO - 2022-08-17 21:21:41 --> Config Class Initialized
INFO - 2022-08-17 21:21:41 --> Loader Class Initialized
INFO - 2022-08-17 21:21:41 --> Helper loaded: url_helper
INFO - 2022-08-17 21:21:41 --> Helper loaded: security_helper
INFO - 2022-08-17 21:21:41 --> Helper loaded: file_helper
INFO - 2022-08-17 21:21:41 --> Helper loaded: html_helper
INFO - 2022-08-17 21:21:41 --> Helper loaded: form_helper
INFO - 2022-08-17 21:21:41 --> Helper loaded: text_helper
INFO - 2022-08-17 21:21:41 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:21:41 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:21:41 --> Helper loaded: common_helper
INFO - 2022-08-17 21:21:41 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:21:41 --> Database Driver Class Initialized
INFO - 2022-08-17 21:21:41 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:21:41 --> Email Class Initialized
INFO - 2022-08-17 21:21:41 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:21:41 --> Cart Class Initialized
INFO - 2022-08-17 21:21:41 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:21:41 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:21:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:21:41 --> Pagination Class Initialized
INFO - 2022-08-17 21:22:58 --> Config Class Initialized
INFO - 2022-08-17 21:22:58 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:22:58 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:22:58 --> Utf8 Class Initialized
INFO - 2022-08-17 21:22:58 --> URI Class Initialized
INFO - 2022-08-17 21:22:58 --> Router Class Initialized
INFO - 2022-08-17 21:22:58 --> Output Class Initialized
INFO - 2022-08-17 21:22:58 --> Security Class Initialized
DEBUG - 2022-08-17 21:22:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:22:58 --> CSRF cookie sent
INFO - 2022-08-17 21:22:58 --> CSRF token verified
INFO - 2022-08-17 21:22:58 --> Input Class Initialized
INFO - 2022-08-17 21:22:58 --> Language Class Initialized
INFO - 2022-08-17 21:22:58 --> Language Class Initialized
INFO - 2022-08-17 21:22:58 --> Config Class Initialized
INFO - 2022-08-17 21:22:58 --> Loader Class Initialized
INFO - 2022-08-17 21:22:58 --> Helper loaded: url_helper
INFO - 2022-08-17 21:22:58 --> Helper loaded: security_helper
INFO - 2022-08-17 21:22:58 --> Helper loaded: file_helper
INFO - 2022-08-17 21:22:58 --> Helper loaded: html_helper
INFO - 2022-08-17 21:22:58 --> Helper loaded: form_helper
INFO - 2022-08-17 21:22:58 --> Helper loaded: text_helper
INFO - 2022-08-17 21:22:58 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:22:58 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:22:58 --> Helper loaded: common_helper
INFO - 2022-08-17 21:22:58 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:22:58 --> Database Driver Class Initialized
INFO - 2022-08-17 21:22:58 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:22:58 --> Email Class Initialized
INFO - 2022-08-17 21:22:58 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:22:58 --> Cart Class Initialized
INFO - 2022-08-17 21:22:58 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:22:58 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:22:58 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:22:58 --> Pagination Class Initialized
INFO - 2022-08-17 21:23:18 --> Config Class Initialized
INFO - 2022-08-17 21:23:18 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:23:18 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:23:18 --> Utf8 Class Initialized
INFO - 2022-08-17 21:23:18 --> URI Class Initialized
INFO - 2022-08-17 21:23:18 --> Router Class Initialized
INFO - 2022-08-17 21:23:18 --> Output Class Initialized
INFO - 2022-08-17 21:23:18 --> Security Class Initialized
DEBUG - 2022-08-17 21:23:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:23:18 --> CSRF cookie sent
INFO - 2022-08-17 21:23:18 --> CSRF token verified
INFO - 2022-08-17 21:23:18 --> Input Class Initialized
INFO - 2022-08-17 21:23:18 --> Language Class Initialized
INFO - 2022-08-17 21:23:18 --> Language Class Initialized
INFO - 2022-08-17 21:23:18 --> Config Class Initialized
INFO - 2022-08-17 21:23:18 --> Loader Class Initialized
INFO - 2022-08-17 21:23:18 --> Helper loaded: url_helper
INFO - 2022-08-17 21:23:18 --> Helper loaded: security_helper
INFO - 2022-08-17 21:23:18 --> Helper loaded: file_helper
INFO - 2022-08-17 21:23:18 --> Helper loaded: html_helper
INFO - 2022-08-17 21:23:18 --> Helper loaded: form_helper
INFO - 2022-08-17 21:23:18 --> Helper loaded: text_helper
INFO - 2022-08-17 21:23:18 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:23:18 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:23:18 --> Helper loaded: common_helper
INFO - 2022-08-17 21:23:18 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:23:18 --> Database Driver Class Initialized
INFO - 2022-08-17 21:23:18 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:23:18 --> Email Class Initialized
INFO - 2022-08-17 21:23:18 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:23:18 --> Cart Class Initialized
INFO - 2022-08-17 21:23:18 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:23:18 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:23:18 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:23:18 --> Pagination Class Initialized
INFO - 2022-08-17 21:23:29 --> Config Class Initialized
INFO - 2022-08-17 21:23:29 --> Hooks Class Initialized
DEBUG - 2022-08-17 21:23:29 --> UTF-8 Support Enabled
INFO - 2022-08-17 21:23:29 --> Utf8 Class Initialized
INFO - 2022-08-17 21:23:29 --> URI Class Initialized
INFO - 2022-08-17 21:23:29 --> Router Class Initialized
INFO - 2022-08-17 21:23:29 --> Output Class Initialized
INFO - 2022-08-17 21:23:29 --> Security Class Initialized
DEBUG - 2022-08-17 21:23:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 21:23:29 --> CSRF cookie sent
INFO - 2022-08-17 21:23:29 --> CSRF token verified
INFO - 2022-08-17 21:23:29 --> Input Class Initialized
INFO - 2022-08-17 21:23:29 --> Language Class Initialized
INFO - 2022-08-17 21:23:29 --> Language Class Initialized
INFO - 2022-08-17 21:23:29 --> Config Class Initialized
INFO - 2022-08-17 21:23:29 --> Loader Class Initialized
INFO - 2022-08-17 21:23:29 --> Helper loaded: url_helper
INFO - 2022-08-17 21:23:29 --> Helper loaded: security_helper
INFO - 2022-08-17 21:23:29 --> Helper loaded: file_helper
INFO - 2022-08-17 21:23:29 --> Helper loaded: html_helper
INFO - 2022-08-17 21:23:29 --> Helper loaded: form_helper
INFO - 2022-08-17 21:23:29 --> Helper loaded: text_helper
INFO - 2022-08-17 21:23:29 --> Helper loaded: lang_helper
INFO - 2022-08-17 21:23:29 --> Helper loaded: directory_helper
INFO - 2022-08-17 21:23:29 --> Helper loaded: common_helper
INFO - 2022-08-17 21:23:29 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 21:23:29 --> Database Driver Class Initialized
INFO - 2022-08-17 21:23:29 --> Helper loaded: sslc_helper
INFO - 2022-08-17 21:23:29 --> Email Class Initialized
INFO - 2022-08-17 21:23:29 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 21:23:29 --> Cart Class Initialized
INFO - 2022-08-17 21:23:29 --> Form Validation Class Initialized
DEBUG - 2022-08-17 21:23:29 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 21:23:29 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 21:23:29 --> Pagination Class Initialized
INFO - 2022-08-17 22:05:04 --> Config Class Initialized
INFO - 2022-08-17 22:05:04 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:05:05 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:05:05 --> Utf8 Class Initialized
INFO - 2022-08-17 22:05:05 --> URI Class Initialized
INFO - 2022-08-17 22:05:05 --> Router Class Initialized
INFO - 2022-08-17 22:05:05 --> Output Class Initialized
INFO - 2022-08-17 22:05:05 --> Security Class Initialized
DEBUG - 2022-08-17 22:05:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:05:05 --> CSRF cookie sent
INFO - 2022-08-17 22:05:05 --> CSRF token verified
INFO - 2022-08-17 22:05:05 --> Input Class Initialized
INFO - 2022-08-17 22:05:05 --> Language Class Initialized
INFO - 2022-08-17 22:05:05 --> Language Class Initialized
INFO - 2022-08-17 22:05:05 --> Config Class Initialized
INFO - 2022-08-17 22:05:05 --> Loader Class Initialized
INFO - 2022-08-17 22:05:05 --> Helper loaded: url_helper
INFO - 2022-08-17 22:05:05 --> Helper loaded: security_helper
INFO - 2022-08-17 22:05:05 --> Helper loaded: file_helper
INFO - 2022-08-17 22:05:05 --> Helper loaded: html_helper
INFO - 2022-08-17 22:05:05 --> Helper loaded: form_helper
INFO - 2022-08-17 22:05:05 --> Helper loaded: text_helper
INFO - 2022-08-17 22:05:05 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:05:05 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:05:05 --> Helper loaded: common_helper
INFO - 2022-08-17 22:05:05 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:05:05 --> Database Driver Class Initialized
INFO - 2022-08-17 22:05:05 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:05:05 --> Email Class Initialized
INFO - 2022-08-17 22:05:05 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:05:06 --> Cart Class Initialized
INFO - 2022-08-17 22:05:06 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:05:06 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:05:06 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:05:06 --> Pagination Class Initialized
INFO - 2022-08-17 22:05:24 --> Config Class Initialized
INFO - 2022-08-17 22:05:24 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:05:24 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:05:24 --> Utf8 Class Initialized
INFO - 2022-08-17 22:05:24 --> URI Class Initialized
INFO - 2022-08-17 22:05:24 --> Router Class Initialized
INFO - 2022-08-17 22:05:24 --> Output Class Initialized
INFO - 2022-08-17 22:05:24 --> Security Class Initialized
DEBUG - 2022-08-17 22:05:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:05:24 --> CSRF cookie sent
INFO - 2022-08-17 22:05:24 --> CSRF token verified
INFO - 2022-08-17 22:05:24 --> Input Class Initialized
INFO - 2022-08-17 22:05:24 --> Language Class Initialized
INFO - 2022-08-17 22:05:24 --> Language Class Initialized
INFO - 2022-08-17 22:05:24 --> Config Class Initialized
INFO - 2022-08-17 22:05:24 --> Loader Class Initialized
INFO - 2022-08-17 22:05:24 --> Helper loaded: url_helper
INFO - 2022-08-17 22:05:24 --> Helper loaded: security_helper
INFO - 2022-08-17 22:05:24 --> Helper loaded: file_helper
INFO - 2022-08-17 22:05:24 --> Helper loaded: html_helper
INFO - 2022-08-17 22:05:24 --> Helper loaded: form_helper
INFO - 2022-08-17 22:05:24 --> Helper loaded: text_helper
INFO - 2022-08-17 22:05:24 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:05:24 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:05:24 --> Helper loaded: common_helper
INFO - 2022-08-17 22:05:24 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:05:24 --> Database Driver Class Initialized
INFO - 2022-08-17 22:05:24 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:05:24 --> Email Class Initialized
INFO - 2022-08-17 22:05:24 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:05:24 --> Cart Class Initialized
INFO - 2022-08-17 22:05:24 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:05:24 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:05:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:05:24 --> Pagination Class Initialized
INFO - 2022-08-17 22:06:16 --> Config Class Initialized
INFO - 2022-08-17 22:06:16 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:06:16 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:06:16 --> Utf8 Class Initialized
INFO - 2022-08-17 22:06:16 --> URI Class Initialized
INFO - 2022-08-17 22:06:16 --> Router Class Initialized
INFO - 2022-08-17 22:06:16 --> Output Class Initialized
INFO - 2022-08-17 22:06:16 --> Security Class Initialized
DEBUG - 2022-08-17 22:06:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:06:16 --> CSRF cookie sent
INFO - 2022-08-17 22:06:16 --> CSRF token verified
INFO - 2022-08-17 22:06:16 --> Input Class Initialized
INFO - 2022-08-17 22:06:16 --> Language Class Initialized
INFO - 2022-08-17 22:06:16 --> Language Class Initialized
INFO - 2022-08-17 22:06:16 --> Config Class Initialized
INFO - 2022-08-17 22:06:16 --> Loader Class Initialized
INFO - 2022-08-17 22:06:16 --> Helper loaded: url_helper
INFO - 2022-08-17 22:06:16 --> Helper loaded: security_helper
INFO - 2022-08-17 22:06:16 --> Helper loaded: file_helper
INFO - 2022-08-17 22:06:16 --> Helper loaded: html_helper
INFO - 2022-08-17 22:06:16 --> Helper loaded: form_helper
INFO - 2022-08-17 22:06:16 --> Helper loaded: text_helper
INFO - 2022-08-17 22:06:16 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:06:16 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:06:16 --> Helper loaded: common_helper
INFO - 2022-08-17 22:06:16 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:06:16 --> Database Driver Class Initialized
INFO - 2022-08-17 22:06:16 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:06:16 --> Email Class Initialized
INFO - 2022-08-17 22:06:16 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:06:16 --> Cart Class Initialized
INFO - 2022-08-17 22:06:16 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:06:16 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:06:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:06:16 --> Pagination Class Initialized
INFO - 2022-08-17 22:06:32 --> Config Class Initialized
INFO - 2022-08-17 22:06:32 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:06:32 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:06:32 --> Utf8 Class Initialized
INFO - 2022-08-17 22:06:32 --> URI Class Initialized
INFO - 2022-08-17 22:06:32 --> Router Class Initialized
INFO - 2022-08-17 22:06:32 --> Output Class Initialized
INFO - 2022-08-17 22:06:32 --> Security Class Initialized
DEBUG - 2022-08-17 22:06:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:06:32 --> CSRF cookie sent
INFO - 2022-08-17 22:06:32 --> CSRF token verified
INFO - 2022-08-17 22:06:32 --> Input Class Initialized
INFO - 2022-08-17 22:06:32 --> Language Class Initialized
INFO - 2022-08-17 22:06:32 --> Language Class Initialized
INFO - 2022-08-17 22:06:32 --> Config Class Initialized
INFO - 2022-08-17 22:06:32 --> Loader Class Initialized
INFO - 2022-08-17 22:06:33 --> Helper loaded: url_helper
INFO - 2022-08-17 22:06:33 --> Helper loaded: security_helper
INFO - 2022-08-17 22:06:33 --> Helper loaded: file_helper
INFO - 2022-08-17 22:06:33 --> Helper loaded: html_helper
INFO - 2022-08-17 22:06:33 --> Helper loaded: form_helper
INFO - 2022-08-17 22:06:33 --> Helper loaded: text_helper
INFO - 2022-08-17 22:06:33 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:06:33 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:06:33 --> Helper loaded: common_helper
INFO - 2022-08-17 22:06:33 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:06:33 --> Database Driver Class Initialized
INFO - 2022-08-17 22:06:33 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:06:33 --> Email Class Initialized
INFO - 2022-08-17 22:06:33 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:06:33 --> Cart Class Initialized
INFO - 2022-08-17 22:06:33 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:06:33 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:06:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:06:33 --> Pagination Class Initialized
INFO - 2022-08-17 22:06:45 --> Config Class Initialized
INFO - 2022-08-17 22:06:45 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:06:45 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:06:45 --> Utf8 Class Initialized
INFO - 2022-08-17 22:06:45 --> URI Class Initialized
INFO - 2022-08-17 22:06:45 --> Router Class Initialized
INFO - 2022-08-17 22:06:45 --> Output Class Initialized
INFO - 2022-08-17 22:06:45 --> Security Class Initialized
DEBUG - 2022-08-17 22:06:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:06:45 --> CSRF cookie sent
INFO - 2022-08-17 22:06:45 --> CSRF token verified
INFO - 2022-08-17 22:06:45 --> Input Class Initialized
INFO - 2022-08-17 22:06:45 --> Language Class Initialized
INFO - 2022-08-17 22:06:45 --> Language Class Initialized
INFO - 2022-08-17 22:06:45 --> Config Class Initialized
INFO - 2022-08-17 22:06:45 --> Loader Class Initialized
INFO - 2022-08-17 22:06:45 --> Helper loaded: url_helper
INFO - 2022-08-17 22:06:45 --> Helper loaded: security_helper
INFO - 2022-08-17 22:06:45 --> Helper loaded: file_helper
INFO - 2022-08-17 22:06:45 --> Helper loaded: html_helper
INFO - 2022-08-17 22:06:45 --> Helper loaded: form_helper
INFO - 2022-08-17 22:06:45 --> Helper loaded: text_helper
INFO - 2022-08-17 22:06:45 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:06:45 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:06:45 --> Helper loaded: common_helper
INFO - 2022-08-17 22:06:45 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:06:45 --> Database Driver Class Initialized
INFO - 2022-08-17 22:06:45 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:06:45 --> Email Class Initialized
INFO - 2022-08-17 22:06:45 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:06:45 --> Cart Class Initialized
INFO - 2022-08-17 22:06:45 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:06:45 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:06:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:06:45 --> Pagination Class Initialized
INFO - 2022-08-17 22:07:56 --> Config Class Initialized
INFO - 2022-08-17 22:07:56 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:07:56 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:07:56 --> Utf8 Class Initialized
INFO - 2022-08-17 22:07:56 --> URI Class Initialized
INFO - 2022-08-17 22:07:56 --> Router Class Initialized
INFO - 2022-08-17 22:07:57 --> Output Class Initialized
INFO - 2022-08-17 22:07:57 --> Security Class Initialized
DEBUG - 2022-08-17 22:07:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:07:57 --> CSRF cookie sent
INFO - 2022-08-17 22:07:57 --> CSRF token verified
INFO - 2022-08-17 22:07:57 --> Input Class Initialized
INFO - 2022-08-17 22:07:57 --> Language Class Initialized
INFO - 2022-08-17 22:07:57 --> Language Class Initialized
INFO - 2022-08-17 22:07:57 --> Config Class Initialized
INFO - 2022-08-17 22:07:57 --> Loader Class Initialized
INFO - 2022-08-17 22:07:57 --> Helper loaded: url_helper
INFO - 2022-08-17 22:07:57 --> Helper loaded: security_helper
INFO - 2022-08-17 22:07:57 --> Helper loaded: file_helper
INFO - 2022-08-17 22:07:57 --> Helper loaded: html_helper
INFO - 2022-08-17 22:07:57 --> Helper loaded: form_helper
INFO - 2022-08-17 22:07:57 --> Helper loaded: text_helper
INFO - 2022-08-17 22:07:57 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:07:57 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:07:57 --> Helper loaded: common_helper
INFO - 2022-08-17 22:07:57 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:07:57 --> Database Driver Class Initialized
INFO - 2022-08-17 22:07:57 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:07:57 --> Email Class Initialized
INFO - 2022-08-17 22:07:57 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:07:57 --> Cart Class Initialized
INFO - 2022-08-17 22:07:57 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:07:57 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:07:57 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:07:57 --> Pagination Class Initialized
INFO - 2022-08-17 22:08:13 --> Config Class Initialized
INFO - 2022-08-17 22:08:13 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:08:13 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:08:13 --> Utf8 Class Initialized
INFO - 2022-08-17 22:08:13 --> URI Class Initialized
INFO - 2022-08-17 22:08:13 --> Router Class Initialized
INFO - 2022-08-17 22:08:13 --> Output Class Initialized
INFO - 2022-08-17 22:08:13 --> Security Class Initialized
DEBUG - 2022-08-17 22:08:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:08:13 --> CSRF cookie sent
INFO - 2022-08-17 22:08:13 --> CSRF token verified
INFO - 2022-08-17 22:08:13 --> Input Class Initialized
INFO - 2022-08-17 22:08:13 --> Language Class Initialized
INFO - 2022-08-17 22:08:13 --> Language Class Initialized
INFO - 2022-08-17 22:08:13 --> Config Class Initialized
INFO - 2022-08-17 22:08:13 --> Loader Class Initialized
INFO - 2022-08-17 22:08:13 --> Helper loaded: url_helper
INFO - 2022-08-17 22:08:13 --> Helper loaded: security_helper
INFO - 2022-08-17 22:08:13 --> Helper loaded: file_helper
INFO - 2022-08-17 22:08:13 --> Helper loaded: html_helper
INFO - 2022-08-17 22:08:13 --> Helper loaded: form_helper
INFO - 2022-08-17 22:08:13 --> Helper loaded: text_helper
INFO - 2022-08-17 22:08:13 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:08:13 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:08:13 --> Helper loaded: common_helper
INFO - 2022-08-17 22:08:13 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:08:13 --> Database Driver Class Initialized
INFO - 2022-08-17 22:08:13 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:08:13 --> Email Class Initialized
INFO - 2022-08-17 22:08:13 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:08:13 --> Cart Class Initialized
INFO - 2022-08-17 22:08:13 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:08:13 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:08:13 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:08:13 --> Pagination Class Initialized
INFO - 2022-08-17 22:08:52 --> Config Class Initialized
INFO - 2022-08-17 22:08:52 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:08:52 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:08:52 --> Utf8 Class Initialized
INFO - 2022-08-17 22:08:52 --> URI Class Initialized
INFO - 2022-08-17 22:08:52 --> Router Class Initialized
INFO - 2022-08-17 22:08:52 --> Output Class Initialized
INFO - 2022-08-17 22:08:52 --> Security Class Initialized
DEBUG - 2022-08-17 22:08:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:08:52 --> CSRF cookie sent
INFO - 2022-08-17 22:08:52 --> CSRF token verified
INFO - 2022-08-17 22:08:52 --> Input Class Initialized
INFO - 2022-08-17 22:08:52 --> Language Class Initialized
INFO - 2022-08-17 22:08:52 --> Language Class Initialized
INFO - 2022-08-17 22:08:52 --> Config Class Initialized
INFO - 2022-08-17 22:08:52 --> Loader Class Initialized
INFO - 2022-08-17 22:08:52 --> Helper loaded: url_helper
INFO - 2022-08-17 22:08:52 --> Helper loaded: security_helper
INFO - 2022-08-17 22:08:52 --> Helper loaded: file_helper
INFO - 2022-08-17 22:08:52 --> Helper loaded: html_helper
INFO - 2022-08-17 22:08:52 --> Helper loaded: form_helper
INFO - 2022-08-17 22:08:52 --> Helper loaded: text_helper
INFO - 2022-08-17 22:08:52 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:08:52 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:08:52 --> Helper loaded: common_helper
INFO - 2022-08-17 22:08:52 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:08:52 --> Database Driver Class Initialized
INFO - 2022-08-17 22:08:52 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:08:52 --> Email Class Initialized
INFO - 2022-08-17 22:08:52 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:08:52 --> Cart Class Initialized
INFO - 2022-08-17 22:08:52 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:08:52 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:08:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:08:52 --> Pagination Class Initialized
INFO - 2022-08-17 22:10:33 --> Config Class Initialized
INFO - 2022-08-17 22:10:33 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:10:33 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:10:33 --> Utf8 Class Initialized
INFO - 2022-08-17 22:10:33 --> URI Class Initialized
INFO - 2022-08-17 22:10:33 --> Router Class Initialized
INFO - 2022-08-17 22:10:33 --> Output Class Initialized
INFO - 2022-08-17 22:10:33 --> Security Class Initialized
DEBUG - 2022-08-17 22:10:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:10:33 --> CSRF cookie sent
INFO - 2022-08-17 22:10:33 --> CSRF token verified
INFO - 2022-08-17 22:10:33 --> Input Class Initialized
INFO - 2022-08-17 22:10:33 --> Language Class Initialized
INFO - 2022-08-17 22:10:33 --> Language Class Initialized
INFO - 2022-08-17 22:10:33 --> Config Class Initialized
INFO - 2022-08-17 22:10:33 --> Loader Class Initialized
INFO - 2022-08-17 22:10:33 --> Helper loaded: url_helper
INFO - 2022-08-17 22:10:33 --> Helper loaded: security_helper
INFO - 2022-08-17 22:10:33 --> Helper loaded: file_helper
INFO - 2022-08-17 22:10:33 --> Helper loaded: html_helper
INFO - 2022-08-17 22:10:33 --> Helper loaded: form_helper
INFO - 2022-08-17 22:10:33 --> Helper loaded: text_helper
INFO - 2022-08-17 22:10:33 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:10:33 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:10:33 --> Helper loaded: common_helper
INFO - 2022-08-17 22:10:33 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:10:33 --> Database Driver Class Initialized
INFO - 2022-08-17 22:10:33 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:10:33 --> Email Class Initialized
INFO - 2022-08-17 22:10:33 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:10:33 --> Cart Class Initialized
INFO - 2022-08-17 22:10:33 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:10:33 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:10:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:10:33 --> Pagination Class Initialized
INFO - 2022-08-17 22:10:54 --> Config Class Initialized
INFO - 2022-08-17 22:10:54 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:10:54 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:10:54 --> Utf8 Class Initialized
INFO - 2022-08-17 22:10:54 --> URI Class Initialized
INFO - 2022-08-17 22:10:54 --> Router Class Initialized
INFO - 2022-08-17 22:10:54 --> Output Class Initialized
INFO - 2022-08-17 22:10:54 --> Security Class Initialized
DEBUG - 2022-08-17 22:10:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:10:54 --> CSRF cookie sent
INFO - 2022-08-17 22:10:54 --> CSRF token verified
INFO - 2022-08-17 22:10:54 --> Input Class Initialized
INFO - 2022-08-17 22:10:54 --> Language Class Initialized
INFO - 2022-08-17 22:10:54 --> Language Class Initialized
INFO - 2022-08-17 22:10:54 --> Config Class Initialized
INFO - 2022-08-17 22:10:54 --> Loader Class Initialized
INFO - 2022-08-17 22:10:54 --> Helper loaded: url_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: security_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: file_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: html_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: form_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: text_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: common_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:10:54 --> Database Driver Class Initialized
INFO - 2022-08-17 22:10:54 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:10:54 --> Email Class Initialized
INFO - 2022-08-17 22:10:54 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:10:54 --> Cart Class Initialized
INFO - 2022-08-17 22:10:54 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:10:54 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:10:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:10:54 --> Pagination Class Initialized
INFO - 2022-08-17 22:10:54 --> Config Class Initialized
INFO - 2022-08-17 22:10:54 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:10:54 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:10:54 --> Utf8 Class Initialized
INFO - 2022-08-17 22:10:54 --> URI Class Initialized
INFO - 2022-08-17 22:10:54 --> Router Class Initialized
INFO - 2022-08-17 22:10:54 --> Output Class Initialized
INFO - 2022-08-17 22:10:54 --> Security Class Initialized
DEBUG - 2022-08-17 22:10:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:10:54 --> CSRF cookie sent
INFO - 2022-08-17 22:10:54 --> Input Class Initialized
INFO - 2022-08-17 22:10:54 --> Language Class Initialized
INFO - 2022-08-17 22:10:54 --> Language Class Initialized
INFO - 2022-08-17 22:10:54 --> Config Class Initialized
INFO - 2022-08-17 22:10:54 --> Loader Class Initialized
INFO - 2022-08-17 22:10:54 --> Helper loaded: url_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: security_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: file_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: html_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: form_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: text_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: common_helper
INFO - 2022-08-17 22:10:54 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:10:54 --> Database Driver Class Initialized
INFO - 2022-08-17 22:10:54 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:10:54 --> Email Class Initialized
INFO - 2022-08-17 22:10:54 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:10:54 --> Cart Class Initialized
INFO - 2022-08-17 22:10:54 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:10:54 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:10:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:10:54 --> Pagination Class Initialized
INFO - 2022-08-17 22:10:54 --> Config Class Initialized
INFO - 2022-08-17 22:10:54 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:10:54 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:10:54 --> Utf8 Class Initialized
INFO - 2022-08-17 22:10:54 --> URI Class Initialized
INFO - 2022-08-17 22:10:54 --> Router Class Initialized
INFO - 2022-08-17 22:10:54 --> Output Class Initialized
INFO - 2022-08-17 22:10:54 --> Security Class Initialized
DEBUG - 2022-08-17 22:10:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:10:54 --> CSRF cookie sent
INFO - 2022-08-17 22:10:54 --> Input Class Initialized
INFO - 2022-08-17 22:10:54 --> Language Class Initialized
ERROR - 2022-08-17 22:10:54 --> 404 Page Not Found: /index
INFO - 2022-08-17 22:11:35 --> Config Class Initialized
INFO - 2022-08-17 22:11:35 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:11:35 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:11:35 --> Utf8 Class Initialized
INFO - 2022-08-17 22:11:35 --> URI Class Initialized
INFO - 2022-08-17 22:11:35 --> Router Class Initialized
INFO - 2022-08-17 22:11:35 --> Output Class Initialized
INFO - 2022-08-17 22:11:35 --> Security Class Initialized
DEBUG - 2022-08-17 22:11:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:11:35 --> CSRF cookie sent
INFO - 2022-08-17 22:11:35 --> CSRF token verified
INFO - 2022-08-17 22:11:35 --> Input Class Initialized
INFO - 2022-08-17 22:11:35 --> Language Class Initialized
INFO - 2022-08-17 22:11:35 --> Language Class Initialized
INFO - 2022-08-17 22:11:35 --> Config Class Initialized
INFO - 2022-08-17 22:11:35 --> Loader Class Initialized
INFO - 2022-08-17 22:11:35 --> Helper loaded: url_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: security_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: file_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: html_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: form_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: text_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: common_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:11:35 --> Database Driver Class Initialized
INFO - 2022-08-17 22:11:35 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:11:35 --> Email Class Initialized
INFO - 2022-08-17 22:11:35 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:11:35 --> Cart Class Initialized
INFO - 2022-08-17 22:11:35 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:11:35 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:11:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:11:35 --> Pagination Class Initialized
INFO - 2022-08-17 22:11:35 --> Config Class Initialized
INFO - 2022-08-17 22:11:35 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:11:35 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:11:35 --> Utf8 Class Initialized
INFO - 2022-08-17 22:11:35 --> URI Class Initialized
INFO - 2022-08-17 22:11:35 --> Router Class Initialized
INFO - 2022-08-17 22:11:35 --> Output Class Initialized
INFO - 2022-08-17 22:11:35 --> Security Class Initialized
DEBUG - 2022-08-17 22:11:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:11:35 --> CSRF cookie sent
INFO - 2022-08-17 22:11:35 --> Input Class Initialized
INFO - 2022-08-17 22:11:35 --> Language Class Initialized
INFO - 2022-08-17 22:11:35 --> Language Class Initialized
INFO - 2022-08-17 22:11:35 --> Config Class Initialized
INFO - 2022-08-17 22:11:35 --> Loader Class Initialized
INFO - 2022-08-17 22:11:35 --> Helper loaded: url_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: security_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: file_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: html_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: form_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: text_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: common_helper
INFO - 2022-08-17 22:11:35 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:11:35 --> Database Driver Class Initialized
INFO - 2022-08-17 22:11:35 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:11:35 --> Email Class Initialized
INFO - 2022-08-17 22:11:35 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:11:35 --> Cart Class Initialized
INFO - 2022-08-17 22:11:35 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:11:35 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:11:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:11:35 --> Pagination Class Initialized
INFO - 2022-08-17 22:11:35 --> Config Class Initialized
INFO - 2022-08-17 22:11:35 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:11:35 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:11:35 --> Utf8 Class Initialized
INFO - 2022-08-17 22:11:35 --> URI Class Initialized
INFO - 2022-08-17 22:11:35 --> Router Class Initialized
INFO - 2022-08-17 22:11:35 --> Output Class Initialized
INFO - 2022-08-17 22:11:35 --> Security Class Initialized
DEBUG - 2022-08-17 22:11:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:11:35 --> CSRF cookie sent
INFO - 2022-08-17 22:11:35 --> Input Class Initialized
INFO - 2022-08-17 22:11:35 --> Language Class Initialized
ERROR - 2022-08-17 22:11:35 --> 404 Page Not Found: /index
INFO - 2022-08-17 22:11:56 --> Config Class Initialized
INFO - 2022-08-17 22:11:56 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:11:56 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:11:56 --> Utf8 Class Initialized
INFO - 2022-08-17 22:11:56 --> URI Class Initialized
INFO - 2022-08-17 22:11:56 --> Router Class Initialized
INFO - 2022-08-17 22:11:56 --> Output Class Initialized
INFO - 2022-08-17 22:11:56 --> Security Class Initialized
DEBUG - 2022-08-17 22:11:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:11:56 --> CSRF cookie sent
INFO - 2022-08-17 22:11:56 --> CSRF token verified
INFO - 2022-08-17 22:11:56 --> Input Class Initialized
INFO - 2022-08-17 22:11:56 --> Language Class Initialized
INFO - 2022-08-17 22:11:56 --> Language Class Initialized
INFO - 2022-08-17 22:11:56 --> Config Class Initialized
INFO - 2022-08-17 22:11:56 --> Loader Class Initialized
INFO - 2022-08-17 22:11:56 --> Helper loaded: url_helper
INFO - 2022-08-17 22:11:56 --> Helper loaded: security_helper
INFO - 2022-08-17 22:11:56 --> Helper loaded: file_helper
INFO - 2022-08-17 22:11:56 --> Helper loaded: html_helper
INFO - 2022-08-17 22:11:56 --> Helper loaded: form_helper
INFO - 2022-08-17 22:11:56 --> Helper loaded: text_helper
INFO - 2022-08-17 22:11:56 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:11:56 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:11:56 --> Helper loaded: common_helper
INFO - 2022-08-17 22:11:56 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:11:56 --> Database Driver Class Initialized
INFO - 2022-08-17 22:11:56 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:11:56 --> Email Class Initialized
INFO - 2022-08-17 22:11:56 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:11:56 --> Cart Class Initialized
INFO - 2022-08-17 22:11:56 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:11:56 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:11:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:11:56 --> Pagination Class Initialized
INFO - 2022-08-17 22:12:10 --> Config Class Initialized
INFO - 2022-08-17 22:12:10 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:12:10 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:12:10 --> Utf8 Class Initialized
INFO - 2022-08-17 22:12:10 --> URI Class Initialized
INFO - 2022-08-17 22:12:10 --> Router Class Initialized
INFO - 2022-08-17 22:12:10 --> Output Class Initialized
INFO - 2022-08-17 22:12:10 --> Security Class Initialized
DEBUG - 2022-08-17 22:12:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:12:10 --> CSRF cookie sent
INFO - 2022-08-17 22:12:10 --> CSRF token verified
INFO - 2022-08-17 22:12:10 --> Input Class Initialized
INFO - 2022-08-17 22:12:10 --> Language Class Initialized
INFO - 2022-08-17 22:12:10 --> Language Class Initialized
INFO - 2022-08-17 22:12:10 --> Config Class Initialized
INFO - 2022-08-17 22:12:10 --> Loader Class Initialized
INFO - 2022-08-17 22:12:10 --> Helper loaded: url_helper
INFO - 2022-08-17 22:12:10 --> Helper loaded: security_helper
INFO - 2022-08-17 22:12:10 --> Helper loaded: file_helper
INFO - 2022-08-17 22:12:10 --> Helper loaded: html_helper
INFO - 2022-08-17 22:12:10 --> Helper loaded: form_helper
INFO - 2022-08-17 22:12:10 --> Helper loaded: text_helper
INFO - 2022-08-17 22:12:10 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:12:10 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:12:10 --> Helper loaded: common_helper
INFO - 2022-08-17 22:12:10 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:12:10 --> Database Driver Class Initialized
INFO - 2022-08-17 22:12:10 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:12:10 --> Email Class Initialized
INFO - 2022-08-17 22:12:10 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:12:10 --> Cart Class Initialized
INFO - 2022-08-17 22:12:10 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:12:10 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:12:10 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:12:10 --> Pagination Class Initialized
INFO - 2022-08-17 22:12:35 --> Config Class Initialized
INFO - 2022-08-17 22:12:35 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:12:35 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:12:35 --> Utf8 Class Initialized
INFO - 2022-08-17 22:12:35 --> URI Class Initialized
INFO - 2022-08-17 22:12:35 --> Router Class Initialized
INFO - 2022-08-17 22:12:35 --> Output Class Initialized
INFO - 2022-08-17 22:12:35 --> Security Class Initialized
DEBUG - 2022-08-17 22:12:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:12:35 --> CSRF cookie sent
INFO - 2022-08-17 22:12:35 --> CSRF token verified
INFO - 2022-08-17 22:12:35 --> Input Class Initialized
INFO - 2022-08-17 22:12:35 --> Language Class Initialized
INFO - 2022-08-17 22:12:35 --> Language Class Initialized
INFO - 2022-08-17 22:12:35 --> Config Class Initialized
INFO - 2022-08-17 22:12:35 --> Loader Class Initialized
INFO - 2022-08-17 22:12:35 --> Helper loaded: url_helper
INFO - 2022-08-17 22:12:35 --> Helper loaded: security_helper
INFO - 2022-08-17 22:12:35 --> Helper loaded: file_helper
INFO - 2022-08-17 22:12:35 --> Helper loaded: html_helper
INFO - 2022-08-17 22:12:35 --> Helper loaded: form_helper
INFO - 2022-08-17 22:12:35 --> Helper loaded: text_helper
INFO - 2022-08-17 22:12:35 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:12:35 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:12:35 --> Helper loaded: common_helper
INFO - 2022-08-17 22:12:35 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:12:35 --> Database Driver Class Initialized
INFO - 2022-08-17 22:12:35 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:12:35 --> Email Class Initialized
INFO - 2022-08-17 22:12:35 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:12:35 --> Cart Class Initialized
INFO - 2022-08-17 22:12:35 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:12:35 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:12:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:12:35 --> Pagination Class Initialized
INFO - 2022-08-17 22:16:30 --> Config Class Initialized
INFO - 2022-08-17 22:16:30 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:16:30 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:16:30 --> Utf8 Class Initialized
INFO - 2022-08-17 22:16:30 --> URI Class Initialized
INFO - 2022-08-17 22:16:30 --> Router Class Initialized
INFO - 2022-08-17 22:16:30 --> Output Class Initialized
INFO - 2022-08-17 22:16:30 --> Security Class Initialized
DEBUG - 2022-08-17 22:16:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:16:30 --> CSRF cookie sent
INFO - 2022-08-17 22:16:30 --> CSRF token verified
INFO - 2022-08-17 22:16:30 --> Input Class Initialized
INFO - 2022-08-17 22:16:30 --> Language Class Initialized
INFO - 2022-08-17 22:16:30 --> Language Class Initialized
INFO - 2022-08-17 22:16:30 --> Config Class Initialized
INFO - 2022-08-17 22:16:30 --> Loader Class Initialized
INFO - 2022-08-17 22:16:30 --> Helper loaded: url_helper
INFO - 2022-08-17 22:16:30 --> Helper loaded: security_helper
INFO - 2022-08-17 22:16:30 --> Helper loaded: file_helper
INFO - 2022-08-17 22:16:30 --> Helper loaded: html_helper
INFO - 2022-08-17 22:16:30 --> Helper loaded: form_helper
INFO - 2022-08-17 22:16:30 --> Helper loaded: text_helper
INFO - 2022-08-17 22:16:30 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:16:30 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:16:30 --> Helper loaded: common_helper
INFO - 2022-08-17 22:16:30 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:16:31 --> Database Driver Class Initialized
INFO - 2022-08-17 22:16:31 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:16:31 --> Email Class Initialized
INFO - 2022-08-17 22:16:31 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:16:31 --> Cart Class Initialized
INFO - 2022-08-17 22:16:31 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:16:31 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:16:31 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:16:31 --> Pagination Class Initialized
INFO - 2022-08-17 22:18:00 --> Config Class Initialized
INFO - 2022-08-17 22:18:00 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:18:00 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:18:00 --> Utf8 Class Initialized
INFO - 2022-08-17 22:18:00 --> URI Class Initialized
INFO - 2022-08-17 22:18:00 --> Router Class Initialized
INFO - 2022-08-17 22:18:00 --> Output Class Initialized
INFO - 2022-08-17 22:18:00 --> Security Class Initialized
DEBUG - 2022-08-17 22:18:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:18:00 --> CSRF cookie sent
INFO - 2022-08-17 22:18:00 --> CSRF token verified
INFO - 2022-08-17 22:18:00 --> Input Class Initialized
INFO - 2022-08-17 22:18:00 --> Language Class Initialized
INFO - 2022-08-17 22:18:00 --> Language Class Initialized
INFO - 2022-08-17 22:18:00 --> Config Class Initialized
INFO - 2022-08-17 22:18:00 --> Loader Class Initialized
INFO - 2022-08-17 22:18:01 --> Helper loaded: url_helper
INFO - 2022-08-17 22:18:01 --> Helper loaded: security_helper
INFO - 2022-08-17 22:18:01 --> Helper loaded: file_helper
INFO - 2022-08-17 22:18:01 --> Helper loaded: html_helper
INFO - 2022-08-17 22:18:01 --> Helper loaded: form_helper
INFO - 2022-08-17 22:18:01 --> Helper loaded: text_helper
INFO - 2022-08-17 22:18:01 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:18:01 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:18:01 --> Helper loaded: common_helper
INFO - 2022-08-17 22:18:01 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:18:01 --> Database Driver Class Initialized
INFO - 2022-08-17 22:18:01 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:18:01 --> Email Class Initialized
INFO - 2022-08-17 22:18:01 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:18:01 --> Cart Class Initialized
INFO - 2022-08-17 22:18:01 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:18:01 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:18:01 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:18:01 --> Pagination Class Initialized
INFO - 2022-08-17 22:18:29 --> Config Class Initialized
INFO - 2022-08-17 22:18:29 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:18:29 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:18:29 --> Utf8 Class Initialized
INFO - 2022-08-17 22:18:29 --> URI Class Initialized
INFO - 2022-08-17 22:18:29 --> Router Class Initialized
INFO - 2022-08-17 22:18:30 --> Output Class Initialized
INFO - 2022-08-17 22:18:30 --> Security Class Initialized
DEBUG - 2022-08-17 22:18:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:18:30 --> CSRF cookie sent
INFO - 2022-08-17 22:18:30 --> CSRF token verified
INFO - 2022-08-17 22:18:30 --> Input Class Initialized
INFO - 2022-08-17 22:18:30 --> Language Class Initialized
INFO - 2022-08-17 22:18:30 --> Language Class Initialized
INFO - 2022-08-17 22:18:30 --> Config Class Initialized
INFO - 2022-08-17 22:18:30 --> Loader Class Initialized
INFO - 2022-08-17 22:18:30 --> Helper loaded: url_helper
INFO - 2022-08-17 22:18:30 --> Helper loaded: security_helper
INFO - 2022-08-17 22:18:30 --> Helper loaded: file_helper
INFO - 2022-08-17 22:18:30 --> Helper loaded: html_helper
INFO - 2022-08-17 22:18:30 --> Helper loaded: form_helper
INFO - 2022-08-17 22:18:30 --> Helper loaded: text_helper
INFO - 2022-08-17 22:18:30 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:18:30 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:18:30 --> Helper loaded: common_helper
INFO - 2022-08-17 22:18:30 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:18:30 --> Database Driver Class Initialized
INFO - 2022-08-17 22:18:30 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:18:30 --> Email Class Initialized
INFO - 2022-08-17 22:18:30 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:18:30 --> Cart Class Initialized
INFO - 2022-08-17 22:18:30 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:18:30 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:18:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:18:30 --> Pagination Class Initialized
INFO - 2022-08-17 22:18:52 --> Config Class Initialized
INFO - 2022-08-17 22:18:52 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:18:52 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:18:52 --> Utf8 Class Initialized
INFO - 2022-08-17 22:18:52 --> URI Class Initialized
INFO - 2022-08-17 22:18:53 --> Router Class Initialized
INFO - 2022-08-17 22:18:53 --> Output Class Initialized
INFO - 2022-08-17 22:18:53 --> Security Class Initialized
DEBUG - 2022-08-17 22:18:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:18:53 --> CSRF cookie sent
INFO - 2022-08-17 22:18:53 --> CSRF token verified
INFO - 2022-08-17 22:18:53 --> Input Class Initialized
INFO - 2022-08-17 22:18:53 --> Language Class Initialized
INFO - 2022-08-17 22:18:53 --> Language Class Initialized
INFO - 2022-08-17 22:18:53 --> Config Class Initialized
INFO - 2022-08-17 22:18:53 --> Loader Class Initialized
INFO - 2022-08-17 22:18:53 --> Helper loaded: url_helper
INFO - 2022-08-17 22:18:53 --> Helper loaded: security_helper
INFO - 2022-08-17 22:18:53 --> Helper loaded: file_helper
INFO - 2022-08-17 22:18:53 --> Helper loaded: html_helper
INFO - 2022-08-17 22:18:53 --> Helper loaded: form_helper
INFO - 2022-08-17 22:18:53 --> Helper loaded: text_helper
INFO - 2022-08-17 22:18:53 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:18:53 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:18:53 --> Helper loaded: common_helper
INFO - 2022-08-17 22:18:53 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:18:53 --> Database Driver Class Initialized
INFO - 2022-08-17 22:18:53 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:18:53 --> Email Class Initialized
INFO - 2022-08-17 22:18:53 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:18:53 --> Cart Class Initialized
INFO - 2022-08-17 22:18:53 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:18:53 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:18:53 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:18:53 --> Pagination Class Initialized
INFO - 2022-08-17 22:20:59 --> Config Class Initialized
INFO - 2022-08-17 22:20:59 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:20:59 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:20:59 --> Utf8 Class Initialized
INFO - 2022-08-17 22:20:59 --> URI Class Initialized
INFO - 2022-08-17 22:20:59 --> Router Class Initialized
INFO - 2022-08-17 22:20:59 --> Output Class Initialized
INFO - 2022-08-17 22:20:59 --> Security Class Initialized
DEBUG - 2022-08-17 22:20:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:20:59 --> CSRF cookie sent
INFO - 2022-08-17 22:20:59 --> CSRF token verified
INFO - 2022-08-17 22:20:59 --> Input Class Initialized
INFO - 2022-08-17 22:20:59 --> Language Class Initialized
INFO - 2022-08-17 22:20:59 --> Language Class Initialized
INFO - 2022-08-17 22:20:59 --> Config Class Initialized
INFO - 2022-08-17 22:20:59 --> Loader Class Initialized
INFO - 2022-08-17 22:20:59 --> Helper loaded: url_helper
INFO - 2022-08-17 22:20:59 --> Helper loaded: security_helper
INFO - 2022-08-17 22:20:59 --> Helper loaded: file_helper
INFO - 2022-08-17 22:20:59 --> Helper loaded: html_helper
INFO - 2022-08-17 22:20:59 --> Helper loaded: form_helper
INFO - 2022-08-17 22:20:59 --> Helper loaded: text_helper
INFO - 2022-08-17 22:20:59 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:20:59 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:20:59 --> Helper loaded: common_helper
INFO - 2022-08-17 22:20:59 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:20:59 --> Database Driver Class Initialized
INFO - 2022-08-17 22:20:59 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:20:59 --> Email Class Initialized
INFO - 2022-08-17 22:20:59 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:20:59 --> Cart Class Initialized
INFO - 2022-08-17 22:20:59 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:20:59 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:20:59 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:20:59 --> Pagination Class Initialized
INFO - 2022-08-17 22:22:00 --> Config Class Initialized
INFO - 2022-08-17 22:22:00 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:00 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:00 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:00 --> URI Class Initialized
INFO - 2022-08-17 22:22:00 --> Router Class Initialized
INFO - 2022-08-17 22:22:00 --> Output Class Initialized
INFO - 2022-08-17 22:22:00 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:00 --> CSRF cookie sent
INFO - 2022-08-17 22:22:00 --> CSRF token verified
INFO - 2022-08-17 22:22:00 --> Input Class Initialized
INFO - 2022-08-17 22:22:00 --> Language Class Initialized
INFO - 2022-08-17 22:22:00 --> Language Class Initialized
INFO - 2022-08-17 22:22:00 --> Config Class Initialized
INFO - 2022-08-17 22:22:00 --> Loader Class Initialized
INFO - 2022-08-17 22:22:00 --> Helper loaded: url_helper
INFO - 2022-08-17 22:22:00 --> Helper loaded: security_helper
INFO - 2022-08-17 22:22:00 --> Helper loaded: file_helper
INFO - 2022-08-17 22:22:00 --> Helper loaded: html_helper
INFO - 2022-08-17 22:22:00 --> Helper loaded: form_helper
INFO - 2022-08-17 22:22:00 --> Helper loaded: text_helper
INFO - 2022-08-17 22:22:00 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:22:00 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:22:00 --> Helper loaded: common_helper
INFO - 2022-08-17 22:22:00 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:22:00 --> Database Driver Class Initialized
INFO - 2022-08-17 22:22:00 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:22:00 --> Email Class Initialized
INFO - 2022-08-17 22:22:00 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:22:00 --> Cart Class Initialized
INFO - 2022-08-17 22:22:00 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:22:00 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:22:00 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:22:00 --> Pagination Class Initialized
INFO - 2022-08-17 22:22:12 --> Config Class Initialized
INFO - 2022-08-17 22:22:12 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:12 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:12 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:12 --> URI Class Initialized
INFO - 2022-08-17 22:22:12 --> Router Class Initialized
INFO - 2022-08-17 22:22:12 --> Output Class Initialized
INFO - 2022-08-17 22:22:12 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:12 --> CSRF cookie sent
INFO - 2022-08-17 22:22:12 --> CSRF token verified
INFO - 2022-08-17 22:22:12 --> Input Class Initialized
INFO - 2022-08-17 22:22:12 --> Language Class Initialized
INFO - 2022-08-17 22:22:12 --> Language Class Initialized
INFO - 2022-08-17 22:22:12 --> Config Class Initialized
INFO - 2022-08-17 22:22:12 --> Loader Class Initialized
INFO - 2022-08-17 22:22:12 --> Helper loaded: url_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: security_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: file_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: html_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: form_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: text_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: common_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:22:12 --> Database Driver Class Initialized
INFO - 2022-08-17 22:22:12 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:22:12 --> Email Class Initialized
INFO - 2022-08-17 22:22:12 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:22:12 --> Cart Class Initialized
INFO - 2022-08-17 22:22:12 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:22:12 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:22:12 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:22:12 --> Pagination Class Initialized
INFO - 2022-08-17 22:22:12 --> Config Class Initialized
INFO - 2022-08-17 22:22:12 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:12 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:12 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:12 --> URI Class Initialized
INFO - 2022-08-17 22:22:12 --> Router Class Initialized
INFO - 2022-08-17 22:22:12 --> Output Class Initialized
INFO - 2022-08-17 22:22:12 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:12 --> CSRF cookie sent
INFO - 2022-08-17 22:22:12 --> Input Class Initialized
INFO - 2022-08-17 22:22:12 --> Language Class Initialized
INFO - 2022-08-17 22:22:12 --> Language Class Initialized
INFO - 2022-08-17 22:22:12 --> Config Class Initialized
INFO - 2022-08-17 22:22:12 --> Loader Class Initialized
INFO - 2022-08-17 22:22:12 --> Helper loaded: url_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: security_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: file_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: html_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: form_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: text_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: common_helper
INFO - 2022-08-17 22:22:12 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:22:12 --> Database Driver Class Initialized
INFO - 2022-08-17 22:22:12 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:22:12 --> Email Class Initialized
INFO - 2022-08-17 22:22:12 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:22:12 --> Cart Class Initialized
INFO - 2022-08-17 22:22:12 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:22:12 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:22:12 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:22:12 --> Pagination Class Initialized
INFO - 2022-08-17 22:22:14 --> Config Class Initialized
INFO - 2022-08-17 22:22:14 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:14 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:14 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:14 --> URI Class Initialized
INFO - 2022-08-17 22:22:14 --> Router Class Initialized
INFO - 2022-08-17 22:22:14 --> Output Class Initialized
INFO - 2022-08-17 22:22:14 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:14 --> CSRF cookie sent
INFO - 2022-08-17 22:22:14 --> Input Class Initialized
INFO - 2022-08-17 22:22:14 --> Language Class Initialized
ERROR - 2022-08-17 22:22:14 --> 404 Page Not Found: /index
INFO - 2022-08-17 22:22:14 --> Config Class Initialized
INFO - 2022-08-17 22:22:14 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:14 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:14 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:14 --> URI Class Initialized
INFO - 2022-08-17 22:22:14 --> Router Class Initialized
INFO - 2022-08-17 22:22:14 --> Output Class Initialized
INFO - 2022-08-17 22:22:14 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:14 --> CSRF cookie sent
INFO - 2022-08-17 22:22:14 --> Input Class Initialized
INFO - 2022-08-17 22:22:14 --> Language Class Initialized
ERROR - 2022-08-17 22:22:14 --> 404 Page Not Found: /index
INFO - 2022-08-17 22:22:14 --> Config Class Initialized
INFO - 2022-08-17 22:22:14 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:14 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:14 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:14 --> URI Class Initialized
INFO - 2022-08-17 22:22:14 --> Router Class Initialized
INFO - 2022-08-17 22:22:14 --> Output Class Initialized
INFO - 2022-08-17 22:22:14 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:14 --> CSRF cookie sent
INFO - 2022-08-17 22:22:14 --> Input Class Initialized
INFO - 2022-08-17 22:22:14 --> Language Class Initialized
ERROR - 2022-08-17 22:22:14 --> 404 Page Not Found: /index
INFO - 2022-08-17 22:22:14 --> Config Class Initialized
INFO - 2022-08-17 22:22:14 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:14 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:14 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:14 --> URI Class Initialized
INFO - 2022-08-17 22:22:14 --> Router Class Initialized
INFO - 2022-08-17 22:22:14 --> Output Class Initialized
INFO - 2022-08-17 22:22:14 --> Security Class Initialized
INFO - 2022-08-17 22:22:14 --> Config Class Initialized
DEBUG - 2022-08-17 22:22:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:14 --> Hooks Class Initialized
INFO - 2022-08-17 22:22:14 --> CSRF cookie sent
INFO - 2022-08-17 22:22:14 --> Input Class Initialized
INFO - 2022-08-17 22:22:14 --> Language Class Initialized
ERROR - 2022-08-17 22:22:14 --> 404 Page Not Found: /index
DEBUG - 2022-08-17 22:22:14 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:14 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:14 --> URI Class Initialized
INFO - 2022-08-17 22:22:14 --> Router Class Initialized
INFO - 2022-08-17 22:22:14 --> Config Class Initialized
INFO - 2022-08-17 22:22:14 --> Hooks Class Initialized
INFO - 2022-08-17 22:22:14 --> Output Class Initialized
INFO - 2022-08-17 22:22:14 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-17 22:22:14 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:14 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:14 --> CSRF cookie sent
INFO - 2022-08-17 22:22:14 --> Input Class Initialized
INFO - 2022-08-17 22:22:14 --> URI Class Initialized
INFO - 2022-08-17 22:22:14 --> Language Class Initialized
ERROR - 2022-08-17 22:22:14 --> 404 Page Not Found: /index
INFO - 2022-08-17 22:22:14 --> Router Class Initialized
INFO - 2022-08-17 22:22:14 --> Output Class Initialized
INFO - 2022-08-17 22:22:14 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:14 --> CSRF cookie sent
INFO - 2022-08-17 22:22:14 --> Input Class Initialized
INFO - 2022-08-17 22:22:14 --> Language Class Initialized
ERROR - 2022-08-17 22:22:14 --> 404 Page Not Found: /index
INFO - 2022-08-17 22:22:19 --> Config Class Initialized
INFO - 2022-08-17 22:22:19 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:19 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:19 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:19 --> URI Class Initialized
INFO - 2022-08-17 22:22:19 --> Router Class Initialized
INFO - 2022-08-17 22:22:19 --> Output Class Initialized
INFO - 2022-08-17 22:22:19 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:19 --> CSRF cookie sent
INFO - 2022-08-17 22:22:19 --> Input Class Initialized
INFO - 2022-08-17 22:22:19 --> Language Class Initialized
INFO - 2022-08-17 22:22:19 --> Language Class Initialized
INFO - 2022-08-17 22:22:19 --> Config Class Initialized
INFO - 2022-08-17 22:22:19 --> Loader Class Initialized
INFO - 2022-08-17 22:22:19 --> Helper loaded: url_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: security_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: file_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: html_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: form_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: text_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: common_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:22:19 --> Database Driver Class Initialized
INFO - 2022-08-17 22:22:19 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:22:19 --> Email Class Initialized
INFO - 2022-08-17 22:22:19 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:22:19 --> Cart Class Initialized
INFO - 2022-08-17 22:22:19 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:22:19 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:22:19 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:22:19 --> Pagination Class Initialized
INFO - 2022-08-17 22:22:19 --> Config Class Initialized
INFO - 2022-08-17 22:22:19 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:19 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:19 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:19 --> URI Class Initialized
INFO - 2022-08-17 22:22:19 --> Router Class Initialized
INFO - 2022-08-17 22:22:19 --> Output Class Initialized
INFO - 2022-08-17 22:22:19 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:19 --> CSRF cookie sent
INFO - 2022-08-17 22:22:19 --> Input Class Initialized
INFO - 2022-08-17 22:22:19 --> Language Class Initialized
INFO - 2022-08-17 22:22:19 --> Language Class Initialized
INFO - 2022-08-17 22:22:19 --> Config Class Initialized
INFO - 2022-08-17 22:22:19 --> Loader Class Initialized
INFO - 2022-08-17 22:22:19 --> Helper loaded: url_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: security_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: file_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: html_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: form_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: text_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: common_helper
INFO - 2022-08-17 22:22:19 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:22:19 --> Database Driver Class Initialized
INFO - 2022-08-17 22:22:19 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:22:19 --> Email Class Initialized
INFO - 2022-08-17 22:22:19 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:22:19 --> Cart Class Initialized
INFO - 2022-08-17 22:22:19 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:22:19 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:22:19 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:22:19 --> Pagination Class Initialized
INFO - 2022-08-17 22:22:20 --> Config Class Initialized
INFO - 2022-08-17 22:22:20 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:20 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:20 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:20 --> URI Class Initialized
INFO - 2022-08-17 22:22:20 --> Router Class Initialized
INFO - 2022-08-17 22:22:20 --> Output Class Initialized
INFO - 2022-08-17 22:22:20 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:20 --> CSRF cookie sent
INFO - 2022-08-17 22:22:20 --> Input Class Initialized
INFO - 2022-08-17 22:22:20 --> Language Class Initialized
ERROR - 2022-08-17 22:22:20 --> 404 Page Not Found: /index
INFO - 2022-08-17 22:22:33 --> Config Class Initialized
INFO - 2022-08-17 22:22:33 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:33 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:33 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:33 --> URI Class Initialized
INFO - 2022-08-17 22:22:33 --> Router Class Initialized
INFO - 2022-08-17 22:22:33 --> Output Class Initialized
INFO - 2022-08-17 22:22:33 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:33 --> CSRF cookie sent
INFO - 2022-08-17 22:22:33 --> CSRF token verified
INFO - 2022-08-17 22:22:33 --> Input Class Initialized
INFO - 2022-08-17 22:22:33 --> Language Class Initialized
INFO - 2022-08-17 22:22:33 --> Language Class Initialized
INFO - 2022-08-17 22:22:33 --> Config Class Initialized
INFO - 2022-08-17 22:22:33 --> Loader Class Initialized
INFO - 2022-08-17 22:22:33 --> Helper loaded: url_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: security_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: file_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: html_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: form_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: text_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: common_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:22:33 --> Database Driver Class Initialized
INFO - 2022-08-17 22:22:33 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:22:33 --> Email Class Initialized
INFO - 2022-08-17 22:22:33 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:22:33 --> Cart Class Initialized
INFO - 2022-08-17 22:22:33 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:22:33 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:22:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:22:33 --> Pagination Class Initialized
INFO - 2022-08-17 22:22:33 --> Config Class Initialized
INFO - 2022-08-17 22:22:33 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:33 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:33 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:33 --> URI Class Initialized
INFO - 2022-08-17 22:22:33 --> Router Class Initialized
INFO - 2022-08-17 22:22:33 --> Output Class Initialized
INFO - 2022-08-17 22:22:33 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:33 --> CSRF cookie sent
INFO - 2022-08-17 22:22:33 --> Input Class Initialized
INFO - 2022-08-17 22:22:33 --> Language Class Initialized
INFO - 2022-08-17 22:22:33 --> Language Class Initialized
INFO - 2022-08-17 22:22:33 --> Config Class Initialized
INFO - 2022-08-17 22:22:33 --> Loader Class Initialized
INFO - 2022-08-17 22:22:33 --> Helper loaded: url_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: security_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: file_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: html_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: form_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: text_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: common_helper
INFO - 2022-08-17 22:22:33 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:22:33 --> Database Driver Class Initialized
INFO - 2022-08-17 22:22:33 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:22:33 --> Email Class Initialized
INFO - 2022-08-17 22:22:33 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:22:33 --> Cart Class Initialized
INFO - 2022-08-17 22:22:33 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:22:33 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:22:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:22:33 --> Pagination Class Initialized
INFO - 2022-08-17 22:22:33 --> Config Class Initialized
INFO - 2022-08-17 22:22:33 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:33 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:33 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:33 --> URI Class Initialized
INFO - 2022-08-17 22:22:33 --> Router Class Initialized
INFO - 2022-08-17 22:22:33 --> Output Class Initialized
INFO - 2022-08-17 22:22:33 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:33 --> CSRF cookie sent
INFO - 2022-08-17 22:22:33 --> Input Class Initialized
INFO - 2022-08-17 22:22:33 --> Language Class Initialized
ERROR - 2022-08-17 22:22:33 --> 404 Page Not Found: /index
INFO - 2022-08-17 22:22:33 --> Config Class Initialized
INFO - 2022-08-17 22:22:33 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:33 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:33 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:33 --> URI Class Initialized
INFO - 2022-08-17 22:22:33 --> Config Class Initialized
INFO - 2022-08-17 22:22:33 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:34 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:34 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:34 --> Router Class Initialized
INFO - 2022-08-17 22:22:34 --> URI Class Initialized
INFO - 2022-08-17 22:22:34 --> Output Class Initialized
INFO - 2022-08-17 22:22:34 --> Security Class Initialized
INFO - 2022-08-17 22:22:34 --> Config Class Initialized
INFO - 2022-08-17 22:22:34 --> Hooks Class Initialized
INFO - 2022-08-17 22:22:34 --> Router Class Initialized
INFO - 2022-08-17 22:22:34 --> Output Class Initialized
INFO - 2022-08-17 22:22:34 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:34 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:34 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:34 --> URI Class Initialized
DEBUG - 2022-08-17 22:22:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:34 --> CSRF cookie sent
INFO - 2022-08-17 22:22:34 --> Input Class Initialized
INFO - 2022-08-17 22:22:34 --> Config Class Initialized
INFO - 2022-08-17 22:22:34 --> Hooks Class Initialized
INFO - 2022-08-17 22:22:34 --> Router Class Initialized
DEBUG - 2022-08-17 22:22:34 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:34 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:34 --> Output Class Initialized
INFO - 2022-08-17 22:22:34 --> URI Class Initialized
INFO - 2022-08-17 22:22:34 --> Security Class Initialized
INFO - 2022-08-17 22:22:34 --> Router Class Initialized
DEBUG - 2022-08-17 22:22:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:34 --> Output Class Initialized
INFO - 2022-08-17 22:22:34 --> CSRF cookie sent
INFO - 2022-08-17 22:22:34 --> Input Class Initialized
INFO - 2022-08-17 22:22:34 --> Language Class Initialized
INFO - 2022-08-17 22:22:34 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:34 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-08-17 22:22:34 --> 404 Page Not Found: /index
INFO - 2022-08-17 22:22:34 --> CSRF cookie sent
INFO - 2022-08-17 22:22:34 --> Input Class Initialized
INFO - 2022-08-17 22:22:34 --> Language Class Initialized
INFO - 2022-08-17 22:22:34 --> Language Class Initialized
ERROR - 2022-08-17 22:22:34 --> 404 Page Not Found: /index
DEBUG - 2022-08-17 22:22:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:34 --> CSRF cookie sent
ERROR - 2022-08-17 22:22:34 --> 404 Page Not Found: /index
INFO - 2022-08-17 22:22:34 --> Input Class Initialized
INFO - 2022-08-17 22:22:34 --> Language Class Initialized
ERROR - 2022-08-17 22:22:34 --> 404 Page Not Found: /index
INFO - 2022-08-17 22:22:34 --> Config Class Initialized
INFO - 2022-08-17 22:22:34 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:34 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:34 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:34 --> URI Class Initialized
INFO - 2022-08-17 22:22:34 --> Router Class Initialized
INFO - 2022-08-17 22:22:34 --> Output Class Initialized
INFO - 2022-08-17 22:22:34 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:34 --> CSRF cookie sent
INFO - 2022-08-17 22:22:34 --> Input Class Initialized
INFO - 2022-08-17 22:22:34 --> Language Class Initialized
ERROR - 2022-08-17 22:22:34 --> 404 Page Not Found: /index
INFO - 2022-08-17 22:22:39 --> Config Class Initialized
INFO - 2022-08-17 22:22:39 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:39 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:39 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:39 --> URI Class Initialized
INFO - 2022-08-17 22:22:39 --> Router Class Initialized
INFO - 2022-08-17 22:22:39 --> Output Class Initialized
INFO - 2022-08-17 22:22:39 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:39 --> CSRF cookie sent
INFO - 2022-08-17 22:22:39 --> Input Class Initialized
INFO - 2022-08-17 22:22:39 --> Language Class Initialized
ERROR - 2022-08-17 22:22:39 --> 404 Page Not Found: admin/View/users
INFO - 2022-08-17 22:22:42 --> Config Class Initialized
INFO - 2022-08-17 22:22:42 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:42 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:42 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:42 --> URI Class Initialized
INFO - 2022-08-17 22:22:42 --> Router Class Initialized
INFO - 2022-08-17 22:22:43 --> Output Class Initialized
INFO - 2022-08-17 22:22:43 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:43 --> CSRF cookie sent
INFO - 2022-08-17 22:22:43 --> Input Class Initialized
INFO - 2022-08-17 22:22:43 --> Language Class Initialized
INFO - 2022-08-17 22:22:43 --> Language Class Initialized
INFO - 2022-08-17 22:22:43 --> Config Class Initialized
INFO - 2022-08-17 22:22:43 --> Loader Class Initialized
INFO - 2022-08-17 22:22:43 --> Helper loaded: url_helper
INFO - 2022-08-17 22:22:43 --> Helper loaded: security_helper
INFO - 2022-08-17 22:22:43 --> Helper loaded: file_helper
INFO - 2022-08-17 22:22:43 --> Helper loaded: html_helper
INFO - 2022-08-17 22:22:43 --> Helper loaded: form_helper
INFO - 2022-08-17 22:22:43 --> Helper loaded: text_helper
INFO - 2022-08-17 22:22:43 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:22:43 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:22:43 --> Helper loaded: common_helper
INFO - 2022-08-17 22:22:43 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:22:43 --> Database Driver Class Initialized
INFO - 2022-08-17 22:22:43 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:22:43 --> Email Class Initialized
INFO - 2022-08-17 22:22:43 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:22:43 --> Cart Class Initialized
INFO - 2022-08-17 22:22:43 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:22:43 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:22:43 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:22:43 --> Pagination Class Initialized
INFO - 2022-08-17 22:22:43 --> Config Class Initialized
INFO - 2022-08-17 22:22:43 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:43 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:43 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:43 --> URI Class Initialized
INFO - 2022-08-17 22:22:43 --> Router Class Initialized
INFO - 2022-08-17 22:22:43 --> Output Class Initialized
INFO - 2022-08-17 22:22:43 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:43 --> CSRF cookie sent
INFO - 2022-08-17 22:22:43 --> Input Class Initialized
INFO - 2022-08-17 22:22:43 --> Language Class Initialized
ERROR - 2022-08-17 22:22:43 --> 404 Page Not Found: /index
INFO - 2022-08-17 22:22:45 --> Config Class Initialized
INFO - 2022-08-17 22:22:45 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:45 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:45 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:45 --> URI Class Initialized
INFO - 2022-08-17 22:22:45 --> Router Class Initialized
INFO - 2022-08-17 22:22:45 --> Output Class Initialized
INFO - 2022-08-17 22:22:45 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:45 --> CSRF cookie sent
INFO - 2022-08-17 22:22:45 --> Input Class Initialized
INFO - 2022-08-17 22:22:45 --> Language Class Initialized
ERROR - 2022-08-17 22:22:45 --> 404 Page Not Found: admin/Roles/add
INFO - 2022-08-17 22:22:47 --> Config Class Initialized
INFO - 2022-08-17 22:22:47 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:22:47 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:22:47 --> Utf8 Class Initialized
INFO - 2022-08-17 22:22:47 --> URI Class Initialized
INFO - 2022-08-17 22:22:47 --> Router Class Initialized
INFO - 2022-08-17 22:22:47 --> Output Class Initialized
INFO - 2022-08-17 22:22:47 --> Security Class Initialized
DEBUG - 2022-08-17 22:22:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:22:47 --> CSRF cookie sent
INFO - 2022-08-17 22:22:47 --> Input Class Initialized
INFO - 2022-08-17 22:22:47 --> Language Class Initialized
INFO - 2022-08-17 22:22:47 --> Language Class Initialized
INFO - 2022-08-17 22:22:47 --> Config Class Initialized
INFO - 2022-08-17 22:22:47 --> Loader Class Initialized
INFO - 2022-08-17 22:22:47 --> Helper loaded: url_helper
INFO - 2022-08-17 22:22:47 --> Helper loaded: security_helper
INFO - 2022-08-17 22:22:47 --> Helper loaded: file_helper
INFO - 2022-08-17 22:22:47 --> Helper loaded: html_helper
INFO - 2022-08-17 22:22:47 --> Helper loaded: form_helper
INFO - 2022-08-17 22:22:47 --> Helper loaded: text_helper
INFO - 2022-08-17 22:22:47 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:22:47 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:22:47 --> Helper loaded: common_helper
INFO - 2022-08-17 22:22:47 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:22:47 --> Database Driver Class Initialized
INFO - 2022-08-17 22:22:47 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:22:47 --> Email Class Initialized
INFO - 2022-08-17 22:22:47 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:22:47 --> Cart Class Initialized
INFO - 2022-08-17 22:22:47 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:22:47 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:22:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:22:47 --> Pagination Class Initialized
INFO - 2022-08-17 22:35:52 --> Config Class Initialized
INFO - 2022-08-17 22:35:52 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:35:52 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:35:52 --> Utf8 Class Initialized
INFO - 2022-08-17 22:35:52 --> URI Class Initialized
INFO - 2022-08-17 22:35:52 --> Router Class Initialized
INFO - 2022-08-17 22:35:52 --> Output Class Initialized
INFO - 2022-08-17 22:35:52 --> Security Class Initialized
DEBUG - 2022-08-17 22:35:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:35:52 --> CSRF cookie sent
INFO - 2022-08-17 22:35:52 --> Input Class Initialized
INFO - 2022-08-17 22:35:52 --> Language Class Initialized
ERROR - 2022-08-17 22:35:52 --> 404 Page Not Found: admin/View/users
INFO - 2022-08-17 22:35:54 --> Config Class Initialized
INFO - 2022-08-17 22:35:54 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:35:54 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:35:54 --> Utf8 Class Initialized
INFO - 2022-08-17 22:35:54 --> URI Class Initialized
INFO - 2022-08-17 22:35:54 --> Router Class Initialized
INFO - 2022-08-17 22:35:54 --> Output Class Initialized
INFO - 2022-08-17 22:35:54 --> Security Class Initialized
DEBUG - 2022-08-17 22:35:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:35:54 --> CSRF cookie sent
INFO - 2022-08-17 22:35:54 --> Input Class Initialized
INFO - 2022-08-17 22:35:54 --> Language Class Initialized
INFO - 2022-08-17 22:35:54 --> Language Class Initialized
INFO - 2022-08-17 22:35:54 --> Config Class Initialized
INFO - 2022-08-17 22:35:54 --> Loader Class Initialized
INFO - 2022-08-17 22:35:54 --> Helper loaded: url_helper
INFO - 2022-08-17 22:35:54 --> Helper loaded: security_helper
INFO - 2022-08-17 22:35:54 --> Helper loaded: file_helper
INFO - 2022-08-17 22:35:54 --> Helper loaded: html_helper
INFO - 2022-08-17 22:35:54 --> Helper loaded: form_helper
INFO - 2022-08-17 22:35:54 --> Helper loaded: text_helper
INFO - 2022-08-17 22:35:54 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:35:54 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:35:54 --> Helper loaded: common_helper
INFO - 2022-08-17 22:35:54 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:35:54 --> Database Driver Class Initialized
INFO - 2022-08-17 22:35:54 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:35:54 --> Email Class Initialized
INFO - 2022-08-17 22:35:54 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:35:54 --> Cart Class Initialized
INFO - 2022-08-17 22:35:54 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:35:54 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:35:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:35:54 --> Pagination Class Initialized
INFO - 2022-08-17 22:35:57 --> Config Class Initialized
INFO - 2022-08-17 22:35:57 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:35:57 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:35:57 --> Utf8 Class Initialized
INFO - 2022-08-17 22:35:57 --> URI Class Initialized
INFO - 2022-08-17 22:35:57 --> Router Class Initialized
INFO - 2022-08-17 22:35:57 --> Output Class Initialized
INFO - 2022-08-17 22:35:57 --> Security Class Initialized
DEBUG - 2022-08-17 22:35:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:35:57 --> CSRF cookie sent
INFO - 2022-08-17 22:35:57 --> Input Class Initialized
INFO - 2022-08-17 22:35:57 --> Language Class Initialized
ERROR - 2022-08-17 22:35:57 --> 404 Page Not Found: admin/Store/create
INFO - 2022-08-17 22:35:59 --> Config Class Initialized
INFO - 2022-08-17 22:35:59 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:35:59 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:35:59 --> Utf8 Class Initialized
INFO - 2022-08-17 22:35:59 --> URI Class Initialized
INFO - 2022-08-17 22:35:59 --> Router Class Initialized
INFO - 2022-08-17 22:35:59 --> Output Class Initialized
INFO - 2022-08-17 22:35:59 --> Security Class Initialized
DEBUG - 2022-08-17 22:35:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:35:59 --> CSRF cookie sent
INFO - 2022-08-17 22:35:59 --> Input Class Initialized
INFO - 2022-08-17 22:35:59 --> Language Class Initialized
INFO - 2022-08-17 22:35:59 --> Language Class Initialized
INFO - 2022-08-17 22:35:59 --> Config Class Initialized
INFO - 2022-08-17 22:35:59 --> Loader Class Initialized
INFO - 2022-08-17 22:35:59 --> Helper loaded: url_helper
INFO - 2022-08-17 22:35:59 --> Helper loaded: security_helper
INFO - 2022-08-17 22:35:59 --> Helper loaded: file_helper
INFO - 2022-08-17 22:35:59 --> Helper loaded: html_helper
INFO - 2022-08-17 22:35:59 --> Helper loaded: form_helper
INFO - 2022-08-17 22:35:59 --> Helper loaded: text_helper
INFO - 2022-08-17 22:35:59 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:35:59 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:35:59 --> Helper loaded: common_helper
INFO - 2022-08-17 22:35:59 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:35:59 --> Database Driver Class Initialized
INFO - 2022-08-17 22:35:59 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:35:59 --> Email Class Initialized
INFO - 2022-08-17 22:35:59 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:35:59 --> Cart Class Initialized
INFO - 2022-08-17 22:35:59 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:35:59 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:35:59 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:35:59 --> Pagination Class Initialized
INFO - 2022-08-17 22:36:01 --> Config Class Initialized
INFO - 2022-08-17 22:36:01 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:36:01 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:36:01 --> Utf8 Class Initialized
INFO - 2022-08-17 22:36:01 --> URI Class Initialized
INFO - 2022-08-17 22:36:01 --> Router Class Initialized
INFO - 2022-08-17 22:36:01 --> Output Class Initialized
INFO - 2022-08-17 22:36:01 --> Security Class Initialized
DEBUG - 2022-08-17 22:36:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:36:01 --> CSRF cookie sent
INFO - 2022-08-17 22:36:01 --> Input Class Initialized
INFO - 2022-08-17 22:36:01 --> Language Class Initialized
ERROR - 2022-08-17 22:36:01 --> 404 Page Not Found: admin/Store/view
INFO - 2022-08-17 22:36:03 --> Config Class Initialized
INFO - 2022-08-17 22:36:03 --> Hooks Class Initialized
DEBUG - 2022-08-17 22:36:03 --> UTF-8 Support Enabled
INFO - 2022-08-17 22:36:03 --> Utf8 Class Initialized
INFO - 2022-08-17 22:36:03 --> URI Class Initialized
INFO - 2022-08-17 22:36:03 --> Router Class Initialized
INFO - 2022-08-17 22:36:03 --> Output Class Initialized
INFO - 2022-08-17 22:36:03 --> Security Class Initialized
DEBUG - 2022-08-17 22:36:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 22:36:03 --> CSRF cookie sent
INFO - 2022-08-17 22:36:03 --> Input Class Initialized
INFO - 2022-08-17 22:36:03 --> Language Class Initialized
INFO - 2022-08-17 22:36:03 --> Language Class Initialized
INFO - 2022-08-17 22:36:03 --> Config Class Initialized
INFO - 2022-08-17 22:36:03 --> Loader Class Initialized
INFO - 2022-08-17 22:36:03 --> Helper loaded: url_helper
INFO - 2022-08-17 22:36:03 --> Helper loaded: security_helper
INFO - 2022-08-17 22:36:03 --> Helper loaded: file_helper
INFO - 2022-08-17 22:36:03 --> Helper loaded: html_helper
INFO - 2022-08-17 22:36:03 --> Helper loaded: form_helper
INFO - 2022-08-17 22:36:03 --> Helper loaded: text_helper
INFO - 2022-08-17 22:36:03 --> Helper loaded: lang_helper
INFO - 2022-08-17 22:36:03 --> Helper loaded: directory_helper
INFO - 2022-08-17 22:36:03 --> Helper loaded: common_helper
INFO - 2022-08-17 22:36:03 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 22:36:03 --> Database Driver Class Initialized
INFO - 2022-08-17 22:36:03 --> Helper loaded: sslc_helper
INFO - 2022-08-17 22:36:03 --> Email Class Initialized
INFO - 2022-08-17 22:36:03 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 22:36:03 --> Cart Class Initialized
INFO - 2022-08-17 22:36:03 --> Form Validation Class Initialized
DEBUG - 2022-08-17 22:36:03 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 22:36:03 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 22:36:03 --> Pagination Class Initialized
INFO - 2022-08-17 23:32:42 --> Config Class Initialized
INFO - 2022-08-17 23:32:42 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:32:43 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:32:43 --> Utf8 Class Initialized
INFO - 2022-08-17 23:32:43 --> URI Class Initialized
INFO - 2022-08-17 23:32:44 --> Router Class Initialized
INFO - 2022-08-17 23:32:44 --> Output Class Initialized
INFO - 2022-08-17 23:32:44 --> Security Class Initialized
DEBUG - 2022-08-17 23:32:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:32:44 --> CSRF cookie sent
INFO - 2022-08-17 23:32:44 --> Input Class Initialized
INFO - 2022-08-17 23:32:44 --> Language Class Initialized
INFO - 2022-08-17 23:32:44 --> Language Class Initialized
INFO - 2022-08-17 23:32:44 --> Config Class Initialized
INFO - 2022-08-17 23:32:44 --> Loader Class Initialized
INFO - 2022-08-17 23:32:44 --> Helper loaded: url_helper
INFO - 2022-08-17 23:32:44 --> Helper loaded: security_helper
INFO - 2022-08-17 23:32:45 --> Helper loaded: file_helper
INFO - 2022-08-17 23:32:45 --> Helper loaded: html_helper
INFO - 2022-08-17 23:32:45 --> Helper loaded: form_helper
INFO - 2022-08-17 23:32:45 --> Helper loaded: text_helper
INFO - 2022-08-17 23:32:45 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:32:45 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:32:45 --> Helper loaded: common_helper
INFO - 2022-08-17 23:32:45 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:32:45 --> Database Driver Class Initialized
INFO - 2022-08-17 23:32:45 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:32:45 --> Email Class Initialized
INFO - 2022-08-17 23:32:46 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:32:46 --> Cart Class Initialized
INFO - 2022-08-17 23:32:46 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:32:46 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:32:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:32:46 --> Pagination Class Initialized
INFO - 2022-08-17 23:32:47 --> Config Class Initialized
INFO - 2022-08-17 23:32:47 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:32:48 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:32:48 --> Utf8 Class Initialized
INFO - 2022-08-17 23:32:48 --> URI Class Initialized
INFO - 2022-08-17 23:32:48 --> Router Class Initialized
INFO - 2022-08-17 23:32:48 --> Output Class Initialized
INFO - 2022-08-17 23:32:48 --> Security Class Initialized
DEBUG - 2022-08-17 23:32:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:32:48 --> CSRF cookie sent
INFO - 2022-08-17 23:32:48 --> Input Class Initialized
INFO - 2022-08-17 23:32:48 --> Language Class Initialized
ERROR - 2022-08-17 23:32:48 --> 404 Page Not Found: /index
INFO - 2022-08-17 23:32:49 --> Config Class Initialized
INFO - 2022-08-17 23:32:49 --> Hooks Class Initialized
INFO - 2022-08-17 23:32:49 --> Config Class Initialized
INFO - 2022-08-17 23:32:49 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:32:49 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:32:49 --> Utf8 Class Initialized
DEBUG - 2022-08-17 23:32:49 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:32:49 --> URI Class Initialized
INFO - 2022-08-17 23:32:49 --> Utf8 Class Initialized
INFO - 2022-08-17 23:32:49 --> URI Class Initialized
INFO - 2022-08-17 23:32:49 --> Router Class Initialized
INFO - 2022-08-17 23:32:49 --> Output Class Initialized
INFO - 2022-08-17 23:32:49 --> Router Class Initialized
INFO - 2022-08-17 23:32:49 --> Security Class Initialized
INFO - 2022-08-17 23:32:49 --> Output Class Initialized
DEBUG - 2022-08-17 23:32:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:32:49 --> CSRF cookie sent
INFO - 2022-08-17 23:32:49 --> Input Class Initialized
INFO - 2022-08-17 23:32:49 --> Security Class Initialized
INFO - 2022-08-17 23:32:49 --> Language Class Initialized
DEBUG - 2022-08-17 23:32:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:32:49 --> CSRF cookie sent
INFO - 2022-08-17 23:32:49 --> Input Class Initialized
ERROR - 2022-08-17 23:32:49 --> 404 Page Not Found: /index
INFO - 2022-08-17 23:32:49 --> Language Class Initialized
ERROR - 2022-08-17 23:32:49 --> 404 Page Not Found: /index
INFO - 2022-08-17 23:32:49 --> Config Class Initialized
INFO - 2022-08-17 23:32:49 --> Config Class Initialized
INFO - 2022-08-17 23:32:49 --> Hooks Class Initialized
INFO - 2022-08-17 23:32:49 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:32:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-17 23:32:49 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:32:49 --> Utf8 Class Initialized
INFO - 2022-08-17 23:32:49 --> Utf8 Class Initialized
INFO - 2022-08-17 23:32:49 --> URI Class Initialized
INFO - 2022-08-17 23:32:49 --> URI Class Initialized
INFO - 2022-08-17 23:32:49 --> Router Class Initialized
INFO - 2022-08-17 23:32:49 --> Output Class Initialized
INFO - 2022-08-17 23:32:49 --> Router Class Initialized
INFO - 2022-08-17 23:32:49 --> Security Class Initialized
INFO - 2022-08-17 23:32:49 --> Output Class Initialized
DEBUG - 2022-08-17 23:32:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:32:49 --> CSRF cookie sent
INFO - 2022-08-17 23:32:49 --> Input Class Initialized
INFO - 2022-08-17 23:32:49 --> Security Class Initialized
INFO - 2022-08-17 23:32:49 --> Language Class Initialized
DEBUG - 2022-08-17 23:32:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:32:49 --> CSRF cookie sent
INFO - 2022-08-17 23:32:49 --> Input Class Initialized
ERROR - 2022-08-17 23:32:49 --> 404 Page Not Found: /index
INFO - 2022-08-17 23:32:49 --> Language Class Initialized
ERROR - 2022-08-17 23:32:49 --> 404 Page Not Found: /index
INFO - 2022-08-17 23:32:49 --> Config Class Initialized
INFO - 2022-08-17 23:32:49 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:32:49 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:32:49 --> Utf8 Class Initialized
INFO - 2022-08-17 23:32:49 --> URI Class Initialized
INFO - 2022-08-17 23:32:49 --> Router Class Initialized
INFO - 2022-08-17 23:32:49 --> Output Class Initialized
INFO - 2022-08-17 23:32:49 --> Security Class Initialized
DEBUG - 2022-08-17 23:32:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:32:49 --> CSRF cookie sent
INFO - 2022-08-17 23:32:49 --> Input Class Initialized
INFO - 2022-08-17 23:32:49 --> Language Class Initialized
ERROR - 2022-08-17 23:32:49 --> 404 Page Not Found: /index
INFO - 2022-08-17 23:33:21 --> Config Class Initialized
INFO - 2022-08-17 23:33:21 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:33:21 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:33:21 --> Utf8 Class Initialized
INFO - 2022-08-17 23:33:21 --> URI Class Initialized
INFO - 2022-08-17 23:33:21 --> Router Class Initialized
INFO - 2022-08-17 23:33:21 --> Output Class Initialized
INFO - 2022-08-17 23:33:21 --> Security Class Initialized
DEBUG - 2022-08-17 23:33:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:33:21 --> CSRF cookie sent
INFO - 2022-08-17 23:33:21 --> Input Class Initialized
INFO - 2022-08-17 23:33:21 --> Language Class Initialized
INFO - 2022-08-17 23:33:21 --> Language Class Initialized
INFO - 2022-08-17 23:33:21 --> Config Class Initialized
INFO - 2022-08-17 23:33:21 --> Loader Class Initialized
INFO - 2022-08-17 23:33:21 --> Helper loaded: url_helper
INFO - 2022-08-17 23:33:21 --> Helper loaded: security_helper
INFO - 2022-08-17 23:33:21 --> Helper loaded: file_helper
INFO - 2022-08-17 23:33:21 --> Helper loaded: html_helper
INFO - 2022-08-17 23:33:21 --> Helper loaded: form_helper
INFO - 2022-08-17 23:33:21 --> Helper loaded: text_helper
INFO - 2022-08-17 23:33:21 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:33:21 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:33:21 --> Helper loaded: common_helper
INFO - 2022-08-17 23:33:21 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:33:21 --> Database Driver Class Initialized
INFO - 2022-08-17 23:33:21 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:33:21 --> Email Class Initialized
INFO - 2022-08-17 23:33:21 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:33:21 --> Cart Class Initialized
INFO - 2022-08-17 23:33:21 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:33:21 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:33:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:33:21 --> Pagination Class Initialized
INFO - 2022-08-17 23:33:31 --> Config Class Initialized
INFO - 2022-08-17 23:33:31 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:33:31 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:33:31 --> Utf8 Class Initialized
INFO - 2022-08-17 23:33:31 --> URI Class Initialized
INFO - 2022-08-17 23:33:31 --> Router Class Initialized
INFO - 2022-08-17 23:33:31 --> Output Class Initialized
INFO - 2022-08-17 23:33:31 --> Security Class Initialized
DEBUG - 2022-08-17 23:33:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:33:31 --> CSRF cookie sent
INFO - 2022-08-17 23:33:31 --> Input Class Initialized
INFO - 2022-08-17 23:33:31 --> Language Class Initialized
INFO - 2022-08-17 23:33:31 --> Language Class Initialized
INFO - 2022-08-17 23:33:31 --> Config Class Initialized
INFO - 2022-08-17 23:33:31 --> Loader Class Initialized
INFO - 2022-08-17 23:33:31 --> Helper loaded: url_helper
INFO - 2022-08-17 23:33:31 --> Helper loaded: security_helper
INFO - 2022-08-17 23:33:31 --> Helper loaded: file_helper
INFO - 2022-08-17 23:33:31 --> Helper loaded: html_helper
INFO - 2022-08-17 23:33:31 --> Helper loaded: form_helper
INFO - 2022-08-17 23:33:31 --> Helper loaded: text_helper
INFO - 2022-08-17 23:33:31 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:33:31 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:33:31 --> Helper loaded: common_helper
INFO - 2022-08-17 23:33:31 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:33:31 --> Database Driver Class Initialized
INFO - 2022-08-17 23:33:31 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:33:31 --> Email Class Initialized
INFO - 2022-08-17 23:33:31 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:33:31 --> Cart Class Initialized
INFO - 2022-08-17 23:33:31 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:33:31 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:33:31 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:33:31 --> Pagination Class Initialized
INFO - 2022-08-17 23:33:34 --> Config Class Initialized
INFO - 2022-08-17 23:33:34 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:33:34 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:33:34 --> Utf8 Class Initialized
INFO - 2022-08-17 23:33:34 --> URI Class Initialized
INFO - 2022-08-17 23:33:34 --> Router Class Initialized
INFO - 2022-08-17 23:33:34 --> Output Class Initialized
INFO - 2022-08-17 23:33:34 --> Security Class Initialized
DEBUG - 2022-08-17 23:33:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:33:34 --> CSRF cookie sent
INFO - 2022-08-17 23:33:34 --> Input Class Initialized
INFO - 2022-08-17 23:33:34 --> Language Class Initialized
ERROR - 2022-08-17 23:33:34 --> 404 Page Not Found: admin/View/users
INFO - 2022-08-17 23:33:37 --> Config Class Initialized
INFO - 2022-08-17 23:33:37 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:33:37 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:33:37 --> Utf8 Class Initialized
INFO - 2022-08-17 23:33:37 --> URI Class Initialized
INFO - 2022-08-17 23:33:37 --> Router Class Initialized
INFO - 2022-08-17 23:33:37 --> Output Class Initialized
INFO - 2022-08-17 23:33:37 --> Security Class Initialized
DEBUG - 2022-08-17 23:33:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:33:37 --> CSRF cookie sent
INFO - 2022-08-17 23:33:37 --> Input Class Initialized
INFO - 2022-08-17 23:33:37 --> Language Class Initialized
INFO - 2022-08-17 23:33:37 --> Language Class Initialized
INFO - 2022-08-17 23:33:37 --> Config Class Initialized
INFO - 2022-08-17 23:33:37 --> Loader Class Initialized
INFO - 2022-08-17 23:33:37 --> Helper loaded: url_helper
INFO - 2022-08-17 23:33:37 --> Helper loaded: security_helper
INFO - 2022-08-17 23:33:37 --> Helper loaded: file_helper
INFO - 2022-08-17 23:33:37 --> Helper loaded: html_helper
INFO - 2022-08-17 23:33:37 --> Helper loaded: form_helper
INFO - 2022-08-17 23:33:37 --> Helper loaded: text_helper
INFO - 2022-08-17 23:33:37 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:33:37 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:33:37 --> Helper loaded: common_helper
INFO - 2022-08-17 23:33:37 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:33:37 --> Database Driver Class Initialized
INFO - 2022-08-17 23:33:37 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:33:37 --> Email Class Initialized
INFO - 2022-08-17 23:33:37 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:33:37 --> Cart Class Initialized
INFO - 2022-08-17 23:33:37 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:33:37 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:33:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:33:37 --> Pagination Class Initialized
INFO - 2022-08-17 23:33:40 --> Config Class Initialized
INFO - 2022-08-17 23:33:40 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:33:40 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:33:40 --> Utf8 Class Initialized
INFO - 2022-08-17 23:33:40 --> URI Class Initialized
INFO - 2022-08-17 23:33:40 --> Router Class Initialized
INFO - 2022-08-17 23:33:40 --> Output Class Initialized
INFO - 2022-08-17 23:33:40 --> Security Class Initialized
DEBUG - 2022-08-17 23:33:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:33:40 --> CSRF cookie sent
INFO - 2022-08-17 23:33:40 --> Input Class Initialized
INFO - 2022-08-17 23:33:40 --> Language Class Initialized
INFO - 2022-08-17 23:33:40 --> Language Class Initialized
INFO - 2022-08-17 23:33:40 --> Config Class Initialized
INFO - 2022-08-17 23:33:40 --> Loader Class Initialized
INFO - 2022-08-17 23:33:40 --> Helper loaded: url_helper
INFO - 2022-08-17 23:33:40 --> Helper loaded: security_helper
INFO - 2022-08-17 23:33:40 --> Helper loaded: file_helper
INFO - 2022-08-17 23:33:40 --> Helper loaded: html_helper
INFO - 2022-08-17 23:33:40 --> Helper loaded: form_helper
INFO - 2022-08-17 23:33:40 --> Helper loaded: text_helper
INFO - 2022-08-17 23:33:40 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:33:40 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:33:40 --> Helper loaded: common_helper
INFO - 2022-08-17 23:33:40 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:33:40 --> Database Driver Class Initialized
INFO - 2022-08-17 23:33:40 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:33:40 --> Email Class Initialized
INFO - 2022-08-17 23:33:40 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:33:40 --> Cart Class Initialized
INFO - 2022-08-17 23:33:40 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:33:40 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:33:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:33:40 --> Pagination Class Initialized
INFO - 2022-08-17 23:34:49 --> Config Class Initialized
INFO - 2022-08-17 23:34:49 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:34:49 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:34:49 --> Utf8 Class Initialized
INFO - 2022-08-17 23:34:49 --> URI Class Initialized
INFO - 2022-08-17 23:34:49 --> Router Class Initialized
INFO - 2022-08-17 23:34:49 --> Output Class Initialized
INFO - 2022-08-17 23:34:49 --> Security Class Initialized
DEBUG - 2022-08-17 23:34:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:34:49 --> CSRF cookie sent
INFO - 2022-08-17 23:34:49 --> Input Class Initialized
INFO - 2022-08-17 23:34:49 --> Language Class Initialized
INFO - 2022-08-17 23:34:49 --> Language Class Initialized
INFO - 2022-08-17 23:34:49 --> Config Class Initialized
INFO - 2022-08-17 23:34:49 --> Loader Class Initialized
INFO - 2022-08-17 23:34:49 --> Helper loaded: url_helper
INFO - 2022-08-17 23:34:49 --> Helper loaded: security_helper
INFO - 2022-08-17 23:34:49 --> Helper loaded: file_helper
INFO - 2022-08-17 23:34:49 --> Helper loaded: html_helper
INFO - 2022-08-17 23:34:49 --> Helper loaded: form_helper
INFO - 2022-08-17 23:34:49 --> Helper loaded: text_helper
INFO - 2022-08-17 23:34:49 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:34:49 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:34:49 --> Helper loaded: common_helper
INFO - 2022-08-17 23:34:49 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:34:49 --> Database Driver Class Initialized
INFO - 2022-08-17 23:34:49 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:34:49 --> Email Class Initialized
INFO - 2022-08-17 23:34:49 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:34:49 --> Cart Class Initialized
INFO - 2022-08-17 23:34:49 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:34:49 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:34:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:34:49 --> Pagination Class Initialized
INFO - 2022-08-17 23:35:00 --> Config Class Initialized
INFO - 2022-08-17 23:35:00 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:35:00 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:35:00 --> Utf8 Class Initialized
INFO - 2022-08-17 23:35:00 --> URI Class Initialized
INFO - 2022-08-17 23:35:00 --> Router Class Initialized
INFO - 2022-08-17 23:35:00 --> Output Class Initialized
INFO - 2022-08-17 23:35:00 --> Security Class Initialized
DEBUG - 2022-08-17 23:35:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:35:00 --> CSRF cookie sent
INFO - 2022-08-17 23:35:00 --> Input Class Initialized
INFO - 2022-08-17 23:35:00 --> Language Class Initialized
ERROR - 2022-08-17 23:35:00 --> 404 Page Not Found: admin/Store/view
INFO - 2022-08-17 23:35:02 --> Config Class Initialized
INFO - 2022-08-17 23:35:02 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:35:02 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:35:02 --> Utf8 Class Initialized
INFO - 2022-08-17 23:35:02 --> URI Class Initialized
INFO - 2022-08-17 23:35:02 --> Router Class Initialized
INFO - 2022-08-17 23:35:02 --> Output Class Initialized
INFO - 2022-08-17 23:35:02 --> Security Class Initialized
DEBUG - 2022-08-17 23:35:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:35:02 --> CSRF cookie sent
INFO - 2022-08-17 23:35:02 --> Input Class Initialized
INFO - 2022-08-17 23:35:02 --> Language Class Initialized
INFO - 2022-08-17 23:35:02 --> Language Class Initialized
INFO - 2022-08-17 23:35:02 --> Config Class Initialized
INFO - 2022-08-17 23:35:02 --> Loader Class Initialized
INFO - 2022-08-17 23:35:02 --> Helper loaded: url_helper
INFO - 2022-08-17 23:35:02 --> Helper loaded: security_helper
INFO - 2022-08-17 23:35:02 --> Helper loaded: file_helper
INFO - 2022-08-17 23:35:02 --> Helper loaded: html_helper
INFO - 2022-08-17 23:35:02 --> Helper loaded: form_helper
INFO - 2022-08-17 23:35:02 --> Helper loaded: text_helper
INFO - 2022-08-17 23:35:02 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:35:02 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:35:02 --> Helper loaded: common_helper
INFO - 2022-08-17 23:35:02 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:35:02 --> Database Driver Class Initialized
INFO - 2022-08-17 23:35:02 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:35:02 --> Email Class Initialized
INFO - 2022-08-17 23:35:02 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:35:02 --> Cart Class Initialized
INFO - 2022-08-17 23:35:02 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:35:02 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:35:02 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:35:02 --> Pagination Class Initialized
INFO - 2022-08-17 23:35:12 --> Config Class Initialized
INFO - 2022-08-17 23:35:12 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:35:12 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:35:12 --> Utf8 Class Initialized
INFO - 2022-08-17 23:35:12 --> URI Class Initialized
INFO - 2022-08-17 23:35:12 --> Router Class Initialized
INFO - 2022-08-17 23:35:12 --> Output Class Initialized
INFO - 2022-08-17 23:35:12 --> Security Class Initialized
DEBUG - 2022-08-17 23:35:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:35:12 --> CSRF cookie sent
INFO - 2022-08-17 23:35:12 --> Input Class Initialized
INFO - 2022-08-17 23:35:12 --> Language Class Initialized
INFO - 2022-08-17 23:35:12 --> Language Class Initialized
INFO - 2022-08-17 23:35:12 --> Config Class Initialized
INFO - 2022-08-17 23:35:12 --> Loader Class Initialized
INFO - 2022-08-17 23:35:12 --> Helper loaded: url_helper
INFO - 2022-08-17 23:35:12 --> Helper loaded: security_helper
INFO - 2022-08-17 23:35:12 --> Helper loaded: file_helper
INFO - 2022-08-17 23:35:12 --> Helper loaded: html_helper
INFO - 2022-08-17 23:35:12 --> Helper loaded: form_helper
INFO - 2022-08-17 23:35:12 --> Helper loaded: text_helper
INFO - 2022-08-17 23:35:12 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:35:12 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:35:12 --> Helper loaded: common_helper
INFO - 2022-08-17 23:35:12 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:35:12 --> Database Driver Class Initialized
INFO - 2022-08-17 23:35:12 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:35:12 --> Email Class Initialized
INFO - 2022-08-17 23:35:12 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:35:12 --> Cart Class Initialized
INFO - 2022-08-17 23:35:12 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:35:12 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:35:12 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:35:12 --> Pagination Class Initialized
INFO - 2022-08-17 23:45:38 --> Config Class Initialized
INFO - 2022-08-17 23:45:38 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:45:38 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:45:38 --> Utf8 Class Initialized
INFO - 2022-08-17 23:45:38 --> URI Class Initialized
INFO - 2022-08-17 23:45:39 --> Router Class Initialized
INFO - 2022-08-17 23:45:39 --> Output Class Initialized
INFO - 2022-08-17 23:45:39 --> Security Class Initialized
DEBUG - 2022-08-17 23:45:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:45:39 --> CSRF cookie sent
INFO - 2022-08-17 23:45:39 --> Input Class Initialized
INFO - 2022-08-17 23:45:39 --> Language Class Initialized
INFO - 2022-08-17 23:45:39 --> Language Class Initialized
INFO - 2022-08-17 23:45:39 --> Config Class Initialized
INFO - 2022-08-17 23:45:39 --> Loader Class Initialized
INFO - 2022-08-17 23:45:39 --> Helper loaded: url_helper
INFO - 2022-08-17 23:45:39 --> Helper loaded: security_helper
INFO - 2022-08-17 23:45:39 --> Helper loaded: file_helper
INFO - 2022-08-17 23:45:39 --> Helper loaded: html_helper
INFO - 2022-08-17 23:45:39 --> Helper loaded: form_helper
INFO - 2022-08-17 23:45:39 --> Helper loaded: text_helper
INFO - 2022-08-17 23:45:39 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:45:39 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:45:39 --> Helper loaded: common_helper
INFO - 2022-08-17 23:45:39 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:45:39 --> Database Driver Class Initialized
INFO - 2022-08-17 23:45:39 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:45:39 --> Email Class Initialized
INFO - 2022-08-17 23:45:39 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:45:39 --> Cart Class Initialized
INFO - 2022-08-17 23:45:39 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:45:39 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:45:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:45:39 --> Pagination Class Initialized
INFO - 2022-08-17 23:47:09 --> Config Class Initialized
INFO - 2022-08-17 23:47:09 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:47:09 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:09 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:09 --> URI Class Initialized
INFO - 2022-08-17 23:47:09 --> Router Class Initialized
INFO - 2022-08-17 23:47:10 --> Output Class Initialized
INFO - 2022-08-17 23:47:10 --> Security Class Initialized
DEBUG - 2022-08-17 23:47:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:10 --> CSRF cookie sent
INFO - 2022-08-17 23:47:10 --> Input Class Initialized
INFO - 2022-08-17 23:47:10 --> Language Class Initialized
INFO - 2022-08-17 23:47:10 --> Language Class Initialized
INFO - 2022-08-17 23:47:10 --> Config Class Initialized
INFO - 2022-08-17 23:47:10 --> Loader Class Initialized
INFO - 2022-08-17 23:47:10 --> Helper loaded: url_helper
INFO - 2022-08-17 23:47:10 --> Helper loaded: security_helper
INFO - 2022-08-17 23:47:10 --> Helper loaded: file_helper
INFO - 2022-08-17 23:47:10 --> Helper loaded: html_helper
INFO - 2022-08-17 23:47:10 --> Helper loaded: form_helper
INFO - 2022-08-17 23:47:10 --> Helper loaded: text_helper
INFO - 2022-08-17 23:47:10 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:47:10 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:47:10 --> Helper loaded: common_helper
INFO - 2022-08-17 23:47:10 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:47:10 --> Database Driver Class Initialized
INFO - 2022-08-17 23:47:10 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:47:10 --> Email Class Initialized
INFO - 2022-08-17 23:47:10 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:47:10 --> Cart Class Initialized
INFO - 2022-08-17 23:47:10 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:47:10 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:47:10 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:47:10 --> Pagination Class Initialized
INFO - 2022-08-17 23:47:10 --> Config Class Initialized
INFO - 2022-08-17 23:47:10 --> Config Class Initialized
INFO - 2022-08-17 23:47:10 --> Hooks Class Initialized
INFO - 2022-08-17 23:47:10 --> Config Class Initialized
INFO - 2022-08-17 23:47:10 --> Hooks Class Initialized
INFO - 2022-08-17 23:47:10 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:47:10 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:10 --> Utf8 Class Initialized
DEBUG - 2022-08-17 23:47:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-17 23:47:10 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:10 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:10 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:10 --> URI Class Initialized
INFO - 2022-08-17 23:47:10 --> URI Class Initialized
INFO - 2022-08-17 23:47:10 --> URI Class Initialized
INFO - 2022-08-17 23:47:10 --> Router Class Initialized
INFO - 2022-08-17 23:47:10 --> Output Class Initialized
INFO - 2022-08-17 23:47:10 --> Security Class Initialized
DEBUG - 2022-08-17 23:47:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:10 --> CSRF cookie sent
INFO - 2022-08-17 23:47:10 --> Input Class Initialized
INFO - 2022-08-17 23:47:10 --> Language Class Initialized
INFO - 2022-08-17 23:47:10 --> Router Class Initialized
INFO - 2022-08-17 23:47:10 --> Router Class Initialized
INFO - 2022-08-17 23:47:10 --> Output Class Initialized
INFO - 2022-08-17 23:47:10 --> Config Class Initialized
INFO - 2022-08-17 23:47:10 --> Hooks Class Initialized
INFO - 2022-08-17 23:47:10 --> Output Class Initialized
INFO - 2022-08-17 23:47:10 --> Security Class Initialized
INFO - 2022-08-17 23:47:10 --> Security Class Initialized
ERROR - 2022-08-17 23:47:10 --> 404 Page Not Found: admin/Css/font-awesome.css
DEBUG - 2022-08-17 23:47:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:10 --> CSRF cookie sent
DEBUG - 2022-08-17 23:47:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:10 --> Input Class Initialized
INFO - 2022-08-17 23:47:10 --> CSRF cookie sent
INFO - 2022-08-17 23:47:10 --> Input Class Initialized
INFO - 2022-08-17 23:47:10 --> Language Class Initialized
INFO - 2022-08-17 23:47:10 --> Language Class Initialized
ERROR - 2022-08-17 23:47:10 --> 404 Page Not Found: admin/Css/bootstrap.css
INFO - 2022-08-17 23:47:10 --> Config Class Initialized
INFO - 2022-08-17 23:47:10 --> Hooks Class Initialized
ERROR - 2022-08-17 23:47:10 --> 404 Page Not Found: admin/Css/style.css
DEBUG - 2022-08-17 23:47:11 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:11 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:11 --> URI Class Initialized
INFO - 2022-08-17 23:47:11 --> Config Class Initialized
INFO - 2022-08-17 23:47:11 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:47:11 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:11 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:11 --> Router Class Initialized
INFO - 2022-08-17 23:47:11 --> URI Class Initialized
DEBUG - 2022-08-17 23:47:11 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:11 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:11 --> Output Class Initialized
INFO - 2022-08-17 23:47:11 --> Security Class Initialized
INFO - 2022-08-17 23:47:11 --> URI Class Initialized
DEBUG - 2022-08-17 23:47:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:11 --> CSRF cookie sent
INFO - 2022-08-17 23:47:11 --> Input Class Initialized
INFO - 2022-08-17 23:47:11 --> Language Class Initialized
ERROR - 2022-08-17 23:47:11 --> 404 Page Not Found: admin/Css/SidebarNav.min.css
INFO - 2022-08-17 23:47:11 --> Config Class Initialized
INFO - 2022-08-17 23:47:11 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:47:11 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:11 --> Router Class Initialized
INFO - 2022-08-17 23:47:11 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:11 --> Router Class Initialized
INFO - 2022-08-17 23:47:11 --> URI Class Initialized
INFO - 2022-08-17 23:47:11 --> Output Class Initialized
INFO - 2022-08-17 23:47:11 --> Output Class Initialized
INFO - 2022-08-17 23:47:11 --> Security Class Initialized
DEBUG - 2022-08-17 23:47:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:11 --> CSRF cookie sent
INFO - 2022-08-17 23:47:11 --> Input Class Initialized
INFO - 2022-08-17 23:47:11 --> Language Class Initialized
ERROR - 2022-08-17 23:47:11 --> 404 Page Not Found: admin/Js/jquery-1.11.1.min.js
INFO - 2022-08-17 23:47:11 --> Config Class Initialized
INFO - 2022-08-17 23:47:11 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:47:11 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:11 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:11 --> URI Class Initialized
INFO - 2022-08-17 23:47:11 --> Router Class Initialized
INFO - 2022-08-17 23:47:11 --> Security Class Initialized
INFO - 2022-08-17 23:47:11 --> Output Class Initialized
INFO - 2022-08-17 23:47:11 --> Security Class Initialized
DEBUG - 2022-08-17 23:47:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:11 --> CSRF cookie sent
INFO - 2022-08-17 23:47:11 --> Input Class Initialized
INFO - 2022-08-17 23:47:11 --> Language Class Initialized
DEBUG - 2022-08-17 23:47:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:11 --> CSRF cookie sent
INFO - 2022-08-17 23:47:11 --> Input Class Initialized
INFO - 2022-08-17 23:47:11 --> Language Class Initialized
ERROR - 2022-08-17 23:47:11 --> 404 Page Not Found: admin/Js/modernizr.custom.js
INFO - 2022-08-17 23:47:11 --> Router Class Initialized
INFO - 2022-08-17 23:47:11 --> Output Class Initialized
INFO - 2022-08-17 23:47:11 --> Security Class Initialized
DEBUG - 2022-08-17 23:47:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:11 --> CSRF cookie sent
INFO - 2022-08-17 23:47:11 --> Input Class Initialized
ERROR - 2022-08-17 23:47:11 --> 404 Page Not Found: admin/Css/custom.css
INFO - 2022-08-17 23:47:11 --> Language Class Initialized
ERROR - 2022-08-17 23:47:11 --> 404 Page Not Found: admin/Js/metisMenu.min.js
INFO - 2022-08-17 23:47:11 --> Config Class Initialized
INFO - 2022-08-17 23:47:11 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:47:11 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:11 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:11 --> URI Class Initialized
INFO - 2022-08-17 23:47:11 --> Router Class Initialized
INFO - 2022-08-17 23:47:11 --> Output Class Initialized
INFO - 2022-08-17 23:47:11 --> Security Class Initialized
DEBUG - 2022-08-17 23:47:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:11 --> CSRF cookie sent
INFO - 2022-08-17 23:47:11 --> Input Class Initialized
INFO - 2022-08-17 23:47:11 --> Language Class Initialized
ERROR - 2022-08-17 23:47:11 --> 404 Page Not Found: admin/Js/custom.js
INFO - 2022-08-17 23:47:11 --> Config Class Initialized
INFO - 2022-08-17 23:47:11 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:47:11 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:11 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:11 --> URI Class Initialized
INFO - 2022-08-17 23:47:11 --> Router Class Initialized
INFO - 2022-08-17 23:47:11 --> Output Class Initialized
INFO - 2022-08-17 23:47:11 --> Security Class Initialized
DEBUG - 2022-08-17 23:47:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:11 --> CSRF cookie sent
INFO - 2022-08-17 23:47:11 --> Input Class Initialized
INFO - 2022-08-17 23:47:11 --> Language Class Initialized
ERROR - 2022-08-17 23:47:11 --> 404 Page Not Found: admin/Js/SidebarNav.min.js
INFO - 2022-08-17 23:47:11 --> Config Class Initialized
INFO - 2022-08-17 23:47:11 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:47:11 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:11 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:11 --> URI Class Initialized
INFO - 2022-08-17 23:47:11 --> Router Class Initialized
INFO - 2022-08-17 23:47:11 --> Output Class Initialized
INFO - 2022-08-17 23:47:11 --> Security Class Initialized
DEBUG - 2022-08-17 23:47:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:11 --> CSRF cookie sent
INFO - 2022-08-17 23:47:11 --> Input Class Initialized
INFO - 2022-08-17 23:47:11 --> Language Class Initialized
ERROR - 2022-08-17 23:47:11 --> 404 Page Not Found: admin/Js/classie.js
INFO - 2022-08-17 23:47:11 --> Config Class Initialized
INFO - 2022-08-17 23:47:11 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:47:11 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:11 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:11 --> URI Class Initialized
INFO - 2022-08-17 23:47:11 --> Config Class Initialized
INFO - 2022-08-17 23:47:11 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:47:11 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:11 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:11 --> URI Class Initialized
INFO - 2022-08-17 23:47:11 --> Config Class Initialized
INFO - 2022-08-17 23:47:11 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:47:11 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:11 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:11 --> URI Class Initialized
INFO - 2022-08-17 23:47:11 --> Router Class Initialized
INFO - 2022-08-17 23:47:11 --> Output Class Initialized
INFO - 2022-08-17 23:47:11 --> Security Class Initialized
INFO - 2022-08-17 23:47:11 --> Config Class Initialized
INFO - 2022-08-17 23:47:11 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:47:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:11 --> CSRF cookie sent
INFO - 2022-08-17 23:47:11 --> Input Class Initialized
INFO - 2022-08-17 23:47:11 --> Language Class Initialized
DEBUG - 2022-08-17 23:47:11 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:11 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:11 --> URI Class Initialized
INFO - 2022-08-17 23:47:11 --> Router Class Initialized
INFO - 2022-08-17 23:47:11 --> Router Class Initialized
INFO - 2022-08-17 23:47:11 --> Router Class Initialized
INFO - 2022-08-17 23:47:11 --> Output Class Initialized
INFO - 2022-08-17 23:47:11 --> Output Class Initialized
INFO - 2022-08-17 23:47:11 --> Security Class Initialized
DEBUG - 2022-08-17 23:47:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-08-17 23:47:11 --> 404 Page Not Found: admin/Js/jquery.nicescroll.js
INFO - 2022-08-17 23:47:11 --> CSRF cookie sent
INFO - 2022-08-17 23:47:11 --> Output Class Initialized
INFO - 2022-08-17 23:47:11 --> Input Class Initialized
INFO - 2022-08-17 23:47:11 --> Language Class Initialized
INFO - 2022-08-17 23:47:11 --> Security Class Initialized
DEBUG - 2022-08-17 23:47:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-08-17 23:47:11 --> 404 Page Not Found: admin/Images/1.jpg
INFO - 2022-08-17 23:47:11 --> CSRF cookie sent
INFO - 2022-08-17 23:47:11 --> Input Class Initialized
INFO - 2022-08-17 23:47:11 --> Config Class Initialized
INFO - 2022-08-17 23:47:11 --> Language Class Initialized
INFO - 2022-08-17 23:47:11 --> Hooks Class Initialized
INFO - 2022-08-17 23:47:11 --> Security Class Initialized
ERROR - 2022-08-17 23:47:11 --> 404 Page Not Found: admin/Images/3.jpg
DEBUG - 2022-08-17 23:47:11 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:11 --> Utf8 Class Initialized
DEBUG - 2022-08-17 23:47:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:11 --> CSRF cookie sent
INFO - 2022-08-17 23:47:11 --> Input Class Initialized
INFO - 2022-08-17 23:47:11 --> URI Class Initialized
INFO - 2022-08-17 23:47:11 --> Language Class Initialized
ERROR - 2022-08-17 23:47:11 --> 404 Page Not Found: admin/Images/4.jpg
INFO - 2022-08-17 23:47:11 --> Router Class Initialized
INFO - 2022-08-17 23:47:11 --> Config Class Initialized
INFO - 2022-08-17 23:47:11 --> Hooks Class Initialized
INFO - 2022-08-17 23:47:11 --> Output Class Initialized
DEBUG - 2022-08-17 23:47:11 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:11 --> Security Class Initialized
INFO - 2022-08-17 23:47:11 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:11 --> URI Class Initialized
DEBUG - 2022-08-17 23:47:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:11 --> CSRF cookie sent
INFO - 2022-08-17 23:47:11 --> Input Class Initialized
INFO - 2022-08-17 23:47:11 --> Language Class Initialized
ERROR - 2022-08-17 23:47:12 --> 404 Page Not Found: admin/Js/scripts.js
INFO - 2022-08-17 23:47:12 --> Router Class Initialized
INFO - 2022-08-17 23:47:12 --> Output Class Initialized
INFO - 2022-08-17 23:47:12 --> Security Class Initialized
DEBUG - 2022-08-17 23:47:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:12 --> CSRF cookie sent
INFO - 2022-08-17 23:47:12 --> Input Class Initialized
INFO - 2022-08-17 23:47:12 --> Language Class Initialized
ERROR - 2022-08-17 23:47:12 --> 404 Page Not Found: admin/Js/bootstrap.js
INFO - 2022-08-17 23:47:12 --> Config Class Initialized
INFO - 2022-08-17 23:47:12 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:47:12 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:47:12 --> Utf8 Class Initialized
INFO - 2022-08-17 23:47:12 --> URI Class Initialized
INFO - 2022-08-17 23:47:12 --> Router Class Initialized
INFO - 2022-08-17 23:47:12 --> Output Class Initialized
INFO - 2022-08-17 23:47:12 --> Security Class Initialized
DEBUG - 2022-08-17 23:47:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:47:12 --> CSRF cookie sent
INFO - 2022-08-17 23:47:12 --> Input Class Initialized
INFO - 2022-08-17 23:47:12 --> Language Class Initialized
ERROR - 2022-08-17 23:47:12 --> 404 Page Not Found: admin/Images/2.jpg
INFO - 2022-08-17 23:49:47 --> Config Class Initialized
INFO - 2022-08-17 23:49:47 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:49:47 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:49:47 --> Utf8 Class Initialized
INFO - 2022-08-17 23:49:47 --> URI Class Initialized
INFO - 2022-08-17 23:49:47 --> Router Class Initialized
INFO - 2022-08-17 23:49:47 --> Output Class Initialized
INFO - 2022-08-17 23:49:47 --> Security Class Initialized
DEBUG - 2022-08-17 23:49:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:49:47 --> CSRF cookie sent
INFO - 2022-08-17 23:49:47 --> Input Class Initialized
INFO - 2022-08-17 23:49:47 --> Language Class Initialized
INFO - 2022-08-17 23:49:48 --> Language Class Initialized
INFO - 2022-08-17 23:49:48 --> Config Class Initialized
INFO - 2022-08-17 23:49:48 --> Loader Class Initialized
INFO - 2022-08-17 23:49:48 --> Helper loaded: url_helper
INFO - 2022-08-17 23:49:48 --> Helper loaded: security_helper
INFO - 2022-08-17 23:49:48 --> Helper loaded: file_helper
INFO - 2022-08-17 23:49:48 --> Helper loaded: html_helper
INFO - 2022-08-17 23:49:48 --> Helper loaded: form_helper
INFO - 2022-08-17 23:49:48 --> Helper loaded: text_helper
INFO - 2022-08-17 23:49:48 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:49:48 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:49:48 --> Helper loaded: common_helper
INFO - 2022-08-17 23:49:48 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:49:48 --> Database Driver Class Initialized
INFO - 2022-08-17 23:49:48 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:49:48 --> Email Class Initialized
INFO - 2022-08-17 23:49:48 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:49:48 --> Cart Class Initialized
INFO - 2022-08-17 23:49:48 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:49:48 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:49:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:49:48 --> Pagination Class Initialized
INFO - 2022-08-17 23:49:48 --> Config Class Initialized
INFO - 2022-08-17 23:49:48 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:49:48 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:49:48 --> Utf8 Class Initialized
INFO - 2022-08-17 23:49:48 --> URI Class Initialized
INFO - 2022-08-17 23:49:48 --> Router Class Initialized
INFO - 2022-08-17 23:49:48 --> Output Class Initialized
INFO - 2022-08-17 23:49:48 --> Security Class Initialized
DEBUG - 2022-08-17 23:49:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:49:48 --> CSRF cookie sent
INFO - 2022-08-17 23:49:48 --> Input Class Initialized
INFO - 2022-08-17 23:49:48 --> Language Class Initialized
ERROR - 2022-08-17 23:49:48 --> 404 Page Not Found: admin/Images/1.jpg
INFO - 2022-08-17 23:49:48 --> Config Class Initialized
INFO - 2022-08-17 23:49:48 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:49:48 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:49:48 --> Utf8 Class Initialized
INFO - 2022-08-17 23:49:48 --> URI Class Initialized
INFO - 2022-08-17 23:49:48 --> Config Class Initialized
INFO - 2022-08-17 23:49:48 --> Hooks Class Initialized
INFO - 2022-08-17 23:49:48 --> Config Class Initialized
INFO - 2022-08-17 23:49:48 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:49:48 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:49:48 --> Utf8 Class Initialized
INFO - 2022-08-17 23:49:48 --> URI Class Initialized
DEBUG - 2022-08-17 23:49:48 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:49:48 --> Utf8 Class Initialized
INFO - 2022-08-17 23:49:48 --> URI Class Initialized
INFO - 2022-08-17 23:49:49 --> Config Class Initialized
INFO - 2022-08-17 23:49:49 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:49:49 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:49:49 --> Utf8 Class Initialized
INFO - 2022-08-17 23:49:49 --> URI Class Initialized
INFO - 2022-08-17 23:49:49 --> Router Class Initialized
INFO - 2022-08-17 23:49:49 --> Router Class Initialized
INFO - 2022-08-17 23:49:49 --> Output Class Initialized
INFO - 2022-08-17 23:49:49 --> Security Class Initialized
INFO - 2022-08-17 23:49:49 --> Output Class Initialized
DEBUG - 2022-08-17 23:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:49:49 --> CSRF cookie sent
INFO - 2022-08-17 23:49:49 --> Security Class Initialized
DEBUG - 2022-08-17 23:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:49:49 --> CSRF cookie sent
INFO - 2022-08-17 23:49:49 --> Input Class Initialized
INFO - 2022-08-17 23:49:49 --> Input Class Initialized
INFO - 2022-08-17 23:49:49 --> Language Class Initialized
INFO - 2022-08-17 23:49:49 --> Language Class Initialized
ERROR - 2022-08-17 23:49:49 --> 404 Page Not Found: admin/Js/jquery.nicescroll.js
ERROR - 2022-08-17 23:49:49 --> 404 Page Not Found: admin/Js/classie.js
INFO - 2022-08-17 23:49:49 --> Config Class Initialized
INFO - 2022-08-17 23:49:49 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:49:49 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:49:49 --> Utf8 Class Initialized
INFO - 2022-08-17 23:49:49 --> URI Class Initialized
INFO - 2022-08-17 23:49:49 --> Router Class Initialized
INFO - 2022-08-17 23:49:49 --> Output Class Initialized
INFO - 2022-08-17 23:49:49 --> Router Class Initialized
INFO - 2022-08-17 23:49:49 --> Security Class Initialized
INFO - 2022-08-17 23:49:49 --> Output Class Initialized
DEBUG - 2022-08-17 23:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:49:49 --> CSRF cookie sent
INFO - 2022-08-17 23:49:49 --> Input Class Initialized
INFO - 2022-08-17 23:49:49 --> Security Class Initialized
INFO - 2022-08-17 23:49:49 --> Language Class Initialized
DEBUG - 2022-08-17 23:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:49:49 --> CSRF cookie sent
INFO - 2022-08-17 23:49:49 --> Input Class Initialized
INFO - 2022-08-17 23:49:49 --> Language Class Initialized
ERROR - 2022-08-17 23:49:49 --> 404 Page Not Found: admin/Js/SidebarNav.min.js
ERROR - 2022-08-17 23:49:49 --> 404 Page Not Found: admin/Images/3.jpg
INFO - 2022-08-17 23:49:49 --> Router Class Initialized
INFO - 2022-08-17 23:49:49 --> Output Class Initialized
INFO - 2022-08-17 23:49:49 --> Security Class Initialized
DEBUG - 2022-08-17 23:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:49:49 --> CSRF cookie sent
INFO - 2022-08-17 23:49:49 --> Config Class Initialized
INFO - 2022-08-17 23:49:49 --> Input Class Initialized
INFO - 2022-08-17 23:49:49 --> Hooks Class Initialized
INFO - 2022-08-17 23:49:49 --> Language Class Initialized
DEBUG - 2022-08-17 23:49:49 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:49:49 --> Utf8 Class Initialized
ERROR - 2022-08-17 23:49:49 --> 404 Page Not Found: admin/Js/bootstrap.js
INFO - 2022-08-17 23:49:49 --> URI Class Initialized
INFO - 2022-08-17 23:49:49 --> Config Class Initialized
INFO - 2022-08-17 23:49:49 --> Hooks Class Initialized
INFO - 2022-08-17 23:49:49 --> Router Class Initialized
DEBUG - 2022-08-17 23:49:49 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:49:49 --> Utf8 Class Initialized
INFO - 2022-08-17 23:49:49 --> URI Class Initialized
INFO - 2022-08-17 23:49:49 --> Router Class Initialized
INFO - 2022-08-17 23:49:49 --> Output Class Initialized
INFO - 2022-08-17 23:49:49 --> Config Class Initialized
INFO - 2022-08-17 23:49:49 --> Hooks Class Initialized
INFO - 2022-08-17 23:49:49 --> Output Class Initialized
INFO - 2022-08-17 23:49:49 --> Security Class Initialized
DEBUG - 2022-08-17 23:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:49:49 --> CSRF cookie sent
INFO - 2022-08-17 23:49:49 --> Input Class Initialized
INFO - 2022-08-17 23:49:49 --> Security Class Initialized
DEBUG - 2022-08-17 23:49:49 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:49:49 --> Language Class Initialized
INFO - 2022-08-17 23:49:49 --> Utf8 Class Initialized
DEBUG - 2022-08-17 23:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:49:49 --> URI Class Initialized
INFO - 2022-08-17 23:49:49 --> CSRF cookie sent
ERROR - 2022-08-17 23:49:49 --> 404 Page Not Found: admin/Js/scripts.js
INFO - 2022-08-17 23:49:49 --> Input Class Initialized
INFO - 2022-08-17 23:49:49 --> Language Class Initialized
ERROR - 2022-08-17 23:49:49 --> 404 Page Not Found: admin/Images/1.jpg
INFO - 2022-08-17 23:49:49 --> Config Class Initialized
INFO - 2022-08-17 23:49:49 --> Hooks Class Initialized
INFO - 2022-08-17 23:49:49 --> Router Class Initialized
INFO - 2022-08-17 23:49:49 --> Output Class Initialized
DEBUG - 2022-08-17 23:49:49 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:49:49 --> Utf8 Class Initialized
INFO - 2022-08-17 23:49:49 --> Security Class Initialized
INFO - 2022-08-17 23:49:49 --> URI Class Initialized
DEBUG - 2022-08-17 23:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:49:49 --> CSRF cookie sent
INFO - 2022-08-17 23:49:49 --> Input Class Initialized
INFO - 2022-08-17 23:49:49 --> Language Class Initialized
INFO - 2022-08-17 23:49:49 --> Router Class Initialized
ERROR - 2022-08-17 23:49:49 --> 404 Page Not Found: admin/Images/2.jpg
INFO - 2022-08-17 23:49:49 --> Output Class Initialized
INFO - 2022-08-17 23:49:49 --> Security Class Initialized
DEBUG - 2022-08-17 23:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:49:49 --> CSRF cookie sent
INFO - 2022-08-17 23:49:49 --> Input Class Initialized
INFO - 2022-08-17 23:49:49 --> Language Class Initialized
ERROR - 2022-08-17 23:49:49 --> 404 Page Not Found: admin/Images/4.jpg
INFO - 2022-08-17 23:53:07 --> Config Class Initialized
INFO - 2022-08-17 23:53:07 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:53:07 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:53:07 --> Utf8 Class Initialized
INFO - 2022-08-17 23:53:07 --> URI Class Initialized
INFO - 2022-08-17 23:53:07 --> Router Class Initialized
INFO - 2022-08-17 23:53:07 --> Output Class Initialized
INFO - 2022-08-17 23:53:07 --> Security Class Initialized
DEBUG - 2022-08-17 23:53:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:53:07 --> CSRF cookie sent
INFO - 2022-08-17 23:53:07 --> Input Class Initialized
INFO - 2022-08-17 23:53:07 --> Language Class Initialized
INFO - 2022-08-17 23:53:07 --> Language Class Initialized
INFO - 2022-08-17 23:53:07 --> Config Class Initialized
INFO - 2022-08-17 23:53:07 --> Loader Class Initialized
INFO - 2022-08-17 23:53:08 --> Helper loaded: url_helper
INFO - 2022-08-17 23:53:08 --> Helper loaded: security_helper
INFO - 2022-08-17 23:53:08 --> Helper loaded: file_helper
INFO - 2022-08-17 23:53:08 --> Helper loaded: html_helper
INFO - 2022-08-17 23:53:08 --> Helper loaded: form_helper
INFO - 2022-08-17 23:53:08 --> Helper loaded: text_helper
INFO - 2022-08-17 23:53:08 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:53:08 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:53:08 --> Helper loaded: common_helper
INFO - 2022-08-17 23:53:08 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:53:08 --> Database Driver Class Initialized
INFO - 2022-08-17 23:53:08 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:53:08 --> Email Class Initialized
INFO - 2022-08-17 23:53:08 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:53:08 --> Cart Class Initialized
INFO - 2022-08-17 23:53:08 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:53:08 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:53:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:53:08 --> Pagination Class Initialized
INFO - 2022-08-17 23:53:08 --> Config Class Initialized
INFO - 2022-08-17 23:53:08 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:53:08 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:53:08 --> Utf8 Class Initialized
INFO - 2022-08-17 23:53:08 --> URI Class Initialized
INFO - 2022-08-17 23:53:08 --> Router Class Initialized
INFO - 2022-08-17 23:53:08 --> Config Class Initialized
INFO - 2022-08-17 23:53:08 --> Output Class Initialized
INFO - 2022-08-17 23:53:08 --> Hooks Class Initialized
INFO - 2022-08-17 23:53:08 --> Security Class Initialized
DEBUG - 2022-08-17 23:53:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:53:08 --> CSRF cookie sent
INFO - 2022-08-17 23:53:08 --> Input Class Initialized
DEBUG - 2022-08-17 23:53:08 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:53:08 --> Language Class Initialized
INFO - 2022-08-17 23:53:08 --> Utf8 Class Initialized
ERROR - 2022-08-17 23:53:08 --> 404 Page Not Found: admin/Images/1.jpg
INFO - 2022-08-17 23:53:08 --> URI Class Initialized
INFO - 2022-08-17 23:53:08 --> Router Class Initialized
INFO - 2022-08-17 23:53:08 --> Output Class Initialized
INFO - 2022-08-17 23:53:08 --> Security Class Initialized
DEBUG - 2022-08-17 23:53:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:53:08 --> CSRF cookie sent
INFO - 2022-08-17 23:53:08 --> Input Class Initialized
INFO - 2022-08-17 23:53:08 --> Language Class Initialized
ERROR - 2022-08-17 23:53:08 --> 404 Page Not Found: admin/Images/4.jpg
INFO - 2022-08-17 23:53:08 --> Config Class Initialized
INFO - 2022-08-17 23:53:08 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:53:08 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:53:08 --> Utf8 Class Initialized
INFO - 2022-08-17 23:53:08 --> URI Class Initialized
INFO - 2022-08-17 23:53:08 --> Router Class Initialized
INFO - 2022-08-17 23:53:08 --> Output Class Initialized
INFO - 2022-08-17 23:53:08 --> Config Class Initialized
INFO - 2022-08-17 23:53:08 --> Hooks Class Initialized
INFO - 2022-08-17 23:53:08 --> Security Class Initialized
INFO - 2022-08-17 23:53:08 --> Config Class Initialized
INFO - 2022-08-17 23:53:08 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:53:08 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:53:08 --> Utf8 Class Initialized
DEBUG - 2022-08-17 23:53:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:53:08 --> Config Class Initialized
INFO - 2022-08-17 23:53:08 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:53:08 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:53:08 --> Utf8 Class Initialized
INFO - 2022-08-17 23:53:08 --> URI Class Initialized
INFO - 2022-08-17 23:53:08 --> CSRF cookie sent
DEBUG - 2022-08-17 23:53:08 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:53:08 --> Utf8 Class Initialized
INFO - 2022-08-17 23:53:08 --> URI Class Initialized
INFO - 2022-08-17 23:53:08 --> Input Class Initialized
INFO - 2022-08-17 23:53:08 --> URI Class Initialized
INFO - 2022-08-17 23:53:08 --> Config Class Initialized
INFO - 2022-08-17 23:53:08 --> Router Class Initialized
INFO - 2022-08-17 23:53:08 --> Language Class Initialized
INFO - 2022-08-17 23:53:08 --> Config Class Initialized
INFO - 2022-08-17 23:53:08 --> Hooks Class Initialized
INFO - 2022-08-17 23:53:08 --> Output Class Initialized
ERROR - 2022-08-17 23:53:08 --> 404 Page Not Found: /index
INFO - 2022-08-17 23:53:08 --> Hooks Class Initialized
INFO - 2022-08-17 23:53:08 --> Router Class Initialized
INFO - 2022-08-17 23:53:08 --> Security Class Initialized
DEBUG - 2022-08-17 23:53:08 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:53:08 --> Utf8 Class Initialized
DEBUG - 2022-08-17 23:53:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:53:08 --> Output Class Initialized
INFO - 2022-08-17 23:53:08 --> CSRF cookie sent
INFO - 2022-08-17 23:53:08 --> Input Class Initialized
INFO - 2022-08-17 23:53:08 --> URI Class Initialized
INFO - 2022-08-17 23:53:08 --> Language Class Initialized
INFO - 2022-08-17 23:53:08 --> Security Class Initialized
DEBUG - 2022-08-17 23:53:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-08-17 23:53:08 --> 404 Page Not Found: /index
INFO - 2022-08-17 23:53:08 --> CSRF cookie sent
INFO - 2022-08-17 23:53:08 --> Input Class Initialized
INFO - 2022-08-17 23:53:08 --> Language Class Initialized
ERROR - 2022-08-17 23:53:08 --> 404 Page Not Found: /index
DEBUG - 2022-08-17 23:53:08 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:53:08 --> Utf8 Class Initialized
INFO - 2022-08-17 23:53:08 --> Router Class Initialized
INFO - 2022-08-17 23:53:08 --> URI Class Initialized
INFO - 2022-08-17 23:53:08 --> Router Class Initialized
INFO - 2022-08-17 23:53:08 --> Output Class Initialized
INFO - 2022-08-17 23:53:08 --> Output Class Initialized
INFO - 2022-08-17 23:53:08 --> Security Class Initialized
INFO - 2022-08-17 23:53:08 --> Security Class Initialized
DEBUG - 2022-08-17 23:53:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:53:08 --> CSRF cookie sent
INFO - 2022-08-17 23:53:08 --> Input Class Initialized
DEBUG - 2022-08-17 23:53:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:53:08 --> CSRF cookie sent
INFO - 2022-08-17 23:53:08 --> Language Class Initialized
INFO - 2022-08-17 23:53:08 --> Input Class Initialized
INFO - 2022-08-17 23:53:08 --> Language Class Initialized
ERROR - 2022-08-17 23:53:08 --> 404 Page Not Found: admin/Images/3.jpg
ERROR - 2022-08-17 23:53:08 --> 404 Page Not Found: /index
INFO - 2022-08-17 23:53:08 --> Router Class Initialized
INFO - 2022-08-17 23:53:08 --> Config Class Initialized
INFO - 2022-08-17 23:53:08 --> Hooks Class Initialized
INFO - 2022-08-17 23:53:08 --> Config Class Initialized
INFO - 2022-08-17 23:53:08 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:53:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-17 23:53:08 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:53:08 --> Utf8 Class Initialized
INFO - 2022-08-17 23:53:08 --> Utf8 Class Initialized
INFO - 2022-08-17 23:53:08 --> URI Class Initialized
INFO - 2022-08-17 23:53:08 --> URI Class Initialized
INFO - 2022-08-17 23:53:08 --> Output Class Initialized
INFO - 2022-08-17 23:53:08 --> Router Class Initialized
INFO - 2022-08-17 23:53:08 --> Router Class Initialized
INFO - 2022-08-17 23:53:08 --> Security Class Initialized
INFO - 2022-08-17 23:53:08 --> Output Class Initialized
INFO - 2022-08-17 23:53:08 --> Output Class Initialized
DEBUG - 2022-08-17 23:53:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:53:08 --> Security Class Initialized
INFO - 2022-08-17 23:53:08 --> Security Class Initialized
INFO - 2022-08-17 23:53:08 --> CSRF cookie sent
DEBUG - 2022-08-17 23:53:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-17 23:53:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:53:08 --> Input Class Initialized
INFO - 2022-08-17 23:53:08 --> CSRF cookie sent
INFO - 2022-08-17 23:53:08 --> CSRF cookie sent
INFO - 2022-08-17 23:53:08 --> Input Class Initialized
INFO - 2022-08-17 23:53:08 --> Input Class Initialized
INFO - 2022-08-17 23:53:08 --> Language Class Initialized
INFO - 2022-08-17 23:53:08 --> Language Class Initialized
INFO - 2022-08-17 23:53:08 --> Language Class Initialized
ERROR - 2022-08-17 23:53:08 --> 404 Page Not Found: /index
ERROR - 2022-08-17 23:53:08 --> 404 Page Not Found: admin/Images/1.jpg
ERROR - 2022-08-17 23:53:08 --> 404 Page Not Found: admin/Images/2.jpg
INFO - 2022-08-17 23:53:08 --> Config Class Initialized
INFO - 2022-08-17 23:53:08 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:53:08 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:53:08 --> Utf8 Class Initialized
INFO - 2022-08-17 23:53:08 --> URI Class Initialized
INFO - 2022-08-17 23:53:08 --> Router Class Initialized
INFO - 2022-08-17 23:53:08 --> Output Class Initialized
INFO - 2022-08-17 23:53:08 --> Security Class Initialized
DEBUG - 2022-08-17 23:53:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:53:08 --> CSRF cookie sent
INFO - 2022-08-17 23:53:08 --> Input Class Initialized
INFO - 2022-08-17 23:53:08 --> Language Class Initialized
ERROR - 2022-08-17 23:53:08 --> 404 Page Not Found: admin/Images/4.jpg
INFO - 2022-08-17 23:56:57 --> Config Class Initialized
INFO - 2022-08-17 23:56:57 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:56:57 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:56:57 --> Utf8 Class Initialized
INFO - 2022-08-17 23:56:57 --> URI Class Initialized
INFO - 2022-08-17 23:56:57 --> Router Class Initialized
INFO - 2022-08-17 23:56:57 --> Output Class Initialized
INFO - 2022-08-17 23:56:57 --> Security Class Initialized
DEBUG - 2022-08-17 23:56:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:56:57 --> CSRF cookie sent
INFO - 2022-08-17 23:56:58 --> Input Class Initialized
INFO - 2022-08-17 23:56:58 --> Language Class Initialized
INFO - 2022-08-17 23:56:58 --> Language Class Initialized
INFO - 2022-08-17 23:56:58 --> Config Class Initialized
INFO - 2022-08-17 23:56:58 --> Loader Class Initialized
INFO - 2022-08-17 23:56:58 --> Helper loaded: url_helper
INFO - 2022-08-17 23:56:58 --> Helper loaded: security_helper
INFO - 2022-08-17 23:56:58 --> Helper loaded: file_helper
INFO - 2022-08-17 23:56:58 --> Helper loaded: html_helper
INFO - 2022-08-17 23:56:58 --> Helper loaded: form_helper
INFO - 2022-08-17 23:56:58 --> Helper loaded: text_helper
INFO - 2022-08-17 23:56:58 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:56:58 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:56:58 --> Helper loaded: common_helper
INFO - 2022-08-17 23:56:58 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:56:58 --> Database Driver Class Initialized
INFO - 2022-08-17 23:56:58 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:56:58 --> Email Class Initialized
INFO - 2022-08-17 23:56:58 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:56:58 --> Cart Class Initialized
INFO - 2022-08-17 23:56:58 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:56:58 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:56:58 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:56:58 --> Pagination Class Initialized
INFO - 2022-08-17 23:57:52 --> Config Class Initialized
INFO - 2022-08-17 23:57:52 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:57:52 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:57:52 --> Utf8 Class Initialized
INFO - 2022-08-17 23:57:52 --> URI Class Initialized
INFO - 2022-08-17 23:57:52 --> Router Class Initialized
INFO - 2022-08-17 23:57:52 --> Output Class Initialized
INFO - 2022-08-17 23:57:52 --> Security Class Initialized
DEBUG - 2022-08-17 23:57:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:57:52 --> CSRF cookie sent
INFO - 2022-08-17 23:57:52 --> Input Class Initialized
INFO - 2022-08-17 23:57:52 --> Language Class Initialized
INFO - 2022-08-17 23:57:52 --> Language Class Initialized
INFO - 2022-08-17 23:57:52 --> Config Class Initialized
INFO - 2022-08-17 23:57:52 --> Loader Class Initialized
INFO - 2022-08-17 23:57:52 --> Helper loaded: url_helper
INFO - 2022-08-17 23:57:52 --> Helper loaded: security_helper
INFO - 2022-08-17 23:57:52 --> Helper loaded: file_helper
INFO - 2022-08-17 23:57:52 --> Helper loaded: html_helper
INFO - 2022-08-17 23:57:52 --> Helper loaded: form_helper
INFO - 2022-08-17 23:57:52 --> Helper loaded: text_helper
INFO - 2022-08-17 23:57:52 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:57:52 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:57:52 --> Helper loaded: common_helper
INFO - 2022-08-17 23:57:52 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:57:52 --> Database Driver Class Initialized
INFO - 2022-08-17 23:57:52 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:57:52 --> Email Class Initialized
INFO - 2022-08-17 23:57:52 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:57:52 --> Cart Class Initialized
INFO - 2022-08-17 23:57:52 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:57:52 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:57:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:57:52 --> Pagination Class Initialized
INFO - 2022-08-17 23:58:24 --> Config Class Initialized
INFO - 2022-08-17 23:58:24 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:58:24 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:58:24 --> Utf8 Class Initialized
INFO - 2022-08-17 23:58:24 --> URI Class Initialized
INFO - 2022-08-17 23:58:24 --> Router Class Initialized
INFO - 2022-08-17 23:58:24 --> Output Class Initialized
INFO - 2022-08-17 23:58:24 --> Security Class Initialized
DEBUG - 2022-08-17 23:58:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:58:24 --> CSRF cookie sent
INFO - 2022-08-17 23:58:24 --> Input Class Initialized
INFO - 2022-08-17 23:58:24 --> Language Class Initialized
INFO - 2022-08-17 23:58:24 --> Language Class Initialized
INFO - 2022-08-17 23:58:24 --> Config Class Initialized
INFO - 2022-08-17 23:58:24 --> Loader Class Initialized
INFO - 2022-08-17 23:58:24 --> Helper loaded: url_helper
INFO - 2022-08-17 23:58:24 --> Helper loaded: security_helper
INFO - 2022-08-17 23:58:24 --> Helper loaded: file_helper
INFO - 2022-08-17 23:58:24 --> Helper loaded: html_helper
INFO - 2022-08-17 23:58:24 --> Helper loaded: form_helper
INFO - 2022-08-17 23:58:24 --> Helper loaded: text_helper
INFO - 2022-08-17 23:58:24 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:58:24 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:58:24 --> Helper loaded: common_helper
INFO - 2022-08-17 23:58:24 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:58:24 --> Database Driver Class Initialized
INFO - 2022-08-17 23:58:24 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:58:24 --> Email Class Initialized
INFO - 2022-08-17 23:58:24 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:58:24 --> Cart Class Initialized
INFO - 2022-08-17 23:58:24 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:58:24 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:58:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:58:24 --> Pagination Class Initialized
INFO - 2022-08-17 23:59:00 --> Config Class Initialized
INFO - 2022-08-17 23:59:00 --> Hooks Class Initialized
DEBUG - 2022-08-17 23:59:00 --> UTF-8 Support Enabled
INFO - 2022-08-17 23:59:00 --> Utf8 Class Initialized
INFO - 2022-08-17 23:59:00 --> URI Class Initialized
INFO - 2022-08-17 23:59:00 --> Router Class Initialized
INFO - 2022-08-17 23:59:00 --> Output Class Initialized
INFO - 2022-08-17 23:59:00 --> Security Class Initialized
DEBUG - 2022-08-17 23:59:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-08-17 23:59:00 --> CSRF cookie sent
INFO - 2022-08-17 23:59:00 --> Input Class Initialized
INFO - 2022-08-17 23:59:00 --> Language Class Initialized
INFO - 2022-08-17 23:59:00 --> Language Class Initialized
INFO - 2022-08-17 23:59:00 --> Config Class Initialized
INFO - 2022-08-17 23:59:00 --> Loader Class Initialized
INFO - 2022-08-17 23:59:01 --> Helper loaded: url_helper
INFO - 2022-08-17 23:59:01 --> Helper loaded: security_helper
INFO - 2022-08-17 23:59:01 --> Helper loaded: file_helper
INFO - 2022-08-17 23:59:01 --> Helper loaded: html_helper
INFO - 2022-08-17 23:59:01 --> Helper loaded: form_helper
INFO - 2022-08-17 23:59:01 --> Helper loaded: text_helper
INFO - 2022-08-17 23:59:01 --> Helper loaded: lang_helper
INFO - 2022-08-17 23:59:01 --> Helper loaded: directory_helper
INFO - 2022-08-17 23:59:01 --> Helper loaded: common_helper
INFO - 2022-08-17 23:59:01 --> Helper loaded: dompdf_helper
INFO - 2022-08-17 23:59:01 --> Database Driver Class Initialized
INFO - 2022-08-17 23:59:01 --> Helper loaded: sslc_helper
INFO - 2022-08-17 23:59:01 --> Email Class Initialized
INFO - 2022-08-17 23:59:01 --> Session: Class initialized using 'files' driver.
INFO - 2022-08-17 23:59:01 --> Cart Class Initialized
INFO - 2022-08-17 23:59:01 --> Form Validation Class Initialized
DEBUG - 2022-08-17 23:59:01 --> Config file loaded: C:\xampp\htdocs\sop\application\config/paypallib_config.php
INFO - 2022-08-17 23:59:01 --> Language file loaded: language/english/pagination_lang.php
INFO - 2022-08-17 23:59:01 --> Pagination Class Initialized
