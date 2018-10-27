<?php
require_once __DIR__ . '/../_includes/init.inc.php';
require_once GJC_DIR_INC . '/config.inc.php';

require_once GJC_DIR_ROOT . '/vendor/autoload.php';

$from_name = "From Name";
$from_address = "from@example.com";
$reply_name = "Reply Name";
$reply_address = "reply@example.com";
$recipients = array('address1@example.com', 'address2@example.com');
$subject = "Example Subject";
$message_html = 'This is the HTML message.';

$mail = new GJClasses\MailPhp();
$message = $mail->send($from_name, $from_address, $reply_name, $reply_address, $recipients, $subject, $message_html);

echo $message;
