<?php

if(isset($_POST['submit'])) {
    $mailto = "pilana.ivandol@gmail.com"; //E-mail adresa Pilane Ivandol

    //korisnikovi podaci

    $name = $_POST['name']; //ime korisnika
    $fromEmail = $_POST['email']; //e-mail korisnika
    $phone = $_POST['phone']; //telefon
    $subject = $_POST['subject']; //naslov poruke
    $subject2 = "Vaša poruka je uspješno poslana." 

    //Primljena poruka pilani

    $message = "Cleint Name: " . $name . "\n"
    . "Phone Number: " . $phone . "\n\n"
    . "Client Message: " . "\n" . $_POST['message']

    //Poruka za potvrdu korisniku
    $message2 = "Poštovani" . $name . "\n"
    . "Hvala Vam što ste nas kontaktirali. Uskoro ćemo Vam odgovoriti na Vaš upit." . "\n\n"
    . "Poslali ste sljedeću poruku:" . "\n" . $_POST['message'] . "\n\n"
    . "Lijep pozdrav, " . "\n" . "Pilana Ivandol";

    //Email header
    $headers = "From: " . $fromEmail; //primljeni email korisnika
    $headers2 = "From: " . $mailto; //email kojem će korisnik biti primatelj

    //PHP mailer function
     $result1 = mail($mailto, $subject, $message, $headers); //email poslan Pilani Ivandol
     $result2 = mail($fromEmail, $subject2, $message2, $headers2); //email klijentu

     //Provjera uspješnog slanja emaila

    if ($result1 && $result2) {
        $success = "Vaša poruka je uspješno poslana.";
    } else {
        $failed = "Poruka nije poslana. Pokušajte ponovno!";
    }
}

?>