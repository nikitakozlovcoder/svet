<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
 use PHPMailer\PHPMailer\PHPMailer;

 use PHPMailer\PHPMailer\Exception;

 
$router->get('/', function () use ($router) {
    return view('index');
});
$router->get('/products', function () use ($router) {
    return view('products');
});

$router->get('/products_new', function () use ($router) {
    return view('products_new');
}); 

$router->get('/product/{id}', function ($id) use ($router) {
$view = "product-".$id;
    return view($view);
});

$router->get('/photos/{id}', function ($id) use ($router) {
$view = "photo-".$id;
    return view($view);
});
$router->get('/photos', function () use ($router) {
    return view('photos');
});


$router->post('/mail', function () use ($router) {
    



 $post_data = "secret&response=".$_POST['g-recaptcha-response'];

     $ch = curl_init();

     curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');

     curl_setopt($ch, CURLOPT_POST, true);

     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=utf-8', 'Content-Length: ' . strlen($post_data)));

     curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

     $response = curl_exec($ch);

     $rep = json_decode($response);

     curl_close($ch);

if ($rep->success == true)

  {



 $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

                try {

                    //$mail->SMTPDebug = 2;

                   // $mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";};

                    $mail->Port = 465;

                    $mail->isSMTP();                                      // Set mailer to use SMTP

                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
					
					$mail->CharSet = 'UTF-8';
					
                    $mail->Host = "smtp.mail.ru";  // Specify main and backup SMTP servers

                    $mail->Username = 'ooo-skg@mail.ru';                 // SMTP username

                    $mail->Password = '';                           // SMTP password

                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted

                    $mail->setFrom('ooo-skg@mail.ru', 'Mailer.');

                    $mail->addAddress('ooo-skg@mail.ru', 'Mailer .');     // Add a recipient

                    $mail->addReplyTo('ooo-skg@mail.ru', 'noreply');

                    $mail->isHTML(true);                                  // Set email format to HTML

                    $mail->Subject = 'New Message';

                    $mail->Body    = "Name: ".$_POST['name'].", Tel: ".$_POST['tel'].", Mail: ".$_POST['mail'].", Message: ".$_POST['message'];

                    $mail->AltBody = '';

                    $mail->send();

                    
                } 
				catch (Exception $e) {
				
                 
                }

  }
  else {

  }
});


