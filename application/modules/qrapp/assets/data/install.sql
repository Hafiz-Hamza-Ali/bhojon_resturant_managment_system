INSERT INTO `language` (`id`, `phrase`, `english`) VALUES (NULL, 'qrapp', 'QR App'), (NULL, 'qr_order', 'QR Order List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES (NULL, 'tableqr_code', 'All Table QR');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES (NULL, 'qr_payment', 'QR Payment Setting');

INSERT INTO sec_menu_item (menu_title, page_url, module, parent_menu, is_report, createby, createdate) VALUES ('qrapp', 'qrmodule', 'qrapp', '0', '0', '3', '2020-12-03 00:00:00');
INSERT INTO sec_menu_item (menu_title, page_url, module, parent_menu, is_report, createby, createdate) SELECT 'qr_order', 'index', 'qrapp', sec_menu_item.menu_id, '0', '3', '2020-12-03 00:00:00' FROM sec_menu_item WHERE sec_menu_item.menu_title = 'qrapp';
INSERT INTO sec_menu_item (menu_title, page_url, module, parent_menu, is_report, createby, createdate) SELECT 'tableqr_code', 'tableqrcode', 'qrapp', sec_menu_item.menu_id, '0', '3', '2020-12-03 00:00:00' FROM sec_menu_item WHERE sec_menu_item.menu_title = 'qrapp';
INSERT INTO sec_menu_item (menu_title, page_url, module, parent_menu, is_report, createby, createdate) SELECT 'qr_payment', 'qrpaymentsetting', 'qrapp', sec_menu_item.menu_id, '0', '3', '2020-12-03 00:00:00' FROM sec_menu_item WHERE sec_menu_item.menu_title = 'qrapp';

