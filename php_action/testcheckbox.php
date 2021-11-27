<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input checkbox</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>

<body>
    <form action="../php_action/save.php" method="POST">

        <label>
            <input type="checkbox" name="ckFruta[]" value="maca">Maçã
        </label>
        <label>
            <input type="checkbox" name="ckFruta[]" value="uva">Uva
        </label>
        <label>
            <input type="checkbox" name="ckFruta[]" value="banana">Banana
        </label>
        <label>
            <input type="checkbox" name="ckFruta[]" value="pera">Pera
        </label>
        <label>
            <input type="checkbox" name="ckFruta[]" value="laranja">Laranja
        </label>
        <input type="submit" name="btnSubmit" value="Enviar">
    </form>

</body>
