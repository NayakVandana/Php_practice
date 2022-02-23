<?php include  "db.php";?>
<?php include "function.php";?>
<?php
if(isset($_POST["submit"]))
{
    $name = $_POST['name'];
    $place = $_POST['place'];
    
    $id = $_POST['id'];

    $query = "UPDATE users set name = '$name', place = '$place' where id = '$id'";

    $result = mysqli_query($connection, $query);
    if(!$result)
    {
        die("not Connected");
    }

}
?>

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

        <form action="login.php" method="POST">
        <h1>UPDATE</h1>
        <label>
                Select ID: <br>
                <select id="select" name="id">
                    <!-- <option value="">1</option> -->
                    <?php
                        showAllData(); 
                    ?>
                </select>
            </label>

            <label>
                Name : <br>
                <input type="text" name="name">
            </label>

            <label>
                Place : <br>
                <input type="text" name="place">
            </label>

        
            <br>
            <input id="submit" type="submit" value="UPDATE" name="submit">
        </form>
    </div>
</body>

</html>