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
	 if(1 == 1){
		$fp = fopen('a.txt', 'w');
		fwrite($fp, date("l"));
		fclose($fp);	 
		 
		 $num = rand(1,34);
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
