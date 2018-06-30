<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['contactname'])
 && 
!empty($_POST['contactsurnamename'])
 && 
!empty($_POST['contactemail'])
 && 
!empty($_POST['contactphone'])
 && 
!empty($_POST['contactmessage'])) 
{
	$to = 'kirilenko.danila@gmail.com'; // Your e-mail address here.
	$body = "\nName: {$_POST['contactname']}
\nName: {$_POST['contactsurnamename']}
\nName: {$_POST['contactname']}
\nPhone: {$_POST['contactphone']}
\nEmail: {$_POST['contactemail']}
\nMessege: {$_POST['contactmessage']}
\n
\n
{$_POST['contactmessage']}
\n
\n";
	mail($to, "Заявка на запись в таэквондо клуб "СТАЛЬ"! ", $body, "From: {$_POST['contactemail']}"); // E-Mail subject here.
    }
}
?>
