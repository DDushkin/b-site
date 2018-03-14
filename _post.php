
<?

if($_POST['check'] == 'mainform'){

  $to = 'k.feshchuk@uct.ua'; // адрес получателя
  $to2 = 'a.stetsenko@uct.ua'; // адрес получателя
  $to3 = 'pavlov@uct.ua'; // адрес получателя
  $to4 = 'o.shyray@uct.ua'; // адрес получателя
  $to5 = 'manager68.uct@gmail.com'; // адрес получателя
  $to6 = 'bineuro@uctworld.com'; // адрес получателя
  $subject = 'Регистрация BiNero'; //Загаловок сообщения


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
  $headers .= "From: Отправитель <bineuro@uctworld.com>\r\n"; //Наименование и почта отправителя

  mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
  mail($to2, $subject, $message, $headers); //Отправка письма с помощью функции mail
  mail($to3, $subject, $message, $headers); //Отправка письма с помощью функции mail
  mail($to4, $subject, $message, $headers); //Отправка письма с помощью функции mail
  mail($to5, $subject, $message, $headers); //Отправка письма с помощью функции mail
  mail($to6, $subject, $message, $headers); //Отправка письма с помощью функции mail

} else {
  $to = 'k.feshchuk@uct.ua'; // адрес получателя
  $to2 = 'a.stetsenko@uct.ua'; // адрес получателя
  $to3 = 'pavlov@uct.ua'; // адрес получателя
  $to4 = 'o.shyray@uct.ua'; // адрес получателя
  $to5 = 'manager68.uct@gmail.com'; // адрес получателя
  $to6 = 'bineuro@uctworld.com'; // адрес получателя
  $subject = 'Вопросы BiNero'; //Загаловок сообщения

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
  $headers .= "From: Отправитель <bineuro@uctworld.com>\r\n"; //Наименование и почта отправителя

  mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
  mail($to2, $subject, $message, $headers); //Отправка письма с помощью функции mail
  mail($to3, $subject, $message, $headers); //Отправка письма с помощью функции mail
  mail($to4, $subject, $message, $headers); //Отправка письма с помощью функции mail
  mail($to5, $subject, $message, $headers); //Отправка письма с помощью функции mail
  mail($to6, $subject, $message, $headers); //Отправка письма с помощью функции mail
}

?>
