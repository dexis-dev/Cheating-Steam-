<?php
 
$token = '7970382239:AAGmnacHN50QhFJGL2DaZNYqThGkbJvTiuE';  
$chat_id = '7602349317'; 

 
$email = trim($_POST['email']);
$text = trim($_POST['text']);

 
$message = "📩 Новое сообщение с сайта:\n\n";
$message .= "✉️ Email: $email\n";
$message .= "📝 Сообщение: $text";

 
$sendToTelegram = fopen("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message),"r");

 
if ($sendToTelegram) {
  header("Location: /success/");  
} else {
  echo "Ошибка при отправке";
}
?>
