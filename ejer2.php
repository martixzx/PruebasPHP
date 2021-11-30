<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
            include_once('Header.php');
        ?>
    </header>  
        <?php
            include_once('data.php');
        ?> 
        <?php
            foreach ($array as $Plato){
            echo "<h1>".$Plato["titulo"]."</h1>";
            echo "Comensales ",$Plato ["comensales"],"</br>";
            foreach ($Plato["ingredientes"] as $receta){
            echo "<li>".$receta["nombre"]."</li>";
        }};
        ?>
    <footer>
        <?php
            require_once('Footer.php')
        ?>
    </footer>  
</body>
</html>