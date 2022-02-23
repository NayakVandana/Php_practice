<?php

if (isset($_POST["submit"]))

{    
     $id = $_POST["id"];
     $name = $_POST["name"];
      $age = $_POST["age"];
      $bod = $_POST["bod"];
      $phone = $_POST["phone"];
      $gender = $_POST["gender"];
      $place = $_POST["place"];
      $edu = $_POST["edu"];
    $connection = mysqli_connect("localhost","root","","userdata");
        
        if($connection)
        {
            echo "Connected"."<br>";
        }
        else
        {
            die("Not Connected");
        }

        $query ="INSERT INTO users(id,name,age,birth_date,phone,gender,place,education) VALUES ($id,'$name',$age,'$bod','$phone','$gender','$place','$edu')";
        $result = mysqli_query($connection, $query);
        if($result)
        {
            header('Location: login.php');
        }
        else
        {
            die("Query Failed".mysqli_err());
        }
       
}
?>