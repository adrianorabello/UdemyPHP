<?php 
 
 require "vendor/autoload.php";
 
 use PHPMailer\PHPMailer\PHPMailer;

 use Rain\Tpl;
 // config
 $config = array(
     "tpl_dir"       => "tpl/",
     "cache_dir"     => "cache/",
     //"debug"		 => true,
    
 );
 Tpl::configure( $config );
 // Add PathReplace plugin (necessary to load the CSS with path replace)
 //Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );
 // create the Tpl object
 $tpl = new Tpl;
 // assign a variable
 //$tpl->assign( "name", "Obi Wan Kenoby" );
 // assign an array
 $tpl->assign( "name", "Hcode" );
 $tpl->assign( "version", PHP_VERSION );
 // draw the template. O padrão é extenção html
 // colocando o segundo parametro como true o meotodo draw salva o que esta escrito no index.html na váriavel $html 
 $html = $tpl->draw( "index", true );

 //Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "rabellocbmes@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "Milk1903";

//Set who the message is to be sent from
$mail->setFrom('rabellocbmes@gmail.com', 'Aline ta vendo');

//Set an alternative reply-to address
//$mail->addReplyTo('adrianor.rabello@hotmail.com', 'First Last');

//Set who the message is to be sent to
//para da pessoa para quem envi o
$mail->addAddress('adrianor.rabello@hotmail.com', 'Segundo pararametro pra quem envio');

//Set the subject line
//titulo do email
$mail->Subject = 'Nome do titulo do email';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//no arquivo contents.html teremos o corpo do email, ou seja, o conteudo do email. Como o conteudo da pagina index html foi salvo na váriavel html, estamos passando ela como parametro 

$mail->msgHTML($html);

//Replace the plain text body with one created manually
//cordo alternativo para o emial cado o corpo principal que é em html não funcione
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
// para colocar anexos no email
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
//verifica se o email foi emviado. se quiser enviar mais de um email só fazer um loop aqui

if (!$mail->send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message sent!";
//Section 2: IMAP
//Uncomment these to save your message in the 'Sent Mail' folder.
#if (save_mail($mail)) {
#    echo "Message saved!";
#}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
//You can change 'Sent Mail' to any other folder or tag
$path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

//Tell your server to open an IMAP connection using the same username and password as you used for SMTP
$imapStream = imap_open($path, $mail->Username, $mail->Password);

$result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
imap_close($imapStream);

return $result;
}
	
 ?>