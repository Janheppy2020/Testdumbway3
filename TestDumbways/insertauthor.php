<?php

    // Insert the content of connection.php file
    include('koneksi.php');
    
    // Insert data into the database
    if(ISSET($_POST['insertData']))
    {
        
        $nama           = $_POST['nama'];

        $sql = "INSERT INTO athor (nama) VALUES('$nama')";       
        $result = mysqli_query($conn, $sql);

        if($result){
            echo '<script> alert("Data saved."); </script>';
            header('Location: index3.php');
        }else{
            echo '<script> alert("Data Not saved."); </script>';
        }
    }
?>