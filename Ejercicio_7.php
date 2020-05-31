<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>

<?php
header ("Content-type: text/html;charset=\"utf-8\"");

    if (is_numeric($_GET['numero']) && $_GET['numero'] >1)
    {
        echo "<h3>"El número $_GET['nombre'] es numerico"</h3>";
    }
    else
    {
        echo "<h3>"El número $_GET['nombre'] No es numerico"</h3>";
    }

    if ($_GET['numero']  / 2 != 0) 
        {
            echo "<h3>"El número $_GET['nombre'] es primo"</h3>";
        }
        else
        {
            echo "<h2>"El número $_GET['nombre'] No es primo"</h2>";
        }
    
?>
<form>
    Escribe un número:
    <input name="numero" type="text" placeholder="Escribe número">
    <input type="submit" value="Comprobar">
</form>

</body>
</html>