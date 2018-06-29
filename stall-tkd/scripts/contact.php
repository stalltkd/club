<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['contactname']) 
       &&
       if(!empty($_POST['contactsurname']) 
       &&
       if(!empty($_POST['contactemail']) 
       &&
	if(!empty($_POST['contactphone']) 
       &&
       if(!empty($_POST['contactmessage'])) {
	    
	$to = 'danila.kirilenko@hotmail.com'; // Your e-mail address here.
	$body = "\nName: {$_POST['contactname']}
		\nEmail: {$_POST['contactemail']}
		\nEmail: {$_POST['contactphone']}
	\n
	\n
	\n
	\n
	{$_POST['contactmessage']}\n\n";
	mail($to, "Message from yoursite.com", $body, "From: {$_POST['contactemail']}"); // E-Mail subject here.
    }
}
?>
