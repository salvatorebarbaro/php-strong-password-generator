<?php
// Verifica se è stato inviato un parametro "password_length" tramite GET
    function GeneratePassword(){
        if(isset($_GET['password_length'])){
            $password_forte="";
            // inserisco in una variabile il valore della lunghezza che l'utente vorra avere dall'form
            $lunghezza=$_GET['password_length'];

            // Array dalla "A" alla "Z" sia maiuscole che minuscole e simboli in un unico array
            $stringa_Per_password=(array_merge(range('A', 'Z'),range('a', 'z'),array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '+', '=', '_', '[', ']', '{', '}', '|', '\\', ';', ':', "'", '"', ',', '.', '<', '>', '/', '?', '`', '~')));

            // dichiaro vuoto password forte
            $password_forte="";

            // mi ciclo per il valore inserito e immetto il valore randomico all'interno di $password_forte
            for($i=0;$i<$lunghezza;$i++){
                // tramite questa stringa noi andiamo a prenderci in modo randomico l'indice dell'valore random di stringa che poi andremo ad aggiungere a password forte
                $password_forte.= $stringa_Per_password[array_rand($stringa_Per_password)];
            }

        return $password_forte;
        }
    }
?>