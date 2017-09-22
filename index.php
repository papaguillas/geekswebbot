
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
    if(preg_match("/.*[hH][oO][lL][aA].*/", $update->message->text) || preg_match("/.*[gG]usano[s]?.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Saludos, Güillermo. Tenemos secuestrada a tu novia (a no ser que estes leyendo esto con María, en cuyo caso tenemos secuestrada a tu otra novia \r\n
	Vamos a jugar a un juego. Dispones de una semana para resolver una serie de acertijos cada vez más intrincados \r\n
	como el que tengo aqui colgado.\r\n
	En el caso de no resolverlo a tiempo, no mataremos a tu novia pero te instalaremos el LoL en tu ordenador.
	Buena suerte ;).
	"				
	]);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Tu primera pista es: MANTEQUILLA SIN ALAS."			
	]);
	}
	    
	    
    if(preg_match("/.*[wW]orm[s]?.*/", $update->message->text) || preg_match("/.*[gG]usano[s]?.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Usan una destructora de..."				
	]);	    
	}
    if(preg_match("/.*[bB][uùüú]nker[s]?[es]?.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Gran grupo chileno, me gusta el disco ese de los perros..."				
	]);	    
	}
    if(preg_match("/.*[vV]en.*[aA]qu[ií].*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "En ingles?"				
	]);	    
	}    	    
    if(preg_match("/.*[sS]corpion.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "En azul?"				
	]);	    
	}
    if(preg_match("/.*[sS]ub.*[zZ]ero.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "El minimo."				
	]);	    
	} 
    if(preg_match("/.*-273[,\.]144.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "RVA"				
	]);	    
	}     
    if(preg_match("/.*39.*49.*68.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Sumalo, maestro."				
	]);	    
	} 	    
    if(preg_match("/.*[aA]lfa.*[rR]omeo.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Bravo."				
	]);	    
	}
   if(preg_match("/.*[sS]ierra.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Nevada."				
	]);	    
	}     
   if(preg_match("/.*[gG]ranada.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Hay una que es sagrada"				
	]);	    
	}     
   if(preg_match("/.*[hH]?[aA]ll?elu[yjl]+a[h]?.*/", $update->message->text)){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage([
	'chat_id' => $update->message->chat->id,
	'text' => "Enhorabuena, güille: PNw6"				
	]);	    
	}  
	   
    }
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {
    //echo error message ot log it
    //echo $e->getMessage();
}
?>
