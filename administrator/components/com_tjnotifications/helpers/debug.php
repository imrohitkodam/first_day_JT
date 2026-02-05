<?php
// /**
//  * @package     Tjnotifications
//  * @subpackage  com_tjnotifications
//  *
//  * @copyright   Copyright (C) 2009 - 2020 Techjoomla. All rights reserved.
//  * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
//  */

// defined('_JEXEC') or die;

// use Joomla\CMS\Factory;
// use Joomla\CMS\Log\Log;

// /**
//  * Debug helper for TJNotifications
//  *
//  * @since  3.1.1
//  */
// class TjnotificationsHelperDebug
// {
//     /**
//      * Log debug information
//      *
//      * @param   string  $message  Debug message
//      * @param   array   $data     Additional data to log
//      *
//      * @return  void
//      *
//      * @since   3.1.1
//      */
//     public static function log($message, $data = null)
//     {
//         $app = Factory::getApplication();
        
//         // Only log if debug is enabled
//         if ($app->get('debug')) {
//             $logMessage = '[TJNotifications Debug] ' . $message;
            
//             if ($data !== null) {
//                 $logMessage .= ' | Data: ' . json_encode($data);
//             }
            
//             Log::add($logMessage, Log::DEBUG, 'tjnotifications');
//         }
//     }

//     /**
//      * Log save operation details
//      *
//      * @param   array   $data        Form data being saved
//      * @param   string  $operation   Operation type (new/edit)
//      *
//      * @return  void
//      *
//      * @since   3.1.1
//      */
//     public static function logSaveOperation($data, $operation = 'unknown')
//     {
//         self::log("Save operation: {$operation}", [
//             'template_id' => $data['id'] ?? 'new',
//             'client' => $data['client'] ?? 'unknown',
//             'key' => $data['key'] ?? 'unknown',
//             'title' => $data['title'] ?? 'unknown',
//             'backends' => array_keys(array_filter($data, function($key) {
//                 return in_array($key, ['email', 'sms', 'push', 'whatsapp', 'webhook']);
//             }, ARRAY_FILTER_USE_KEY))
//         ]);
//     }

//     /**
//      * Log database errors
//      *
//      * @param   string  $operation   Database operation
//      * @param   string  $error       Error message
//      *
//      * @return  void
//      *
//      * @since   3.1.1
//      */
//     public static function logDatabaseError($operation, $error)
//     {
//         self::log("Database error in {$operation}: {$error}");
//     }
//}
?>