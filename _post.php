
<?

if($_POST['check'] == 'mainform'){

  $to = 'manager68.uct@gmail.com'; // адрес получателя
  $to2 = 'vc@uctworld.com'; // адрес получателя
  $to3 = 'manager3.uct@gmail.com'; // адрес получателя
  $to4 = 'manager107.uct@gmail.com'; // адрес получателя
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
  mail($to2, $subject, $message, $headers); //Отправка письма с помощью функции mail
  mail($to3, $subject, $message, $headers); //Отправка письма с помощью функции mail
  mail($to4, $subject, $message, $headers); //Отправка письма с помощью функции mail

} else {
  $to = 'manager68.uct@gmail.com'; // адрес получателя
  $to2 = 'vc@uctworld.com'; // адрес получателя
  $to3 = 'manager3.uct@gmail.com'; // адрес получателя
  $to4 = 'manager107.uct@gmail.com'; // адрес получателя
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
  mail($to2, $subject, $message, $headers); //Отправка письма с помощью функции mail
  mail($to3, $subject, $message, $headers); //Отправка письма с помощью функции mail
  mail($to4, $subject, $message, $headers); //Отправка письма с помощью функции mail
}

?>
