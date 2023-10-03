<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="thanks.php" method="POST">
    <div>
    <label for ="lname">Nom :</label>  
    <input type ="text" name="lname" id="lname">
        </div>    
    <div>
    <label for ="fname">Prénom :</label>
    <input type ="text" name="fname" id="fname">
        </div>
        <div>
    <label for ="mail">E-mail :</label>
    <input type ="email" name="mail" id="mail">
        </div>
        <div>
    <label for ="pNumber">Numéro de téléphone :</label>   
    <input type ="text" name="pNumber" id="pNumber">
        </div>

        <div>
        <label for="sujet">Sujet :</label>
    <select name="userSelect" id="sujet">
    <option value="">Choisissez une raison</option>;
    <option value="Perte">Perte de votre commande</option>;
    <option value="Livraison">Durée de livraison</option>;
    </select>
</div>
        <div>
    <label for ="userMessage">Votre message :</label>
    <textarea name="userMessage" id="userMessage"></textarea>
        </div>

        <div class="button">
            <button type="submit"> Envoyez votre message</button>
</div>
    </form>
</body>
</html>