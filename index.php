<?php
$input=file_get_contents('php://input');
$data=json_decode($input);
$uname=$data->message->from->first_name;
$chat_id=$data->message->chat->id;
$text=$data->message->text;

if($text=='/start'){
	$msg="Welcome $uname. %0Ahow are you?";
}else{
    $msg="Unrelatable!";
}
if($text=='fine'){
	$msg="thats sounds great";
}
if($text=='/help'){
	$msg="how could i help you?";
}
$url="https://api.telegram.org/bot6641452404:AAGOmp2GRImvjlhgdCzPICnFDjdZDqjkYu4/sendMessage?text=$msg&chat_id=$chat_id&parse_mode=html";
file_get_contents($url);
?>
