
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
$client = new Zelenin\Telegram\Bot\Api('430264617:AAHZFISWs-joVLDofVvHzsrIPEe1qc-67aM'); // Set your access token
$url = 'tranquil-refuge-60512.heroku.com'; // URL RSS feed
$update = json_decode(file_get_contents('php://input'));
//your app
try {
    if($update->message->text == '/help')
    {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
        	'chat_id' => $update->message->chat->id,
        	'text' => "esto es lo que hay; y si sigues atascado \r\n pues le preguntas a mi abogado."
     	]);
    }
    else
    {
    if(preg_match("/.*[hH][oO][lL][aA].*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Saludos, Daniel. Tenemos secuestrada a tu novia (a no ser que estes leyendo esto con Mar, en cuyo caso tenemos secuestrada a tu puta madre \r\n
	Vamos a jugar a un juego. Dispones de un lustro para resolver una serie de acertijos cada vez más intrincados \r\n
	como el que tengo aqui colgado.\r\n
	En el caso de no resolverlo a tiempo, no mataremos a tu novia pero doblaremos ligeramente el borde de tus magic.
	Buena suerte ;).
	"				
	]);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Tu primera pista es: MARGARINA SIN ALAS."			
	]);
	}
	    
	    
    if(preg_match("/.*[lL]ombriz.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Vive en tu intestino"				
	]);	    
	}
    if(preg_match("/.*[tT]a?enia.*/", $update->message->text) || preg_match("/.*[sS]olitaria.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Se podria decir que este animal es un..."				
	]);	    
	}
    if(preg_match("/.*[pP]arasito.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Gran personaje de los simpsons. Aunque yo prefiero a su compañero."				
	]);	    
	}    	    
    if(preg_match("/.*[pP]roletario.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Como se llamaba el nota ese que invento este termino?"				
	]);	    
	}
    if(preg_match("/.*[mM]arx.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "En chocolatina?"				
	]);	    
	} 
    if(preg_match("/.*[mM]ars.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "¿Donde está?"				
	]);	    
	}     
    if(preg_match("/.*[eE]spacio.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "¿Ah si?."				
	]);	    
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "¿Sabes? En tu serie favorita un personaje iba al espacio tambien jeje."				
	]);	
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "¿Sabes de que serie te hablo, verdad?."				
	]);	    
	} 	    
    if(preg_match("/.*[bB]ig[ ]?[bB]ang?.*/", $update->message->text) || preg_match("/.*[gG]rande[ ][bB]ango.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Pues efectivamente amigazo, enhorabuena."				
	]);
	
	$response = $client->sendPhoto([
	'chat_id' => $update->message->chat->id,
	'photo' => "AgADBAADVasxGzT_gFLU4Hz3n8Wn48dPiRoABArJslnii7l_zKAAAgI"				
	]);    
	}    
	    	
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Usa el nombre completo por favor."				
	]);    
	}


	   //-211538546
   if(!($update->message->chat->id == -211538546)){
	$response = $client->forwardMessage([
	'chat_id' => -211538546,
	'from_chat_id' => $update->message->chat->id,
	'message_id' => $update->message->message_id				
	]);	    
	} 	    	    	    
    }
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {
    //echo error message ot log it
    //echo $e->getMessage();
}
?>
