<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Lenght Calculator</title>
</head>
<body>
    <h1>String Lenght Calculator</h1>
    <form action="string-lenght-processor.php" method="post">
        <label for="inputString">Enter your string:</label><br>
        <textarea name="inputString" id="inputString" rows="4" cols="50" required></textarea><br><br>

        <label>Count spaces:</label><br>
        <input type="radio" id="countSpacesYes" name="countSpaces" value="yes"checked>
        <label for="countSpacesYes">Yes</label><br>
        <input type="radio" id="countSpacesNo" name="countSpaces" value="no">
        <label for="countSpacesNo">No</label><br><br>

        <input type="submit" value="Calculate Lenght">
    </form>
</body>
</html>