<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>loginform</title>
    <link href="login.css" rel="stylesheet">
</head>

<body>
    
    <div>

        <form action="data.php" method="POST">
        <h1>Registration</h1>
            <label>
                ID : <br>
                <input type="number" name="id">
            </label>

            <label>
                Name : <br>
                <input type="text" name="name">
            </label>

            <label>
                Age : <br>
                <input type="number" name="age">
            </label>

            <label>
                Birth_date : <br>
                <input type="date" name="bod">
            </label>

            <label>
                Phone : <br>
                <input type="number" name="phone">
            </label>
            <label>
                Gender : <br>
                <input type="text" name="gender">
            </label>

            <label>
                Place : <br>
                <input type="text" name="place">
            </label>

            <label>
                Education : <br>
                <input type="text" name="edu">
            </label>
            <br>
            <input id="submit" type="submit" value="submit" name="submit">
        </form>
    </div>
</body>

</html>