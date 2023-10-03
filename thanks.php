<?php 
echo "Merci " . $_POST['fname'] . " " . $_POST['lname'] . " de nous avoir contacté à propos de " . $_POST['userSelect'] .
"<br>" .
"Un de nos conseillers vous contactera soit à l’adresse " . $_POST['mail'] . " ou par téléphone au " . $_POST['pNumber'] . " dans les plus brefs délais pour traiter votre demande :<br>" . 

$_POST['userMessage']
?>