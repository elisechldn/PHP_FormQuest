<?php $errors= [];

$data = array_map('trim', $_POST);
$data = array_map('htmlentities', $data);

    if(!isset($data['lname']) || empty($data['lname'])){
        $errors[]= 'Le champ est obligatoire';
    };

    if(!isset($data['fname']) || empty($data['fname'])){
        $errors[]='Le champ est toujours obligatoire';
    };

    if(!filter_var($data['mail'], FILTER_VALIDATE_EMAIL)){
        $errors[]='Poupilou poupou';
    };

    if(!isset($data['pNumber']) || empty($data['pNumber'])){
        $errors[]='Do you know what a phone number is ?';
    };

    if(!isset($data['userSelect']) || empty($data['userSelect'])){
        $errors[]='On est pas devin, on est censé t\'aider comment ?';
    };

    if(!isset($data['userMessage']) || empty($data['userMessage'])){
        $errors[]='Bon, that is enough.';
    };

    if (!empty($errors)) {
    require 'error.php';
    die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Merci " . $data['fname'] . ' ' . $data['lname'] . " de nous avoir contacté à propos de " . $data['userSelect'] . '.'.

" Un de nos conseillers vous contactera soit à l’adresse " . $data['mail'] . " ou par téléphone au " . $data['pNumber'] . " dans les plus brefs délais pour traiter votre demande : " . $data['userMessage'];

?>    
</body>
</html>

</body>
</html>
