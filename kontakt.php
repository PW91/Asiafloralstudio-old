<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-2">
</head>
<body>
<?php if(isset($_POST['send']))
{$to = 'asiafloralstudio@yahoo.com';
$subject = 'Wiadomoć ze strony';
$imie = $_POST['osobakontaktowa'];
$telefon = $_POST['telefon'];
if(strlen($_POST['telefon'])>6){$telefon="(tel: $telefon)";}else{$telefon="";}
$email = $_POST['email'];
$wiadomosc = $_POST['wiadomosc'];
$headers = "From: $email" . "\r\n" .
"Reply-To: $email" . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($to, $subject, "Nowa wiadomoć od: $imie \n\n\n $wiadomosc", $headers);
}
echo "<b>Dziękujemy za wysłanie wiadomoci, proszę kliknšć WSTECZ aby wrócić do strony</b>";
?>
</body>
</html>
