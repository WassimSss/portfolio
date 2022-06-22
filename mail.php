<?php
if(isset($_POST['contact_form']))
{

    if (!empty($_POST['email']) && !empty($_POST['message'])) {
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $header="MIME-Version: 1.0\r\n";
            $header.='From:"wassilmi.alwaysdata.net"<portfolio@wassilmi.com>'."\n";
            $header.='Content-Type:text/html; charset="uft-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';
            
            $message='
            <html>
                <body>
                    <div align="center">
                        <h2>Mail de : ' . $_POST['email'] . ' </h2>
                        <br />
                        <p> ' . $_POST['message'] . '
                        <br />
                    </div>
                </body>
            </html>
            ';
            
            mail("wassimassalmi@gmail.com", "Message du formulaire de contact!", $message, $header);
              $erreur = "Votre mail a bien été envoyé ! Merci !";
              header("Location: index.php");
        } else {
            $erreur = "Veuillez entrer un email valide.";
        }
        
    } else {
        $erreur = "Tous les champs doivent être complétés.";
    }

}
