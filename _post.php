
<?

if($_POST['check'] == 'mainform'){

  $to = 'vc@uctworld.com'; // адрес получателя
  $subject = 'Registration BiNero'; //Загаловок сообщения

  $message = '
  <html>
  <head>
  <title>'.$subject.'</title>
  </head>
  <body>
  <p>Type of user: '.$_POST['agType'].'</p>
  <p>Site (if agency): '.$_POST['url'].'</p>
  <p>Email : '.$_POST['email'].'</p>
  <p>Number of clients: '.$_POST['nOClients'].'</p>
  <p>Region: '.$_POST['region'].'</p>
  </body>
  </html>'; //Текст нащего сообщения можно использовать HTML теги

  $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
  $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя

  mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail

} else {
  $to = 'vc@uctworld.com'; // адрес получателя
  $subject = 'Question BiNero'; //Загаловок сообщения

  $message = '
  <html>
  <head>
  <title>'.$subject.'</title>
  </head>
  <body>
  <p>Email : '.$_POST['cEmail'].'</p>
  <p>Question: '.$_POST['cQuestion'].'</p>
  </body>
  </html>'; //Текст нащего сообщения можно использовать HTML теги

  $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
  $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя

  mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail

}

?>
