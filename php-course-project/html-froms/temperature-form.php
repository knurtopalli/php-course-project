<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title>Temperature conversion</title>
</head>
<body>
    <form action="temperature-processor.php" method="post">
        <input type="number" name="temperature">
        C <input type="radio" name="units" value="C">
        F <input type="radio" name="units" value="F">

        <select name="accuracy">
            <option value="0">Whole Number</option>
            <option value="1">1 decimal place</option>
            <option value="2">2 decimal place</option>

        </select>


        <input type="submit" name="submit" value="CONVERT">
    </form>
</body>
</html>