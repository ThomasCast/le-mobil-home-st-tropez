
<?php

if(isset($_POST['email']) && !empty($_POST['email'])){
    
    $firstname = addslashes($_POST['firstname']);
    $lastname = addslashes($_POST['lastname']);
    $email = addslashes($_POST['email']);
    $checkin = addslashes($_POST['date-checkin']);
    $checkout = addslashes($_POST['date-checkout']);
    $message = addslashes($_POST['message']);

$to = "tomas2mars@hotmail.fr";
$subject = "Demande informations Mobil-home St Tropez";
$body = "Nom : ".$firstname. " " .$lastname. "\r\n".
        "Email : ".$email. "\r\n".
        "Date d'arrivee : ".$checkin. "\r\n".
        "Date de depart : ".$checkout. "\r\n".
        "Message : ".$message;
$header = "From:mobil-home@lemobilhomedesttrop.go.yo.fr"."\r\n".
            "Reply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)){

    echo("Votre demande a bien été envoyée avec succès !");

}else{
    echo("Malheureusement, votre demande n'a pas pu être envoyée. Merci de réessayer");
}
}

?>