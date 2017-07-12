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
	      else if($update->message->text == '/cm5')
    {
	$response = $client->sendMessage([
        	'chat_id' => "-144683816",
		'text' => "Dejad de intentar que diga cosas graciosas, no soy un payaso, solo un kbot :("
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
	    
	   else if($update->message->text == '/patricio2000'){
		$update->message->chat->id = "-125893585";
		$num = rand(1,139);
		$fb = fopen('b.txt', 'a');
		fwrite($fb, $num);
		fwrite($fb, " ");
		fclose($fb);	 
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
		 if($num == 3){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Kim Hyun Joong"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADrbsxG_6P5AEoDxoDavDoecFLXhkABFM7jhwoqyrF8B4CAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "SS501 (inactivo :(  )"
    			]);
			}	 
		 if($num == 4){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Arin"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADrrsxG_6P5AHegPks0U8HVOKVXhkABGMY50rOhyiwxR8CAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "OH MY GIRL"
    			]);
			}	 
		 if($num == 5){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Black J (Bong Jun)"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADr7sxG_6P5AEX5yST74e4EcpIaRkABAabiS2IWZpUxIUAAgI"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "N.SONIC"
    			]);
			}	 
		 if($num == 6){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Ahn Jung Yoon"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADsLsxG_6P5AFuyaldeiS-cFd7XhkABLRnywzS2NMI_R8CAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "I-13 (Disuelto :(  )"
    			]);
			}	 
		 if($num == 7){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Lee Min Ho"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADsbsxG_6P5AFrJeZ75gsVs0fkZRkABNv4w3pttJ_7l5MBAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Este tio hace de todo. Para mas info http://es.drama.wikia.com/wiki/Lee_Min_Ho"
    			]);
			}	 
		 if($num == 8){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Bobby"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADsrsxG_6P5AHArxwOP6ojBcnrZxkABHrxSYsVfngS1JUBAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "iKON"
    			]);
			}	 
		 if($num == 9){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "PSY"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADs7sxG_6P5AFDu886EUdgjHhtXhkABKfeATnOON--gh8CAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Solista"
    			]);
			}	 
		 if($num == 10){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Choi Min Ho"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADtLsxG_6P5AEFYGMjjLW5vTO3XhkABIrBw0DbWnTl_x0CAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "SHINee"
    			]);
			}	 
		 if($num == 11){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Mark Tuan"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADtrsxG_6P5AEz2Nh0HqI5cyeKZxkABB1024wPwaG1z4QAAgI"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "GOT7"
    			]);
			}	 
		 if($num == 12){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "JB"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADuLsxG_6P5AHGZ63pJJ7nElr9WRkABIgojzSzq7bfaB8CAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "GOT7"
    			]);
			}	 
		 if($num == 13){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Jackson"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADubsxG_6P5AHrH3Hl8By7aXcLZhkABEMtKAomH1i98psBAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "GOT7"
    			]);
			}	 
		 if($num == 14){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Young Jae"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADursxG_6P5AEAAXBayU-wS_LLLWYZAATcSknrJffzZ4eaAQABAg"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "GOT7"
    			]);
			}	 
		 if($num == 15){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "BamBam"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADu7sxG_6P5AFxjBQktSHVXBF5ZxkABDyaNEZt71-qe5MBAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "GOT7"
    			]);
			}	 
		 if($num == 16){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Kim Yu Gyeom"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADvLsxG_6P5AGbZ1yYvyIyJpIJWhkABIfeIXmQ1Z-UrB4CAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "GOT7"
    			]);
			}	 
		 if($num == 17){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Xiu Min"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADvbsxG_6P5AGPtupoluAvXznaZRkABMqXteHpgEAQFJwBAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "EXO"
    			]);
			}	 
		 if($num == 18){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Suho"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADvrsxG_6P5AEFhU5GzJSEglVrXhkABKeA2nsvj1B2ah8CAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "EXO"
    			]);
			}	 
		 if($num == 19){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Lay (como las patatas ajaj xd)"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADv7sxG_6P5AFjq5rtdNx1U6kOZhkABEhiuzk1PdnhipQBAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "EXO"
    			]);
			}	 
		 if($num == 20){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Henry"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADwLsxG_6P5AERJZzfbbBxj4j8ZRkABO59_5si_BuNx5kBAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Super Junior"
    			]);
			}	 
		 if($num == 21){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Zhuo Mi"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADwbsxG_6P5AFJQdAynJsiwxqSWBkABCCN0e2pZbiVYxwCAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Super Junior"
    			]);
			}	 
		 if($num == 22){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Cho Kyu Hyun"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADwrsxG_6P5AF5bFHm1geW5BZYaRkABDSOa-9PU9V5TIUAAgI"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Super Junior"
    			]);
			}	 
		 if($num == 23){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "S.Coups"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADxbsxG_6P5AEJ3X443IrOh9B8ZxkABPEu_pjoVaaqhpUBAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Seventeen"
    			]);
			}	 
		 if($num == 24){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Jeong Han"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADx7sxG_6P5AFT44T6o22fKtV_ZxkABN3TuJvydcL57oQAAgI"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Seventeen"
    			]);
			}	 
		 if($num == 25){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Joshua"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADyLsxG_6P5AGzX0xnGjbrNZwMZhkABNkJmg5mMr0YYZIBAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Seventeen"
    			]);
			}	 
		 if($num == 26){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Jun"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADy7sxG_6P5AHuK6_Bd4hRL5-RWBkABGjdGWQh9vAAAXkdAgABAg"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Seventeen"
    			]);
			}	 
		 if($num == 27){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Won Woo"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADzbsxG_6P5AEoZDvnoc--aBMPYBkABNRg2CgXXutLSiACAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Seventeen"
    			]);
			}	 
		 if($num == 28){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "The8"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADzrsxG_6P5AFtiYAe57UgGjikZxkABItFpGFiBGhlbpUBAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Seventeen"
    			]);
			}	 
		 if($num == 29){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Vernom"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAADz7sxG_6P5AFim01WW5u_xDo7aRkABAZKHKJ8SD6NF4cAAgI"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Seventeen"
    			]);
			}	 
		 if($num == 30){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Irene"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAAD0LsxG_6P5AEg6RGc-GzJtCX8aBkABMI6m-tyquo0OpcBAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Red Velvet"
    			]);
			}
		 if($num == 31){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Seul Gi"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAAD0bsxG_6P5AG2IUx3S--zTcaCZxkABEx1oBDD0T63C5oBAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Red Velvet"
    			]);
			}
		 if($num == 32){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Wendy"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAAD0rsxG_6P5AHX1EAOlKoppKmyXxkABDH28pS8vMaxsB8CAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Red Velvet"
    			]);
			}
		 if($num == 33){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Joy"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAAD07sxG_6P5AHSSJQcmDHqfEM7XhkABPyrBVxapJouMxsCAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Red Velvet"
    			]);
			}
		 if($num == 34){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Yeri"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAAD1LsxG_6P5AHn3d_n9QVMTVi0XxkABF_SzBU7vb-mYhoCAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Red Velvet"
    			]);
			}	
		 	if($num == 35){
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "El idol del dia es..."
    			]);
    			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "Mir"
    			]);
			$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => "AgADBAAD0cExG08zPwOq5bfDEaZiBPZrXhkABKrNS9RAW7ncViECAAEC"
     			]);
			$response = $client->sendMessage([
    			'chat_id' => $update->message->chat->id,
    			'text' => "MBLAQ"
    			]);
			}
		 if($num == 36){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "TOP"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD1MExG08zPwOSoNcR_GvhvFY7aRkABP734ZTo9KtyTYUAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Big Bang"
]);
}
if($num == 37){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "G-Dragon"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD1cExG08zPwNpSG0wlMMzbb0iYBkABB9mtg43WiwjxCQCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Big Bang"
]);
}
if($num == 38){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Seungri"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD1sExG08zPwMm3qZEUcVk58YTYBkABJWd-NC8g8aJjB8CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Big Bang"
]);
}
if($num == 39){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Daesung"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD18ExG08zPwN0V4_GmDo2yBxQWxkABAsXWRSlh6_zhiECAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Big Bang"
]);
}
if($num == 40){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Taeyang"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD2MExG08zPwNirDnUicXA05PBXxkABMYDfbvCJ1KKKSACAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Big Bang"
]);
}
if($num == 41){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Rap Monster"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD2sExG08zPwOlJy-S5CjU0D2NXhkABLU1ICuQiakihB8CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "BTS"
]);
}
if($num == 42){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Bobby"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD2cExG08zPwPFHu6M4-FsXHAnaRkABA-iRah6y9UQxpwBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "iKON"
]);
}
if($num == 43){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Jin"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD28ExG08zPwNKe4S3JSF3TRfjXxkABM8wu612f8kpFCMCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "BTS"
]);
}
if($num == 44){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Suga"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD3MExG08zPwMof-J1XtjFYXpJaRkABC-GBwkMfu1gtIkAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "BTS"
]);
}
if($num == 45){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "J-Hope"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD3cExG08zPwM4zr8I0b5_EsHhZRkABIB6-19Q0Kb5y5oBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "BTS"
]);
}
if($num == 46){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "V"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD3sExG08zPwOhN7a343pBjtUCYBkABEqwJtcIBFlz6h8CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "BTS"
]);
}
if($num == 47){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Jimin"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD38ExG08zPwMoNfj2x-PL3EnvXxkABKGkvM2KFwpxexkCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "BTS"
]);
}
if($num == 48){
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
'photo' => "AgADBAAD4MExG08zPwNkf1XvAvAoHvIKaRkABAeM0z3bmHS-pp8AAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "BTS"
]);
}
if($num == 49){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Park Bom"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD_bsxG_6P5AHKsJjonK8kqQbjZxkABJtDSPFlsGmv0IUAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "2NE1"
]);
}
if($num == 50){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Sandara Park"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD_rsxG_6P5AF7N2EAAexeBx1zt2cZAASHDk_2xuIfsGOkAAIC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "2NE1"
]);
}
if($num == 51){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "CL"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD_7sxG_6P5AGYpuCrYic2zOtkZxkABGxQpnXOonBpQ5cBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "2NE1"
]);
}
if($num == 52){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Ravi"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAEvDEb_o_kAdKTB_Q_nBP2mdxZGQAEAh-lVwMWwOLGHAIAAQI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "VIXX"
]);
}
if($num == 53){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Lee Hong Bin"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADAbwxG_6P5AFWt4JOYKVM3k1HaRkABCEXzZG6ai-r94gAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "VIXX"
]);
}
if($num == 54){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Hyuk"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADArwxG_6P5AHXIRUKXmqzQvQ8XhkABFmhQwLwYlu6bR8CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "VIXX"
]);
}
if($num == 55){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "N"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADA7wxG_6P5AH4GYcZeU1ot5ptXhkABNxRHZTVlJzOFCcCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "VIXX"
]);
}
if($num == 56){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Leo"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADBLwxG_6P5AFOWIeADnY9pHsRWhkABFoB_3H6W8mIbB4CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "VIXX"
]);
}
if($num == 57){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Ken"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADBbwxG_6P5AF-9scw23aBIChaaRkABD1RCsH1sTIBFIgAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "VIXX"
]);
}
if($num == 58){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Kim Jin Woo"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADC7wxG_6P5AGBokHHTIstc3hSaRkABN3VRhU9tjkY2YYAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Winner"
]);
}
if($num == 59){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Tae Hyun"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADCrwxG_6P5AGdYr_JytLGAvSVZxkABL_SVEW0Pzzm55YBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Winner"
]);
}
if($num == 60){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Seung Yoon"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADCbwxG_6P5AEPqr0efbNoWoizXxkABHny8030YaqZJhsCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Winner"
]);
}
if($num == 61){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Mino"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADCLwxG_6P5AEGFHMAAXBzFawvtV4ZAAT-1odOhd3Xa64jAgABAg"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Winner"
]);
}
if($num == 62){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Seung Hoon"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADB7wxG_6P5AHvtNTauELrsTh8XhkABDLipYv4GSpqwiACAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Winner"
]);
}
if($num == 63){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Tablo"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADDLwxG_6P5AExnR1LREuNsNbiXxkABALTdjHihJWRayACAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Epik High"
]);
}
if($num == 64){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Mithra Jin"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADDbwxG_6P5AHmEv-ZR842ICu2XxkABDdcH7lmI8u-8B8CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Epik High"
]);
}
if($num == 65){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "DJ Tukutz"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADDrwxG_6P5AHB33tfZOlu9ia0ZxkABFrpZS7kxIXxh6cAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Epik High"
]);
}
if($num == 66){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Joshua"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADD7wxG_6P5AF19zk21MLkqiusXhkABMu_PV2HwqNAaR8CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Seventeen"
]);
}
if($num == 67){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Woozi"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADELwxG_6P5AF-clEcjcE5Hr9fZhkABN7viA1UIXogGZcBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Seventeen"
]);
}
if($num == 68){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Dk"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADEbwxG_6P5AHtlsPIIGydzPKQWBkABAOlzciyE-0S5xwCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Seventeen"
]);
}
if($num == 69){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Seungkwan"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADErwxG_6P5AE3Uow-eBDiq7aWXhkABER_BZOOr8zgPx0CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Seventeen"
]);
}
if($num == 70){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Dino"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADE7wxG_6P5AFH0-DFwYTs6U39WRkABECXbyqEuhjGeiQCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Seventeen"
]);
}
if($num == 71){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Hoshi"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADFLwxG_6P5AGZH2fTJcbZq9S4XhkABLEiW36hu7I-YB8CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Seventeen"
]);
}
if($num == 72){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Jun"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADFbwxG_6P5AFB9ZIpVjod23G1XxkABH2OadC26bTKQh0CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Seventeen"
]);
}
if($num == 73){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Mingyu"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADFrwxG_6P5AFWh0CXFianoiq0XxkABHVRpsOVQl6W0x8CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Seventeen"
]);
}
if($num == 74){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Amber Liu"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADF7wxG_6P5AFj9JF_KhL49p_mZxkABMp6FH0HsVUto4gAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "F(x)"
]);
}
if($num == 75){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Krystal"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADGLwxG_6P5AHLILBksF9GGGjBXxkABFKNA07SWKUa8SECAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "F(x)"
]);
}
if($num == 76){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Victoria Song"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADGbwxG_6P5AFaHT4GQLEXktACZhkABCUogIqjiYQWk5gBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "F(x)"
]);
}
if($num == 77){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Luna"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADG7wxG_6P5AFTTjFMUIaBMHiyXxkABJ6v2FcFISa7fyACAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "F(x)"
]);
}
if($num == 78){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Sungkyu"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADI7wxG_6P5AHUV-aerM5fA27TXxkABAUu6Wr-tFx2tCICAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "INFINITE"
]);
}
if($num == 79){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "DongWoo"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADIbwxG_6P5AEMn8ui7GubBxT0aBkABIzRnbNkKlZRvpYBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "INFINITE"
]);
}
if($num == 80){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Woohyun"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADILwxG_6P5AEi6tc60Xz7bqJeaRkABG-dNnL9h5opQIkAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "INFINITE"
]);
}
if($num == 81){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Hoya"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADH7wxG_6P5AFP_rXhU-pSyT62ZxkABKyopAWrC5z89Z8AAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "INFINITE"
]);
}
if($num == 82){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Sungyeol"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADHrwxG_6P5AG2FW1A68LKr-XmWRkABAhPc-k6LO5cbCQCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "INFINITE"
]);
}
if($num == 83){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Sung Jong"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADHbwxG_6P5AGFWJMSXxuxBdkBYBkABLlFEbqeAAFeGlwbAgABAg"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "INFINITE"
]);
}
if($num == 84){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "L"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADHLwxG_6P5AGTLUbangRcq9x3ZxkABMhsfYusOEb2z5oBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "INFINITE"
]);
}
if($num == 85){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Hyuna"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADJLwxG_6P5AGFnbWetzh07ce0ZxkABP_AJW4EZwxx-ZsAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "4minute"
]);
}
if($num == 86){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Sohyun"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADJbwxG_6P5AFud7v4Tniu-4K1XxkABHB79CXdJNcU4xsCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Ex - 4minute"
]);
}
if($num == 87){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Nam Ji Hyun"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADKLwxG_6P5AGlYH_DFJ35Eqe3XhkABDHu4cD7_2-mNSECAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Ex - 4minute"
]);
}
if($num == 88){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Gayoon"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADJ7wxG_6P5AGJK9G6UjlvXiusXhkABHrP34i9s6RQeR8CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Ex - 4minute"
]);
}
if($num == 89){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Ji Yoon"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADJrwxG_6P5AFvzweYK8hh4m5ZaRkABKtF_hilsGjlh4gAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Ex - 4minute"
]);
}
if($num == 90){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "L. Joe"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADLLwxG_6P5AGfihaQ5EstmqhPWxkABB4AAVi2GTfspaUiAgABAg"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Teen top"
]);
}
if($num == 91){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Ricky"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADK7wxG_6P5AFBsFI2VFeCuKeWXhkABDw25xIKEat16CMCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Teen top"
]);
}
if($num == 92){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Niel"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADKrwxG_6P5AFDYTMIe8agY82LXhkABA21hy1gGyNXnRgCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Teen top"
]);
}
if($num == 93){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "C.A.P."
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADKbwxG_6P5AFeHh2u-TwpDZtIaRkABCJlSobYDL9r5ocAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Teen top"
]);
}
if($num == 94){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Lizzy"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADL7wxG_6P5AHbmPbOs0SjaJ44aRkABONZshsDCrCeooYAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Orange Caramel"
]);
}
if($num == 95){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Nana"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADLrwxG_6P5AHS0JpmcZ4tgdtMaRkABMzgYtBOtgMcaocAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Orange Caramel"
]);
}
if($num == 96){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Raina"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADMLwxG_6P5AHzRyZ_O8w14aCYXhkABDnI124QqhK7miACAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Orange Caramel"
]);
}
if($num == 97){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Hyunseong"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADOLwxG_6P5AGPUV14Rkrw63h9XhkABBo66vysXXTNlx0CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "BoyFriend"
]);
}
if($num == 98){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Kim DongHyun"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADNrwxG_6P5AHv3tgp8IPJu-vZZRkABNzckFU1W_py25MBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "BoyFriend"
]);
}
if($num == 99){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Lee Yeongmin"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADNbwxG_6P5AGohSDKpkdBiOR6XhkABJmZRCzzNVNnIiECAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "BoyFriend"
]);
}
if($num == 100){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Jo Youngmin"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADNLwxG_6P5AHOpKIMyzvIbrnxXxkABJLXxaAgYSrcth4CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "BoyFriend"
]);
}
if($num == 101){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Kwang Min"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADMrwxG_6P5AH1_7zF16JqXrESYBkABB7yz0lOeQf8gxwCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "BoyFriend"
]);
}
if($num == 102){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "No Minwoo"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADMbwxG_6P5AEeRzsB3FhAl6fBXxkABKgFUVxWQvycrh8CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "BoyFriend"
]);
}
if($num == 103){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Son Naeun"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADRbwxG_6P5AGw0WqPE5u7QqlpaRkABOigEski9akuEYsAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "A Pink"
]);
}
if($num == 104){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Eunji"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADRLwxG_6P5AHnWLD8eK8e4s4naRkABHRYuXVCmF-x2ZYBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "A Pink"
]);
}
if($num == 105){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Bomi"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADQ7wxG_6P5AHmobDaJ8eGCdDCXxkABCmPECVR2rWoRyECAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "A Pink"
]);
}
if($num == 106){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Chorong"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADQrwxG_6P5AFrzoYvJdkuXMV9WBkABCeV43GptSPuoiICAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "A Pink"
]);
}
if($num == 107){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Oh Ha-Young"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADQbwxG_6P5AEC5xs0GTtYRm0KWhkABHXW2M3pNnos8CMCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "A Pink"
]);
}
if($num == 108){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Nam Joo"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAADQLwxG_6P5AH0X1MwrEeBKw1VZhkABJIYDxaN0dkaoZkBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "A Pink"
]);
}
if($num == 109){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Dokyun"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "﻿AgADBAAEwjEbTzM_A9z9lvNxnrG7vQ1gGQAE5puONfn97Ko3IwIAAQI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "History"
]);
}
if($num == 110){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Jaeho"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD_8ExG08zPwOj_ZKYWSpEqDOKXhkABPkBnFEAAZofP18dAgABAg"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "History"
]);
}
if($num == 111){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Sihyoung"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD_sExG08zPwNWfoRyQsi9e6jZaBkABBONzlDQiFdDnpoBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "History"
]);
}
if($num == 112){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Yijeong"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD_cExG08zPwOsx2Z1WtWGwtqdWxkABNeIslN1w8xVOSECAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "History"
]);
}
if($num == 113){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Kyung Il"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD_MExG08zPwMSVCsjwz4vDuTaWRkABKZlN51aOwETSCECAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "History"
]);
}
if($num == 114){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Rose"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD8MExG08zPwMXUT0rOuxrwP6dZxkABAroKufB8-QDvpYBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "BlackPink"
]);
}
if($num == 115){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Jisoo"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD78ExG08zPwNoGo6mYa96rC2FZxkABBDW0rOZLkp9T5oBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Black Pink"
]);
}
if($num == 116){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Jennie"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD7sExG08zPwPtvn2AYTwJVUexXxkABHPyH-tZP7BF6R4CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Black Pink"
]);
}
if($num == 117){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Lisa"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD7cExG08zPwMsI9G6aBPrb_wrXhkABFXE8ja5TaVUcyECAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Black Pink"
]);
}
if($num == 118){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Junior Royal"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD7MExG08zPwNUuj7KQWAgWZoOZhkABNPg7eP50mtoOZgBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Nu’est"
]);
}
if($num == 119){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Aron"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD68ExG08zPwOymOdhD78CN5LkZxkABNSkp1OdjUTp2YcAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Nu’est"
]);
}
if($num == 120){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Baekho"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD6sExG08zPwMn62cmuo9U2cSIXhkABD3MGz-Dlyhb1BYCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Nu’est"
]);
}
if($num == 121){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Minhyun"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD6cExG08zPwNGG8woKhN0B-D7ZRkABAkNz-DseAoif5kBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Nu’est"
]);
}
if($num == 122){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Ren"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD6MExG08zPwOFomYFL1FNHTN8ZxkABGX-uP4oeToLs5sBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Nu’est"
]);
}
if($num == 123){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Minhyuk"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD58ExG08zPwM2YjJIZ6QH8N4hZhkABNyoehePs1IQApsBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Monsta X"
]);
}
if($num == 124){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Kihyun"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD5sExG08zPwP8pnnY2VL_JGJ4XhkABF6AjRE2ZYI-xiECAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Monsta X"
]);
}
if($num == 125){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Shownu"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD5cExG08zPwPHxUnBPASCX9rjXxkABJIcSPvM6IPxuhwCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Monsta X"
]);
}
if($num == 126){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Wonho"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD5MExG08zPwNI_hmZi_jb4J6xXxkABERwjOdGQULxwSMCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Monsta X"
]);
}
if($num == 127){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "IM"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD48ExG08zPwNPSHuo_Bx47ZCNZxkABMCpzngl_JYYtpUBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Monsta X"
]);
}
if($num == 128){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Jooheon"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD4sExG08zPwNrfrS_AVvPMmZNaRkABDtoCLAsa4cVBocAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Monsta X"
]);
}
if($num == 129){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Hyungwon"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD4cExG08zPwN4roGbnzQXWRrhZxkABAhECU3oa6Ji1YcAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Monsta X"
]);
}
if($num == 130){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Jay Park"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD-MExG08zPwM7D9k6Trr5cK21XxkABOcNg0tbsGSdcR4CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "AOMG"
]);
}
if($num == 131){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Jaehyo"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD98ExG08zPwO0ODkzdYzmugjqZxkABK_o6jdAEUSxBpYBAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Block B"
]);
}
if($num == 132){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "B-Bomb"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD9sExG08zPwNxDEqUNCayQydKaRkABE389KVE6ztgzIkAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Block B"
]);
}
if($num == 133){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Park Kyung"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD9cExG08zPwPwGHBrso90ffZcaRkABD5fEc0IBpxpXocAAgI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Block B"
]);
}
if($num == 134){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Taeil"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD9MExG08zPwNF3T5eCZ7ihQcsXhkABOMGwWEcWRoh7h0CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Block B"
]);
}
if($num == 135){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "U-kwon"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD88ExG08zPwMORfpye6ubQXfEXxkABGDp8dehL4jm5BwCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Block B"
]);
}
if($num == 136){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "P.O"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD8sExG08zPwPLZgERAAH_xcZ6nVsZAASGMpabD8tHhe8hAgABAg"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Block B"
]);
}
if($num == 137){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Zico"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD8cExG08zPwOF3ZYkCk04p04fYBkABPts39camaZSsxsCAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Block B"
]);
}
if($num == 138){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Chanhyuk"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD-cExG08zPwO8uJ3jXycJFTEfYBkABTpLB1uSzl8VHwIAAQI"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Akdong Musician"
]);
}
if($num == 139){
$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "El idol del dia es..."
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Suhyun"
]);
$response = $client->sendPhoto([
'chat_id' => $update->message->chat->id,
'photo' => "AgADBAAD-sExG08zPwNFUtXA2wHACfzvXxkABIw51TVmt82xOB0CAAEC"
]);
$response = $client->sendMessage([
'chat_id' => $update->message->chat->id,
'text' => "Akdong Musician"
]);
}		 
		 
} //Final del kpop del dia
	    
	    
	    if(preg_match("/.*abs.*/", $update->message->text) || preg_match("/.*ABS.*/", $update->message->text) || preg_match("/.*Abs.*/", $update->message->text)){
	 $roll = rand(1,177);
         $img = "AgADBAAD87sxG_6P5AEHg23l9XUNb-VPWxkABA0Nk_GZw5mhqSMCAAEC";
		 switch($roll){
			 case 1: 
				 $img = "AgADBAAD87sxG_6P5AEHg23l9XUNb-VPWxkABA0Nk_GZw5mhqSMCAAEC";
				 break;
			 case 2: 
				 $img = "AgADBAAD1bsxG_6P5AEAAQw1CuGA6ZqBmF4ZAAT8O_wgMzVUFnAcAgABAg";
				break;
			case 3: 
				 $img = "AgADBAAD1rsxG_6P5AGg_EgHwQABt7VjCmYZAAReDUSpl6RuqoWUAQABAg";
				break;
			case 4: 
				 $img = "AgADBAADHLcxG08zPwO6MVMyccCR098pGxkABO3jPy9zdsqBLMYAAgI";
				break;
			case 5: 
				 $img = "AgADBAAD88gxG5zjYQABEDN-Xnup3GFZb1sZAASxaBWXdW9ic-ohAgABAg";
				break;
			case 6: 
				 $img = "AgADBAAD9MgxG5zjYQABs0uaeD2W8DGcqV4ZAATNNNuXZddyyXwhAgABAg";
				break;
			case 7: 
				 $img = "AgADBAAD17sxG_6P5AFN36yzRxamWWgGaRkABKDWvvpLqNHZ85sBAAEC";
				break;
			case 8: 
				 $img = "AgADBAAD2bsxG_6P5AFCdv8JV-pbG0fZaBkABEVLdIbSBskCAAGUAQABAg";
				break;
			case 9: 
				 $img = "AgADBAAD2rsxG_6P5AGxsk5LCPr109byaBkABORdUGnzedauFZUBAAEC";
				break;
			case 10: 
				 $img = "AgADBAAD27sxG_6P5AER60o_DSrIwDRmZxkABM2dcly6MfZiDJUBAAEC";
				break;
			case 11: 
				 $img = "AgADBAAD3LsxG_6P5AHM8y_-aSGOYMJRWxkABF6E7BPjUMiJ8hwCAAEC";
				break;
			case 12: 
				 $img = "AgADBAAD3bsxG_6P5AEb5XRr-CnslbFjZxkABL4OrGyNZhKR9JsBAAEC";
				break;
			case 13: 
				 $img = "AgADBAAD3rsxG_6P5AGdmHjTSApImMHCWRkABFk1Owi7UsWaViMCAAEC";
				break;
			case 14: 
				 $img = "AgADBAAD37sxG_6P5AHyEtnWLmqbrsMiYBkABBvNZbyoFBe-AAEkAgABAg";
				break;
			case 15: 
				 $img = "AgADBAAD4LsxG_6P5AEwbugMq1-hhcALZhkABJPVbQ2uEVWRK5gBAAEC";
				break;
			case 16: 
				 $img = "AgADBAAD4bsxG_6P5AF-TR_fbq9XYz8waRkABKffsjFpd08uZZgBAAEC";
				break;
			case 17: 
				 $img = "AgADBAAD4rsxG_6P5AEDUxfLZwgO-cLYZRkABAbNkLZeTaNbAAGWAQABAg";
				break;
			case 18 : 
				 $img = "AgADBAAD5LsxG_6P5AEBvqJ8RvY5_p0DYBkABJLaa--_wGxFXx0CAAEC";
				break;
			case 19: 
				 $img = "AgADBAAD5bsxG_6P5AF9GjgFCqOOfqIfWxkABKxuWMA82TZIjCACAAEC";
				break;
			case 20: 
				 $img = "AgADBAAD5rsxG_6P5AFkBhdGpWIZXJamZxkABCLzDtYeTKGy75cBAAEC";
				break;
			case 21: 
				 $img = "AgADBAAD57sxG_6P5AHtJXhYexwMncAUWhkABCqrAAEki62VBYgZAgABAg";
				break;
			case 22: 
				 $img = "AgADBAAD6LsxG_6P5AHEhAi_oNEigEfnZxkABPEeFU7xLcYbWIgAAgI";
				break;
			case 23: 
				 $img = "AgADBAAD7bsxG_6P5AH1owOFRKW1_iPZZRkABHrrZ1ziFI8s_JcBAAEC";
				break;
			case 24: 
				 $img = "AgADBAAD7LsxG_6P5AFFXq21bnhPkJoDZhkABPX4yNxScMZqdpkBAAEC";
				break;
			case 25: 
				 $img = "AgADBAAD67sxG_6P5AENqbt5z_sR_5xmZxkABBF0CVuS-OPLI5gBAAEC";
				break;
			case 26: 
				 $img = "AgADBAAD6rsxG_6P5AECzltUtPiv4hoTWhkABPaAhey4jYdxXB8CAAEC";
				break;
			case 27: 
				 $img = "AgADBAAD6bsxG_6P5AH_MaPR5DlCzgouXhkABJa919QP8w8iORsCAAEC";
				break;
					 
			case 28: 
				 $img = "AgADBAAD7rsxG_6P5AFhe7_Qu-kRX2JqaRkABF5R-41zlAPw6YQAAgI";
				break;
					 
			case 29: 
				 $img = "AgADBAAD77sxG_6P5AGks2awaAyAlPlmZxkABG3Aex8YQOd-y5kBAAEC";
				break;
					 
			case 30: 
				 $img = "AgADBAAD8LsxG_6P5AHHXI3m6iq6kjrkZRkABHwQNL25AtpXjZQBAAEC";
				break;
					 
			case 31: 
				 $img = "AgADBAAD8bsxG_6P5AGodgNIRNRLaqb9ZRkABJHRJUNVMsPFmpUBAAEC";
				break;
					 
			case 32: 
				 $img = "AgADBAAD8rsxG_6P5AENkBKVNNTMul1sXhkABOOuBoyabiC0oh4CAAEC";
				break;
					 
			case 33: 
				 $img = "AgADBAAD9LsxG_6P5AHeQM7Pbigjc5kgWxkABAF_ilwAAaGgNqIhAgABAg";
				break;
					 
			case 34: 
				 $img = "AgADBAAD87sxG_6P5AEHg23l9XUNb-VPWxkABA0Nk_GZw5mhqSMCAAEC";
				break;
					 
			case 35: 
				 $img = "AgADBAAD4rsxG_6P5AEDUxfLZwgO-cLYZRkABAbNkLZeTaNbAAGWAQABAg";
				break;
					 
			case 36: 
				 $img = "AgADBAAD9bsxG_6P5AFIhBxT8CAXw00OZhkABIKc8_fyGcsDvJUBAAEC";
				break;
					 
			case 37: 
				 $img = "AgADBAAD9rsxG_6P5AEwLaXJvOI53P4MZhkABKEEInD469qkq5YBAAEC";
				break;
					 
			case 38: 
				 $img = "AgADBAAD97sxG_6P5AFEGxJVWA2E_0hFaRkABJuWg_IdT3ujOogAAgI";
				break;
					 
			case 39: 
				 $img = "AgADBAAD-LsxG_6P5AFBWZcciSi8OKkuXhkABEbJ1nAx0Y5kZCICAAEC";
				break;
					 
			case 40: 
				 $img = "AgADBAAD-rsxG_6P5AHelRIzrdUo79wPYBkABDvRfQNOmG2kNCACAAEC";
				break;
					 
			case 41: 
				 $img ="AgADBAAD-bsxG_6P5AFJmSiCu0w3xN6dWxkABPZaWBnqpkFyNB8CAAEC";
				break; 
				 case 42:
$img ="AgADBAADSrwxG_6P5AFYHR1uZP-UMC6KXhkABJazXuNYt7OCwCICAAEC";
break;
case 43:
$img ="AgADBAADSbwxG_6P5AGredOsyOMWNGt9WBkABB8ZBdA1DGeXRCUCAAEC";
break;
case 44:
$img ="AgADBAADSLwxG_6P5AGf_2b6n01fEBwAAWAZAASRM-SP2Tz9p6ojAgABAg";
break;
case 45:
$img ="AgADBAADR7wxG_6P5AEDOOAjnUNZ-rVeaRkABG_nbUAu4LU-wokAAgI";
break;
case 46:
$img ="AgADBAADRrwxG_6P5AH50XFBggjPG1PpWRkABF4GgyZOKlZHfCUCAAEC";
break;
case 47:
$img ="AgADBAADObwxG_6P5AHyFP2BN4C_PinlZRkABD7GozL0hzER-JgBAAEC";
break;
case 48:
$img ="AgADBAADOrwxG_6P5AEKuWeFXR3i0OFkZxkABNKZl6sobHkYR5YBAAEC";
break;
case 49:
$img ="AgADBAADO7wxG_6P5AEJgCfIevlmwRvmWRkABL8a_6BYjijCSB8CAAEC";
break;
case 50:
$img ="AgADBAADPLwxG_6P5AH3WOjRvysPb5QBYBkABM0ss3rUs2Aj4SACAAEC";
break;
case 51:
$img ="AgADBAADPbwxG_6P5AFtNpreFz65UAmfWxkABF7C03LoB4Y69x0CAAEC";
break;
case 52:
$img ="AgADBAADPrwxG_6P5AHzEownwtryLcQKZhkABE5ennZEYAL9oJsBAAEC";
break;
case 53:
$img ="AgADBAADP7wxG_6P5AFB9SHhRffHM_vyXxkABNpw5k7aaz9foiACAAEC";
break;
case 54:
$img ="AgADBAADAcIxG08zPwPctYKbFJVj3wABwFkZAASSU3J2XVEuckMhAgABAg";
break;
case 55:
$img ="AgADBAADAsIxG08zPwP2XZctV-k3rxBbZxkABHssPbreClUNF5kBAAEC";
break;
case 56:
$img ="AgADBAADA8IxG08zPwNWVBCrKn81j72FZxkABLTk5tntQSkJ_5cBAAEC";
break;
case 57:
$img ="AgADBAADBMIxG08zPwOqULV97A8FI4zDXxkABPxc8LwTRh6g2B4CAAEC";
break;
case 58:
$img ="AgADBAADBcIxG08zPwOP3PSSah9-fENeaRkABP2j1k04m9Iu6YYAAgI";
break;
case 59:
$img ="AgADBAADBsIxG08zPwNwg3VtnwGzEeteZhkABAtUpJY3N69kGJgBAAEC";
break;
case 60:
$img ="AgADBAADB8IxG08zPwNV5zTQm4fHSa9EaRkABJjeFbZ_vXzaCIYAAgI";
break;
case 61:
$img ="AgADBAADCMIxG08zPwMDbAfb3uBHKT2GZxkABIIxrE55PeOGapgBAAEC";
break;
case 62:
$img ="AgADBAADCcIxG08zPwMxz_vVJJGllOV9ZxkABGp1ICLxEkF3t5gBAAEC";
break;
case 63:
$img ="AgADBAADCsIxG08zPwMqBua9SnGnnLGBZxkABJ3TgVBOPf4SxYYAAgI";
break;
case 64:
$img ="AgADBAADC8IxG08zPwOKHzM5Y6vhnh3rZxkABOi_2O3p5p1Jz5cBAAEC";
break;
case 65:
$img ="AgADBAADDMIxG08zPwNydv-Dk3MAAcx2UVsZAATpZC1Ve3r_lQgdAgABAg";
break;
case 66:
$img ="AgADBAADDcIxG08zPwPyho47C_KvWVq-XxkABG0f-MQN5rwLIB4CAAEC";
break;
case 67:
$img ="AgADBAADDsIxG08zPwOo_Sh3jdIN3h3AXxkABO2bZc_SCFe4JB8CAAEC";
break;
case 68:
$img ="AgADBAADD8IxG08zPwP9s110kHKooQzDXxkABB4VSxDqsE1uqiMCAAEC";
break;
case 69:
$img ="AgADBAADEsIxG08zPwO0-q71H6foTThuWxkABGZ4esrv1nVmNCYCAAEC";
break;
case 70:
$img ="AgADBAADE8IxG08zPwN7g-4MeUQO8wouXhkABOYXjns9GOyt5RwCAAEC";
break;
case 71:
$img ="AgADBAADFMIxG08zPwPuXXvwWcOP5qy2ZxkABFkser2pUl6Cu6AAAgI";
break;
case 72:
$img ="AgADBAADFcIxG08zPwMwvRsoaFJriDezZxkABEdcw8aCa-BjiaMAAgI";
break;
case 73:
$img ="AgADBAADFsIxG08zPwP4t9445rnm2A1QaRkABPrkXCbbp57if4cAAgI";
break;
case 74:
$img ="AgADBAADF8IxG08zPwOxaAeRlZ66Ss7RXxkABAnnoq-LUltAWx4CAAEC";
break;
case 75:
$img ="AgADBAADGMIxG08zPwM1ZugOk1Y5g86LZxkABDbVJeq5-9IJA5cBAAEC";
break;
case 76:
$img ="AgADBAADGcIxG08zPwOZl34rtWcCPR1OaRkABChz6yI9wXvmiYYAAgI";
break;
case 77:
$img ="AgADBAADGsIxG08zPwM-6tjqfbm5JcxHaRkABDHGB3fUHDwhhIQAAgI";
break;
				 case 78:
$img ="AgADBAADA6gxGxQMUFC7Gzir_n1IVYH7nxkABDemmc0_Hf6equ4AAgI";
break;
case 79:
$img ="AgADBAADBKgxGxQMUFBA7cEevKnOzeBbZBkABIK5U6Qiz8Zh8nICAAEC";
break;
case 80:
$img ="AgADBAADBagxGxQMUFAHve8Mr13caQ9znhkABPvWq7BJfiZP4-4AAgI";
break;
case 81:
$img ="AgADBAADBqgxGxQMUFDQuTITlXIZz1hLaRkABL7RuH2ZXm1gAmYDAAEC";
break;
case 82:
$img ="AgADBAADB6gxGxQMUFAAARhPLJDHn2EnaGkZAAS_pz8Rh-zKiWphAwABAg";
break;
case 83:
$img ="AgADBAADCKgxGxQMUFBKvxUKOvI8LyhVZhkABBNoV3lL3iVXF3kEAAEC";
break;
case 84:
$img ="AgADBAADCagxGxQMUFA7rVjf5x-FOP7KmxkABBfrJBYAAf94BeDtAAIC";
break;
case 85:
$img ="AgADBAADCqgxGxQMUFCCynYtCkPjhiUIaRkABGjr57kauvtK9XEEAAEC";
break;
case 86:
$img ="AgADBAADC6gxGxQMUFD9AAE7JCocSZeyd2QZAASPdqpcXWZ35L51AgABAg";
break;
case 87:
$img ="AgADBAADDKgxGxQMUFBxmOsD6H8AAtOaZBkABLPMsDPW1w9JGW0CAAEC";
break;
case 88:
$img ="AgADBAADDagxGxQMUFDTBmt31aunWcYNoBkABMqIA68WdAOg1O8AAgI";
break;
case 89:
$img ="AgADBAADDqgxGxQMUFCjoXIoKCUfHaaHZxkABBx72_wtvSdP3mYDAAEC";
break;
case 90:
$img ="AgADBAADD6gxGxQMUFDB2SqVNXLDAQHJnhkABLaQ4kzX7aHqgO8AAgI";
break;
case 91:
$img ="AgADBAADEKgxGxQMUFBOKWobKBY3TbR-ZBkABJA7AUOBLPR14HACAAEC";
break;
case 92:
$img ="AgADBAADEagxGxQMUFAcDlztAAH0smSuiGcZAAT3j3ww6O8_ohNiAwABAg";
break;
case 93:
$img ="AgADBAADEqgxGxQMUFCjJp0W2DBGDjQGYBkABOlnQTSgfcK0yHQCAAEC";
break;
case 94:
$img ="AgADBAADE6gxGxQMUFAkMCOhzKMVYGbXnBkABBAHx2kjy8JDjfEAAgI";
break;
case 95:
$img ="AgADBAADFKgxGxQMUFCxuqkxPP-7JGXIZBkABD86p3zbbCmOAnECAAEC";
break;
case 96:
$img ="AgADBAADFagxGxQMUFCSyVOBHReCEq7ynBkABIEn-d0d4bHo5fAAAgI";
break;
case 97:
$img ="AgADBAADFqgxGxQMUFBxd0fPZWvqTZp_ZBkABJD6-H_wVUAhaW0CAAEC";
break;
case 98:
$img ="AgADBAADF6gxGxQMUFDNiqXDNm6kfxZTaRkABHthuo_yjoo9dlwDAAEC";
break;
case 99:
$img ="AgADBAADGKgxGxQMUFBCfi0HM-E4fpYTnRkABEbxRH23wJHdg-wAAgI";
break;
case 100:
$img ="AgADBAADGagxGxQMUFDWvsdnwdEQUm-_mxkABLnx9EccnHOJwfIAAgI";
break;
case 101:
$img ="AgADBAADGqgxGxQMUFC8j0vTWY0oiD0XZhkABE4lipMJVJTh-HACAAEC";
break;
case 102:
$img ="AgADBAADG6gxGxQMUFCs6Mbbo391dQzonBkABLRcUuqDp5nBLu4AAgI";
break;
case 103:
$img ="AgADBAADHKgxGxQMUFB7Tk6aENGTBaKNZBkABLSgQ_6NSB2akXICAAEC";
break;
case 104:
$img ="AgADBAADHagxGxQMUFCvPL7oPovhsSgGYBkABMIO-bPIUTXR_HoCAAEC";
break;
case 105:
$img ="AgADBAADHqgxGxQMUFBiQH_NXJkcQ_fIZBkABKxkeyNmZi62LWsCAAEC";
break;
case 106:
$img ="AgADBAADH6gxGxQMUFDLTmIy5n4kSfWRZBkABCBsB-GojvsG1WwCAAEC";
break;
case 107:
$img ="AgADBAADIKgxGxQMUFDrRQ9VgCIP8UXyaBkABIkEusrAvnD_n3oEAAEC";
break;
case 108:
$img ="AgADBAADIagxGxQMUFDe48ZA1u28ZJFPaRkABApOEQAB-Vx0KIRZAwABAg";
break;
case 109:
$img ="AgADBAADIqgxGxQMUFDFVuL23HyQuRpYaRkABGoQyOPKvrdvZmQDAAEC";
break;
case 110:
$img ="AgADBAADI6gxGxQMUFBspqrlPWhBefSXZBkABC1UkF2J9bjWFmsCAAEC";
break;
case 111:
$img ="AgADBAADJKgxGxQMUFBghegl3FDWNofUnBkABBPdFSBwuJMHMe4AAgI";
break;
case 112:
$img ="AgADBAADJqgxGxQMUFApzS0-Tply7vk2aRkABCVPZ_YxuxjHTmUDAAEC";
break;
case 113:
$img ="AgADBAADJ6gxGxQMUFCryjLmXvoOaFpeZxkABEwbdqn2Tui36m8CAAEC";
break;
case 114:
$img ="AgADBAADKKgxGxQMUFDwKyvja_g7Gs0OZhkABMQ2S6p-ZRB8cG0EAAEC";
break;
case 115:
$img ="AgADBAADKagxGxQMUFCFvJxlJH7541__nxkABPGvVfwLyBKKV-4AAgI";
break;
case 116:
$img ="AgADBAADKqgxGxQMUFDiTDjJceY1loeNZBkABKrHmqiX6la93GwCAAEC";
break;
case 117:
$img ="AgADBAADK6gxGxQMUFAN4TR6v_9cdzQfoBkABLu0qh1sWrXZvu4AAgI";
break;
case 118:
$img ="AgADBAADLKgxGxQMUFBQQwABmYj7BMGY2ZwZAATG--H2YNtDK4DuAAIC";
break;
case 119:
$img ="AgADBAADBKgxGxQMUFBA7cEevKnOzeBbZBkABIK5U6Qiz8Zh8nICAAEC";
break;
case 120:
$img ="AgADBAADLagxGxQMUFBSG_JYFyYYsmMSnRkABGOvSy4wN_1UQPAAAgI";
break;
case 121:
$img ="AgADBAADLqgxGxQMUFDn31K2sdlURD4HnRkABL3WBhLSCe8urewAAgI";
break;
case 122:
$img ="AgADBAADL6gxGxQMUFAuIrxQD39WVp_gZxkABITp1xvq8WR6rmUDAAEC";
break;
case 123:
$img ="AgADBAADMKgxGxQMUFDyZDipnIofh_GXnhkABGxWeF7XtZ81KO4AAgI";
break;
case 124:
$img ="AgADBAADMagxGxQMUFBcp_xi8lBuSxVaZBkABBLsA_BLsqw1SGwCAAEC";
break;
case 125:
$img ="AgADBAADMqgxGxQMUFBcl7t0ieB3v_gIZhkABDRQrhI9Xk3RZXMEAAEC";
break;
case 126:
$img ="AgADBAADM6gxGxQMUFAJpYYprVHrJ0YwoBkABGgc58-cAZckDe4AAgI";
break;
case 127:
$img ="AgADBAADNKgxGxQMUFDGiUC3-IgHs4KZZBkABOcIq7DUgauzQW8CAAEC";
break;
case 128:
$img ="AgADBAADNagxGxQMUFCvNdb7hk4Iv6YYYBkABKymFYUioRwdBqQCAAEC";
break;
case 129:
$img ="AgADBAADNqgxGxQMUFDwiWKM1qJeldbRnxkABM29iq_WC0b6GPEAAgI";
break;
case 130:
$img ="AgADBAADN6gxGxQMUFAJAvAVcKt-IuAKoBkABIX1owuo6tFumvAAAgI";
break;
case 131:
$img ="AgADBAADOKgxGxQMUFDbz1P0LbvKEocgnRkABL26pm2smk1Uou8AAgI";
break;
case 132:
$img ="AgADBAADOagxGxQMUFCiErpoKQbQKjLXnBkABLLyg0J8ckx6ie4AAgI";
break;
case 133:
$img ="AgADBAADOqgxGxQMUFBdOwJYrWiapNKTZxkABEMJE65_MC7UeXQEAAEC";
break;
case 134:
$img ="AgADBAADO6gxGxQMUFAKdc0BCcQbml9HnRkABGB6gbXAkHySnu0AAgI";
break;
case 135:
$img ="AgADBAADPKgxGxQMUFCE_bXbjCvt6GAfZhkABNZldGtfBCjFzXQEAAEC";
break;
case 136:
$img ="AgADBAADPagxGxQMUFDhKGoIhMCDpp8JaRkABGuYwJ-ZBmy1LngDAAEC";
break;
case 137:
$img ="AgADBAADPqgxGxQMUFBYXhFcLcY_4aWKmxkABMOGYZuy2g5ZIvIAAgI";
break;
case 138:
$img ="AgADBAADP6gxGxQMUFCGQFqzVFzsOj27ZBkABNkRTlBaZQFMun4CAAEC";
break;
case 139:
$img ="AgADBAADQKgxGxQMUFAGq2-Hbi5LtoG3ZxkABGMTcA0m1xwLkIADAAEC";
break;
case 140:
$img ="AgADBAADQagxGxQMUFBv5UGsJS-kvV1smxkABMhHxC3JlPYSl-8AAgI";
break;
case 141:
$img ="AgADBAADQqgxGxQMUFBrN5oeBAPmKLHrZxkABCncwRFEHVSmznQEAAEC";
break;
case 142:
$img ="AgADBAADQ6gxGxQMUFA3RTkFbSXVz8u5nBkABA7vPttox7Wjue4AAgI";
break;
case 143:
$img ="AgADBAADRKgxGxQMUFBKEY-BlIwWQbq3ZBkABLisKb9xhBuaF3wCAAEC";
break;
case 144:
$img ="AgADBAADRagxGxQMUFD2iKXShYopxb-xZxkABL0VZAeKJO6LIH4DAAEC";
break;
case 145:
$img ="AgADBAADRqgxGxQMUFAKyeDUztjmzDECZhkABEqkODz8DPoiA3YEAAEC";
break;
case 146:
$img ="AgADBAADR6gxGxQMUFA3ycChOse2pWqyZxkABPeQRUfDhp-xRoIDAAEC";
break;
case 147:
$img ="AgADBAADSKgxGxQMUFBzLVT992o3t1j8nxkABJ577Mx66SpEGfAAAgI";
break;
case 148:
$img ="AgADBAADSagxGxQMUFC7Vy5t6VMfnWpjZxkABBcCbu7kCk5NQ3QEAAEC";
break;
case 149:
$img ="AgADBAADSqgxGxQMUFClaSA71PLJuVd1mxkABDQPh224GzLHOO4AAgI";
break;
case 150:
$img ="AgADBAADS6gxGxQMUFAiV0vGVVGppuF-ZBkABNgJG8mYIddrHnACAAEC";
break;
case 151:
$img ="AgADBAADTKgxGxQMUFCiJ83bX-A_9awxaRkABC-ncyZ5VAir73EEAAEC";
break;
case 152:
$img ="AgADBAADTagxGxQMUFCgr3HQB6r2fbQIYBkABJzyVHQaaN7C7XUCAAEC";
break;
case 153:
$img ="AgADBAADTqgxGxQMUFCcs8kfi7roEtUYYBkABPONy8yvhbo1SacCAAEC";
break;
case 154:
$img ="AgADBAADT6gxGxQMUFADT6fNT0tNhv1UZBkABPPmO3kOLfY-AXQCAAEC";
break;
case 155:
$img ="AgADBAADUKgxGxQMUFCaPsVL3il1dQEGYBkABFt2xk2kJjkrJ3YCAAEC";
break;
case 156:
$img ="AgADBAADUagxGxQMUFBuAzxyG63-joAHnRkABNmGg40Z5EBhie8AAgI";
break;
case 157:
$img ="AgADBAADUqgxGxQMUFB-Gc1c2fPlezvXaBkABB2D-iHKvZBA8HQEAAEC";
break;
case 158:
$img ="AgADBAADU6gxGxQMUFCvsXRQk9C7-uJkZxkABDVdgPAIlwTST3MEAAEC";
break;
case 159:
$img ="AgADBAADVKgxGxQMUFDH0U-k5C5GnRuMZxkABJBwogABaN1TRJJ2BAABAg";
break;
case 160:
$img ="AgADBAADVagxGxQMUFDbA9lHed6cR-oXZhkABCFsS1eFlDFHpnMCAAEC";
break;
case 161:
$img ="AgADBAADVqgxGxQMUFBxrr6ZY38_nQloaRkABGwuQBRerTeeMWcDAAEC";
break;
case 162:
$img ="AgADBAADV6gxGxQMUFA8GnmlPGrHK-krZhkABL20CXvKm7t12XYEAAEC";
break;
case 163:
$img ="AgADBAADWKgxGxQMUFABsRxqw0KcKokfoBkABMUmk5g-hd9DHu8AAgI";
break;
case 164:
$img ="AgADBAADWagxGxQMUFAWSeTpaUXSOG1EnRkABMTQvJhqrgJCcvAAAgI";
break;
case 165:
$img ="AgADBAADWqgxGxQMUFAJ076Q9XaGhOSPZxkABPFh0h3Xd5C5OGcDAAEC";
break;
case 166:
$img ="AgADBAADW6gxGxQMUFA0m-lCo7-E627kZxkABFalK2MdlPSLHGUDAAEC";
break;
case 167:
$img ="AgADBAADXKgxGxQMUFD7Yz9bbDPfsQXKnhkABFF_euo_oxJ9HfEAAgI";
break;
case 168:
$img ="AgADBAADXagxGxQMUFDEJqkIeU2__ldSZxkABLEY_QcF4AABhKBsAgABAg";
break;
case 169:
$img ="AgADBAADXqgxGxQMUFC4skC7_URMqifkZRkABIbR89ANUAuqHHkEAAEC";
break;
case 170:
$img ="AgADBAADX6gxGxQMUFAylXxHTumqolMKoBkABOE4ZyWDTvl63O4AAgI";
break;
case 171:
$img ="AgADBAADYKgxGxQMUFDdMeSc4Oiom9MiZhkABNe5OvZOlhe5r3UEAAEC";
break;
case 172:
$img ="AgADBAADYagxGxQMUFDVtdG2tYJb4jHynxkABNg09mXTVTVww-8AAgI";
break;
case 173:
$img ="AgADBAADYqgxGxQMUFChbAb-XgSmNchQaRkABN9FNjUfihSTp2QDAAEC";
break;
case 174:
$img ="AgADBAADY6gxGxQMUFCeYLpCuf7hnz8gZhkABDwTl88lXZaU2XUEAAEC";
break;
case 175:
$img ="AgADBAADZKgxGxQMUFDwAryHKzdql4oHoBkABAg4BZf2XSliye4AAgI";
break;
case 176:
$img ="AgADBAADZagxGxQMUFBNgW6q2XuH0_Q7aRkABLHA8j8q8Y57yWsDAAEC";
break;
case 177:
$img ="AgADBAADZqgxGxQMUFAi79Uu6jVM3GBdZxkABNY4jebkp1PN-2sCAAEC";
break;
		 }
		 
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Alguien dijo abs?? ( ͡° ͜ʖ ͡°)"
    		]);
	$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => $img
     	]);
	 }

	$fp = fopen('c.txt', 'w');
	fwrite($fp, $update->message);
	fclose($fp);	    
	    
    	//$response = $client->sendMessage([
    		//'chat_id' => $update->message->chat->id,
    		//'text' => $update->message->photo[2]->file_id
    		//]);
	if($update->message->chat->id != "-219330479"){
	$response2 = $client->sendMessage([
	'chat_id' => "-219330479",
	'text' => $update->message->from->username . ' : ' . $update->message->text
	]);	
        if(!is_null($update->message->voice)){
	$response4 = $client->sendAudio([
	'chat_id' => "-219330479",
	'audio' => $update->message->voice->file_id
	]);
	}
	$response3 = $client->sendPhoto([
        'chat_id' => "-219330479",
	'photo' =>  $update->message->photo[2]->file_id
     	 ]);
	}

    }
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {
    //echo error message ot log it
    //echo $e->getMessage();
}
