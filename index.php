<?php>
//per gestire corpo richiesta, si legge il contenuto della richiesta
$content = file_get_contents("php://input");

	if(!$content)
		exit();
	
	$update = json_decode($content, false);//si ottiene oggetto php
	
	$message = $update->messagge;//update è tutto il blocco, message il pezzo
	
	$message_id = $message->message_id;
	$text = $message->text;
	                        //graffe, dollaro e variabile, variabili php dentro stringa
	error_log("Message ID {$message_id}: {$text}\n");  //usa php per logare errori di sistema
//il bot invia mess, viene decodificato e scompattato

//meglio non chiudere perche php stampa tutto
