<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['contact_name']) && !empty($_POST['contact_surname']) && !empty($_POST['contact_email']) && !empty($_POST['contact_phone']) && !empty($_POST['contact_message'])) {
	$to = 'kirilenko.danila@gmail.com'; // Your e-mail address here.
	$body = "\nName: {$_POST['contactname']}\nName: {$_POST['contactsurname']}\nPhone: {$_POST['contactphone']}\nEmail: {$_POST['contactemail']}\n\n\n{$_POST['contactmessage']}\n\n";
	mail($to, "Заявка на запись в таэквондо клуб "СТАЛЬ"! ", $body, "From: {$_POST['contactemail']}"); // E-Mail subject here.
    }
}
?>
