<?php

//připojení do databáze
include "mysql/db.php";
Connection();

//výběr všech dat z databáze
SelectData();

// načtení dat z formuláře a dotaz do databáze
if(isset($_POST["submit"])){
UpdateInput();
}

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulář</title>
</head>
<body>

<form action="update.php" method="post">
    <div>
        <label for="jmeno">Jméno:</label>
        <input type="text" id="jmeno" name="jmeno" required>
    </div>
    
    <div>
        <label for="prijmeni">Příjmení:</label>
        <input type="text" id="prijmeni" name="prijmeni" required>
    </div>
    
    <div>
        <label for="bydliste">Bydliště:</label>
        <input type="text" id="bydliste" name="bydliste" required>
    </div>
    
    <div>
        <label for="varianta">Varianta pojištění:</label>
        <select id="varianta" name="varianta" required>
            <option value="varianta1">Varianta 1</option>
            <option value="varianta2">Varianta 2</option>
            <option value="varianta3">Varianta 3</option>
        </select>
        <select name ="id" id=""> 
            <?php
            while($row = mysqli_fetch_assoc($result)){
              $id = $row["id"];
            echo "<option value='$id'>$id</option>";
            }
                
            ?>
           
             </select>
    </div>
    
    <div>
        <input type="submit" name="submit" Value="Uložit">
    </div>
</form>

</body>
</html>
