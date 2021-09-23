<?php

/* https://api.telegram.org/bot2019213843:AAHUqpEf6m_PZMp2GlkHBUDFJxrGB29BfDs/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

// поля из формы
$name = $_POST['name'];
$second_name = $_POST['second_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
// токен нашего бота из botFather
$token = "2019213843:AAHUqpEf6m_PZMp2GlkHBUDFJxrGB29BfDs";
// $chat_id = "https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXXXX/getUpdates";
$chat_id = "-550639636";
$arr = array(
  'имя :' => $name,
  'фамилия :' => $second_name,
  'эл почта: ' => $email,
  'телефон' => $mobile,
  'сообщение:' => $subject,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>
