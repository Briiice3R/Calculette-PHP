<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Calculette en PHP natif</title>
    </head>
    <body>
        <header>
            <h1>Calculette</h1>
        </header>
        <main>
            <form action="submit_form.php" method="post">
                <div>
                    <label for="first_number">Entrer le premier nombre</label>
                    <input type="number" id="first_number" name="first_number">
                </div>
                <div>
                    <label for="second_number">Entrer le deuxième nombre</label>
                    <input type="number" id="second_number" name="second_number">
                </div>
                <div>
                    <label for="add">Addition</label>
                    <input type="radio" name="operation" id="add" value="add">

                    <label for="substract">Soustraction</label>
                    <input type="radio" name="operation" id="substract" value="substract">

                    <label for="multiply">Multiplier</label>
                    <input type="radio" name="operation" id="multiply" value="multiply">

                    <label for="divide">Diviser</label>
                    <input type="radio" name="operation" id="divide" value="divide">
                </div>
                <button type="submit" name="submit" value="submit">Calculer</button>
            </form>

            <?php
                session_start();
                if(isset($_SESSION["result"]) && !empty($_SESSION["result"])){
                    echo $_SESSION["result"];
                    unset($_SESSION["result"]);
                }
            ?>
        </main>
    </body>
</html>