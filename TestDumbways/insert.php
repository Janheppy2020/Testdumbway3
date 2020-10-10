<?php

    // Insert the content of connection.php file
    include('koneksi.php');
    
    // Insert data into the database
    if(ISSET($_POST['insertData']))
    {
        $nama           = $_POST['nama'];
        $thumbnail      = $_POST['thumbnail'];
        $id_author      = $_POST['id_author'];
        $duration       = $_POST['duration'];
        $description    = $_POST['description'];

        $sql = "INSERT INTO course (nama, thumbnail, id_author, duration, description) VALUES('$nama', '$thumbnail', '$id_author', '$duration', '$description')";       
        $result = mysqli_query($conn, $sql);

        if($result){
            echo '<script> alert("Data saved."); </script>';
            header('Location: index.php');
        }else{
            echo '<script> alert("Data Not saved."); </script>';
        }
    }
?>