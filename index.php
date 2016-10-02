<?php
/*
* This file is part of GeeksWeb Bot (GWB).
*
* GeeksWeb Bot (GWB) is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License version 3
* as published by the Free Software Foundation.
* 
* GeeksWeb Bot (GWB) is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.  <http://www.gnu.org/licenses/>
*
* Author(s):
*
* © 2015 Kasra Madadipouya <kasra@madadipouya.com>
*
*/
require 'vendor/autoload.php';

$date = date('m/d/Y h:i:s a', time());
$client = new Zelenin\Telegram\Bot\Api('297927337:AAHXURwcz2EK8rFMsssTn90t2iNLGTtJLMw'); // Set your access token
$url = 'koreanbot.herokuapp.com/'; // URL RSS feed
$update = json_decode(file_get_contents('php://input'));	
try {
    date_default_timezone_set('Spain/Madrid');
    if($update->message->text == '/email')
    {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	
    	$response = $client->sendPhoto([
        	'chat_id' => $update->message->chat->id,
        	//'photo' => "JAJAJAJA.jpg"
		'photo' => "AgADBAADn7sxG_6P5AGdxJEF4c87XE22ZxkABKduBRzVdIFhIooAAgI"
     	]);
    }
    else if($update->message->text == '/help')
    {
	   if(is_null($current)){
	    $current = pepinillos;    
	   }
	    // poner el contenido de un fichero en una cadena
	$nombre_fichero = "a.txt";
	$gestor = fopen($nombre_fichero, "r");
	$contenido = fread($gestor, filesize($nombre_fichero));
	fclose($gestor);
	 if($contenido != date("l")){
		$fp = fopen('a.txt', 'w');
		fwrite($fp, date("l"));
		fclose($fp);	 
		 
		 $num = rand(1,2);
		 if($num == 1){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Lee Joon Ki"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADq7sxG_6P5AGVqlD1XTw_MRPCWRkABPQEX_sCNQtgLCACAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Actor, Modelo y Cantante"
    			]);
			}
		 if($num == 2){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Jungkook"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADrLsxG_6P5AHIlP5MdgzvMEX9aBkABI7hfZdxW7PLFpgBAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "BTS"
    			]);
			}	 
	 
		 }
    }
    else if($update->message->text == '/latest')
    {
    		Feed::$cacheDir 	= __DIR__ . '/cache';
			Feed::$cacheExpire 	= '5 hours';
			$rss 		= Feed::loadRss($url);
			$items 		= $rss->item;
			$lastitem 	= $items[0];
			$lastlink 	= $lastitem->link;
			$lasttitle 	= $lastitem->title;
			$message = $lasttitle . " \n ". $lastlink;
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
			$response = $client->sendMessage([
					'chat_id' => $update->message->chat->id,
					'text' => $message
				]);
    }
    else
    {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $update->message->photo[2]->file_id
    		]);
    }
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {
    //echo error message ot log it
    //echo $e->getMessage();
}
