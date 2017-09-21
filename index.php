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
    if($update->message->text == '/open7')
    {
	$fp = fopen('a.txt', 'w');
	fwrite($fp, "51");
	fclose($fp);
    }
      
	
	if($update->message->text == '/cm2')
    {
	$nombre = "c.txt";
	$gestore = fopen($nombre, "r");
	$contenid = fread($gestore, filesize($nombre));
	fclose($gestore);
	$response = $client->sendMessage([
        	'chat_id' => $update->message->chat->id,
		'text' => $update->message->chat->id
     	]);
    }	
	      else if($update->message->text == '/cm3')
    {
	$response = $client->sendMessage([
        	'chat_id' => $update->message->chat->id,
		'text' => $update->message->chat->id
     	]);
    }	
	      else if($update->message->text == '/cm52321')
    {
		$response = $client->sendPhoto([
 		'chat_id' => "-125893585",
 		'photo' => "AgADBAADoKoxGw6qoVMFy56u06YXwRg8qRkABKWgSQ0NLhp0dAEEAAEC"				
     	]);
    }	
	
    else if($update->message->text == '/bisarro3')
    {
	$nombre = "ac.txt";
	$gestore = fopen($nombre, "r");
	$contenid = fread($gestore, filesize($nombre));
	fclose($gestore);
	    	$nombre1 = "a.txt";
    	$response = $client->sendMessage([
        	'chat_id' => $update->message->chat->id,
		'text' => $contenid
     	]);
    }
    else if($update->message->text == '/latggdshsgsdgasgaest')
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
	    
	    
	    	 if(preg_match("/.*[oO][dD][iI][oO].*[bB][Oo][bB][bB][yY].*/", $update->message->text)){
			$roll = rand(1,2);
			 if($roll == 1){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
 			$response = $client->sendMessage([
 					'chat_id' => $update->message->chat->id,
 					'text' => "Sabeis quién también odia a Bobby??"				
 				]);	   
 				 	$response = $client->sendPhoto([
 					'chat_id' => $update->message->chat->id,
 					'photo' => "AgADBAADqMIxG08zPwPQPt5Bg29JyIEZYBkABNqdqB2sHhgI8DkAAgI"				
 			]);
			 }
			 else{
			 		$response = $client->sendPhoto([
 					'chat_id' => $update->message->chat->id,
 					'photo' => "AgADBAADqcIxG08zPwOTXRrdp7E5aSzOZRkABE7xmbeWDpl72AEAAgI"				
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

    }
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {
    //echo error message ot log it
    //echo $e->getMessage();
}
