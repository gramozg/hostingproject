<?php
    $mail_to = 'dp36560@ubt-uni.net'; // email ku do te dergohen te dhenat


    $name = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
	$message = $_POST['message'];

    // Titulli i email
    $subject = 'Mesazh nga ' . $name;

    // Pjesa e brendshme 
    $body_message = 'From: ' . $name . "\r\n";
    $body_message .= 'E-mail: ' . $email . "\r\n";
    $body_message .= 'website: ' . $website . "\r\n";
    $body_message .= 'message: ' . $message;

    // Email headers
    $headers = 'From: ' . $email . "\r\n";
    $headers .= 'Reply-To: ' . $email . "\r\n";

    $mail_sent = mail($mail_to, $subject, $body_message, $headers);

    if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
        alert('Thank you for the message. We will contact you shortly.');
        window.location = '../contact.php';
        </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please, notify the site administrator');
        window.location = '../contact.php';
    </script>
    <?php
    }
?>