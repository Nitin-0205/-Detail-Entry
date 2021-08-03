<?php

include 'config.php';

if ( isset( $_POST['Submit']) ) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $age = mysqli_real_escape_string($mysqli, $_POST['age']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);

    // checking empty fields
    if(empty($name) || empty($age) || empty($email)) {
        echo "<font size = 6>Field Empty Warnings</font><br/>";
        if (empty($name)) {
            echo "<br><font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";}
            echo "<br/><a class='btn btn-primary' href = 'javascript:self.history.back();' >Go Back</a>";
        }
        else {

            // if all the fields are filled (not empty)
            
            //insert data to database
            
            $result = mysqli_query($mysqli, "INSERT INTO user(name, age, email) VALUES('$name', '$age', '$email')");
            
            //display success message
            if($result){
                echo"<p class='text-success'> Data added successfully.</p>"; 
                echo "<br/><a href='index.php'>View Result</a>";            }
            }
        }          

?>