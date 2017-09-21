<?php
require 'vendor/autoload.php';
$date = date('m/d/Y h:i:s a', time());
$client = new Zelenin\Telegram\Bot\Api('430264617:AAHZFISWs-joVLDofVvHzsrIPEe1qc-67aM'); // Set your access token
$url = 'tranquil-refuge-60512.herokuapp.com/'; // URL RSS feed
$update = json_decode(file_get_contents('php://input'));	
try {
    date_default_timezone_set('Spain/Madrid');
    if($update->message->text == '/wow')
    {
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Fantastic Baby 🎵"				
	]);	    
    }
      
    else
    {
      if(preg_match("/.*wow.*/", $update->message->text) || preg_match("/.*Wow.*/", $update->message->text) || 
	 preg_match("/.*WOW.*/", $update->message->text))
      		{
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
			$response = $client->sendMessage([
					'chat_id' => $update->message->chat->id,
					'text' => "Fantastic Baby 🎵"				
				]);	    
      		}
    }
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {
    //echo error message ot log it
    //echo $e->getMessage();
}
?>
