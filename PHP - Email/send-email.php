<?php

   $nome = $POST[nome]; 
   $email = $POST[email];
   $assunto = $POST[assunto];
   $mensagem = $POST[mensagem];

mail (
    "leonardocae17@gmail.com",
    "Nome: $nome
     Email: $email
     Assunto: $assunto
     Mensagem: $mensagem", "FROM:$nome<$email>");
?>