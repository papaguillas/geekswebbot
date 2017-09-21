<?php
require 'vendor/autoload.php';
$date = date('m/d/Y h:i:s a', time());
$client = new Zelenin\Telegram\Bot\Api('430264617:AAHZFISWs-joVLDofVvHzsrIPEe1qc-67aM'); // Set your access token
$url = 'tranquil-refuge-60512.herokuapp.com/'; // URL RSS feed
$update = json_decode(file_get_contents('php://input'));	
try {
    date_default_timezone_set('Spain/Madrid');
    if($update->message->text == '/open7')
    {
	$fp = fopen('a.txt', 'w');
	fwrite($fp, "51");
	fclose($fp);
    }
      
    else
    {

	    	   if(preg_match("/.*wow.*/", $update->message->text) || preg_match("/.*Wow.*/", $update->message->text) || preg_match("/.*WOW.*/", $update->message->text)){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
			$response = $client->sendMessage([
					'chat_id' => $update->message->chat->id,
					'text' => "Fantastic Baby 🎵"				
				]);	    
		 }
	    
	    	 if(preg_match("/.*buenas noches.*/", $update->message->text) || preg_match("/.*Buenas noches.*/", $update->message->text) || preg_match("/.*Buenas Noches.*/", $update->message->text)){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
			$response = $client->sendMessage([
					'chat_id' => $update->message->chat->id,
					'text' => "buenas noches, sueña con tus bias <3"				
				]);	    
		 }
	    
	    	  if(preg_match("/.*[gG][rR][aA][cC][iI][aA][sS].*[bB][oO][tT].*/", $update->message->text)){
			
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
			$rann = rand(1,6);
			if($rann == 1 || $rann == 2){
			$response = $client->sendMessage([
					'chat_id' => $update->message->chat->id,
					'text' => "de nada 👉😉👉"				
				]);
			}
			if($rann == 3 || $rann == 4){
						$response = $client->sendMessage([
					'chat_id' => $update->message->chat->id,
					'text' => "천만에요!"				
				]);
			}
			if($rann == 5 || $rann == 6){
						$response = $client->sendMessage([
					'chat_id' => $update->message->chat->id,
					'text' => "Las gracias a nuestro dios G Dragon, no a mi."				
				]);
			}
		 }
	    
	    	 if(preg_match("/.*[aA]bogado.*/", $update->message->text)){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
			$response = $client->sendMessage([
					'chat_id' => $update->message->chat->id,
					'text' => "el que tengo aqui colgado"				
				]);	    
		 }
	}
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {
    //echo error message ot log it
    //echo $e->getMessage();
}
