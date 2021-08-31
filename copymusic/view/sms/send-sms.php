<?php
require_once "vendor/autoload.php";
$basic  = new \Nexmo\Client\Credentials\Basic('fc173bd8', 'ncsYewP03wy8oyZq');
$client = new \Nexmo\Client($basic);


try {
    $message = $client->message()->send([
        'to' => 21652272411,
        'from' => 'AcmeInc',
        'text' => 'vous avez une nouvelle reclamation '
    ]);
    $response = $message->getResponseData();

    if($response['messages'][0]['status'] == 0) {
        echo "The message was sent successfully\n";
    } else {
        echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
    }
} catch (Exception $e) {
    echo "The message was not sent. Error: " . $e->getMessage() . "\n";
}
?>