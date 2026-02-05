-- -- Fix for TJNotifications template saving issues
-- -- Version 3.1.1

-- -- Fix missing user_id field in user_exclusions table if it doesn't exist
-- SET @sql = (SELECT IF(
--     (SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS 
--      WHERE table_name = '#__tj_notification_user_exclusions' 
--      AND column_name = 'user_id' 
--      AND table_schema = DATABASE()) = 0,
--     'ALTER TABLE `#__tj_notification_user_exclusions` ADD COLUMN `user_id` int(11) NOT NULL DEFAULT 0 FIRST',
--     'SELECT "user_id column already exists"'
-- ));
-- PREPARE stmt FROM @sql;
-- EXECUTE stmt;
-- DEALLOCATE PREPARE stmt;

-- -- Ensure proper indexes exist
-- ALTER TABLE `#__tj_notification_user_exclusions` 
-- ADD INDEX IF NOT EXISTS `user_id_idx` (`user_id`);

-- -- Fix any potential NULL values in critical fields
-- UPDATE `#__tj_notification_template_configs` 
-- SET `state` = 0 WHERE `state` IS NULL;

-- UPDATE `#__tj_notification_template_configs` 
-- SET `is_override` = 0 WHERE `is_override` IS NULL;

-- UPDATE `#__tj_notification_template_configs` 
-- SET `use_global_webhook_url` = 1 WHERE `use_global_webhook_url` IS NULL;