<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

    <form action="thanks.php" method="POST">
    <div>
    <label for ="lname">Nom :</label>  
    <input type ="text" name="lname" id="lname" required=true>
        </div>    
    <div>
    <label for ="fname">Prénom :</label>
    <input type ="text" name="fname" id="fname" required=true>
        </div>
        <div>
    <label for ="mail">E-mail :</label>
    <input type ="email" name="mail" id="mail" required=true>
        </div>
        <div>
    <label for ="pNumber">Numéro de téléphone :</label>   
    <input type ="text" name="pNumber" id="pNumber" required=true>
        </div>

        <div>
        <label for="sujet">Sujet :</label>
    <select name="userSelect" id="sujet" required=true>
    <option value="">Choisissez une raison</option>;
    <option value="Perte">Perte de votre commande</option>;
    <option value="Livraison">Durée de livraison</option>;
    </select>
</div>
        <div>
    <label for ="userMessage">Votre message :</label>
    <textarea name="userMessage" id="userMessage" required=true></textarea>
        </div>

        <div class="button">
            <button type="submit"> Envoyez votre message</button>
</div>
    </form>
</body>
</html>