<?php
require_once('./vendor/autoload.php');

use onesignal\client\api\DefaultApi;
use onesignal\client\Configuration;
use onesignal\client\model\GetNotificationRequestBody;
use onesignal\client\model\Notification;
use onesignal\client\model\StringMap;
use onesignal\client\model\Player;
use onesignal\client\model\UpdatePlayerTagsRequestBody;
use onesignal\client\model\ExportPlayersRequestBody;
use onesignal\client\model\Segment;
use onesignal\client\model\FilterExpressions;
use PHPUnit\Framework\TestCase;
use GuzzleHttp;

// YjIyMmM2MDktNjE4MC00ZTIwLTg4YTAtZmE5MGUzMmRjMDQ4

const APP_ID = '4f9eb60c-7906-40dd-8c7f-77fc07b39d6d';
const APP_KEY_TOKEN = 'YjIyMmM2MDktNjE4MC00ZTIwLTg4YTAtZmE5MGUzMmRjMDQ4';
const USER_KEY_TOKEN = 'Yzg0MDRkYzktNmUxOC00MDdjLWE5NzItMmRlNzZhMGY5N2Mw';



$config = Configuration::getDefaultConfiguration()
    ->setAppKeyToken(APP_KEY_TOKEN)
    ->setUserKeyToken(USER_KEY_TOKEN);

$apiInstance = new DefaultApi(
    new GuzzleHttp\Client(),
    $config
);
function createNotification($enContent): Notification {
    $content = new StringMap();
    $content->setEn($enContent);

    $notification = new Notification();
    $notification->setAppId(APP_ID);
    $notification->setContents($content);
    $notification->setIncludedSegments(['Subscribed Users']);

    return $notification;
}
$notification = createNotification('PHP Test notification');

$result = $apiInstance->createNotification($notification);
print_r($result);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>guru ji tution 😍</title>
</head>
<body>
    
    
</body>
</html>