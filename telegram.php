<?php

$name = $_POST['name'];
$msg = $_POST['msg'];
$token = "5014020137:AAFIKxIi8W4sFap8iFU9r5koFIiBd8G8zf4";
$chat_id = "-1001759146280";
$arr = array(
  'Псевдоним: ' => $name,
  'Сообщение:' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>