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
		 
		 $num = rand(1,35);
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
	 if(preg_match("/.*abs.*/", $update->message->text) || preg_match("/.*ABS.*/", $update->message->text) || preg_match("/.*Abs.*/", $update->message->text)){
	 $roll = rand(1,41);
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
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $update->message->photo[2]->file_id
    		]);
    }
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {
    //echo error message ot log it
    //echo $e->getMessage();
}
